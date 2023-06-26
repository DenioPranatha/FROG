<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){


        $query->when($filters['search-box'] ?? false, function($query, $search){
            // return $query->where('name', 'like', '%' . $search . '%')
            // ->orWhere('description', 'like', '%' . $search . '%');
            return $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['cat-id'] ?? false, function($query, $cat){
            return $query->where('category_id', $cat);
        });

        return $query;
    }

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
