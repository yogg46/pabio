<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'idChat',
        'receiver_id',
        'isi',
        'tanggal',
        'is_admin'

    ];
    // public function chatToUser()
    // {
    //     return $this->belongsTo(User::class, 'idUSer');
    // }
    public function chatToBalasChat()
    {
        return $this->hasMany(BalasChat::class, 'idChat');
    }
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id', 'idUSer');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id', 'idUSer');
    }
}
