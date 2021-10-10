@extends('admin.layout.master')

@section('content')


    <div class="content">
        <div class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:-mt-5 xxl:-mt-8 -mb-10 z-40 xxl:z-10">
            <div class="col-span-12 xxl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 mt-6">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h3 class="text-lg font-medium truncate ml-5" >ویژگی های محصول
                                {{$product->name}}
                            </h3>
                            <a class="btn btn-success btn-sm" href="{{route('products.properties.create', $product)}}">تغییر مقادیر مشخصات</a>
                        </div>


                        <div class="col-span-12 mt-6">
                            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                <table class="table table-report sm:mt-2">
                                    <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">نام</th>
                                        <th class="whitespace-nowrap">مقدار</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($product->properties as $property)
                                        <tr class="intro-x">
                                            <td class="w-40">{{$property->id}}</td>
                                            <td>{{$property->title}}</td>
                                            <td>{{$property->pivot->value}}</td>


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
                                    <li><a class="pagination__link" href="">1</a></li>
                                    <li><a class="pagination__link pagination__link--active" href="">2</a></li>
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
                    </div>
                </div>
            </div>
        </div>

    </div>





@endsection
