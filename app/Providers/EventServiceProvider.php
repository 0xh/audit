<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class                 => [
            SendEmailVerificationNotification::class,
        ],
        // 在审计过程期间
        'OwenIt\Auditing\Events\Auditing' => [
            'App\Listeners\AuditingListener',
        ],
        // 在审计之后
        'OwenIt\Auditing\Events\Audited'  => [
            'App\Listeners\AuditedListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
