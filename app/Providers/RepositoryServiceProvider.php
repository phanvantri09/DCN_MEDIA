<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryInterface;

use App\Repositories\BlogRepository;
use App\Repositories\BlogRepositoryInterface;

use App\Repositories\ContactRepository;
use App\Repositories\ContactRepositoryInterface;

use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;

use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;

use App\Repositories\BannerRepository;
use App\Repositories\BannerRepositoryInterface;


use App\Repositories\ServiceRepository;
use App\Repositories\ServiceRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);

    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
