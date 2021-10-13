@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">پست</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ایجاد پست</a> </div>
@endsection

@section('content')

        <form action="{{route('posts.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <!-- BEGIN: Vertical Form -->
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base ml-auto">
                    ایجاد پست
                </h2>
            </div>


            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="form-group">
                        <label for="title" class="font-medium text-base">عنوان پست</label>
                        <input id="title" name="title" type="text" class="form-control"
                               placeholder="نام محصول را وارد کنید">
                    </div>
                    <br>
                    <div>
                        <label for="postcategory_id"  class="font-medium text-base">دسته بندی</label>
                        <select name="postcategory_id" id="postcategory_id" class="form-control">
                            <option value="" disabled selected>دسته بندی را انتخاب کنید</option>
                            @foreach($postcategories as $postcategory)
                                <option value="{{$postcategory->id}}">{{$postcategory->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="creator" class="font-medium text-base">نویسنده</label>
                        <input type="text" class="form-control" name="creator" id="creator">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="studytime" class="font-medium text-base">زمان مطالعه</label>
                        <input type="text" class="form-control" name="studytime" id="studytime">
                    </div>
                    <br>


                    <div id="vertical-form" >
                        <div class="preview">
                            <div class="form-group">
                                <label for="body" class="font-medium text-base"> متن پست </label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                    <textarea class="form-control" id="editor-demo1"
                                                              name="body"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @include('admin.layout.errors')
                    <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">
                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Single File Upload -->
                    <div class="intro-y">
                        <div class="flex flex-col sm:flex-row items-center p-3 border-b border-gray-200 dark:border-dark-5">
                            <label class="font-medium text-base">
                                آپلود تصویر
                            </label>
                        </div>
                        <div id="single-file-upload" class="p-5 form-control bg-white">
                            <div class="preview">
                                <div class="fallback">
                                    <input name="image" type="file" />
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
