@extends('layout')
@section('body-classes', 'page-template-template-home-page-v1 home-v1')
@section('content')

    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div id="primary" class="content-area">

                <p> Thank you for subscription!</p>

                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .col-full -->
    </div>
    {{--<section class="newsletter-subscription stretch-full-width"  style="background-size: cover; background-position: center center; background-image: url( assets/images/homepage-banners/26.jpg ); height: 460px;">--}}
        {{--<div class="caption">--}}
            {{--<h3 class="title">Subscribe to Newsletter</h3>--}}
            {{--<span class="marketing-text">Subscribe to receive our weekly Hot Promotions every Monday!</span>--}}
            {{--<form method="post" action="/subscribe">--}}
                {{--@csrf--}}
                {{--<div class="newsletter-form">--}}
                    {{--<input type="email" name="email" placeholder="Type here your email address to receive our newsletter">--}}
                    {{--<button class="button" type="submit">Sign Up</button>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</section>--}}
@endsection