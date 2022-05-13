<?php

namespace App\Providers;

use App\Models\agents;
use App\Models\sliders;
use App\Models\products;
use App\Models\categories;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            // Add some items to the menu...
            $event->menu->add('CONTENT');
            $event->menu->add([
                    'text'        => 'Categories',
                    'url'         => 'admin/categories',
                    'icon'        => 'far fa-fw fa-file',
                    'label'       => categories::count(),
                    'label_color' => 'danger',
                    'active'      => ['admin/categories', 'admin/categories*', 'regex:@^content/[0-9]+$@']
                ],
                [
                    'text'        => 'Sliders',
                    'url'         => 'admin/sliders',
                    'icon'        => 'far fa-fw fa-file',
                    'label'       => sliders::count(),
                    'label_color' => 'danger',
                    'active'      => ['admin/sliders', 'admin/sliders*', 'regex:@^content/[0-9]+$@']
                ],
                [
                    'text'        => 'Products',
                    'url'         => 'admin/products',
                    'icon'        => 'far fa-fw fa-file',
                    'label'       => products::count(),
                    'label_color' => 'danger',
                    'active'      => ['admin/products', 'admin/products*', 'regex:@^content/[0-9]+$@']
                ],
                [
                    'text'        => 'Agents',
                    'url'         => 'admin/agents',
                    'icon'        => 'far fa-fw fa-file',
                    'label'       => agents::count(),
                    'label_color' => 'danger',
                    'active'      => ['admin/agents', 'admin/agents*', 'regex:@^content/[0-9]+$@']
                ]
            );
        });
    }
}
