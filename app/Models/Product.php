<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function addDiscount(\Illuminate\Http\Request $request)
    {
        if (!$this->discount()->exists()){
            $this->discount()->create([
                'value' => $request->get('value')
            ]);
        }else {
            $this->discount->update([
                'value' => $request->get('value')
            ]);
        }

    }

    public function deleteDiscount()
    {
        $this->discount()->delete();
    }

    public function addPicture($request)
    {
        $path = $request->file('image')->storeAs(
          'public/pictures',
          $request->file('image')->getClientOriginalName()
        );

        $this->pictures()->create([
           'path' => $path,
           'mime' => $request->file('image')->getClientMimeType()
        ]);
    }

    public function deletePicture(Picture $picture)
    {
        Storage::delete($picture->path);

        $picture->delete();
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class)
            ->withPivot(['value'])
            ->withTimestamps();
    }

    public function productquestions()
    {
        return $this->hasMany(Productquestion::class);
    }

    public function hasProductquestion(Product $product)
    {
        return $this->productquestions()->where('product_id',$product->id)->get();
    }

    public function getCostWithDiscountAttribute()
    {
        if (!$this->discount()->exists()){
            return $this->cost;
        }
        return $this->cost - $this->cost * $this->discount->value /100;
    }

    public function getHasDiscountAttribute()
    {
        return $this->discount()->exists();
    }

    public function getDiscountValueAttribute()
    {
        if ($this->has_discount){
            return $this->discount->value;
        }
        return null;
    }

    public function stars()
    {
        return $this->hasMany(Star::class);
    }

    public function HasStar()
    {
        return Star::query()->where('product_id',$this->id)->firstOrFail();
    }
}
