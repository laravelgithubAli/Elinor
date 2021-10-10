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
}
