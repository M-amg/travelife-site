<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
        /*$this->mapAdminRoutes();
        $this->mapAdminSupplierRoutes();

        $this->mapManageRoutes();

        $this->mapAdminPackageRoutes();*/
        $this->mapCustomerRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }


    protected function mapAdminRoutes()
    {
        Route::middleware('web')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/admin.php'));
    }

    /**
     * Define the "agency" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapManageRoutes()
    {
        Route::middleware('web')
            ->namespace('App\Http\Controllers\Manage')
            ->group(base_path('routes/manage.php'));
    }

    /**
     * Define the "adminSupplier" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminSupplierRoutes()
    {
        Route::middleware('web')
            ->namespace('App\Http\Controllers\Admin\supplier')
            ->group(base_path('routes/adminSupplier.php'));
    }

    /**
     * Define the "adminSupplier" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminPackageRoutes()
    {
        Route::middleware('web')
            ->namespace('App\Http\Controllers\Admin')
            ->group(base_path('routes/adminPackage.php'));
    }
    /**
     * Define the "adminSupplier" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapCustomerRoutes()
    {
        Route::middleware('web')
            ->namespace('App\Http\Controllers\Customer')
            ->group(base_path('routes/customer.php'));
    }

}
