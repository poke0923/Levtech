<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function getPaginate($limit_count=5){
        return $this -> orderby('updated_at', 'DESC')->paginate($limit_count);
        
    }
    //↑これはSQL的なコマンドも含んでいて、Controllerに書くこともできる
    //ただし、それはControllerの内容が長くなりすぎるので好ましくない。
    
    protected $fillable = [
        'title',
        'body'
        ] ;
}
