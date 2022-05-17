<?php

namespace App\Providers;

use App\Models\agents;
use App\Models\sliders;
use App\Models\products;
use App\Models\categories;
use App\Models\partners;
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
            $event->menu->add('MAIN PAGE');
            $event->menu->add(
                [
                    'text'        => 'Dashboard',
                    'url'         => 'admin',
                    'icon'        => 'fa-solid fa-fw fa-gauge',
                    'active'      => ['admin', 'regex:@^content/[0-9]+$@']
                ],
                [
                    'text'        => 'Categories',
                    'url'         => 'admin/categories',
                    'icon'        => 'fa-solid fa-fw fa-briefcase',
                    'active'      => ['admin/categories', 'admin/categories*', 'regex:@^content/[0-9]+$@']
                ],
                [
                    'text'        => 'Sliders',
                    'url'         => 'admin/sliders',
                    'icon'        => 'fa-solid fa-fw fa-images',
                    'active'      => ['admin/sliders', 'admin/sliders*', 'regex:@^content/[0-9]+$@']
                ],
                [
                    'text'        => 'Products',
                    'url'         => 'admin/products',
                    'icon'        => 'fa-solid fa-fw fa-box-open',
                    'active'      => ['admin/products', 'admin/products*', 'regex:@^content/[0-9]+$@']
                ],
                [
                    'text'        => 'Agents',
                    'url'         => 'admin/agents',
                    'icon'        => 'fa-solid fa-fw fa-people-group',
                    'active'      => ['admin/agents', 'admin/agents*', 'regex:@^content/[0-9]+$@']
                ],
                [
                    'text'        => 'Partners',
                    'url'         => 'admin/partners',
                    'icon'        => 'fa-solid fa-fw fa-handshake',
                    'active'      => ['admin/partners', 'admin/partners*', 'regex:@^content/[0-9]+$@']
                ],
                [
                    'text'        => 'Contacts',
                    'url'         => 'admin/contacts',
                    'icon'        => 'fa-solid fa-fw fa-envelope',
                    'active'      => ['admin/contacts', 'admin/contacts*', 'regex:@^content/[0-9]+$@']
                ]
            );
        });
    }
}
