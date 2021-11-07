<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productquestion extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function HasAnswer()
    {
        return Answer::query()->where('productquestion_id',$this->id)->get();
    }

    public function Hastitle()
    {
        $product=Product::query()->where('id',$this->product_id)->first();
        $post=Post::query()->where('id',$this->post_id)->first();



        if ($product){
            return $product->name;
        }

        if ($post){
            return $post->title;
        }
    }
}
