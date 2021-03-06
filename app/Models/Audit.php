<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model implements \OwenIt\Auditing\Contracts\Audit
{
    use \OwenIt\Auditing\Audit;

    protected $guarded = [];

    protected $casts = [
        'old_values'   => 'json',
        'new_values'   => 'json',
        'auditable_id' => 'integer',
    ];

    /**
     * Check if the model needs to be booted and if so, do it.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        /**
         * 当自定义模型实现完成后，在审计过程期间和之后，将触发两个事件,实现一些逻辑的的业务
         *
         * @link http://laravel-auditing.com/docs/8.0/audit-events 等同于下面的事件
         */
        self::saving(function ($model){
            // 根据多态类型 去定义 tags
            if ($model->auditable_type === Post::class){
                $model->tags = '帖子';
            }

            // ...
        });

        self::saved(function ($model){
            // saved Implement logic
        });
    }

}
