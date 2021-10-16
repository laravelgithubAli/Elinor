@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">محصولات</a> <i
            data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ایجاد</a>
    </div>
@endsection

@section('content')

        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- BEGIN: Vertical Form -->
            <div class="intro-y  ">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base">
                        ایجاد محصول
                    </h2>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-6 mt-5 ">

                <div class="intro-y col-span-12 lg:col-span-6">


                    <div class="form-group">
                        <label for="name" class="font-medium text-base  ">نام محصول</label>
                        <input id="name" name="name" type="text" class="form-control"
                               placeholder="نام محصول را وارد کنید">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="category_id" class="font-medium text-base ">دسته بندی</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="" disabled selected>دسته بندی را انتخاب کنید</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="cost" class="font-medium text-base ">قیمت</label>
                        <input type="text" class="form-control" name="cost" id="cost">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inventory" class="font-medium text-base ">موجودی انبار</label>
                        <input type="text" class="form-control" name="inventory" id="inventory">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="description" class="font-medium text-base"> توضیح کوتاه درباره محصول </label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <br>
                    @include('admin.layout.errors')
                    <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">

                </div>

                <div class="intro-y col-span-12 lg:col-span-6">

                    <!-- BEGIN: Single File Upload -->
                    <div class="intro-y ">
                        <div
                                class="flex flex-col sm:flex-row items-center  border-b border-gray-200 dark:border-dark-5">
                            <label class="font-medium text-base ">
                                آپلود تصویر
                            </label>
                        </div>
                        <div id="single-file-upload" class="p-5 form-control bg-white">
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
                    <div class="form-group mt-6">
                        <label for="body" class="mb-2 font-medium text-base "> توضیح کامل درباره محصول </label>
                        <textarea name="body" id="body" class="form-control" rows="10"></textarea>
                    </div>
                </div>
            </div>

            <!-- END: Vertical Form -->
        </form>

@endsection

