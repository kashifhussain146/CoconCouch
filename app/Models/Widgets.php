<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Widgets extends Model
{
    public function widget_data()
    {
        return $this->hasOne('App\Models\WidgetsData','widget_id');
    }
}
