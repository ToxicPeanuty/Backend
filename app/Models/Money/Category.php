<?php

namespace App\Money;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable;

    protected $table = 'money_category';
    protected $fillable = [
        'icon',
        'title'
    ];
}
