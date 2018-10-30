<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class BaseModel extends Model implements Auditable
{

    /**
     * Starting from version 4.1.0, support for custom Audit models was added.
     * This lets the user extend implementations other than the traditional  Illuminate\Database\Eloquent\Model.
     *
     * @link http://laravel-auditing.com/docs/8.0/audit-implementation
     */
    use \OwenIt\Auditing\Auditable;
}
