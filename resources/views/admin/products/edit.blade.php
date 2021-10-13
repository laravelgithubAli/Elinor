@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">محصولات</a> <i
            data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ویرایش</a>
    </div>@endsection

@section('content')

    <form action="{{route('products.update',$product)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <!-- BEGIN: Vertical Form -->

        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base ml-auto">
                ویرایش محصول
            </h2>
        </div>

        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="intro-y col-span-12 lg:col-span-6">

                <div class="form-group">
                    <label for="name" class="font-medium text-base">نام محصول</label>
                    <input id="name" name="name" type="text" class="form-control"
                           placeholder="نام محصول را وارد کنید" value="{{$product->name}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="category_id" class="font-medium text-base">دسته بندی</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="" disabled selected>دسته بندی را انتخاب کنید</option>
                        @foreach($categories as $category)
                            <option
                                @if($product->category_id == $category->id)
                                selected
                                @endif
                                value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="cost" class="font-medium text-base">قیمت</label>
                    <input type="text" class="form-control" name="cost" id="cost" value="{{$product->cost}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="inventory" class="font-medium text-base">موجودی انبار</label>
                    <input type="text" class="form-control" name="inventory" id="inventory"
                           value="{{$product->inventory}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="description" class="font-medium text-base">توضیحات</label>
                    <textarea name="description" id="description"
                              class="form-control">{{$product->description}}</textarea>
                </div>
                <br>
                <div id="vertical-form">
                    <div class="preview">
                        <div class="form-group">
                            <label for="body" class="font-medium text-base"> متن پست </label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="">
                                                    <textarea class="form-control" rows="8" id="editor-demo1"
                                                              name="body">{{$product->body}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro-y col-span-12 lg:col-span-6">

                <br>
                <div class="form-control">
                    <div class="row grid grid-cols-12 gap-6">
                        <div class="intro-y col-span-12 lg:col-span-6">
                            <label for="image" class="font-medium text-base"> آپلود تصویر جدید </label><br>
                            <input type="file" name="image" id="image" class="">
                        </div>
                        <div class="intro-y col-span-12 lg:col-span-6">
                            <label for="ww" class="font-medium text-base mb-2"> تصویر
                                فعلی </label><br>
                            <img id="ww" src="{{url('/storage/app/'.$product->image)}}"
                                 width="200"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.layout.errors')
            <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">
        </div>
        <!-- END: Vertical Form -->
    </form>

@endsection
