@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">فوتر</a> <i
            data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ویرایش</a>
    </div>@endsection

@section('content')

    <form action="{{route('footer.description.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <!-- BEGIN: Vertical Form -->

        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base ml-auto">
                ویرایش توضیحات فوتر
            </h2>
        </div>

        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="intro-y col-span-12 lg:col-span-6">

                <div class="form-group">
                    <label for="title" class="font-medium text-base">عنوان</label>
                    <input id="title" name="title" type="text" class="form-control"
                           placeholder="عنوان فوتر را وارد کنید" value="{{$footer->title}}">
                </div>
                <br>
                <div class="form-group">
                    <label for="description" class="font-medium text-base">فیلد پایانی سایت</label>
                    <textarea name="description" id="description"
                              class="form-control">{{$footer->description}}</textarea>
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
                            <img id="ww" {{--src="{{url('/storage/app/'.$product->image)}}"--}}
                            src="{{str_replace('public' , '/storage',$footer->image)}}"
                                 width="200"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro-y col-span-12 lg:col-span-12">
                <div class="form-group">
                    <label for="description" class="font-medium text-base">پارگراف 1</label>
                    <textarea name="title" id="description" rows="5"
                              class="form-control">{{$footer->body1}}</textarea>
                </div>
                 <div class="form-group">
                    <label for="description" class="font-medium text-base">پارگراف 2</label>
                    <textarea name="title" id="description" rows="5"
                              class="form-control">{{$footer->body2}}</textarea>
                </div>
                 <div class="form-group">
                    <label for="description" class="font-medium text-base">پارگراف 3</label>
                    <textarea name="title" id="description" rows="5"
                              class="form-control">{{$footer->body3}}</textarea>
                    <input type="submit" class="btn btn-primary mt-5" value="ویرایش">
                </div>
                <br>
                @include('admin.layout.errors')

            </div>
        </div>
        <!-- END: Vertical Form -->
    </form>

@endsection
