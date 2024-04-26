<?php
use App\Models\User;
use Illuminate\Support\Facades\DB;

$userWithMaxTransactions = User::select('users.*')
    ->join('wallets', 'users.id', '=', 'wallets.user_id')
    ->join('transactions', function ($join) {
        $join->on('wallets.id', '=', 'transactions.sender_wallet_id')
             ->orWhere('wallets.id', '=', 'transactions.receiver_wallet_id');
    })
    ->groupBy('users.id')
    ->orderByDesc(DB::raw('COUNT(transactions.id)'))
    ->first();

// Now $userWithMaxTransactions contains the user with the maximum number of transactions

SELECT users.*
FROM users
INNER JOIN wallets ON users.id = wallets.user_id
INNER JOIN transactions ON (wallets.id = transactions.sender_wallet_id OR wallets.id = transactions.receiver_wallet_id)
GROUP BY users.id
ORDER BY COUNT(transactions.id) DESC
LIMIT 1;
