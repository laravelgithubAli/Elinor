@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">دسته بندی محصولات</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ایجاد</a> </div>
@endsection

@section('content')

        <form action="{{route('categories.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <!-- BEGIN: Vertical Form -->


            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base">
                    ایجاد دسته بندی
                </h2>
            </div>


            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">

                    <div id="vertical-form" class="p-5">
                        <div class="preview">
                            <div>
                                <label for="category_id" class="form-label font-medium text-base">دسته والد</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="" disabled selected>دسته والد را انتخاب کنید ..</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>



                    <div id="vertical-form" class="p-5">
                        <div class="preview">
                            <div>
                                <label for="title" class="form-label">عنوان</label>
                                <input id="title" name="title" type="text" class="form-control"
                                       placeholder="نام دسته بندی را وارد کنید ">
                            </div>
                        </div>
                    </div>


                    <div id="vertical-form" class="p-5">
                        <div class="preview">
                            <label for="category_id" class="form-label">انتخاب گروه مشخصات</label>
                            @foreach($propertygroups as $propertygroup)
                                <div class="float-none">
                                    <input type="checkbox" name="propertygroups[]"
                                           value="{{$propertygroup->id}}" id="{{$propertygroup->id}}"
                                           class="form-check-input">
                                    <label for="{{$propertygroup->id}}">
                                        {{$propertygroup->title}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary mt-5 form-control" value="ثبت">
                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Single File Upload -->
                    <div class="intro-y ">
                        <div class="flex flex-col sm:flex-row items-center p-3 border-b border-gray-200 dark:border-dark-5">
                            <label class="font-medium text-base ">
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
