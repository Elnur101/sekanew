@extends('layouts.app')
@section('content')
    <div class="section-full  p-t80 p-b50 bg-gray">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <h2 class="text-uppercase">Наши услуги</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
            </div>
            <!-- TITLE END-->
            <div class="section-content">
                <div class="row d-flex justify-content-center">

                    <!-- COLUMNS 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="wt-box  m-b30 radius-md overflow-hide">
                            <div class="wt-media wt-img-effect wt-img-overlay2">
                                <a href="#"><img src="{{asset('/site/images/gallery/pic5.jpg')}}" alt=""></a>
                            </div>
                            <div class="wt-icon-box-wraper  p-a20 left bg-white">
                                <div class="icon-content bdr-4 bdr-left bdr-primary  p-l20">
                                    <h4 class="wt-tilte text-uppercase m-b5"><a href="services-detail.html">Мойка</a></h4>
                                    <p>Мойка автомобилей разных видов</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="wt-box  m-b30 radius-md overflow-hide">
                            <div class="wt-media wt-img-effect wt-img-overlay2">
                                <a href="#"><img src="{{asset('/site/images/gallery/pic7.jpg')}}" alt=""></a>
                            </div>
                            <div class="wt-icon-box-wraper  p-a20 left bg-white">
                                <div class="icon-content bdr-4 bdr-left bdr-primary  p-l20">
                                    <h4 class="wt-tilte text-uppercase m-b5"><a href="services-detail.html">Химчистка</a></h4>
                                    <p>Химчистка и полировка салона.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="wt-box  m-b30 radius-md overflow-hide">
                            <div class="wt-media wt-img-effect wt-img-overlay2">
                                <a href="#"><img src="{{asset('/site/images/gallery/pic4.jpg')}}" alt=""></a>
                            </div>
                            <div class="wt-icon-box-wraper  p-a20 left bg-white ">
                                <div class="icon-content bdr-4 bdr-left bdr-primary  p-l20">
                                    <h4 class="wt-tilte text-uppercase m-b5"><a href="services-detail.html">Паровая мойка.</a></h4>
                                    <p>удаление загрязнений без вреда для авто.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- HOW IT WORK  SECTION END -->
    <!-- FINANCIAL SOLUTION SECTION START -->
    <div class="section-full p-t80 p-b50 overlay-wraper bg-cover bg-no-repeat"  style="background-image:url({{asset('/site/images/background/bg6.jpg')}});">
        <div class="overlay-main bg-white opacity-0"></div>
        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="wt-box m-b30">
                        <div class="wt-thum-bx wt-img-effect  overlay-wraper overflow-hide radius-md wt-img-overlay2">
                            <div class="overlay-main bg-black opacity-02 "></div>
                            <img src="{{asset('/site/images/gallery/pic3.jpg')}}" alt="">
                            <a class="mfp-video video-play-btn" href="{{asset('/site/video/1.mp4')}}">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="wt-box m-b30">
                        
                        <h2 class="text-uppercase display-block m-b15 m-t0 text-white">Steam Team.</h2>
                        <p class="m-b15 text-white">это уникальный сервис, не имеющий аналогов в мире! 
                            Мы предлагаем инновационную технологию выездной автомойки,
                             благодаря которой ваш автомобиль будет чистым без лишних усилий.
                              Теперь вам не нужно искать свободную автомойку или беспокоиться о сохранности лакокрасочного покрытия –
                               наша мобильная команда приедет к вам и выполнит работу с высочайшим качеством.
                        </p>

                        <p class="violet">Как это работает?</p>

                        <ul class="list-check-circle primary m-b15">
                            <li class="text-white">Вы выбираете нужный пакет услуг в мобильном приложении (доступно для iOS и Android). </li>
                            <li class="text-white">Указываете местоположение автомобиля.</li>
                            <li class="text-white">Наш электромобиль с оборудованием приезжает в течение 20 минут. </li>
                            <li class="text-white">В случае заказа чистки салона, предоставляете доступ к автомобилю. </li>
                            <li class="text-white">После завершения работы оплата автоматически списывается с вашей карты.</li>
                            <li class="text-white">Оцените качество услуг прямо в приложении.</li>
                        </ul>
                        <a href="services-detail.html" class="site-button">Связаться</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- SECTION CONTENT START -->
    <div class="section-full bg-white">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-6 col-md-12 bg-cover equal-col-height" style="background-image:url({{asset('/site/images/background/bg12.jpg')}})">
                    <div class="section-content">
                        <div class="wt-left-part">
                            &nbsp;
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="section-content  clearfix">
                        <div class="wt-right-part-2  p-t87 p-b87">
                            <div class="row no-col-gap">
                                <div class="col-md-6 col-sm-6 bg-gray hover-shadow">
                               
                                    <div class="wt-icon-box-wraper  p-a30">
                                        <div class="icon-md site-text-primary radius m-b15">
                                            <span class="icon-cell  site-text-primary"><i class="flaticon-businessman"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase m-b5">Экологичность</h4>
                                            <p>минимальный расход воды (5–10 литров на автомобиль), отсутствие вредных химикатов.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 bg-gray-light hover-shadow">
                                    <div class="wt-icon-box-wraper   p-a30">
                                        <div class="icon-md site-text-primary radius m-b15">
                                            <span class="icon-cell  site-text-primary"><i class="flaticon-building"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase m-b5">Безопасность</h4>
                                            <p>паровая технология не повреждает лакокрасочное покрытие.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6  bg-gray-light hover-shadow">
                                    <div class="wt-icon-box-wraper  p-a30">
                                        <div class="icon-md site-text-primary radius m-b15">
                                            <span class="icon-cell  site-text-primary"><i class="flaticon-analytics"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase m-b5">Комфорт</h4>
                                            <p>услуга предоставляется в удобное для вас время и место.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6  bg-gray hover-shadow">
                                    <div class="wt-icon-box-wraper  p-a30">
                                        <div class="icon-md site-text-primary radius m-b15">
                                            <span class="icon-cell  site-text-primary"><i class="flaticon-bar-chart"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="wt-tilte text-uppercase m-b5">Контроль качества</h4>
                                            <p>возможность просматривать рейтинг и отзывы исполнителей.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- SECTION CONTENT  END -->
    <!-- OUR TEAM MEMBER SECTION START -->
    <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
        <div class="container">

            <!-- TITLE START-->
            <div class="section-head text-center">
                <h2 class="text-uppercase">Наши преимущества.</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
            </div>
            <!-- TITLE END-->

            <div class="section-content">


            </div>
        </div>
        <!-- OUR TEAM MEMBER SECTION END -->

        <!-- OUR PLANS SECTION START -->

        <!-- OUR PLANS MEMBER SECTION END -->

        <!-- LATEST PROJECT SECTION START -->

        <!-- LATEST PROJECT SECTION END -->

        <!-- MY BLOG SECTION START -->

        <!-- MY BLOG SECTION END -->

        <!-- CONTACT US SECTION END  -->
        <div class="section-full overlay-wraper bg-parallax" data-stellar-background-ratio="0.1" style="background-image:url({{asset('/site/images/background/bg4.jpg')}});">
            <div class="overlay-main bg-black opacity-08"></div>
            <div class="container">

                <div class="row conntact-home">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="contact-home1-left">
                            <div class="section-content p-lr30 p-tb30 site-bg-primary">
                                <div class="call-back-form p-b30 p-t15" style="z-index:1; position:relative">
                                    <h2 class="text-white m-t0"  style="font-family: 'Crete Round', serif;"><i>Оставьте заявку</i></h2>
                                    <form  class="cons-contact-form2 form-transparent" method="post" action="form-handler2.php">
                                        <div class="form-group">
                                            <input name="username" type="text" required class="form-control" placeholder="Имя">
                                        </div>
                                        <div class="form-group">
                                            <input name="email" type="text" class="form-control" required placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input name="phone" type="text" class="form-control" required placeholder="Телефон">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="4" placeholder="Написать"></textarea>
                                        </div>
                                        <button type="submit" class="site-button-secondry radius-sm">
                                            <span class="font-weight-700 inline-block text-uppercase p-lr15">Написать</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12" >
                        <div class="p-t60 p-b40">
                            <div class="section-content  contact-home1-right">

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-100pc">
                                        <div class="wt-icon-box-wraper center  p-lr30 p-tb60 bg-transparent">
                                            <div class="icon-md m-b15">
                                                <span class="icon-cell  site-text-primary"><i class="fa fa-map"></i></span>
                                            </div>
                                            <div class="icon-content text-white">
                                                <h4 class="wt-tilte m-b5">Наш адрес </h4>
                                                <p> Шота Руставели дом 39, AL </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-100pc">
                                        <div class="wt-icon-box-wraper center  p-lr30 p-tb60 bg-transparent">
                                            <div class="icon-md  m-b15">
                                                <span class="icon-cell  site-text-primary"><i class="fa fa-credit-card"></i></span>
                                            </div>
                                            <div class="icon-content text-white">
                                                <h4 class="wt-tilte m-b5">Email </h4>
                                                <p>1sunsayseka@mail.ru</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-100pc">
                                        <div class="wt-icon-box-wraper center  p-lr30 p-tb60 bg-transparent">
                                            <div class="icon-md  m-b15">
                                                <span class="icon-cell  site-text-primary"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <div class="icon-content text-white">
                                                <h4 class="wt-tilte m-b5">Телефон</h4>
                                                <p>+7 701 223 9777</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xs-100pc">
                                        <div class="wt-icon-box-wraper center  p-lr30 p-tb60 bg-transparent">
                                            <div class="icon-md  m-b15">
                                                <span class="icon-cell  site-text-primary"><i class="fa fa-skype"></i></span>
                                            </div>
                                            <div class="icon-content text-white">
                                                <h4 class="wt-tilte m-b5">Skype id</h4>
                                                <p>smg</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- CONTACT US OFFER SECTION END  -->

        <!-- TESTIMONIAL SECTION START -->

        <!-- TESTIMONIAL SECTION END -->

        <!-- OUR CLIENT SLIDER START -->
        <div class="section-full bg-gray">
            <div class="container">

                <!-- IMAGE CAROUSEL START -->
                <div class="section-content">
                    <div class="owl-carousel client-logo-carousel owl-btn-vertical-center">

                        <!-- COLUMNS 1 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo1.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo2.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo3.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo4.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo5.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo6.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo1.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo2.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 9 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo3.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 10 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo4.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 11 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo5.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 12 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('/site/images/client-logo/logo6.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- IMAGE CAROUSEL START -->
            </div>

        </div>
        <!-- OUR CLIENT SLIDER END -->

    </div>
    <!-- CONTENT END -->
@endsection
