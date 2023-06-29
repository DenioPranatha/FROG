<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search-destination'] ?? false, function($query, $search){
            return $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category-destination'] ?? false, function($query, $cat){
            return $query->whereHas('category', function($query) use($cat){
                $query->where('name', $cat);
            });
        });

        return $query;
    }

    

    public function event(){
        return $this->hasMany(Event::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
