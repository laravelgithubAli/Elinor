@extends('client.layout.master')

@section('profile.css')
    <link rel="stylesheet" href="/Client/assets/style/all-product.css">
@endsection


@section('content')
    <main id="main">
        <article class="product-container">

            @foreach($productRandoms as $product)
                <a href="{{route('client.products.show',$product)}}" class="product-item">
                    <div class="product-item-image">
                        <img src="{{str_replace('public','/storage',$product->image)}}">
                        {{--                    <span class="product-item-brand">نیازشاپ</span>--}}
                        @if($product->has_discount)
                            <span class="product-item-offer">{{$product->discount->value}}%</span>
                        @endif
                    </div>
                    <div class="product-item-info">
                        <div class="product-item-title">
                            {{$product->name}}
                        </div>
                        <div class="product-item-price">
                            @if($product->has_discount)
                                <del>{{number_format(intval($product->cost))}}</del>
                                <span>{{number_format(intval($product->cost_with_discount))}}</span>
                            @else
                                <span>{{number_format(intval($product->cost))}}</span>
                            @endif
                            <span>تومان</span>
                        </div>
                    </div>
                </a>
            @endforeach
            {{--            <a href="#" class="product-item">
                            <div class="product-item-image">
                                <!-- <img src="assets/image/product-img1.jpg"> -->
                                <span class="product-item-brand">نیازشاپ</span>
                                <span class="product-item-offer">27%</span>
                            </div>
                            <div class="product-item-info">
                                <div class="product-item-title">
                                    استند لوازم آرایشی
                                </div>
                                <div class="product-item-price">
                                    <del>42,900</del>
                                    <span>33,800</span>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="product-item">
                            <div class="product-item-image">
                                <!-- <img src="assets/image/product-img1.jpg"> -->
                                <span class="product-item-brand">نیازشاپ</span>
                                <span class="product-item-offer">27%</span>
                            </div>
                            <div class="product-item-info">
                                <div class="product-item-title">
                                    استند لوازم آرایشی
                                </div>
                                <div class="product-item-price">
                                    <del>42,900</del>
                                    <span>33,800</span>
                                    <span>تومان</span>
                                </div>
                            </div>
                        </a>--}}
        </article>
    </main>
@endsection
