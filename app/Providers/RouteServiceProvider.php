<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it's set as the URL generator's root namespace.
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        // Define your route model bindings, pattern filters, etc.
        $this->configureRouteBindings();

        parent::boot();
    }

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        // Load your web routes
        $this->mapWebRoutes();

        // Load your API routes
        $this->mapApiRoutes();
    }

    /**
     * Define the "web" routes for the application.
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    /**
     * Configure the route model bindings, pattern filters, etc.
     */
    protected function configureRouteBindings(): void
    {
        // You can define route model bindings or pattern filters here if needed.
        // Example: Route::model('user', App\Models\User::class);
    }
}
