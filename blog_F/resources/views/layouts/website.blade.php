<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<title>Highway - Free CSS Template</title>
<!-- 

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{ asset('website')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('website')}}/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{ asset('website')}}/css/fontAwesome.css">
        <link rel="stylesheet" href="{{ asset('website')}}/css/light-box.css">
        <link rel="stylesheet" href="{{ asset('website')}}/css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="{{ asset('website')}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

    <nav>
        <div class="logo">
            <a href="index.html">High<em>way</em></a>
        </div>
        <div class="menu-icon">
        <span></span>
      </div>
    </nav>

@yield('content')
    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2018 Company Name 
    
    | Designed by TemplateMo</p>
            </div>
        </div>
    </footer>


      <!-- Modal button -->
    <div class="popup-icon">
      <button id="modBtn" class="modal-btn"><img src="{{asset('website')}}/img/contact-icon.png" alt=""></button>
    </div>  

    <!-- Modal -->
    <div id="modal" class="modal">
      <!-- Modal Content -->
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="header-title">Say hello to <em>Highway</em></h3>
          <div class="close-btn"><img src="{{asset('website')}}/img/close_contact.png" alt=""></div>    
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <div class="col-md-6 col-md-offset-3">
            <form id="contact" action="" method="post">
                <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                      </fieldset>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    

    <section class="overlay-menu">
      <div class="container">
        <div class="row">
          <div class="main-menu">
              <ul>
                  <li>
                      <a href="index.html">Home - Full-width</a>
                  </li>
                  <li>
                      <a href="masonry.html">Home - Masonry</a>
                  </li>
                  <li>
                      <a href="grid.html">Home - Small-width</a>
                  </li>
                  <li>
                      <a href="about.html">About Us</a>
                  </li>
                  <li>
                      <a href="blog.html">Blog Entries</a>
                  </li>
                  <li>
                      <a href="single-post.html">Single Post</a>
                  </li>
              </ul>
              <p>We create awesome templates for you.</p>
          </div>
        </div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('website')}}/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="{{asset('website')}}/js/vendor/bootstrap.min.js"></script>
    
    <script src="{{asset('website')}}/js/plugins.js"></script>
    <script src="{{asset('website')}}/js/main.js"></script>

    
</body>
</html>