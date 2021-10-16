@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">کامنت</a> <i data-feather="chevron-left"
                                                                                    class="breadcrumb__icon"></i> <a
            href="" class="breadcrumb--active">ایجاد</a></div>
@endsection

@section('content')

    <form action="{{route('productquestions.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base ml-auto">
                ایجاد کامنت
            </h2>
        </div>
        <!-- BEGIN: Vertical Form -->

        <div id="vertical-form" class="grid grid-cols-12 gap-6 ">
            <div class="intro-y col-span-12 lg:col-span-6 mt-6">
                <div class="form-group">
                    <label for="product_id" class="font-medium text-base">کامنت برای این محصول</label><br>
                    <select name="product_id" id="product_id" class="form-control">
                        <option value="" disabled selected>دسته کامنت های محصول مورد نظر را انتخاب کنید</option>
                        @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="post_id" class="font-medium text-base">کامنت برای این پست</label><br>
                    <select name="post_id" id="post_id" class="form-control">
                        <option value="" disabled selected>دسته کامنت های محصول مورد نظر را انتخاب کنید</option>
                        @foreach($posts as $post)
                            <option value="{{$post->id}}">{{$post->title}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="title" class="font-medium text-base">متن کامنت</label><br>
                    <textarea name="title" id="title" class="form-control p-5"></textarea>
                </div>
                <br>

                @include('admin.layout.errors')
                <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">
            </div>
            <div class="intro-y col-span-12 lg:col-span-6">
                <br>
                <!-- BEGIN: Single File Upload -->
                <div class="intro-y">
                    <div class="flex flex-col sm:flex-row items-center border-b border-gray-200 dark:border-dark-5">
                        <label class="font-medium text-base ">
                            آپلود تصویر
                        </label>
                    </div>
                    <div id="single-file-upload" class="p-8 form-control bg-white">
                        <div class="preview">
                            <div class="fallback">
                                <input name="image" type="file"/>
                            </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">فایل خود را اینجا بکشید و رها کنید</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Single File Upload -->
            </div>
        </div>

        <!-- END: Vertical Form -->
    </form>

@endsection
