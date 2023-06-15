<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    public function event(){
        return $this->hasMany(Event::class);
    }

    public function paymentHeader(){
        return $this->hasMany(PaymentHeader::class);
    }

    public function cartHeader(){
        return $this->hasMany(CartHeader::class);
    }
}
