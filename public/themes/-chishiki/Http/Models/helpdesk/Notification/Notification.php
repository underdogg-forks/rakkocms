<?php

namespace App\Modules\Chishiki\Http\Models\helpdesk\Notification;

use Illuminate\Database\Eloquent\Model;


class Notification extends Model
{
    protected $table = 'notifications';
    protected $fillable = [

            'model_id', 'userid_created', 'type_id',
                            ];
}
