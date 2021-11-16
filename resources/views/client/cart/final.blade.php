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
                    <img src="/Client/assets/image/cart-l1.svg">
                </div>
                <div class="cart-level-text">
                    <span>سبد خرید</span>
                </div>
            </a>

            <a class="cart-level-two cart-level-active">
                <div class="cart-level-image">
                    <img src="/Client/assets/image/cart-l2.svg">
                </div>
                <div class="cart-level-text">
                    <span>اطلاعات ارسال</span>
                </div>
            </a>

            <a class="cart-level-three cart-level-active">
                <div class="cart-level-image">
                    <img src="/Client/assets/image/cart-l3.svg">
                </div>
                <div class="cart-level-text">
                    <span> اطلاعات پرداخت</span>
                </div>
            </a>
        </div>

        <div class="cart-payment-container">
            <div class="cart-payment-detail">
               {{-- <p>
                    این سفارش در بازه ساعت
                    <span>..........</span>
                    تاریخ
                    <span>..........</span>
                    به
                    <span>..........</span>
                    به آدرس
                    <span>..........</span>
                    و شماره تماس
                    <span>..........</span>
                    تحویل می‌گردد.
                </p>--}}

{{--                <div class="cart-payment-detail-gift">
                    <input type="text" required>
                    <label class="cart-payment-detail-gift-label">کارت هدیه</label>
                </div>

                <div class="cart-payment-detail-offer">
                    <input type="text" required>
                    <label class="cart-payment-detail-offer-label">کد تخفیف</label>
                </div>--}}


                @php $total = 0 @endphp
                @foreach((array) session('cart') as $id => $details)
                    @php $total += $details['cost'] * $details['quantity'] @endphp
                @endforeach


                <div class="cart-payment-detail-price">
                    <div class="cart-payment-detail-price-info">
                        <div>
                            <span>مبلغ کل خرید</span>
                            <span>{{$total}}</span>
                            <span>تومان</span>
                        </div>

                        <div>
                            <span>هزینه ارسال و بسته‌بندی</span>
                            <span>رایگان</span>
                        </div>

                        <div>
                            <span>مجموع تخفیف‌ها</span>
                            <span>0</span>
                            <span>تومان</span>
                        </div>
                    </div>

                    <div class="cart-payment-detail-price-final">
                        <span>قابل پرداخت</span>
                        <span>{{$total}}</span>
                        <span>تومان</span>
                    </div>
                </div>
            </div>

{{--            <div class="cart-payment-final">
                <h1>انتخاب شیوه‌ی پرداخت</h1>

                <div class="online-payment">
                    <input type="radio" name="payment">
                    <span>پرداخت اینترنتی</span>
                </div>
                <div class="online-payment-description">
                    <p>(قابل پرداخت با تمامی کارت‌های عضو شتاب)</p>
                    <p>سرعت بیشتر در پردازش و ارسال سفارش</p>
                </div>

                <div class="digipay">
                    <img src="/Client/assets/image/delivery.svg">
                    <p>درگاه پرداخت دیجی پی</p>
                </div>

                <div class="ofline-payment">
                    <input type="radio" name="payment">
                    <span>پرداخت در محل</span>
                </div>
                <div class="ofline-payment-description">
                    <p>
                        (قابل پرداخت با تمامی کارت‌های بانکی در زمان تحویل سفارش)
                    </p>
                </div>
            </div>--}}
        </div>

        <div class="cart-footer">
            <a href="#" class="cart-footer-btn">پرداخت و تکمیل خرید</a>
        </div>

        <div class="show-cart-items">
            <h1>سبد خرید شما</h1>
            <div class="cart-item-container">

                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        <div class="cart-item">
                    <div class="cart-item-image">
                        <img src="{{str_replace('public','/storage',$details['image'])}}">
                    </div>

                    <div class="cart-item-detail">
                        <p>{{ $details['name'] }}</p>
                        <p>{{$details['cost']}} تومان</p>
{{--                        <p>سایز: M</p>--}}
                    </div>
                </div>
                    @endforeach
                @endif


           {{--     <div class="cart-item">
                    <div class="cart-item-image">
                        <img src="/Client/assets/image/offer-slider02.jpg">
                    </div>

                    <div class="cart-item-detail">
                        <p>شلوار جین</p>
                        <p>مردانه</p>
                        <p>سایز: M</p>
                    </div>
                </div>--}}
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

