<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'document_id',
        'password',
        'type',
    ];

    protected $hidden = [
        'password',
    ];

    public function Wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function getWallet($id)
    {
        $user = $this->user->find($id);
        return $user->wallet()->get();
    }


}

