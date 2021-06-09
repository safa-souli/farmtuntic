<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="#">
  <meta name="description" content="#">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    .container-pop {
    width: 50px;
      border: 2px solid #dedede;
      background-color: white;
      border-radius: 5px;
      padding: 10px;
      margin: 10px 0;
    }

    .darker {
      border-color: #ccc;
      background-color: #ddd;
    }

    .container-pop::after {
      content: "";
      clear: both;
      display: table;
    }
            @keyframes blink {

        from,
        to {
            color: transparent
        }

        50% {
            color: black
        }
    }

    @-moz-keyframes blink {

        from,
        to {
            color: transparent
        }

        50% {
            color: black
        }
    }

    @-webkit-keyframes blink {

        from,
        to {
            color: transparent
        }

        50% {
            color: black
        }
    }

    @-ms-keyframes blink {

        from,
        to {
            color: transparent
        }

        50% {
            color: black
        }
    }

    @-o-keyframes blink {

        from,
        to {
            color: transparent
        }

        50% {
            color: black
        }
    }

    .chatpopup-widget * {
        box-sizing: border-box
    }

    .chatpopup-widget {
        position: fixed;
        bottom: 12px;
        z-index: 999999;
        display: flex;
        flex-direction: column
    }

    .chatpopup-widget__body {
        margin-bottom: 10px;
        min-width: 300px;
        max-width: 340px;
        display: none;
        margin-left: 12px
    }

    .chatpopup-widget__body-header {
        padding: 15px;
        font-size: 15px;
        line-height: 22px;
        text-align: center;
        border-radius: 4px 4px 0 0;
        position: relative
    }

    .chatpopup-widget-close {
        position: absolute;
        top: -40px;
        width: 30px;
        height: 30px;
        border-radius: 4px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        user-select: none
    }

    .chatpopup-support-persons {
        background-color: #fff;
        padding: 15px;
        box-shadow: 0 50px 30px rgba(0, 0, 0, 0.1);
        border-radius: 0 0 4px 4px;
        max-height: 370px;
        overflow-y: auto;
        min-height: 20px
    }

    .chatpopup-support-person {
        display: flex;
        margin-bottom: 15px;
        border: 1px solid #F5F5F5;
        cursor: pointer
    }

    .chatpopup-support-person__img {
        width: 70px;
        height: 70px;
        margin-right: 15px;
        position: relative
    }

    .chatpopup-support-person__img img {
        width: 100%;
        border-radius: 0
    }

    .chatpopup-support-person__status {
        background-color: red;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        position: absolute;
        bottom: 0;
        right: 0
    }

    .chatpopup-support-person__status--avail {
        background-color: #00c853
    }

    .chatpopup-support-person__status--not-avail {
        background-color: #ffd600
    }

    .chatpopup-support-person__meta {
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    .chatpopup-support-person__name,
    .chatpopup-support-person__title {
        line-height: 20px
    }

    .chatpopup-support-person__name {
        font-size: 16px;
        font-weight: 700;
        color: #706F6F
    }

    .chatpopup-support-person__title {
        color: #706F6F
    }

    .chatpopup-welcome-msg {
        padding: 5px 15px;
        border-radius: 0 0 4px 4px
    }

    .chatpopup-custom-offer {
        margin: 10px 0
    }

    .chatpopup-custom-offer img {
        width: 100%
    }

    .chatpopup-widget__trigger {
        padding: 6px 14px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 15px;
        display: inline-block;
        user-select: none;
        display: flex;
        align-items: center
    }

    .chatpopup-gdpr {
        font-size: 14px;
        border: 1px solid transparent;
        padding-left: 15px;
        background-color: #fff
    }

    .chatpopup-gdpr.error {
        border: 1px solid red
    }

    a.chatpopup-whatsapp-button {
        padding: 6px 20px !important;
        text-align: center !important;
        text-decoration: none !important;
        margin-right: 5px !important;
        border-radius: 2px !important;
        cursor: pointer !important;
        font-size: 15px !important;
        outline: none !important;
        display: inline-block !important
    }

    .chatpopup-blinking-cursor {
        font-weight: 100;
        font-size: 15px;
        color: #2E3D48;
        -webkit-animation: 1s blink step-end infinite;
        -moz-animation: 1s blink step-end infinite;
        -ms-animation: 1s blink step-end infinite;
        -o-animation: 1s blink step-end infinite;
        animation: 1s blink step-end infinite
    }

    .chatpopup-input-wrapper {
        display: flex;
        align-items: center;
        padding: 5px 10px;
        background: #fff;
        box-shadow: 0 50px 30px rgba(0, 0, 0, 0.1);
        border-radius: 0 0 4px 4px;
        border-top: 1px solid #ccc
    }

    .chatpopup-input-wrapper input {
        flex: 1;
        height: 40px;
        background: transparent !important;
        border: none !important;
        box-shadow: none !important
    }

    .chatpopup-input-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        cursor: pointer;
        margin: 0 10px
    }

    .chatpopup-input-icon svg {
        width: 100%;
        height: auto
    }

    .chatpopup_jwi {
        display: inline-block;
        position: fixed;
        bottom: 12px;
        filter: drop-shadow(0px 0px 15px rgba(0, 0, 0, .1));
        outline: none;
        z-index: 99999
    }

    .chatpopup-icon-close svg {
        width: 14px
    }

    .chatpopup-icon-whatsapp {
        line-height: 0 !important;
        margin-right: 5px
    }

    .chatpopup-icon-whatsapp svg {
        width: 16px
    }
    .chatpopup-widget-close,
        .chatpopup-widget__body-header,
        .chatpopup-widget__trigger,
        .chatpopup-welcome-msg {
            background-color: #6da830;
            color: #ffffff;
        }

        .chatpopup-widget {
            right: 12px;
            align-items: flex-end;
        }

        .chatpopup-widget-close {
            right: 0;
        }

        .chatpopup_jwi {
            right: 12px;
        }

        .chatpopup-welcome-msg {
            border: 1px solid #ccc;
            color: #999;
            background: #fff;
            line-height: 1em;
            padding: 8px 15px 5px 10px;
            position: relative;
        }

        .chatpopup-welcome-msg:before {
            content: "\1F4AC";
            display: inline;
            top: 0;
            position: relative;
            font-size: 1.1em;
            margin-right: 5px;
        }

        .chatpopup-welcome-msg:after {
            content: "|";
            position: absolute;
            left: 32px;
            top: 6px;
            animation: cursor 2.5s infinite;
        }

        @keyframes cursor {
            0% {
                opacity: 1;
            }

            25% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            75% {
                opacity: 0;
            }
        }
      </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <!-- Google Fonts -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <title>{{ $title ?? 'Farmtastic' }}</title>
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
  <link rel="apple-touch-icon-precomposed" href="#">
  <link rel="shortcut icon" href="{{ URL::asset('assets\img\logo\Icon.png')}}" title="icon">
  <!-- Bootstrap -->
  <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Fontawesome -->
  <link href="{{ URL::asset('assets/css/font-awesome.css')}}" rel="stylesheet">
  <!-- Flaticons -->
  <link href="{{ URL::asset('assets/css/font/flaticon.css')}}" rel="stylesheet">
  <!-- Swiper Slider -->
  <link href="{{ URL::asset('assets/css/swiper.min.css')}}" rel="stylesheet">
  <!-- Range Slider -->
  <link href="{{ URL::asset('assets/css/ion.rangeSlider.min.css')}}" rel="stylesheet">
  <!-- magnific popup -->
  <link href="{{ URL::asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
  <!-- Nice Select -->
  <link href="{{ URL::asset('assets/css/nice-select.css')}}" rel="stylesheet">
  <!-- Custom Stylesheet -->
  <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- Custom Responsive -->
  <link href="{{ URL::asset('assets/css/responsive.css')}}" rel="stylesheet">
  <!-- Rating Stylesheet -->
  <link href="{{ URL::asset('assets/css/rating.css')}}" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
  <!-- place -->
  
</head>
<body style="margin:-10px;">
<!-- Navigation -->
<div class="copyright bg-light-green">
  <div class="container-fluid">
    <div class="row fw-400 fs-12 mr-3" style="margin-bottom:-10px;">
      <div class="col-lg-4">
      </div>
      <div class="col-lg-4 text-center medewithlove align-self-center">
      </div>
      <div class="col-lg-4">
        <div class="copyright-text">
        <span class="text-light-white">
        @guest
           <a href="login" class="gem-points" style="color: #fff">S'identifier</a> | 
           <a href="register" class="gem-points" style="color: #fff">S'inscrire</a> | 
         @endguest
           <a href="contact" class="gem-points" style="color: #fff">Contactez-nous</a> | 
          <a href="propos" class="gem-points" style="color: #fff">Qui sommes-nous?</a>
         </span>
        </div>
      </div>
    </div>
  </div>
  </div>
<div class="header">
  <header class="full-width">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mainNavCol">
          <!-- logo -->
          <div class="logo mainNavCol" style="margin:-2ch 3ch 0 3ch;">
            <a href="{{ route('home') }}">
              <img src="{{ URL::asset('assets\img\logo\logo3.png') }}" class="img-fluid" alt="Logo">
            </a>
          </div>
          <!-- logo -->
          <div class="main-search mainNavCol">
            <form class="main-search search-form full-width">
              <div class="row">
                <!-- search -->
                <div class="col-lg-6 col-md-7">
                  <div class="search-box padding-10">
                    <input type="text" class="form-control" placeholder="Fruits, Légume, Lait, Oeufs">
                  </div>
                </div>
                <!-- search -->
              </div>
            </form>
          </div>
          <div class="right-side fw-700 mainNavCol">
            <div class="gem-points">
              <a href="{{ route('product.index') }}">
                <i class="fab fa-product-hunt" title="Produit"></i>
                <span>Produit</span>
              </a>
            </div>
            <div class="gem-points">
              <a href="{{ route('farm.index') }}">
                <i class="fa fa-home" title="Ferme"></i>
                <span>Ferme</span>
              </a>
            </div>
            <div class="gem-points">
              <a href="{{ route('forum.index') }}">
                <i class="fa fa-comments" title="Forum"></i>
                <span>Forum</span>
              </a>
            </div>

              <!-- mobile search -->
            <div class="mobile-search">
              <a href="#" data-toggle="modal" data-target="#search-box"> <i class="fas fa-search"></i>
              </a>
            </div>
            <!-- end mobile search -->
            @guest
            <!-- authentification
              <div class="gem-points">
                <a href="{{ route('register') }}">
                  <div class="icon"><i class="fa fa-user-plus"></i></div>
                  <span>S'inscrire</span>
                </a>
              </div>
              <div class="gem-points">
                <a href="{{ route('login') }}">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <span>S'identifer</span>
                </a>
              </div>
              <!-- end authentication -->
            @else
              <!-- user account -->
              <div class="user-details p-relative">
                <a href="#" class="text-light-white fw-500">
                  <?php $photo = Auth::user()->photo; ?>
                  <img src='{{ URL::asset("assets/img/user/$photo") }}' width="50" height="50" class="rounded-circle" alt="user-img">
                  <span> {{ Auth::user()->prenom }} {{ Auth::user()->nom }} </span>
                </a>
                <div class="user-dropdown" style="margin-left: 30px;">
                  <ul>
                    <li>
                      <a href="{{ route('order') }}">
                        <div class="icon"><i class="fab fa-jedi-order"></i>
                        </div>
                        <span class="details">Commandes passées</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('profile.show', ['client' => Auth::user()]) }}">
                        <div class="icon"><i class="fa fa-user-check"></i>
                        </div>
                        <span class="details">Compte</span>
                      </a>
                    </li>
                    @can('viewAny', \App\ferme::class)
                      <li>
                        <a href="{{ route('farm.mine') }}">
                          <div class="icon"><i class="fa fa-home"></i>
                          </div>
                          <span class="details">Mes fermes</span>
                        </a>
                      </li>
                    @endcan
                    @can('viewAny', \App\produit::class)
                      <li>
                        <a href="#">
                          <div class="icon"><i class="fab fa-product-hunt"></i>
                          </div>
                          <span class="details">Mes produits</span>
                        </a>
                      </li>
                    @endcan
                    @can('viewAny', \App\livraison::class)
                      <li>
                        <a href="#">
                          <div class="icon"><i class="fa fa-truck"></i>
                          </div>
                          <span class="details">Mes livraisons</span>
                        </a>
                      </li>
                    @endcan
                    @can('viewAny', \App\transport::class)
                      <li>
                        <a href="#">
                          <div class="icon"><i class="fa fa-bus"></i>
                          </div>
                          <span class="details">Mes transports</span>
                        </a>
                      </li>
                    @endcan
                  </ul>
                  <div class="user-footer"><a href="{{ route('logout') }}"
                                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnecter</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                  </div>
                </div>
              </div>
              <!-- mobile search -->
              <!-- user notification -->
              <div class="cart-btn notification-btn">
                <a href="#" class="text-light-green fw-700"> <i class="fas fa-bell"></i>
                  <span class="user-alert-notification"></span>
                </a>
                <div class="notification-dropdown">
                  <div class="product-detail">
                    <a href="#">
                      <div class="img-box">
                        <img src="{{URL::asset('assets/img/shop-1.png')}}" class="rounded" alt="image">
                      </div>
                      <div class="product-about">
                        <p class="text-light-black">Lil Johnny’s</p>
                        <p class="text-light-white">Spicy Maxican Grill</p>
                      </div>
                    </a>
                  </div>
                  <div class="rating-box">
                    <p class="text-light-black">How was your last order ?.</p> <span class="text-dark-white"><i class="fas fa-star"></i></span>
                    <span class="text-dark-white"><i class="fas fa-star"></i></span>
                    <span class="text-dark-white"><i class="fas fa-star"></i></span>
                    <span class="text-dark-white"><i class="fas fa-star"></i></span>
                    <span class="text-dark-white"><i class="fas fa-star"></i></span>
                    <cite class="text-light-white">Ordered 2 days ago</cite>
                  </div>
                </div>
              </div>
              <!-- user notification -->
          @endguest
          <!-- user cart -->
            <div class="cart-btn cart-dropdown">
              <a href="{{ route('card.show') }}" class="text-light-green fw-700"> <i class="fas fa-shopping-cart" title="Panier"></i>
                <span class="user-alert-cart">3</span>
              </a>
            </div>
            <!-- user cart -->
          </div>
        </div>
      </div>
    </div>
  </header>
</div>
@yield('content')
<footer class="section-padding bg-light-theme pt-0 u-line">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl col-lg-4 col-md-4 col-sm-6">
        <div class="footer-contact">
          <h6 class="text-light-black">Besoin d'aide</h6>
          <ul>
            <li class="fw-600"><span class="text-light-white">Appelez-nous</span> <a href="tel:" class="text-light-black">+(216) 52 110 104</a>
            </li>
            <li class="fw-600"><span class="text-light-white">Envoyez-nous un email</span> <a href="mailto:" class="text-light-black">soulisafa47@gmail.com</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl col-lg-4 col-md-4 col-sm-6">
        <div class="footer-links">
          <h6 class="text-light-black">Laissez-nous vous aider</h6>
          <ul>
            <li><a href="#" class="text-light-white fw-600">Détails du compte</a>
            </li>
            <li><a href="#" class="text-light-white fw-600">Commandes passées</a>
            </li>
            <li><a href="#" class="text-light-white fw-600">Rechercher ferme</a>
            </li>
            <li><a href="login" class="text-light-white fw-600">S'identifier</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl col-lg-4 col-md-4 col-sm-6">
        <div class="footer-links">
          <h6 class="text-light-black">Faire des affaires</h6>
          <ul>
            <li><a href="#" class="text-light-white fw-600">Suggérez une idée</a>
            </li>
            <li><a href="#" class="text-light-white fw-600">Être un agriculteur</a>
            </li>
            <li><a href="#" class="text-light-white fw-600">Être un livreur </a>
            </li>
            <li><a href="#" class="text-light-white fw-600">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl col-lg-4 col-md-4 col-sm-6">
        <div class="footer-links">
          <h6 class="text-light-black">Télécharger Apps</h6>
          <div class="appimg">
            <a href="#">
              <img src='{{ URL::asset("assets/img/playstore.jpg") }}' class="img-fluid" alt="app logo">
            </a>
          </div>
          <div class="appimg">
            <a href="#">
              <img src='{{ URL::asset("assets/img/appstore.jpg") }}' class="img-fluid" alt="app logo">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="copyright">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div class="payment-logo mb-md-20"><span class="text-light-white fs-14 mr-3">Nous acceptons</span>
          <div class="payemt-icon">
            <img src="{{URL::asset('assets/img/pay-pal.png')}}" alt="#">
            <img src="{{URL::asset('assets/img/card-front.jpg')}}" alt="#">
            <img src="{{URL::asset('assets/img/visa.jpg')}}" alt="#">
            <img src="{{URL::asset('assets/img/amex-card-front.png')}}" alt="#">
            <img src="{{URL::asset('assets/img/mastercard.png')}}" alt="#">
          </div>
        </div>
      </div>
      <div class="col-lg-4 text-center medewithlove align-self-center">
        <a href="http://www.slidesigma.com/" class="text-light-black">Fabriqué avec du vrai <i class="fas fa-heart"></i> Farmfresh</a>
      </div>
      <div class="col-lg-4">
        <div class="copyright-text"><span class="text-light-black">© <a href="#" class="text-light-white">Copyright</a> - 2020 | All Right Reserved</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<!-- modal-boxes -->
<div class="modal fade" id="address-box">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title fw-700">Change Address</h4>
      </div>
      <div class="modal-body">
        <div class="location-picker">
          <input type="text" class="form-control" placeholder="Enter a new address">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="search-box">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="search-box p-relative full-width">
          <input type="text" class="form-control" placeholder="Fruits, Vegitables, Milk, Eggs">
        </div>
      </div>
      <div class="modal-body"></div>
    </div>
  </div>
</div>
<div class="chatpopup-widget" style="margin-right:50px;">
        <div class="chatpopup-widget__body"  style="display: none;">
            <div class="chatpopup-widget__body-header">
                <span class="chatpopup-icon-close chatpopup-widget-close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" fill="currentColor">
                        <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                    </svg> </span> Comment aidez-vous? </div>
            <div class="chatpopup-support-persons">
                <div class="chatpopup-support-person" data-chatpopup-person="" data-chatpopup-number="22892971128" data-chatpopup-message="Salut j'ai visité votre ce lien sur votre site https://tochat.be/click-to-chat/2020/03/08/bootstrap-whatsapp-chat-button-auto-link-my-whatsapp et j'ai besoin de plus d'information...">
                    <div class="chatpopup-support-person__meta" >
                        <div class="container darker" style="width:150px;margin-left:100px;">
                          Hello. How are you today?
                        </div>

                        <div class="container" style="width:150px;margin-left:-5px;"">
                          Salut. Comment vas-tu aujourd'hui?
                        </div>
                        <div class="container darker" style="width:150px;margin-left:100px;">
                          Salut. Je vais bien. Merci d'avoir posé la question!
                        </div>

                        <div class="container" style="width:150px;margin-left:-5px;">
                          Comment puis-je vous aider?
                        </div>
                        <div class="container darker" style="width:150px;margin-left:100px;">
                         Comment puis-je passer une commande?
                        </div>

                        <div class="container" style="width:150px;margin-left:-5px;"">
                          Cliquez sur l'icône du produit dans le menu
                        </div>
                        <div class="container" style="width:150px;margin-left:-5px;"">
                          Choisissez un produit
                        </div>
                        <div class="container" style="width:150px;margin-left:-5px;"">
                          Appuyez sur le bouton "ajouter au panier"
                        </div>
                        <div class="container" style="width:150px;margin-left:-5px;"">
                          Appuyez sur le bouton "commander"
                        </div>
                    </div>
                </div>
            </div>
            <div class="chatpopup-input-wrapper">
                <span class="chatpopup-blinking-cursor" style="display: none;">|</span>
                <input type="text" id="chatpopup-type-and-chat-input" placeholder="Salut..." name="message_to_send">
                <div class="chatpopup-input-icon" style="color:#6da830">
                    <a href="checkout.html" class="btn-second btn-submit" style="margin-right:55px;">Envoyer</a>
                </div>
            </div>
        </div>
        <div class="chatpopup-widget__trigger" style="padding:15px;margin:0 15px 15px;"> <i class="icon-question-sign" style="font-size:30px;"></i> </div>
    </div>

<script type="text/javascript">

  $(".chatpopup-icon-close").on('click', function(event) {
    event.preventDefault();
    $(".chatpopup-widget__body").hide(400);
  });

  $(".chatpopup-widget__trigger").on('click', function(event) {
    event.preventDefault();
    $(".chatpopup-widget__body").show(400);
  });
  
  $(".chatpopup-input-icon").on('click', function(event) {
    event.preventDefault();
    sendMessage();
  });

  $("input[name=message_to_send]").on('keydown', function(event) {
    console.log(event.which); 
    if(event.which == 13){
      sendMessage();
    }
  });

  function sendMessage() {
    var number = "22892971128";
    var message = $("input[name=message_to_send]").val();

    if (message === undefined || message === "") {
      message = "Salut j'ai visité votre ce lien sur votre site" + " "+ location.href + " "+ "et j'ai besoin de plus d'information...".replace(" ", "%20");
    } else{
      message += " " + location.href;
    }

    var url = "https://api.whatsapp.com/send?phone="+ number +"&text="+ message;

    $("input[name=message_to_send]").val("");
    window.open(url, '_blank');
  }

</script>

<!-- Place all Scripts Here -->
<!-- jQuery -->
<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
<!-- Popper -->
<script src="{{ URL::asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Range Slider -->
<script src="{{ URL::asset('assets/js/ion.rangeSlider.min.js')}}"></script>
<!-- Swiper Slider -->
<script src="{{ URL::asset('assets/js/swiper.min.js')}}"></script>
<!-- sticky sidebar -->
<script src="{{ URL::asset('assets/js/sticksy.js')}}"></script>
<!-- organza Js -->
<script src="{{ URL::asset('assets/js/organza.js')}}"></script>
<!-- Nice Select -->
<script src="{{ URL::asset('assets/js/jquery.nice-select.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>

<!-- /Place all Scripts Here -->
</body>
</html>