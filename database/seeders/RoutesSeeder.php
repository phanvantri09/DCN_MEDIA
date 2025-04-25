<?php

namespace Database\Seeders;

use App\Models\Router;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route as RouteFacade;

class RoutesSeeder extends Seeder
{
    public function run(): void
    {
        // Xóa dữ liệu cũ trước khi seed lại
        Router::truncate();

        // Lấy tất cả các route
        $routes = RouteFacade::getRoutes();
        $prefixes = [];

        foreach ($routes as $route) {
            // Chỉ xử lý route có phương thức GET
            if (!in_array('GET', $route->methods())) {
                continue;
            }

            $uri = $route->uri();

            // Loại bỏ các route thuộc admin hoặc api
            if (str_starts_with($uri, 'admin') || str_starts_with($uri, 'api')) {
                continue;
            }

            // Nếu là trang chủ ("/")
            if ($uri === '/') {
                if (!in_array('/', $prefixes)) {
                    $prefixes[] = '/';
                    Router::create([
                        'url' => '/',
                        'title' => 'DCN - Media',
                        'image' => '',
                    ]);
                }
                continue;
            }

            // Trích xuất tiền tố
            $prefix = $this->extractPrefix($uri);

            // Chỉ thêm tiền tố nếu chưa tồn tại
            if ($prefix && !in_array($prefix, $prefixes)) {
                $prefixes[] = $prefix;
                Router::create([
                    'url' => '/' . $prefix,
                    'title' => 'DCN - Media',
                    'image' => '',
                ]);
            }
        }
    }

    /**
     * Trích xuất tiền tố từ URI
     *
     * @param string $uri
     * @return string|null
     */
    private function extractPrefix(string $uri): ?string
    {
        // Loại bỏ các tham số động (như {id}, {slug})
        $uri = preg_replace('/\{[a-zA-Z0-9_]+\}/', '', $uri);

        // Tách URI thành các đoạn
        $segments = array_filter(explode('/', trim($uri, '/')));

        // Lấy đoạn đầu tiên làm tiền tố
        return !empty($segments) ? $segments[0] : null;
    }
}
