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
                <li class="profile-sidebar-item active-profile-item">
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

{{--                <li class="profile-sidebar-item">--}}
{{--                    <a href="user-address.html">--}}
{{--                        <span class="material-icons">home</span>--}}
{{--                        <span>آدرس‌ها</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

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
            <div class="profile-content-title">اطلاعات مشتری حقیقی</div>

            <div class="profile-content-text">
                <div class="profile-content-text-right">
                    <div class="profile-content-text-name">
                        <span>نام و نام‌خانوادگی : </span>
                        <span>{{auth()->user()->name}} {{auth()->user()->lastname}}</span>
                    </div>

                    <div class="profile-content-text-name">
                        <span>آدرس الکترونیک : </span>
                        <span>{{auth()->user()->email}}</span>
                    </div>

                    <div class="profile-content-text-name">
                        <span>کد ملی : </span>
                        <span>{{auth()->user()->nationalCode}}</span>
                    </div>

                    <div class="profile-content-text-name">
                        <span>شغل: </span>
                        <span>{{auth()->user()->job}}</span>
                    </div>

                    <div class="profile-content-text-name">
                        <span>شماره تلفن همراه : </span>
                        <span>0{{auth()->user()->number}}</span>
                    </div>
                </div>

                <div class="profile-content-text-left">
                    <div class="profile-content-text-name">
                        <span>تاریخ تولد : </span>
                        <span>{{auth()->user()->birthday}}</span>
                    </div>

                    <div class="profile-content-text-name">
                        <span>جنسیت : </span>
                        <span>
                            @if(auth()->user()->gender == 0)
                                مرد
                            @else
                                زن
                            @endif
                        </span>
                    </div>

                    <div class="profile-content-text-name">
                        <span>آدرس محل سکونت : </span>
                        <span>{{auth()->user()->address}}</span>
                    </div>

                    <div class="profile-content-text-name">
                        <span>دریافت خبرنامه : </span>
                        <span>
                            @if(auth()->user()->Newsletters == 0)
                                بله
                            @else
                                خیر
                            @endif
                        </span>
                    </div>

                    <div class="profile-content-text-name">
                        <span>شماره کارت : </span>
                        <span>{{auth()->user()->cardNumber}}</span>
                    </div>
                </div>
            </div>

            <div class="profile-contant-btn">
                <a href="{{route('profile.edit',auth()->user())}}" class="edit-info-btn">ویرایش اطلاعات</a>
                <a class="change-pass-btn">تغییر رمز عبور</a>
            </div>
        </div>
    </div>
</main>
@endsection


