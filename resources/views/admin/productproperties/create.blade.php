@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">محصولات</a> <i
            data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ویرایش ویژگی ها
        </a></div>
@endsection

@section('content')

        <div class="grid grid-cols-12 gap-6 xl:-mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
            <div class="col-span-12 xxl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 mt-6">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h3 class="text-lg font-medium truncate ml-5" >ویژگی های محصول
                                {{$product->name}}
                            </h3>
                        </div>
                        @php
                            $propertygroups = $product->category->propertygroups
                        @endphp
                        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                            <form action="{{route('products.properties.store',$product)}}" method="post"  enctype="multipart/form-data">
                                @csrf

                                @foreach($propertygroups as $group)
                                    <div class="intro-y block sm:flex items-center h-10">
                                        <h5 class="text-lg font-medium truncate ml-5">{{$group->title}}</h5>
                                    </div>
                                    <div class="row">
                                        @foreach($group->properties as $property)
                                            <div class="form-group col-span-6">
                                                <div class="row">
                                                    <div class="col-span-2">
                                                        <label for="name">{{$property->title}}</label>
                                                    </div>
                                                    <div class="col-span-10 my-2">
                                                        <input type="text" class="form-control" name="properties[{{$property->id}}][value]" value="{{$property->getValueForProduct($product)}}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                                <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
