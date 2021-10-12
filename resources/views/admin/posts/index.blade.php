@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">پست</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">لیست</a> </div>
@endsection

@section('content')
        <div
                class="grid grid-cols-12 gap-6 xl:-mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
            <div class="col-span-12 xxl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Weekly Top Products -->
                    <div class="col-span-12 mt-6">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate ml-5">
                                لیست پست ها
                            </h2>
                        </div>
                        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                            <table class="table table-report sm:mt-2">
                                <thead>
                                <tr>
                                    <th class="whitespace-nowrap">تصویر</th>
                                    <th class="whitespace-nowrap">عنوان پست</th>
                                    <th class="whitespace-nowrap">دسته بندی</th>
                                    <th class="whitespace-nowrap">نویسنده</th>
                                    <th class="whitespace-nowrap">زمان مطالعه</th>
                                    <th class="text-center whitespace-nowrap">فعالیت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Rubick Tailwind HTML Admin Template"
                                                         class="tooltip rounded-full"
                                                         {{--src="{{url('/storage/app/'.$post->image)}}"--}}
                                                             src="{{str_replace('public','/storage',$post->image)}}"
                                                         title="{{$post->created_at}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">{{$post->title}}</a>
                                        </td>
                                        <td class="text-center">{{$post->postcategory->title}}</td>
                                        <td class="w-40">{{$post->creator}}</td>

                                        <td class="w-40">{{$post->studytime}}</td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center ml-3"
                                                   href="{{route('posts.edit',$post)}}"> <i
                                                            data-feather="check-square"
                                                            class="w-4 h-4 ml-1"></i>
                                                    ویرایش</a>

                                                <form action="{{route('posts.destroy',$post)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="" class=" flex items-center text-theme-6">
                                                        <input type="submit" value="حذف"><i
                                                                data-feather="trash-2"
                                                                class="w-4 h-4 ml-1"></i>
                                                    </a>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                            <ul class="pagination">
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4"
                                                                            data-feather="chevrons-right"></i> </a>
                                </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4"
                                                                            data-feather="chevron-right"></i> </a>
                                </li>
                                <li><a class="pagination__link" href="">...</a></li>
                                <li><a class="pagination__link pagination__link--active" href="">1</a></li>
                                <li><a class="pagination__link" href="">2</a></li>
                                <li><a class="pagination__link" href="">3</a></li>
                                <li><a class="pagination__link" href="">...</a></li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4"
                                                                            data-feather="chevron-left"></i> </a>
                                </li>
                                <li>
                                    <a class="pagination__link" href=""> <i class="w-4 h-4"
                                                                            data-feather="chevrons-left"></i> </a>
                                </li>
                            </ul>
                            <select class="w-20 form-select box mt-3 sm:mt-0">
                                <option>10</option>
                                <option>25</option>
                                <option>35</option>
                                <option>50</option>
                            </select>
                        </div>
                    </div>
                    <!-- END: Weekly Top Products -->
                </div>
            </div>
        </div>



@endsection
