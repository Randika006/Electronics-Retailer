<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>Lanka Electricals</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!--Footer-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Scripts -->
    {{--@vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
       :root{

         /****************************Navigations Font size*******************************/
                 --nav-font-font-size:25px;
                 --nav-font-font-weight:bold;
                 --nav-font-font-family:Arial, Helvetica, sans-serif;

                 --nav-font-1-font-size:18px;
                 --nav-font-1-font-weight:bold;
                 --nav-font-1-font-family:Arial, Helvetica, sans-serif;

         /************************Footer****************************************/
                 --footer-nb-footer-background: #222;
                 --footer-nb-footer-border-top: 4px solid #b78c33;

                 --footer-nb-footer-about-margin: 0 auto;
                 --footer-nb-footer-about-margin-top: 40px;
                 --footer-nb-footer-about-max-width: 1170px;
                 --footer-nb-footer-about-text-align: center;

                 --footer-nb-footer-about-p-font-size: 13px;
                 --footer-nb-footer-about-p-color: #999;
                 --footer-nb-footer-about-p-margin-top: 30px;

                 --footer-nb-footer-about-social-media-margin-top: 15px;

                 --footer-nb-footer-about-social-media-ul-li-a-display: inline-block;
                 --footer-nb-footer-about-social-media-ul-li-a-width: 45px;
                 --footer-nb-footer-about-social-media-ul-li-a-height: 45px;
                 --footer-nb-footer-about-social-media-ul-li-a-line-height: 45px;
                 --footer-nb-footer-about-social-media-ul-li-a-border-radius: 50%;
                 --footer-nb-footer-about-social-media-ul-li-a-font-size: 16px;
                 --footer-nb-footer-about-social-media-ul-li-a-color: #b78c33;
                 --footer-nb-footer-about-social-media-ul-li-a-border: 1px solid rgba(255, 255, 255, 0.3);

                 --footer-nb-footer-about-social-media-ul-li-a-hover-background: #b78c33;
                 --footer-nb-footer-about-social-media-ul-li-a-hover-color: #fff;
                 --footer-nb-footer-about-social-media-ul-li-a-hover-border-color: #b78c33;

                 --footer-nb-footer-footer-info-single-margin-top: 30px;

                 --footer-nb-footer-footer-info-single-title-color: #aaa;
                 --footer-nb-footer-footer-info-single-title-text-transform: uppercase;
                 --footer-nb-footer-footer-info-single-title-font-size: 16px;
                 --footer-nb-footer-footer-info-single-title-border-left: 4px solid #b78c33;
                 --footer-nb-footer-footer-info-single-title-padding-left: 5px;

                 --footer-nb-footer-footer-info-single-ul-li-a-display: block;
                 --footer-nb-footer-footer-info-single-ul-li-a-color: #aaa;
                 --footer-nb-footer-footer-info-single-ul-li-a-padding: 2px 0;

                 --footer-nb-footer-footer-info-single-ul-li-a-hover-color: #b78c33;


                 --footer-nb-footer-footer-info-single-p-font-size: 13px;
                 --footer-nb-footer-footer-info-single-p-line-height: 20px;
                 --footer-nb-footer-footer-info-single-p-color: #aaa;

                 --footer-nb-footer-copyright-margin-top: 15px;
                 --footer-nb-footer-copyright-background: #111;
                 --footer-nb-footer-copyright-padding: 7px 0;
                 --footer-nb-footer-copyright-color: #999;

                 --footer-nb-footer-copyright-p-margin: 0;
                 --footer-nb-footer-copyright-p-padding: 0;

                 --ft-position: relative;
                 --ft-top:934px;

                 --section-4-font-1-font-size:23px;
                 --section-5-font-1-font-size:23px;
                 --section-6-font-1-font-size:23px;

                 --first-thiree-sections-main-headings-font-size-font-size:23px;

                 --login-form-headding-font-size:23px;
                 --login-form-headding-font-weight:bold;
                 --login-form-headding-font-family:Arial, Helvetica, sans-serif;

                 --login-form-headding-1-font-size:16px;
                 --login-form-headding-1-font-weight:bold;
                 --login-form-headding-1-font-family:Arial, Helvetica, sans-serif;

                 --login-btn-headding-font-size:16px;
                 --login-btn-headding-font-weight:bold;
                 --login-btn-headding-font-family:Arial, Helvetica, sans-serif;

                 --txt-font-size-font-size:16px;
                 --txt-font-size-font-weight:bold;
                 --txt-font-size-font-family:Arial, Helvetica, sans-serif;

                  --bg-form-img-background-image:url("/image/log_nature.jpg");
                  --bg-form-img-background-position:center;
                  --bg-form-img-background-repeat:no-repeat;
                  --bg-form-img-background-size:cover;
                  --bg-form-img-position: relative;

                  --remember-height:12px;
                  --remember-width:12px;

                  --bg-img-background-image:url("/image/log_2.jpg");
                  --bg-img-min-height:1350px;
                  --bg-img-background-position:center;
                  --bg-img-background-repeat:no-repeat;
                  --bg-img-background-size:cover;
                  --bg-img-position: relative;

                 --bg-nav-img-background-image:url("/image/nav.jpg");
                 --bg-nav-img-background-position:center;
                 --bg-nav-img-background-repeat:no-repeat;
                 --bg-nav-img-background-size:cover;
                 --bg-nav-img-position: relative;

                 --form-position-position: relative;
                 --form-position-top:100px;

                 --log-btn-height:42px;
                 --log-btn-width:92px;

                 --bg-form-register-img-background-image:url("/image/register.jpg");
                 --bg-form-register-img-background-position:center;
                 --bg-form-register-img-background-repeat:no-repeat;
                 --bg-form-register-img-background-size:cover;
                 --bg-form-register-img-position: relative;

                 --register-form-headding-font-size:23px;
                 --register-form-headding-font-weight:bold;
                 --register-form-headding-font-family:Arial, Helvetica, sans-serif;

                 --register-form-headding-1-font-size:16px;
                 --register-form-headding-1-font-weight:bold;
                 --register-form-headding-1-font-family:Arial, Helvetica, sans-serif;

                 --register-btn-headding-font-size:16px;
                 --register-btn-headding-font-weight:bold;
                 --register-btn-headding-font-family:Arial, Helvetica, sans-serif;

                 --register-txt-font-size-font-size:16px;
                 --register-txt-font-size-font-weight:bold;
                 --register-txt-font-size-font-family:Arial, Helvetica, sans-serif;

                 --register-btn-height:42px;
                 --register-btn-width:92px;

       }
       /****************************Navigation Font****************************************/
          .nav-font{
             font-size:var(--nav-font-font-size);
             font-weight:var(--nav-font-font-weight);
             font-family:var(--nav-font-font-family);
          }


         .nav-font-1{
             font-size:var(--nav-font-1-font-size);
             font-weight:var(--nav-font-1-font-weight);
             font-family:var(--nav-font-1-font-family);
          }

        /**********************************************************************************/
       /********************Footer******************************************/
       footer.nb-footer {
           background:var(--footer-nb-footer-background);
           border-top:var(--footer-nb-footer-border-top);
       }

       footer.nb-footer .about {
          margin:var(--footer-nb-footer-about-margin);
          margin-top:var(--footer-nb-footer-about-margin-top);
          max-width:var(--footer-nb-footer-about-max-width);
          text-align:var(--footer-nb-footer-about-text-align);
       }
      footer.nb-footer .about p {
          font-size:var(--footer-nb-footer-about-p-font-size);
          color:var(--footer-nb-footer-about-p-color);
          margin-top:var(--footer-nb-footer-about-p-margin-top);
       }
      footer.nb-footer .about .social-media {
         margin-top:var(--footer-nb-footer-about-social-media-margin-top);
      }
     footer.nb-footer .about .social-media ul li a {
           display:var(--footer-nb-footer-about-social-media-ul-li-a-display);
           width:var(--footer-nb-footer-about-social-media-ul-li-a-width);
           height:var(--footer-nb-footer-about-social-media-ul-li-a-height);
           line-height:var(--footer-nb-footer-about-social-media-ul-li-a-line-height);
           border-radius:var(--footer-nb-footer-about-social-media-ul-li-a-border-radius);
           font-size:var(--footer-nb-footer-about-social-media-ul-li-a-font-size);
           color:var(--footer-nb-footer-about-social-media-ul-li-a-color);
           border:var(--footer-nb-footer-about-social-media-ul-li-a-border);
     }
     footer.nb-footer .about .social-media ul li a:hover {
         background:var(--footer-nb-footer-about-social-media-ul-li-a-hover-background);
         color:var(--footer-nb-footer-about-social-media-ul-li-a-color);
         border-color:var( --footer-nb-footer-about-social-media-ul-li-a-hover-border-color);
      }
      footer.nb-footer .footer-info-single {
         margin-top:var(--footer-nb-footer-footer-info-single-margin-top);
      }
     footer.nb-footer .footer-info-single .title {
        color:var(--footer-nb-footer-footer-info-single-title-color);
        text-transform:var(--footer-nb-footer-footer-info-single-title-text-transform);
        font-size:var(--footer-nb-footer-footer-info-single-title-font-size);
        border-left:var(--footer-nb-footer-footer-info-single-title-border-left);
        padding-left:var(--footer-nb-footer-footer-info-single-title-padding-left);
     }
     footer.nb-footer .footer-info-single ul li a {
      display:var(--footer-nb-footer-footer-info-single-ul-li-a-display);
      color:var(--footer-nb-footer-footer-info-single-ul-li-a-color);
      padding:var(--footer-nb-footer-footer-info-single-ul-li-a-padding);
    }
    footer.nb-footer .footer-info-single ul li a:hover {
      color:var(--footer-nb-footer-footer-info-single-ul-li-a-hover-color);
    }
    footer.nb-footer .footer-info-single p {
      font-size:var(--footer-nb-footer-footer-info-single-p-font-size);
      line-height:var(--footer-nb-footer-footer-info-single-p-line-height);
      color:var(--footer-nb-footer-footer-info-single-p-color);
    }
   footer.nb-footer .copyright {
      margin-top:var(--footer-nb-footer-copyright-margin-top);
      background:var(--footer-nb-footer-copyright-background);
      padding:var(--footer-nb-footer-copyright-padding);
      color:var(--footer-nb-footer-copyright-color);
   }
   footer.nb-footer .copyright p {
      margin:var(--footer-nb-footer-copyright-p-margin);
      padding:var(--footer-nb-footer-copyright-p-padding);
   }

   .ft{
      position:var(--ft-position);
      top:var(--ft-top);
    }
/*****************************************************/

/***************Login Form Font size and type********************************/
    .login-form-headding{
        font-size:var(--login-form-headding-font-size);
        font-weight:var(--login-form-headding-font-weight);
        font-family:var(--login-form-headding-font-family);
    }

    .login-form-headding-1{
        font-size:var(--login-form-headding-1-font-size);
        font-weight:var(--login-form-headding-1-font-weight);
        font-family:var(--login-form-headding-font-family);

    }

    .login-btn-headding{
        font-size:var(--login-btn-headding-font-size);
        font-weight:var(--login-btn-headding-font-weight);
        font-family:var(--login-btn-headding-font-family);
    }


    .txt-font-size{
        font-size:var(--txt-font-size-font-size);
        font-weight:var(--txt-font-size-font-weight);
        font-family:var(--txt-font-size-font-family);
    }
  /***********************Login Form image************************************/
    .bg-form-img{
        /*The image used*/
        background-image:var(--bg-form-img-background-image);

        /*min-height:380px;*/

        /*Center and scale the image nicely*/
        background-position:var(--bg-form-img-background-position);
        background-repeat:var(--bg-form-img-background-repeat);
        background-size:var(--bg-form-img-background-size);
        position:var(--bg-form-img-position);
    }
/*************************remember me***********************************************/
       .remember{
         height:var(--remember-height);
         width:var(--remember-width);
       }

/***********************************background-image*****************************************/
    .bg-img{
        /*The image used*/
        background-image:var(--bg-img-background-image);

        min-height:var(--bg-img-min-height);

        /*Center and scale the image nicely*/
        background-position:var(--bg-img-background-position);
        background-repeat:var(--bg-img-background-repeat);
        background-size:var(--bg-img-background-size);
        position:var(--bg-img-position);
    }
/****************************************************************************/

/***************************Navigation Background***************************************/
   .bg-nav-img{
        /*The image used*/
        background-image:var(--bg-nav-img-background-image);

        /*min-height:380px;*/

        /*Center and scale the image nicely*/
        background-position:var(--bg-nav-img-background-position);
        background-repeat:var(--bg-nav-img-background-repeat);
        background-size:var(--bg-nav-img-background-size);
        position:var(--bg-nav-img-position);
   }
/*****************************************************************/

/****************************form position*****************************************/
   .form-position{
      position:var(--form-position-position);
      top:var(--form-position-top);
   }
/********************************************************************************/

/****************************Login Button***********************************/
       .log-btn{
         height:var(--log-btn-height);
         width:var(--log-btn-width);
       }

/************************************************************************/

/*************************Register Form*************************************/
    .bg-form-register-img{
        /*The image used*/
        background-image:var(--bg-form-img-background-image);

        /*min-height:380px;*/

        /*Center and scale the image nicely*/
        background-position:var(--bg-form-img-background-position);
        background-repeat:var(--bg-form-register-img-background-repeat);
        background-size:var(--bg-form-register-img-background-size);
        position:var(--bg-form-register-img-position);
    }
/***************************************************************************/

/**************************Register form font size and type********************************/
    .register-form-headding{
        font-size:var(--register-form-headding-font-size);
        font-weight:var(--register-form-headding-font-weight);
        font-family:var(--register-form-headding-font-family);

    }

    .register-form-headding-1{
        font-size:var(--register-form-headding-1-font-size);
        font-weight:var(--register-form-headding-1-font-weight);
        font-family:var(--register-form-headding-font-family);

    }

    .register-btn-headding{
        font-size:var(--register-btn-headding-font-size);
        font-weight:var(--register-btn-headding-font-weight);
        font-family:var(--register-btn-headding-font-family);
    }

    .register-txt-font-size{
        font-size:var(--register-txt-font-size-font-size);
        font-weight:var(--register-txt-font-size-font-weight);
        font-family:var(--register-txt-font-size-font-family);
    }
/*****************************************************************************************/

/**********************************Register button********************************************/
      .register-btn{
         height:var(--register-btn-height);
         width:var(--register-btn-width);
      }

/*********************************************************************************************/

</style>

</head>
<body class="bg-img">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm bg-nav-img">
            <div class="container">
                <a class="navbar-brand nav-font" href="{{ url('/') }}">
                    {{--{{ config('app.name', 'Laravel') }}--}}
                    Lanka Electricals
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link nav-font-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link nav-font-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle nav-font-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end nav-font-1" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item nav-font-1" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none nav-font-1">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="nb-footer ft">
            <div class="container">
            <div class="row">
          <div class="col-sm-12">
           <div class="about">
             <img src="images/logo.png" class="img-responsive center-block" alt="">
             <p>Bootstrap Footer example snippets with CSS, Javascript and HTML. Code example of bootstrap-3 footer using HTML, Javascript, jQuery, and CSS. 5 Beautiful and Responsive Footer Templates. Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p>

            <div class="social-media">
             <ul class="list-inline">
               <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-facebook"></i></a></li>
               <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-twitter"></i></a></li>
               <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-google-plus"></i></a></li>
               <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-linkedin"></i></a></li>
             </ul>
           </div>
         </div>
         </div>

         <div class="col-md-3 col-sm-6">
         <div class="footer-info-single">
           <h2 class="title">Help Center</h2>
           <ul class="list-unstyled">
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a></li>
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Delivery Info</a></li>
           </ul>
         </div>
         </div>

         <div class="col-md-3 col-sm-6">
         <div class="footer-info-single">
           <h2 class="title">Customer information</h2>
           <ul class="list-unstyled">
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Sell Your Items</a></li>
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> RSS</a></li>
           </ul>
         </div>
         </div>

         <div class="col-md-3 col-sm-6">
         <div class="footer-info-single">
           <h2 class="title">Security & privacy</h2>
           <ul class="list-unstyled">
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Return / Refund Policy</a></li>
             <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Store Locations</a></li>
           </ul>
         </div>
         </div>

         <div class="col-md-3 col-sm-6">
          <div class="footer-info-single">
            <h2 class="title">Payment</h2>
            <p>Sample HTML page with Twitter's Bootstrap. Code example of Easy Sticky Footer using HTML, Javascript, jQuery, and CSS. This bootstrap tutorial covers all the major elements of responsive</p>

            </div>
          </div>
         </div>
         </div>

         <section class="copyright">
           <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p>Copyright © 2024. Lanka Electricals.</p>
              </div>
            <div class="col-sm-6"></div>
           </div>
          </div>
         </section>
    </footer>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
