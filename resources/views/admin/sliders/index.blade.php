@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">اسلایدر</a> <i data-feather="chevron-left"
                                                                                      class="breadcrumb__icon"></i> <a
            href="" class="breadcrumb--active">لیست</a></div>
@endsection

@section('content')

    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">

            <form action="{{route('sliders.store')}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-control p-4">
                    <label for="image">آپلود تصویر</label><br>
                    <input type="file" name="image">
                </div>
                <br>
                @include('admin.layout.errors')
                <input type="submit" value="ثبت" class="form-control btn btn-primary">
            </form>


            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t border-theme-5">
                @foreach($sliders as $slider)
                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal"
                       class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none pos-image relative block">
                                <div class="pos-image__preview image-fit">
                                    <img alt="Rubick Tailwind HTML Admin Template"
                                         src="{{str_replace('public','/storage', $slider->image)}}">
                                </div>
                            </div>
                            <form
                                action="{{route('sliders.destroy', $slider)}}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit"
                                       class="btn btn-danger block font-medium text-center truncate mt-3"
                                       value="حذف">
                                {{--                                    <div class="block font-medium text-center truncate mt-3">لاته وانیلی</div>--}}
                            </form>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection
