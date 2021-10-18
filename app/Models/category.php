<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function parent()
    {
        return $this->belongsTo(category::class, 'category_id');
    }

    public function children()
    {
        return $this->hasMany(category::class,'category_id');
    }

    public function getAllSubCategorychild()
    {
        $childrenIds = $this->children()->pluck('id');

        return category::query()
            ->whereIn('category_id',$childrenIds)
            ->orWhere('category_id',$this->id)
            ->get();
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function getAllSubCategoryProducts()
    {
        $childrenIds = $this->children()->pluck('id');

        return Product::query()
            ->whereIn('category_id',$childrenIds)
            ->orWhere('category_id', $this->id)
            ->get();
    }

    public function propertygroups()
    {
        return $this->belongsToMany(Propertygroup::class);
    }

    public function hasPropertygroup(Propertygroup $propertygroup)
    {
        return $this->propertygroups()
            ->where('propertygroup_id',$propertygroup->id)
            ->exists();
    }

    public function getHasChildrenAttribute()
    {
        return $this->children()->count() > 0;
    }


}
