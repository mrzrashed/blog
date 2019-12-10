@extends('layouts.blog')
@section('content')
<div class="banner_area">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="banner_content">
                    <div class="banner_cell">
                        <h2>This is what you love to read</h2>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                            nisl ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog_area_container ">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-5">
                <div class="sidebar">
                    <aside class="sidebar_widget">
                        <div class="sidebar_widget_title">
                            <img src="{{asset('Content')}}/assets/img/blog/glass.png" alt="post title icon">
                            Categories
                        </div>
                        <div class="sidebar_widget_body categories_widget">
                            <ul>
                                <li>
                                    <a href="#">
                                        Lifestyle
                                        <span>
                                            (08)
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Health
                                        <span>
                                            (08)
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Nature
                                        <span>
                                            (08)
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Beauty
                                        <span>
                                            (08)
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Food
                                        <span>
                                            (08)
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="sidebar_widget">
                        <div class="sidebar_widget_title">
                            <img src="{{asset('Content')}}/assets/img/blog/glass.png" alt="post title icon">
                            Recent <span>Post</span>
                        </div>
                        <div class="sidebar_widget_body recent_post">
                            <ul>
                                <li>
                                    <div class="recent_post_image">
                                        <img src="{{asset('Content')}}/assets/img/blog/recent_post_img1.jpg" alt="recent post image">
                                    </div>
                                    <div class="recnet_post_content">
                                        <a href="#">
                                            <h4>Recent activity</h4>
                                        </a>
                                        <p><span>Jan 20, 2017</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent_post_image">
                                        <img src="{{asset('Content')}}/assets/img/blog/recent_post_img2.jpg" alt="recent post image">
                                    </div>
                                    <div class="recnet_post_content">
                                        <a href="#">
                                            <h4>Once in a while</h4>
                                        </a>
                                        <p><span>Jan 20, 2017</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent_post_image">
                                        <img src="{{asset('Content')}}/assets/img/blog/recent_post_img3.jpg" alt="recent post image">
                                    </div>
                                    <div class="recnet_post_content">
                                        <a href="#">
                                            <h4>White element</h4>
                                        </a>
                                        <p><span>Jan 20, 2017</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="recent_post_image">
                                        <img src="{{asset('Content')}}/assets/img/blog/recent_post_img4.jpg" alt="recent post image">
                                    </div>
                                    <div class="recnet_post_content">
                                        <a href="#">
                                            <h4>Recent activity</h4>
                                        </a>
                                        <p><span>Jan 20, 2017</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="sidebar_widget">
                        <div class="sidebar_widget_title">
                            <img src="{{asset('Content')}}/assets/img/blog/glass.png" alt="post title icon">
                            instagram
                        </div>
                        <div class="sidebar_widget_body instagram_post">
                            <div class="instagram-middle">
                                <a href="#">
                                    <img src="{{asset('Content')}}/assets/img/blog/instragram_post1.jpg" alt="instragram post">
                                </a>
                                <a href="#">
                                    <img src="{{asset('Content')}}/assets/img/blog/instragram_post2.jpg" alt="instragram post">
                                </a>
                                <a href="#">
                                    <img src="{{asset('Content')}}/assets/img/blog/instragram_post3.jpg" alt="instragram post">
                                </a>
                                <a href="#">
                                    <img src="{{asset('Content')}}/assets/img/blog/instragram_post4.jpg" alt="instragram post">
                                </a>
                                <a href="#">
                                    <img src="{{asset('Content')}}/assets/img/blog/instragram_post5.jpg" alt="instragram post">
                                </a>
                                <a href="#">
                                    <img src="{{asset('Content')}}/assets/img/blog/instragram_post6.jpg" alt="instragram post">
                                </a>
                            </div>
                        </div>
                    </aside>
                    <aside class="sidebar_widget">
                        <div class="sidebar_widget_title">
                            <img src="{{asset('Content')}}/assets/img/blog/glass.png" alt="post title icon">
                            Newsletter
                        </div>
                        <div class="sidebar_widget_body newsletter_post">
                            <input type="text" placeholder="Your  Email Address">
                            <button class="business_btn">Subscribe</button>
                        </div>
                    </aside>
                    <aside class="sidebar_widget">
                        <div class="sidebar_widget_title">
                            <img src="{{asset('Content')}}/assets/img/blog/glass.png" alt="post title icon">
                            Tags
                        </div>
                        <div class="sidebar_widget_body tags_post">
                            <a href="#">Video</a>
                            <a href="#">Slider</a>
                            <a href="#">Recent Activity</a>
                            <a href="#">Audio</a>
                            <a href="#">Recent Activity</a>
                            <a href="#">Slider</a>
                            <a href="#">Recent Activity</a>
                            <a href="#">Audio</a>
                            <a href="#">Video</a>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-md-8 col-sm-7">
                <div class="single_blog_content_container ">
                    <article>
                        <div class="blog_image_container">
                            <img src="{{asset('Content')}}/assets/img/blog/blog_page_blog_img1.jpg" alt="!!">
                        </div>
                        <div class="blog_content_container">
                            <div class="blog_page_title">
                                <a href="#">
                                    <h5>Everday life</h5>
                                </a>
                                <span>Jan 20, 2017</span>
                            </div>
                            <div class="single_blog_content_body">
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit
                                    velit esse molestie consequat, vel illum dolor
                                    nulla facilisis at vero eros et accumsan
                                </p>
                                <div class="single_blog_btn">
                                    <a href="{{url('Blog/post')}}">
                                        <img src="{{asset('Content')}}/assets/img/svg/right-arrow.svg" class="svg" alt="right arrow">
                                    </a>
                                </div>
                                <div class="single_blog_social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/share.svg" class="svg" alt="social icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/user.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/heart.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/speech-bubble-outline-of-rectangular-shape.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="blog_image_container">
                            <img src="{{asset('Content')}}/assets/img/blog/blog_page_blog_img2.jpg" alt="!!">
                        </div>
                        <div class="blog_content_container">
                            <div class="blog_page_title">
                                <a href="#">
                                    <h5>Everday life</h5>
                                </a>
                                <span>Jan 20, 2017</span>
                            </div>
                            <div class="single_blog_content_body">
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit
                                    velit esse molestie consequat, vel illum dolor
                                    nulla facilisis at vero eros et accumsan
                                </p>
                                <div class="single_blog_btn">
                                    <a href="{{url('Blog/post')}}">
                                        <img src="{{asset('Content')}}/assets/img/svg/right-arrow.svg" class="svg" alt="right arrow">
                                    </a>
                                </div>
                                <div class="single_blog_social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/share.svg" class="svg" alt="social icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/user.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/heart.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/speech-bubble-outline-of-rectangular-shape.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="blog_image_container">
                            <img src="{{asset('Content')}}/assets/img/blog/blog_page_blog_img3.jpg" alt="!!">
                        </div>
                        <div class="blog_content_container">
                            <div class="blog_page_title">
                                <a href="#">
                                    <h5>Everday life</h5>
                                </a>
                                <span>Jan 20, 2017</span>
                            </div>
                            <div class="single_blog_content_body">
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit
                                    velit esse molestie consequat, vel illum dolor
                                    nulla facilisis at vero eros et accumsan
                                </p>
                                <div class="single_blog_btn">
                                    <a href="{{url('Blog/post')}}">
                                        <img src="{{asset('Content')}}/assets/img/svg/right-arrow.svg" class="svg" alt="right arrow">
                                    </a>
                                </div>
                                <div class="single_blog_social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/share.svg" class="svg" alt="social icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/user.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/heart.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/speech-bubble-outline-of-rectangular-shape.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="blog_image_container">
                            <img src="{{asset('Content')}}/assets/img/blog/blog_page_blog_img4.jpg" alt="!!">
                        </div>
                        <div class="blog_content_container">
                            <div class="blog_page_title">
                                <a href="#">
                                    <h5>Everday life</h5>
                                </a>
                                <span>Jan 20, 2017</span>
                            </div>
                            <div class="single_blog_content_body">
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit
                                    velit esse molestie consequat, vel illum dolor
                                    nulla facilisis at vero eros et accumsan
                                </p>
                                <div class="single_blog_btn">
                                    <a href="{{url('Blog/post')}}">
                                        <img src="{{asset('Content')}}/assets/img/svg/right-arrow.svg" class="svg" alt="right arrow">
                                    </a>
                                </div>
                                <div class="single_blog_social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/share.svg" class="svg" alt="social icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/user.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/heart.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/speech-bubble-outline-of-rectangular-shape.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="blog_image_container">
                            <img src="{{asset('Content')}}/assets/img/blog/blog_page_blog_img5.jpg" alt="!!">
                        </div>
                        <div class="blog_content_container">
                            <div class="blog_page_title">
                                <a href="#">
                                    <h5>Everday life</h5>
                                </a>
                                <span>Jan 20, 2017</span>
                            </div>
                            <div class="single_blog_content_body">
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit
                                    velit esse molestie consequat, vel illum dolor
                                    nulla facilisis at vero eros et accumsan
                                </p>
                                <div class="single_blog_btn">
                                    <a href="{{url('Blog/post')}}">
                                        <img src="{{asset('Content')}}/assets/img/svg/right-arrow.svg" class="svg" alt="right arrow">
                                    </a>
                                </div>
                                <div class="single_blog_social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/share.svg" class="svg" alt="social icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/user.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/heart.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/speech-bubble-outline-of-rectangular-shape.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="blog_image_container">
                            <img src="{{asset('Content')}}/assets/img/blog/blog_page_blog_img6.jpg" alt="!!">
                        </div>
                        <div class="blog_content_container">
                            <div class="blog_page_title">
                                <a href="#">
                                    <h5>Everday life</h5>
                                </a>
                                <span>Jan 20, 2017</span>
                            </div>
                            <div class="single_blog_content_body">
                                <p>
                                    Duis autem vel eum iriure dolor in hendrerit
                                    velit esse molestie consequat, vel illum dolor
                                    nulla facilisis at vero eros et accumsan
                                </p>
                                <div class="single_blog_btn">
                                    <a href="{{url('Blog/post')}}">
                                        <img src="{{asset('Content')}}/assets/img/svg/right-arrow.svg" class="svg" alt="right arrow">
                                    </a>
                                </div>
                                <div class="single_blog_social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/share.svg" class="svg" alt="social icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/user.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/heart.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{asset('Content')}}/assets/img/svg/speech-bubble-outline-of-rectangular-shape.svg" class="svg" alt="social icon">
                                                44
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pagination_container">
                            <div class="pagination_inner_area">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('Content')}}/assets/img/components/blog_left_arrow.png" alt="left arrow">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            3
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('Content')}}/assets/img/components/blog_right_arrow.png" alt="right arrow">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
