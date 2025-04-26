<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;
use App\Models\Router;
use Illuminate\Support\Facades\Log;

class BannerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            // Lấy đường dẫn hiện tại
            $rawPath = trim(Request::path(), '/'); // VD: 'product', 'news/123'
            Log::info('Raw Path: ' . $rawPath);

            // Bỏ qua các URL admin và API
            if (str_starts_with($rawPath, 'admin') || str_starts_with($rawPath, 'api')) {
                return;
            }

            // Xử lý đặc biệt cho trang chủ
            $path = $rawPath === '' ? '/' : '/' . explode('/', $rawPath)[0];
            Log::info('Processed Path: ' . $path);

            // Truy vấn Router
            $routeMatch = Router::where('url', $path)->first();
            if (!$routeMatch) {
                Log::warning("No route found for URL: {$path}");
            }

            // Xử lý title và image
            $pageTitle = $routeMatch ? $routeMatch->title : 'DCN - Media';
            $pageImage = '';
            $pageImage = "assetsUserSite/images/intro/intro.png";
            if ($routeMatch && !empty($routeMatch->image)) {
                $pageImage = \App\Helpers\ConstCommon::getLinkImageToStorage($routeMatch->image);
            }

            $view->with('pageTitle', $pageTitle)
                ->with('pageImage', $pageImage);
        });
    }
}
