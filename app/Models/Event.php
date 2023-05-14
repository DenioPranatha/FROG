<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search-event'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%');
        });

        $query->when($filters['category-event'] ?? false, function($query, $cat){
            return $query->whereHas('destination', function($query) use($cat){
                return $query->whereHas('category', function($query) use($cat){
                    $query->where('name', $cat);
                });
            });
        });

    }

    public function destination(){
        return $this->belongsTo(Destination::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
