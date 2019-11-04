<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\CategoryContract;
use App\Repositories\CategoryRepository;
use App\Contracts\AttributeContract;
use App\Repositories\AttributeRepository;
use App\Contracts\BrandContract;
use App\Repositories\BrandRepository;
use App\Contracts\ProductContract;
use App\Repositories\ProductRepository;
use App\Contracts\OrderContract;
use App\Repositories\OrderRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    protected $repositories = [
        CategoryContract::class         =>          CategoryRepository::class,
        AttributeContract::class        =>          AttributeRepository::class,
        BrandContract::class            =>          BrandRepository::class,
        ProductContract::class          =>          ProductRepository::class,
        OrderContract::class            =>          OrderRepository::class,
    ];
    public function register()
    {
        //
        foreach ($this->repositories as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
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
