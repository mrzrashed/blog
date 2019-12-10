@extends('layouts.blog')
@section('content')
@component('layouts.partial')
<h2>Contact Us</h2>
@endcomponent
<section class="contact_field section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="map_hoverable_content">
                    <div class="map_hoverable_content_inner">
                        <ul>
                            <li>
                                <span>Phone</span>
                                <h6>
                                    (+000) 111 2222 33 44
                                    <span>Monday-Friday, 8am - 8pm</span>
                                </h6>

                            </li>
                            <li>
                                <span>Email</span>
                                <h6>
                                    info@giant.com
                                    <span>Drop us a line anytime!</span>
                                </h6>
                            </li>
                            <li>
                                <span>Address</span>
                                <h6>
                                    724 Woodland Road
                                    <span>Marlton, NJ 08053</span>
                                </h6>
                            </li>
                        </ul>
                        <div class="social_icon footer_icon">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ion-social-facebook-outline"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-social-twitter-outline"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-social-github-outline"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-social-pinterest-outline"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-social-skype-outline"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="contact_title">
                    <h4>Get In Touch</h4>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="single_reply_box">
                            <input type="text" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single_reply_box">
                            <input type="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single_reply_box">
                            <textarea placeholder="Enter your comment here"></textarea>
                            <button class="business_btn" type="submit">Get In Touch</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start contact map area-->
<div class="map-container">
    <div class="container-fluid">
        <div class="row">
            <div class="map-area">
                <div id="contactgoogleMap"></div>
            </div>
        </div>
    </div>
</div>
@endsection
