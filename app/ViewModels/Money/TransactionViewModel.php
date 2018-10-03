<?php
namespace App\ViewModels\Money;

use Spatie\ViewModels\ViewModel;
use App\Models\Money\Transaction;

class TransactionViewModel extends ViewModel
{
    public $indexUrl = null;

    public function __construct($currentUser = null, Transaction $transaction = null)
    {
        $this->transaction = $transaction;
        $this->user = $currentUser;
    }

    public function transaction(): Transaction
    {
        return $this->transaction ?? new Transaction();
    }

    public function transactions(): Collection
    {
        // canBeUsedBy($this->user)->
        return Transaction::where('user_id', $this->user)->get();
    }
}
