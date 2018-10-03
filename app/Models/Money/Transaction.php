<?php

namespace App\Models\Money;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Transaction extends Model
{
    use Notifiable;

    protected $table = 'money_transaction';
    protected $fillable = [
        'user_id',
        'category_id',
        'amount',
        'isDaily',
        'isWeekly',
        'isMonthly',
        'isYearly',
        'description',
    ];

    public static function getUserTransactions($user_id) {
        return self::where('user_id', $user_id);
    }

    public static function getTransactionsByCategory($user_id, $category_id) {
        return self::where('user_id', $user_id)->where('category_id', $category_id);
    }
}
