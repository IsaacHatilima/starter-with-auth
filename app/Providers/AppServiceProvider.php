<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// use Opcodes\LogViewer\Facades\LogViewer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*LogViewer::auth(function ($request) {
            return $request->user()
                && in_array($request->user()->email, [
                    'john@example.com',
                    'test@example.com'
                ]);
        });*/
    }
}
