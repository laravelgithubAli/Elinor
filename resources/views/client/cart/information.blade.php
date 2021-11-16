@extends('client.layout.master')
@section('profile.css')
    <link rel="stylesheet" href="/Client/assets/style/cart.css">
    <link rel="stylesheet" href="/Client/assets/style/cart-address.css">
    <link rel="stylesheet" href="/Client/assets/style/profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
@endsection

@section('content')



    <main>
        <div class="cart-level-container">
            <a class="cart-level-one cart-level-active">
                <div class="cart-level-image">
                    <img src="/client/assets/image/cart-l1.svg">
                </div>
                <div class="cart-level-text">
                    <span>سبد خرید</span>
                </div>
            </a>

            <a class="cart-level-two cart-level-active">
                <div class="cart-level-image">
                    <img src="/client/assets/image/cart-l2.svg">
                </div>
                <div class="cart-level-text">
                    <span>اطلاعات ارسال</span>
                </div>
            </a>

            <a class="cart-level-three">
                <div class="cart-level-image">
                    <img src="/client/assets/image/cart-l3.svg">
                </div>
                <div class="cart-level-text">
                    <span> اطلاعات پرداخت</span>
                </div>
            </a>
        </div>


        <div class="profile-content mr-auto" style="margin-right: 15%;">
            <div class="user-address-title" style="margin-bottom: -20px;">
                <span>اطلاعات گیرنده</span>
            </div>

            <div class="additional-info-items" style="padding: 3%">
                <form action="{{route('information.store')}}" method="post">
                    @csrf
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
                        <input name="address" class="fname-info-input" type="text" value="{{$user->address}}">
                        <label class="additional-info-item-label">آدرس</label>
                    </div>
                    <input type="submit" style="margin-top: 10px;background-color: #f60551;color: white;border-color: whitesmoke" value="ثبت و مرحله بعد">
                    @include('admin.layout.errors')
                </form>
            </div>
        </div>


        <div class="cart-addres-policy">
            <div class="cart-payment-return">
                <img src="/client/assets/image/return.svg">
                <span>ضمانت 14 روز بازگشت کالا</span>
            </div>

            <div class="cart-payment-delivery">
                <img src="/client/assets/image/delivery.svg">
                <span>تحویل سریع و آسان</span>

            </div>

            <div class="cart-payment-origin">
                <img src="/client/assets/image/origin.svg">
                <span>ضمانت اصل بودن کالا</span>

            </div>
        </div>

    </main>



@endsection

@section('script3')
    <script type="text/javascript">

        $(".update-cart").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
    <script>

        $(document).ready(function () {
            $('.btn-add-address').click(function () {
                $('.submit-address').addClass('show-submit-address')
            });

            $('.submit-address').click(function () {
                $('.submit-address').removeClass('show-submit-address')
            });

            $('.submit-address').children().click(function (e) {
                e.stopPropagation();
            });

            $('.close-submit-address').click(function () {
                $('.submit-address').removeClass('show-submit-address')
            });

            // set national-Code-none
            // $('.national-Code-none-checked').click(function() {
            //     $(".national-Code-container").toggle(this.checked);
            // });


            // show add-address-btn
            $('.change-address-btn').click(function () {
                $('.add-address-btn').addClass('show-add-address-btn');
                $('.change-address-btn').addClass('hide-change-address-btn');

            });

            $('.add-address-btn').click(function () {
                $('.submit-address').addClass('show-submit-address');
            });


            $('.view-address-info-btn-edite').click(function () {
                $('.submit-address').addClass('show-submit-address');
            });

            $('.view-address-info-btn-delete').click(function () {
                $('.view-address-info-box').remove();
            });


        });

    </script>

    @include('client.layout.sessionFlash')

@endsection

