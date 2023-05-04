<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function paymentHeader(){
        return $this->belongsTo(PaymentHeader::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
