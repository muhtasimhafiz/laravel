@extends('layouts.website')


@section('content')

<div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Demo<em>Blog</em></h1>
              <p>BLOG</p>
              <p>Homepage </p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="{{asset('website')}}/img/scroll-icon.png" alt=""></a>
                </div>    
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="{{asset('website')}}/highway-loop.mp4" type="video/mp4" />
        </video>
    </div>

    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            @foreach ($recentPosts as $post)
           <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                <a href="{{route('website.post',['slug'=>$post->slug])}}" ><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>{{$post->title}} <em>{{$post->user->name}}</em></h1>
                            
                            <p>{{$post->catagory->name}}</p>
                            </div>
                        </div>
                        <div class="image">
                        <img src="{{$post->image}}">
                        </div>
                    </div></a>
                </div>
            </div>
            @endforeach

           
            <div class="row text-center pt-5 border-top">
                {{$recentPosts->links()}}

           
                
          {{--       <div class="col-md-12">
                    <div class="custom-pagination">
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <span>...</span>
                        <a href="#">15</a>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{asset('website')}}/img/big_portfolio_item_4.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>Biodiesel <em>squid</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{asset('website')}}/img/portfolio_item_4.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{asset('website')}}/img/big_portfolio_item_2.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>raclette <em>taxidermy</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{asset('website')}}/img/portfolio_item_2.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{asset('website')}}/img/big_portfolio_item_3.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>humblebrag <em>brunch</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{asset('website')}}/img/portfolio_item_3.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{asset('website')}}/img/big_portfolio_item_1.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>Succulents <em>chambray</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{asset('website')}}/img/portfolio_item_1.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{asset('website')}}/img/big_portfolio_item_5.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>freegan <em>aesthetic</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{asset('website')}}/img/portfolio_item_5.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{asset('website')}}/img/big_portfolio_item_6.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>taiyaki <em>vegan</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{asset('website')}}/img/portfolio_item_6.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{asset('website')}}/img/big_portfolio_item_7.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>Thundercats <em>santo</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{asset('website')}}/img/portfolio_item_7.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{asset('website')}}/img/big_portfolio_item_8.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>wayfarers <em>yuccie</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{asset('website')}}/img/portfolio_item_8.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
            	<div class="portfolio-item">
                	<a href="{{asset('website')}}/img/big_portfolio_item_9.png" data-lightbox="image-1"><div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1>disrupt <em>street</em></h1>
                                <p>Awesome Subtittle Goes Here</p>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{asset('website')}}/img/portfolio_item_9.png">
                        </div>
                    </div></a>
                </div>
            </div> --}}
        </div>
    </div>

    @endsection

 