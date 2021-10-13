@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">دسته بندی محصول</a> <i
            data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ویرایش</a>
    </div>
@endsection

@section('content')

    <form action="{{route('categories.update',$category)}}" method="post"
          enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <!-- BEGIN: Vertical Form -->
        <div class="intro-y ">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base ml-auto">
                    ویرایش دسته بندی
                </h2>
            </div>
            {{--     style="border-radius: 50%;position: relative;left: -700px"
                                     width="200"--}}

            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div id="vertical-form" class="p-5">
                        <div class="preview">
                            <div>
                                <label for="category_id" class="form-label font-medium">دسته والد</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="" disabled selected>دسته والد را انتخاب کنید ..</option>
                                    @foreach($categories as $parent)
                                        <option
                                            @if ($parent->id == $category->category_id)
                                            selected
                                            @endif
                                            value="{{$parent->id}}">{{$parent->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="vertical-form" class="p-5">
                        <div class="preview">
                            <div>
                                <label for="title" class="form-label font-medium">عنوان</label>
                                <input id="title" name="title" type="text" class="form-control"
                                       placeholder="نام دسته بندی را وارد کنید " value="{{$category->title}}">
                            </div>
                        </div>
                    </div>

                    <div id="vertical-form" class="p-5">
                        <div class="preview">
                            <label for="category_id" class="form-label font-medium">انتخاب گروه مشخصات</label>
                            @foreach($propertygroups as $propertygroup)
                                <div class="float-none">
                                    <input type="checkbox"
                                           @if($category->hasPropertygroup($propertygroup))
                                           checked
                                           @endif
                                           name="propertygroups[]"
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

                    <div id="vertical-form" class="p-5">
                        <div class="preview form-control">
                            <div class="grid grid-cols-12 gap-6 ">
                                <div class="intro-y col-span-12 lg:col-span-6">
                                    <label for="image" class="font-medium"> آپلود تصویر جدید </label><br>
                                    <input type="file" name="image" id="image" class="">
                                </div>
                                <div class="intro-y col-span-12 lg:col-span-6">
                                    <label for="ww" class="font-medium mb-1"> تصویر
                                        فعلی </label><br>
                                    <img id="ww" src="{{str_replace('public','/storage',$category->image)}}"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Vertical Form -->
    </form>

@endsection
