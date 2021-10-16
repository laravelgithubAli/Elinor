@extends('admin.layout.master')

@section('topfield')
    <div class="-intro-x breadcrumb ml-auto hidden sm:flex"> <a href="">کامنت</a> <i data-feather="chevron-left" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">لیست</a> </div>
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
                                لیست پرسش و پاسخ محصول
                            </h2>
                        </div>
                        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                            <table class="table table-report sm:mt-2">
                                <thead>
                                <tr>
                                    <th class="whitespace-nowrap">محصول/پست</th>
                                    <th class="whitespace-nowrap">کامنت</th>
                                    <th class="whitespace-nowrap">پاسخ</th>
                                    <th class="whitespace-nowrap"> فعال کردن </th>
                                    <th class="text-center whitespace-nowrap">فعالیت</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productquestions as $productquestion)
                                    <tr class="intro-x">
                                        <td>
                                            {{$productquestion->Hastitle()}}
                                        </td>
                                        <td class="w-50">
                                            <textarea class="w-100 position-fixed">{{$productquestion->title}}</textarea>
                                        </td>
                                        <td class="w-50">
                                            <form action="{{route('answer.productquestion.store',$productquestion)}}" method="post">
                                                @csrf
                                                <textarea name="title" id="" cols="30" rows="2">
                                                   @foreach($productquestion->HasAnswer() as $answer)
                                                        {{$answer->title}}
                                                    @endforeach
                                                </textarea>
                                                <input type="submit" value="ثبت پاسخ">
                                            </form>
                                        </td>
                                        <td class="w-40">
                                            <form action="{{route('productquestions.update',$productquestion)}}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-3">
                                                    <input type="radio" class="btn btn-primary" name="status"
                                                           @if($productquestion->status == 1)
                                                           checked
                                                           @endif
                                                           value="1">فعال
                                                    <input type="radio" class="btn btn-primary" name="status"
                                                           @if($productquestion->status == 0)
                                                           checked
                                                           @endif
                                                           value="0">غیرفعال
                                                </div>
                                                <input class="btn btn-primary btn-sm form-control" type="submit" value="ثبت">
                                            </form>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <form action="{{route('productquestions.destroy',$productquestion)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i
                                                                data-feather="trash-2"
                                                                class="w-7 h-7"></i>
                                                        </button>
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
                                <li><a class="pagination__link  pagination__link--active" href="">1</a></li>
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
