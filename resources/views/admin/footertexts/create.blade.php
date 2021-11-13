@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"><a href="">محصولات</a> <i
            data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">ویرایش</a>
    </div>@endsection

@section('content')

    <form action="{{route('footertext.create')}}" method="post">
    @csrf
    @method('PATCH')
    <!-- BEGIN: Vertical Form -->

        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base ml-auto">
                ویرایش فوتر
            </h2>
        </div>

        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="intro-y col-span-12 lg:col-span-12">
                <div class="form-group">
                    <label for="description" class="font-medium text-base">ویرایش فوتر 1</label>
                    <textarea name="title" id="description" rows="10"
                              class="form-control">{{$footer1->title}}</textarea>
                    <input type="submit" class="btn btn-primary mt-5" value="ویرایش">
                </div>
                <br>
                @include('admin.layout.errors')

            </div>
        </div>
        <!-- END: Vertical Form -->
    </form>




    <form action="{{route('footertext.update')}}" method="post">
    @csrf
    @method('PATCH')
    <!-- BEGIN: Vertical Form -->
        <div class="grid grid-cols-12 gap-6 mt-5">

            <div class="intro-y col-span-12 lg:col-span-12">
                <div class="form-group">
                    <label for="description" class="font-medium text-base">ویرایش فوتر 2</label>
                    <textarea name="title" id="description" rows="10"
                              class="form-control">{{$footer2->title}}</textarea>
                    <input type="submit" class="btn btn-primary mt-5 " value="ویرایش">
                </div>

                <br>
                @include('admin.layout.errors')

            </div>
        </div>
        <!-- END: Vertical Form -->
    </form>


@endsection
