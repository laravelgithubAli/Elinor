@extends('client.layout.master')

@section('profile.css')
    <link rel="stylesheet" href="/Client/assets/style/profile.css">
@endsection

@section('content')
    <main>
        <div class="profile-container">
            <div class="profile-sidebar">
                <div class="profile-title">
                    <span class="material-icons">account_circle</span>
                    <span>{{auth()->user()->name}} {{auth()->user()->lastname}}</span>
                </div>

                <ul class="profile-sidebar-items">
                    <li class="profile-sidebar-item">
                        <a href="#">
                            <span class="material-icons">list_alt</span>
                            <span>سفارشات من</span>
                        </a>
                    </li>

                    <li class="profile-sidebar-item active-profile-item">
                        <a href="{{route('profile.likes')}}">
                            <span class="material-icons">star_outline</span>
                            <span>کالاهای مورد علاقه</span>
                        </a>
                    </li>

{{--                    <li class="profile-sidebar-item">--}}
{{--                        <a href="user-address.html">--}}
{{--                            <span class="material-icons">home</span>--}}
{{--                            <span>آدرس‌ها</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

                    <li class="profile-sidebar-item">
                        <a href="{{route('profile.comment')}}">
                            <span class="material-icons">chat_bubble_outline</span>
                            <span>نظرات ثبت شده</span>
                        </a>
                    </li>

                    <li class="profile-sidebar-item">
                        <a href="#">
                            <span class="material-icons">card_giftcard</span>
                            <span>کارت‌های هدیه</span>
                        </a>
                    </li>

                    <li class="profile-sidebar-item">
                        <a href="{{route('profile.edit',auth()->user())}}">
                            <span class="material-icons">person_outline</span>
                            <span>اطلاعات حساب</span>
                        </a>
                    </li>

                    <li class="profile-sidebar-item">
                        <a href="#">
                            <span class="material-icons">lock</span>
                            <span>ایجاد رمز عبور</span>
                        </a>
                    </li>
                </ul>

                <a href="{{route('logout')}}" class="btn-logout">
                    <span class="material-icons">logout</span>
                    <span>خروج از حساب کاربری</span>
                </a>
            </div>

            <div class="profile-content">
                <div class="next-purchase">
                    <span>لیست نظرها</span>
{{--                    <span>({{auth()->user()->likes->count()}})</span>--}}
{{--                    <span class="btn-remove-all">حذف تمام محصولات از لیست</span>--}}
                </div>

                <div class="next-purchase-text">
                    <table>
                        <thead>
                        <tr>
                            <td class="text-center">تصویر</td>
                            <td class="text-left">نام محصول</td>
                            <td class="text-left">دسته بندی</td>
                            <td class="text-right">قیمت واحد</td>
                            <td class="text-right">عملیات</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="text-center"><a href="{{route('client.products.show', $product)}}"><img
                                            width="100" src="{{str_replace('public', '/storage', $product->image)}}"
                                            alt="{{$product->name}}" title="{{$product->name}}"/></a></td>
                                <td class="text-left"><a
                                        href="{{route('client.products.show', $product)}}">{{$product->name}}</a></td>
                                <td class="text-left">{{$product->category->title}}</td>

                                <td class="text-right">
                                    @if($product->has_discount)
                                        <div class="price">{{number_format(intval($product->cost_with_discount))}}</div>
                                    @else
                                        <div class="price">{{number_format(intval($product->cost))}}</div>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <button class="btn btn-primary" title="" data-toggle="tooltip"
                                            onClick="addToCart({{$product->id}});" type="button"
                                            data-original-title="افزودن به سبد"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                        </svg>
                                    </button>
                                    <form action="{{route('likes.destroy', $product)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </main>
@endsection

