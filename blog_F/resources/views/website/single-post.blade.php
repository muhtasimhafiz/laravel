@extends('layouts.website')

@section('content')
<body>

    <nav>
        <div class="logo">
            <a href="index.html">Gala<em>xy</em></a>
        </div>
      <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>Single <em>Post</em></h1>
            </div>
        </div>
    </div>


    <div class="blog-entries">
        <div class="container">
            <div class="col-md-9">
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-blog-post">
                                <img src="{{asset('website')}}/img/blog_post_1.png" alt="">
                                <div class="text-content">
                                    <h2>Sed sit amet viverra augue</h2>
                                    <span><a href="#">Admin</a> / <a href="#">16 September 2018</a> / <a href="#">Branding</a></span>
                                    <p>Nullam et justo pharetra, commodo eros ac, pharetra justo. Donec vel vehicula urna. Proin sodales ligula vitae lacus elementum, at tempor nisl congue. Pellentesque nec lacus velit. Vestibulum tincidunt hendrerit ante id sagittis. Phasellus sodales nibh mattis neque interdum viverra. Nam accumsan arcu id fringilla auctor. 
                                    <br><br>Suspendisse et rutrum nisl. Phasellus porttitor metus vel justo blandit, in finibus neque elementum. Nullam semper, turpis quis egestas consequat, dui eros tristique lectus, ac euismod ex quam id mauris. Nunc sit amet nibh sollicitudin, interdum nunc in, eleifend est.
                                    
                                	<br><br>Pellentesque vel dignissim libero, et sagittis elit. Nulla dignissim eleifend tellus, sed molestie risus rutrum non. Etiam lorem odio, convallis a arcu vel, bibendum molestie metus. Pellentesque imperdiet nisl ante, eu congue nisl suscipit id.
                                    <br><br><a href="blog.html">Back to Blog</a></p>
                                    <div class="tags-share">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tags">
                                                    <li>Tags:</li>
                                                    <li><a href="#">life</a>,</li>
                                                    <li><a href="#">nature</a>,</li>
                                                    <li><a href="#">life is good</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="share">
                                                    <li>Share:</li>
                                                    <li><a href="#">facebook</a>,</li>
                                                    <li><a href="#">twitter</a>,</li>
                                                    <li><a href="#">behance</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="side-bar">
                    <div class="search">
                        <fieldset>
                            <input name="search" type="text" class="form-control" id="search" placeholder="Search..." required="">
                        </fieldset>
                    </div>
                    <div class="archives">
                        <div class="sidebar-heding">
                            <h2>Archives</h2>
                        </div>
                        <ul>
                            <li><a href="#">> 2018 September (4)</a></li>
                            <li><a href="#">> 2018 August (16)</a></li>
                            <li><a href="#">> 2018 July (5)</a></li>
                            <li><a href="#">> 2018 May (3)</a></li>
                            <li><a href="#">> 2018 February (27)</a></li>
                            <li><a href="#">> 2017 December (18)</a></li>
                            <li><a href="#">> 2017 November (12)</a></li>
                        </ul>
                    </div>
                    <div class="recent-posts">
                        <div class="sidebar-heding">
                            <h2>Recent Posts</h2>
                        </div>
                        <ul>
                            <li><a href="single-post.html">
                                <img src="{{asset('website')}}/img/recent_post_1.png" alt="Recent Post 1">
                                <div class="text">
                                    <h6>Duis mollis orci</h6>
                                    <span>15 September 2018</span>
                                </div>
                            </li></a>
                            <li><a href="single-post.html">
                                <img src="{{asset('website')}}/img/recent_post_2.png" alt="Recent Post 2">
                                <div class="text">
                                    <h6>Etiam quis tem</h6>
                                    <span>10 August 2018</span>
                                </div>
                            </li></a>
                            <li><a href="single-post.html">
                                <img src="{{asset('website')}}/img/recent_post_3.png" alt="Recent Post 3">
                                <div class="text">
                                    <h6>Proin at augue</h6>
                                    <span>16 July 2018</span>
                                </div>
                            </li></a>
                        </ul>
                    </div>
                    <div class="categories">
                        <div class="sidebar-heding">
                            <h2>Categories</h2>
                        </div>
                        <ul>
                            <li><a href="#">> Lifestyle (7)</a></li>
                            <li><a href="#">> Branding (9)</a></li>
                            <li><a href="#">> Nature (14)</a></li>
                            <li><a href="#">> Work Stuff (6)</a></li>
                            <li><a href="#">> Science (5)</a></li>
                        </ul>
                    </div>
                    <div class="latest-gallery">
                        <div class="sidebar-heding">
                            <h2>Latest Gallery</h2>
                        </div>
                        <ul>
                            <li><a href="#"></a><img src="{{asset('website')}}/img/latest_gallery_1.png" alt=""></a></li>
                            <li><a href="#"></a><img src="{{asset('website')}}/img/latest_gallery_2.png" alt=""></a></li>
                            <li><a href="#"></a><img src="{{asset('website')}}/img/latest_gallery_3.png" alt=""></a></li>
                            <li><a href="#"></a><img src="{{asset('website')}}/img/latest_gallery_4.png" alt=""></a></li>
                            <li><a href="#"></a><img src="{{asset('website')}}/img/latest_gallery_5.png" alt=""></a></li>
                            <li><a href="#"></a><img src="{{asset('website')}}/img/latest_gallery_6.png" alt=""></a></li>
                            <li><a href="#"></a><img src="{{asset('website')}}/img/latest_gallery_7.png" alt=""></a></li>
                            <li><a href="#"></a><img src="{{asset('website')}}/img/latest_gallery_8.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


 @endsection