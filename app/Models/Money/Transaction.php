<?php

namespace App\Money;

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

    public function getUserTransactions($user_id) {
        static::where('user_id', $user_id);
    }

    public function getTransactionsByCategory($user_id, $category_id) {
        static::where('user_id', $user_id)
            ->where('category_id', $category_id);
    }
}
