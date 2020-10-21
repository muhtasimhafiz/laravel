@extends('layouts.website')

@section('content')

<body>

    <nav>
        <div class="logo">
            <a href="index.html">High<em>way</em></a>
        </div>
      <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Welcome to <em>Highway</em></h1>
              <p>FREE CSS TEMPLATE by templatemo</p>
              <p>Homepage with small-width image gallery</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="{{asset('website')}}/img/scroll-icon.png" alt=""></a>
                </div>    
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="highway-loop.mp4" type="video/mp4" />
        </video>
    </div>


    <div class="grid-portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="{{asset('website')}}/img/big_portfolio_item_4.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Biodiesel <em>squid</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="{{asset('website')}}/img/portfolio_item_4.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="{{asset('website')}}/img/big_portfolio_item_2.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>raclette <em>taxidermy</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="{{asset('website')}}/img/portfolio_item_2.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="{{asset('website')}}/img/big_portfolio_item_3.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>humblebrag <em>brunch</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="{{asset('website')}}/img/portfolio_item_3.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="{{asset('website')}}/img/big_portfolio_item_1.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Succulents <em>chambray</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="{{asset('website')}}/img/portfolio_item_1.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="{{asset('website')}}/img/big_portfolio_item_5.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>freegan <em>aesthetic</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="{{asset('website')}}/img/portfolio_item_5.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="{{asset('website')}}/img/big_portfolio_item_6.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>taiyaki <em>vegan</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="{{asset('website')}}/img/portfolio_item_6.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="{{asset('website')}}/img/big_portfolio_item_7.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Thundercats <em>santo</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="{{asset('website')}}/img/portfolio_item_7.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="{{asset('website')}}/img/big_portfolio_item_8.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>wayfarers <em>yuccie</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="{{asset('website')}}/img/portfolio_item_8.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="{{asset('website')}}/img/big_portfolio_item_9.png" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>disrupt <em>street</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="{{asset('website')}}/img/portfolio_item_9.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="load-more-button">
                        <a href="#">Load More</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


@endsection