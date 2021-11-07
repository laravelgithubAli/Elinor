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

                    <li class="profile-sidebar-item">
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

                    <li class="profile-sidebar-item active-profile-item">
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
                    <span>لیست نظرات</span>
{{--                    <span>({{auth()->user()->likes->count()}})</span>--}}
{{--                    <span class="btn-remove-all">حذف تمام محصولات از لیست</span>--}}
                </div>

                <div class="next-purchase-text">
                    <table>
                        <thead>
                        <tr>
                            <td class="text-center">محصول/پست</td>
                            <td class="text-left">کامنت</td>
                            <td class="text-right">عملیات</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($productquestions as $productquestion)
                            <tr>
                                <td class="text-center">{{$productquestion->Hastitle()}}</td>
                                <td class="text-left">{{$productquestion->title}}</td>
                                <td class="text-left">
                                    <div class="flex justify-center items-center">
                                        <form action="{{route('productquestions.destroy',$productquestion)}}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
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

