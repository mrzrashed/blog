@extends('layouts.blog')
@section('content')
@component('layouts.partial')
<h2>About Us</h2>
@endcomponent
<section class="companny_history">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="companny_history">
                    <img class="history_img1" src="{{asset('Content')}}/assets/img/about_us/about_us_img1.jpg" alt="aout us image">
                    <img class="history_img2" src="{{asset('Content')}}/assets/img/about_us/about_us_img2.jpg" alt="aout us image">
                    <h4>Our History</h4>
                    <ul>
                        <li>
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                obortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eu
                                dolor in hendrerit in vulputate velit esse molestie consequat vel illum
                                eu feugiat nulla facilisis at vero eros et accumsan et.
                            </p>
                        </li>
                        <li>
                            <p>
                                Typi non habent claritatem insitam est usus legentis in iis qui facit eo
                                itatem. Investigationes demonstraverunt lectores legere me lius quod
                                saepius. Claritas est etiam processus dynamicus.
                            </p>
                        </li>
                    </ul>
                    <a href="#" class="giant_btn2">
                        Learn More
                        <img src="{{asset('Content')}}/assets/img/svg/right-arrow.svg" class="svg" alt="right arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====================================
					==End Our History==
			==================================== -->
<!-- ====================================
			==Start single member==
			==================================== -->
<section class="single_member_container_area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="single_team_member_image">
                    <img src="{{asset('Content')}}/assets/img/about_us/single-about.jpg" alt="single team member image">
                </div>
                <div class="single_team_member_content">
                    <div class="single_team_member_content_title">
                        <h3>Wayne Hicks</h3>
                        <span>Web Developer</span>
                    </div>
                    <div class="single_team_member_content_body">
                        <ul>
                            <li>
                                <span>
                                    <img src="{{asset('Content')}}/assets/img/svg/quote-left.svg" class="svg" alt="quote icon">
                                </span>
                                Butem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illu
                                dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blan
                                dit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber te
                                mpor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim pl
                                cerat facer possiassum along towards.
                            </li>
                            <li>
                                Onim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliq
                                uip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                velit esse molestie consequat.
                            </li>
                        </ul>
                    </div>
                    <div class="single_member_content_soccial">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{asset('Content')}}/assets/img/svg/facebook.svg" class="svg" alt="social icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('Content')}}/assets/img/svg/linkedin.svg" class="svg" alt="social icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('Content')}}/assets/img/svg/twitter.svg" class="svg" alt="social icon">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{asset('Content')}}/assets/img/svg/skype.svg" class="svg" alt="social icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
