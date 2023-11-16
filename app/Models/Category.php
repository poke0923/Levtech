<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function getCategory($limit_count=3){
        return $this->posts()->with('category')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
