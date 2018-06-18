<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;
use App\Role;
use App\Permit;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    protected $widgets = [
        \App\Widgets\DashboardMap::class,
    ];

    public function boot()
    {
        Role::saving(function ($role) {
            $permits = Request::get('permits');
            $role->setPermissions([]);
            if (isset($permits)){
                foreach($permits as $permitid)
                {
                    $permit = Permit::find($permitid);
                    $role->addPermission($permit->slug);
                }
            }
            if ( ! $permits) return;
        });

        $widgetsRegistry = $this->app[\SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface::class];

        foreach ($this->widgets as $widget) {
            $widgetsRegistry->registerWidget($widget);
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
