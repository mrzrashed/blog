@extends('layouts.blog')
@section('title','Error')
@section('content')
@component('layouts.partial')
<strong>Page Not Found</strong>
@endcomponent
<section class="error_container">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="error_page_content">
                    <div class="error_middle_content">
                        <h1>4<span>0</span>4 <img src="{{asset('Content')}}/assets/img/components/error_img1.png" alt=""></h1>
                        <p>The page cannot be found. Sorry for the inconvenience.</p>
                        <a href="#" class="business_btn">Go Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
