<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('*', function ($view) {
            // $logo = Setting::where('slug', 'logo-utama')->first();
            $data = Setting::where('category_slug', '!=', 'logo')->get()->map(function ($setting) {
                return [
                    'key' => $setting->key,
                    'slug' => $setting->slug,
                    'category' => $setting->category,
                    'category_slug' => $setting->category_slug,
                    'value' => $setting->value,
                ];
            });

            // $logoUrl = $logo->getFirstMediaUrl('logo-utama');
            $view->with([
                // 'logo_utama' => $logoUrl,
                'datas' => $data
            ]);
        });
        require_once app_path('helpers.php');
    }
}
