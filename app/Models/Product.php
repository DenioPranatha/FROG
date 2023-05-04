<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function paymentDetail(){
        return $this->hasMany(PaymentDetail::class);
    }

    public function cartDetail(){
        return $this->hasMany(CartDetail::class);
    }

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function productCategory(){
        return $this->belongsTo(ProductCategory::class);
    }
}
