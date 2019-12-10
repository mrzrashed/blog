@extends('layouts.blog')
@section('content')
@component('layouts.partial')
<h2>Single Blog</h2>
@endcomponent
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
                            Recent <span>Post</span>
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
                            <img src="{{asset('Content')}}/assets/img/svg/handshake.svg" class="svg" alt="post title icon">
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
            <div class="col-md-8 col-sm-7 section_padding">
                <div class="sinlge_blog_page_container">
                    <div class="single_blog_page_image">
                        <img src="{{asset('Content')}}/assets/img/blog/single_blog_post_image.jpg" alt="blog post image">
                    </div>
                    <div class="single_blog_page_title">
                        <h4>Everyday Life</h4>
                        <div class="blog_post_time">
                            Jan 22, 2017
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
                    <div class="single_blog_page_content_body">
                        <ul>
                            <li>
                                <p>
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                    aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                    velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accums
                                    an et iusto odio dignissim qui blandit praesent.
                                </p>
                            </li>
                            <li>
                                <div class="quote">
                                    <img src="{{asset('Content')}}/assets/img/blog/quote.png" alt="img">
                                </div>
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </blockquote>
                            </li>
                            <li>
                                <p>
                                    Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. Investig
                                    ationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam pro
                                    cessus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litte
                                    rarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi,
                                    qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Mirum est notare quam littera
                                    gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per
                                    seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum
                                    clari, fiant sollemnes in futurum.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="single_blog_user_container">
                        <div class="single_blog_image">
                            <img src="{{asset('Content')}}/assets/img/blog/sinlge_blog_use_img1.png" alt="blog user">
                        </div>
                        <div class="single_blog_use_content">
                            <h5>Elixir Nawshin</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                diam nonummy nibh euismod.
                            </p>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('Content')}}/assets/img/svg/facebook.svg" class="svg" alt="sharable icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('Content')}}/assets/img/svg/twitter.svg" class="svg" alt="sharable icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('Content')}}/assets/img/svg/linkedin.svg" class="svg" alt="sharable icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{asset('Content')}}/assets/img/svg/skype.svg" class="svg" alt="sharable icon">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="related_post">
                        <div class="section_title5">
                            <h4>Related Posts</h4>
                        </div>
                        <div class="related_post_slider">
                            <div class="item">
                                <div class="blog_content_container">
                                    <div class="blog_page_title">
                                        <a href="#">
                                            <h5>Walkway</h5>
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
                                            <a href="#">
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
                            </div>
                            <div class="item">
                                <div class="blog_content_container">
                                    <div class="blog_page_title">
                                        <a href="#">
                                            <h5>Broadway</h5>
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
                                            <a href="#">
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
                            </div>
                            <div class="item">
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
                                            <a href="#">
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
                            </div>
                            <div class="item">
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
                                            <a href="#">
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
                            </div>
                            <div class="item">
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
                                            <a href="#">
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
                            </div>
                        </div>
                    </div>
                    <div class="blog_user_comments">
                        <div class="section_title5">
                            <h4>Comments</h4>
                        </div>
                        <div class="single-blog-user-commnet-content">
                            <ul>
                                <li>
                                    <div class="blog-user-image">
                                        <img src="{{asset('Content')}}/assets/img/blog/blog_user_img1.jpg" alt="blog user">
                                    </div>
                                    <div class="blog-user-comment-body">
                                        <div class="blog-user-commnet-body-top">
                                            <div class="single-blog-user-info">
                                                <h5>Abdus Salam <span>on  24-08-2016</span></h5>
                                            </div>
                                            <div class="single-blog-user-reply">
                                                <a href="#">
                                                    <img src="{{asset('Content')}}/assets/img/svg/reply.svg" class="svg" alt="reply icon">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-user-comment-body-bottom">
                                            <p>
                                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum do
                                                facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-user-image">
                                        <img src="{{asset('Content')}}/assets/img/blog/blog_user_img1.jpg" alt="blog user">
                                    </div>
                                    <div class="blog-user-comment-body">
                                        <div class="blog-user-commnet-body-top">
                                            <div class="single-blog-user-info">
                                                <h5>John Denver <span>on  24-08-2016</span></h5>
                                            </div>
                                            <div class="single-blog-user-reply">
                                                <a href="#">
                                                    <img src="{{asset('Content')}}/assets/img/svg/reply.svg" class="svg" alt="reply icon">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-user-comment-body-bottom">
                                            <p>
                                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum do
                                                facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-user-image">
                                        <img src="{{asset('Content')}}/assets/img/blog/blog_user_img2.jpg" alt="blog user">
                                    </div>
                                    <div class="blog-user-comment-body">
                                        <div class="blog-user-commnet-body-top">
                                            <div class="single-blog-user-info">
                                                <h5>Salam <span>on  24-08-2016</span></h5>
                                            </div>
                                            <div class="single-blog-user-reply">
                                                <a href="#">
                                                    <img src="{{asset('Content')}}/assets/img/svg/reply.svg" class="svg" alt="reply icon">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-user-comment-body-bottom">
                                            <p>
                                                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum do
                                                facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="reply_box">
                        <div class="section_title5">
                            <h4>Leave a reply</h4>
                        </div>
                        <form action="#">
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
                                <div class="col-md-6">
                                    <div class="single_reply_box">
                                        <textarea placeholder="Enter your comment here"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_reply_box">
                                        <input type="text" placeholder="Website">
                                        <button class="business_btn" type="submit">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
