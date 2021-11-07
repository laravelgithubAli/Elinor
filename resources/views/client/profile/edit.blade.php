@extends('client.layout.master')

@section('profile.css')
    <link rel="stylesheet" href="/Client/assets/style/profile.css">
@endsection

@section('content')

    <main>
        <div class="profile-container">
            <div class="profile-sidebar">
                <div class="profile-sidebar">
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

                    <li class="profile-sidebar-item active-profile-item">
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
                <div class="user-address-title">
                    <span>ویرایش اطلاعات</span>
                </div>

                <div class="additional-info-items">
                    <form action="{{route('profile.update',$user)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="additional-info-item fname-info">
                            <input name="name" class="fname-info-input" type="text" required value="{{$user->name}}">
                            <label class="additional-info-item-label">نام</label>
                        </div>

                        <div class="additional-info-item fname-info">
                            <input name="lastname" class="fname-info-input" type="text" required
                                   value="{{$user->lastname}}">
                            <label class="additional-info-item-label">نام خانوادگی</label>
                        </div>

                        <div class="additional-info-item fname-info">
                            <input name="number" class="fname-info-input" type="text" required
                                   value="0{{$user->number}}">
                            <label class="additional-info-item-label">تلفن همراه</label>
                        </div>

                        <div class="additional-info-item fname-info">
                            <input name="email" class="fname-info-input" type="email" required value="{{$user->email}}">
                            <label class="additional-info-item-label">ایمیل</label>
                        </div>

                        <div class="additional-info-item fname-info">
                            <input name="nationalCode" class="fname-info-input" type="text"
                                   value="{{$user->nationalCode}}">
                            <label class="additional-info-item-label">کد ملی</label>
                        </div>

                        <div class="additional-info-item fname-info">
                            <input name="job" class="fname-info-input" type="text" value="{{$user->job}}">
                            <label class="additional-info-item-label">شغل</label>
                        </div>

                        <div class="additional-info-item fname-info">
                            <input name="address" class="fname-info-input" type="text" value="{{$user->address}}">
                            <label class="additional-info-item-label">آدرس</label>
                        </div>

                        <div class="additional-info-item fname-info">
                            <input name="birthday" class="fname-info-input" type="date" value="{{$user->birthday}}">
                            <label class="additional-info-item-label">تاریخ تولد</label>
                        </div>

                        <div class="additional-info-item fname-info">
                            <input name="cardNumber" class="fname-info-input" type="text" value="{{$user->cardNumber}}">
                            <label class="additional-info-item-label">شماره کارت</label>
                        </div>

                        {{--                       <div class="additional-info-item date-section">
                                                   <p>تاریخ تولد</p>
                                                   <div class="date-section-item">
                                                       <div class="date-section-day">
                                                           <select class="select-of-date-section-day">
                                                           </select>
                                                       </div>

                                                       <div class="date-section-month">
                                                           <select class="select-of-date-section-month">
                                                           </select>
                                                       </div>

                                                       <div class="date-section-year">
                                                           <select class="select-of-date-section-year">
                                                           </select>
                                                       </div>
                                                   </div>
                                               </div>--}}

                        <div class="additional-info-gender">
                            <p  style="margin-top: 0.5rem;">جنسیت</p>

                            <div>
                                <input type="radio" name="gender" value="0"
                                @if($user->gender == 0) checked @endif>
                                <label>مرد</label>

                                <input type="radio" name="gender" value="1"
                                @if($user->gender == 1) checked @endif>
                                <label>زن</label>
                            </div>
                        </div>

                        <div class="additional-info-gender">
                            <p  style="margin-top: 0.5rem;">دریافت خبر نامه</p>

                            <div>
                                <input type="radio" name="Newsletters" value="0"
                                       @if($user->gender == 0) checked @endif>
                                <label>بله</label>

                                <input type="radio" name="Newsletters" value="1" >
                                <label>خبر</label>
                            </div>
                        </div>

                        {{--
                                                <div class="additional-info-city">
                                                    <p>محل سکونت</p>

                                                    <div class="additional-info-city-detail">
                                                        <div class="additional-info-city"></div>
                                                    </div>
                                                </div>


                                                <div class="select">
                                                    <select>
                                                        <option value="1">Pure CSS Select</option>
                                                        <option value="2">No JS</option>
                                                        <option value="3">Nice!</option>
                                                    </select>
                                                </div>
                        --}}

                        <input type="submit" class="btn btn-primary btn-sm">
                    </form>
                </div>
            </div>
        </div>
    </main>


@section('script3')
    <script>
        $(document).ready(function () {
            const monthName = ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند",];

            for (let i = 1; i <= 31; i++) {
                $('.select-of-date-section-day').append($('<option>').val(i).text(i));
            }

            for (let i = 0; i < monthName.length; i++) {
                $('.select-of-date-section-month').append($('<option>').val(i).text(monthName[i]));
            }

            for (let i = 1300; i <= 1400; i++) {
                $('.select-of-date-section-year').append($('<option>').val(i).text(i));
            }

        })
    </script>
@endsection
