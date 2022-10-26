<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Wallet;
use App\Models\User;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    protected $user;
    protected $wallet;

    public function __construct(User $user, Wallet $wallet)
    {
      $this->user = $user;
      $this->wallet = $wallet;
    }

    public function index($id) {
        $user = $this->user->find($id);
        $balance = $user->Wallet()->get();
        return view('transfers', compact('user', 'balance'));
    }

    public function show($id) {
        $users = $this->user->all()->except($id);
        return view('transfer_to_do', compact('users', 'id'));
    }

    public function concluded_transfer(Request $request, $id) {
        $from_old_balance = Wallet::where('id', $id)->get()[0]->balance;
        $to_old_balance = Wallet::where('id', $request['user'])->get()[0]->balance;

        if ($from_old_balance < $request['amount']) {
            return view('transfer_error', compact('id'));
        }

        if (User::find($id)->password != $request['password']) {
            return view('transfer_password_error', compact('id'));
        }

        Wallet::where('id', $id)->update(array('balance' => $from_old_balance - $request['amount']));
        Wallet::where('id', $request['user'])->update(array('balance' => $to_old_balance + $request['amount']));

        Transfer::create([
            'de_user_id' => $id,
            'para_user_id'=> $request['user'],
            'balance'=> $request['amount'],
        ]);

        return view('concluded_transfer', compact('id'));
    }

    public function historic($id) {
        $historic_data = Transfer::where('de_user_id', $id)->get()->all();
        $historic = [];
        foreach ($historic_data as $value) {
            $to = User::find($value->para_user_id)->name;
            $amount = $value->balance;
            $transfer_date = $value->created_at;
            array_push($historic, "Transferido para $to o valor de R$ $amount no dia $transfer_date.");
        }

        $receveid_historic_data = Transfer::where('para_user_id', $id)->get()->all();
        $receveid_historic = [];
        foreach ($receveid_historic_data as $value_2) {
            $from = User::find($value_2->de_user_id)->name;
            $amount = $value_2->balance;
            $transfer_date = $value_2->created_at;
            array_push($receveid_historic, "Recebido de $from o valor de R$ $amount no dia $transfer_date.");
        }

        return view('historic', compact('id', 'historic', 'receveid_historic'));
    }

}
