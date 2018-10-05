<?php
namespace App\ViewModels\Money;

use Spatie\ViewModels\ViewModel;
use App\Models\Money\Transaction;
use Illuminate\Database\Eloquent\Collection;

class TransactionViewModel extends ViewModel
{
    public $indexUrl = null;
    private $userId = null;

    public function __construct($currentUser = null, Transaction $transaction = null)
    {
        $this->transaction = $transaction;
        $this->user = $currentUser;
        if ($this->user) {
            $this->userId = $this->user->id;
        }
    }

    public function transaction(): Transaction
    {
        return $this->transaction ?? new Transaction();
    }

    public function transactions(): Collection
    {
        return Transaction::where('user_id', $this->userId)->get();
    }

    public function total(): Array
    {
        $array = [
            'user_id'       => $this->userId,
            'amount'        => 0
        ];
        $result = Transaction::where('user_id', $this->userId)->get();
        foreach($result as $item) {
            $array['amount'] += $item->amount;
        }
        return $array;
    }
}
