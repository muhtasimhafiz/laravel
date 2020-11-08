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
                            <img src="{{$post->image}}" alt="">
                                <div class="text-content">
                                    <h2>{{$post->title}}</h2>
                                    <span><a href="#">{{$post->user->name}}</a> / <a href="#">16 September 2018</a> / <a href="#">Branding</a></span>
                                    <p>{{!!$post->description!!}}
                                    <br><br></p>
                                    <div class="tags-share">
                                        <div class="row">
                                            <div class="col-md-6">
                                        <ul class="tags">
                                            <li>Tags:</li>
                                            @foreach ($post->tags as $tag)
                                            <li><a href="#">{{$tag->name}}</a>,</li>
                                            @endforeach
                                        </ul>
                                                
                                                
                                            
                                            
                                                
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <ul class="share">
                                                    <li>Share:</li>
                                                    <li><a href="#">facebook</a>,</li>
                                                    <li><a href="#">twitter</a>,</li>
                                                    <li><a href="#">behance</a></li>
                                                </ul>
                                            </div> --}}
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
                            @foreach ($posts as $post)
                        <li><a href="{{route('website.post',['slug'=>$post->slug])}}">
                        <img src="{{$post->image}}" alt="Recent Post 1">
                                <div class="text">
                                    <h6>{{$post->title}}</h6>
                                    <span>15 September 2018</span>
                                </div>
                            </li></a>
                            @endforeach
                           
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