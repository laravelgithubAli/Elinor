@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">پست</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ویرایش</a> </div>
@endsection


@section('content')


        <form action="{{route('posts.update',$post)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                <h2 class="font-medium text-base">
                    ویرایش پست
                </h2>
            </div>

            <!-- BEGIN: Vertical Form -->

            <div class="grid grid-cols-12 gap-6 mt-5">

                <div class="intro-y col-span-12 lg:col-span-6">

                    <div class="form-group">
                        <label for="title" class="font-medium text-base">عنوان پست</label>
                        <input id="title" name="title" type="text" class="form-control" value="{{$post->title}}"
                               placeholder="نام محصول را وارد کنید">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="postcategory_id" class="font-medium text-base">دسته بندی</label>
                        <select name="postcategory_id" id="postcategory_id" class="form-control">
                            <option value="" disabled selected>دسته بندی را انتخاب کنید</option>
                            @foreach($postcategories as $postcategory)
                                <option
                                        @if($post->postcategory_id == $postcategory->id)
                                        selected
                                        @endif
                                        value="{{$postcategory->id}}">{{$postcategory->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="creator" class="font-medium text-base">نویسنده</label>
                        <input type="text" class="form-control" name="creator" id="creator" value="{{$post->creator}}">
                    </div>

                    <br>
                    <div class="form-group">
                        <label for="studytime" class="font-medium text-base">زمان مطالعه</label>
                        <input type="text" class="form-control" name="studytime" id="studytime" value="{{$post->studytime}}">
                    </div>
                    <br>


                    <div id="vertical-form" class="">
                        <div class="preview">
                            <div class="form-group">
                                <label for="body" class="font-medium text-base"> متن پست </label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="">
                                                    <textarea class="form-control" id="editor-demo1"
                                                              name="body">{{$post->body}}</textarea>
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

                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-6">
                            <label for="image" class="font-medium text-base"> آپلود تصویر جدید </label><br>
                            <input type="file" name="image" id="image" class="">
                        </div>
                        <div class="col-span-6">
                            <label for="ww" class="font-medium text-base">  تصویر فعلی </label><br>
                            <img id="ww" {{--src="{{url('/storage/app/'.$post->image)}}"--}}
                                src="{{str_replace('public','/storage',$post->image)}}"
                                 width="200"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- END: Vertical Form -->
        </form>


@endsection
