<!DOCTYPE html>
<html>

<head>
    <title>HWG Web Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />

    <link rel="stylesheet" href="<?=site_url("/css/style.css")?>" />
    <link rel="stylesheet" href="<?=site_url("/css/lightgallery.min.css")?>">

    <meta name="title" content="">
    <meta name="description" content="हिन्दी राइटर्स गिल्ड ">
    <meta property="og:description" content="हिन्दी राइटर्स गिल्ड ">
    <meta property="og:title" content="">

    <meta property="og:url" content="<?=site_url("/home/starenergy")?>" />
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?=site_url("/img/HWG-LOGO-21.png") ?>">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="720">
    <style>
        .slick-slide {
            margin: 0px 20px;
            cursor: pointer;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }
    </style>
    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function () {

            // 	if (typeof(Storage) !== "undefined") {
            //        if (sessionStorage.showIntro) {
            //       sessionStorage.showIntro = Number(sessionStorage.showIntro)+1;
            //     } else {
            //       sessionStorage.showIntro = 1;
            // 	  $("#myModal").modal('show');
            //     }
            //   }
            // jQuery code

            //////////////////////// Prevent closing from click inside dropdown
            $(document).on('click', '.dropdown-menu', function (e) {
                e.stopPropagation();
            });

            $('[data-toggle="popover-hover"]').popover({
                html: true,
                trigger: 'hover',
                placement: 'right',
                content: function () {
                    return '<img src="' + $(this).data('img') + '" class="img-fluid w-50" />';
                }
            });

        }); // jquery end
    </script>
</head>

<body>

    <!-- Top header-->
    <?= $this->include("components/header") ?>

    <!--Navigation menu-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav-bar">
        <a href="https://www.starenergy-solutions.com/" target="_blank"><img
                src="<?=site_url("/img/starenergy/starenergy-logo-web.png") ?>" class="img-fluid bg-white" alt="Brand"
                id="brand"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
            aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link mega-menu-main-heading" href="/home/main">मुख्य पृष्ठ
                    </a> </li>
                <li class="nav-item active"> <a class="nav-link mega-menu-main-heading"
                        href="/home/detailPage/sanstha-ka-parichai">संस्था का परिचय </a> </li>
                <li class="nav-item active"> <a class="nav-link mega-menu-main-heading"
                        href="/home/detailPage/Udghatan-samroh">उद्‌घाटन समारोह </a> </li>

                <li class="nav-item dropdown has-megamenu"> <a
                        class="nav-link dropdown-toggle mega-menu-main-heading text-white"
                        href="/home/detail/gatividhiya" data-toggle="dropdown"> गतिविधियाँ </a>
                    <div class="dropdown-menu megamenu nav-bg-img" role="menu">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="col-megamenu">

                                    <h6 class="title"><a href="<?=site_url("/home/details/workshop ")?>"
                                            class="mega-menu-heading">कार्यशालाएँ</a> </h6>

                                    <ul class="list-unstyled">
                                        <li><a href="<?=site_url("/home/detailPage/lekh")?>" target="_blank"
                                                class="mega-menu-text">लेख कैसे लिखें</a></li>
                                        <li><a href="<?=site_url("/home/detailPage/jal")?>" target="_blank"
                                                class="mega-menu-text">जल है तो कल है </a></li>
                                        <li><a href="<?=site_url("/home/detailPage/kahani-lekhan")?>" target="_blank"
                                                class="mega-menu-text">कहानी लेखन कला</a></li>
                                        <li><a href="<?=site_url("/home/detailPage/natak")?>" target="_blank"
                                                class="mega-menu-text">नाटक का सफल प्रस्तुतिकरण और अभिनय कैसे हो। </a>
                                        </li>
                                        <li><a href="<?=site_url("/home/detailPage/samiksha")?>" target="_blank"
                                                class="mega-menu-text">समीक्षा पर चर्चा</a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/facebookLive")?>"
                                            class="mega-menu-heading">फेसबुक लाइव</a> </h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/facebookLive?id=vid-10" class="mega-menu-text">"रजनीगंधा
                                                "मन्नू भंडारी जी के ९०वें जन्मदिन के उत्सव पर आधारित कार्यक्रम</a></li>
                                        <li><a href="/home/facebookLive?id=vid-1" class="mega-menu-text">डॉ. रमेश
                                                पोखरियाल 'निशंक' को साहित्य गौरव सम्मान कैनेडा 2021</a></li>
                                        <li><a href="/home/facebookLive?id=vid-2" class="mega-menu-text">हिन्दी राइटर्स
                                                गिल्ड ने मनाया ' विश्व हिन्दी दिवस' फीजी और भारत के साथ</a></li>
                                        <li><a href="/home/facebookLive?id=vid-3" class="mega-menu-text">विश्वारंग 2020
                                                कैनेडा -उद्घाटन</a></li>
                                        <li><a href="/home/facebookLive?id=vid-4" class="mega-menu-text">विश्वारंग 2020
                                                कैनेडा -विज्ञान से ज्ञान तक </a></li>
                                        <li><a href="/home/facebookLive?id=vid-5" class="mega-menu-text">विश्वारंग 2020
                                                कैनेडा -भारतवंशी प्रवासी लेखक</a></li>
                                        <li><a href="/home/facebookLive?id=vid-6" class="mega-menu-text">विश्वारंग 2020
                                                कैनेडा -हमारी नींव आधार शिलाएँ</a></li>
                                        <li><a href="/home/facebookLive?id=vid-7" class="mega-menu-text">विश्वारंग 2020
                                                कैनेडा -जीवन का प्रतिबिंब हैं नाटक </a></li>
                                        <li><a href="/home/facebookLive?id=vid-8" class="mega-menu-text">विश्वारंग 2020
                                                कैनेडा -आपका सम्मान- हमारा मान देखन में छोटी लगें और भी विधाएँ हैं कहानी
                                                के सिवा- कथेतर साहित्य </a></li>
                                        <li><a href="/home/facebookLive?id=vid-9" class="mega-menu-text">विश्वारंग 2020
                                                कैनेडा -तेरह रंगों में रंगी, कविता की एक शाम छोटे पर्दे से बड़ा संदेश-
                                                लघु फ़िल्म कैनेडा -धन्यवाद </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/sehbhagita"
                                            class="mega-menu-heading">सहभागिता</a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/vishwarang-2020-12"
                                                class="mega-menu-text">विश्वरंग 2020-7 नवम्बर </a></li>
                                        <li><a href="/home/detailPage/vishwarang-2020-13"
                                                class="mega-menu-text">विश्वरंग 2020-8 नवम्बर </a></li>
                                        <li><a href="/home/detailPage/vishwarang-2020-14" class="mega-menu-text">विश्व
                                                हिन्दी शिक्षण विमर्श </a></li>
                                    </ul>
                                    <h6 class="title mt-3"><a href="/home/details/sanghoshtiya"
                                            class="mega-menu-heading">संगोष्ठियाँ</a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/sanskriti" class="mega-menu-text">संस्कृति और
                                                सभ्यता बदलते हुए परिपेक्ष्य </a></li>
                                    </ul>
                                    <h6 class="title mt-3"><a href="/home/details/masik-ghoshtiya"
                                            class="mega-menu-heading">मासिक गोष्ठियाँ </a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/him-ki-chadar-2019" class="mega-menu-text">हिम की
                                                चादर पे खेले बसंत राज-2019 </a></li>
                                        <li><a href="/home/detailPage/ram" class="mega-menu-text">राम तुम्हारा वृत्त
                                                स्वयं ही काव्य है-2019 </a></li>
                                        <li><a href="/home/detailPage/sharad-fest-2019" class="mega-menu-text">शरद्‌
                                                काव्योत्सव-2019 </a></li>
                                        <li><a href="/home/detailPage/kesariya-2019" class="mega-menu-text">केसरिया
                                                फागुन-2019 </a></li>
                                        <li><a href="/home/detailPage/tiranga-2018" class="mega-menu-text">तिरंगे के
                                                सम्मान में तीन विधाएँ-2018 </a></li>
                                        <li><a href="/home/detailPage/navvarsh-2016" class="mega-menu-text">नववर्ष
                                                गोष्ठी-2016 </a></li>
                                        <li><a href="/home/detailPage/dinkar-2016" class="mega-menu-text">दिनकर साहित्य
                                                पर चर्चा-2016 </a></li>
                                        <li><a href="/home/detailPage/veena-2014" class="mega-menu-text">वीना गोखले का
                                                कहानी-पाठ-2014 </a></li>
                                        <li><a href="/home/detailPage/vishesh-2014" class="mega-menu-text">विशेष
                                                रिपोर्ताज और काव्य पाठ-2014 </a></li>
                                        <li><a href="/home/detailPage/august-2009" class="mega-menu-text">15 अगस्त
                                                कवि-गोष्ठी-2009 </a></li>
                                        <li><a href="/home/detailPage/natak-2009" class="mega-menu-text"> नाटक वाचन और
                                                गोष्ठी-2009 </a></li>
                                        <li><a href="/home/detailPage/kavi-2008`" class="mega-menu-text">कवि-गोष्ठी-2008
                                            </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/kavi-sammelan"
                                            class="mega-menu-heading">कवि- सम्मलेन</a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/sharad-ritu" class="mega-menu-text">शरद ऋतु
                                                काव्योत्सव </a></li>
                                        <li><a href="/home/detailPage/deep-jaley" class="mega-menu-text">दीप जले मन-आँगन
                                            </a></li>
                                        <li><a href="/home/detailPage/kavi-sammelan-1" class="mega-menu-text">विभिन्न
                                                भारतीय भाषाओँ का कवि सम्मलेन </a></li>
                                        <li><a href="/home/detailPage/kavi-sammelan-2" class="mega-menu-text">हास्य कवि
                                                सम्मेलन </a></li>
                                    </ul>
                                    <h6 class="title mt-3"><a href="/home/details/picnic "
                                            class="mega-menu-heading">पिकनिक </a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/picnic-2017" class="mega-menu-text">पिकनिक
                                                2017</a></li>
                                        <li><a href="/home/detailPage/picnic-2015" class="mega-menu-text">पिकनिक 2015
                                            </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/pustak-vimochan"
                                            class="mega-menu-heading">पुस्तक विमोचन एवं चर्चा</a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/indiveer" class="mega-menu-text">इंदीवर </a></li>
                                        <li><a href="/home/detailPage/ibarat" class="mega-menu-text">हवा में लिखी इबारत
                                            </a></li>
                                        <li><a href="/home/detailPage/vaadey" class="mega-menu-text">वादों की परछाइयाँ
                                            </a></li>
                                        <li><a href="/home/detailPage/khumari" class="mega-menu-text">ख़ुमारी </a></li>
                                        <li><a href="/home/detailPage/bhavnaye" class="mega-menu-text">भावनाओं के भवँर
                                                से </a></li>
                                        <li><a href="/home/detailPage/safar" class="mega-menu-text">सफ़र </a></li>
                                        <li><a href="/home/detailPage/ambar" class="mega-menu-text">अम्बर बाँचे पाँती
                                            </a></li>
                                        <li><a href="/home/detailPage/tumko" class="mega-menu-text">क्या तुमको भी ऐसा
                                                लगा </a></li>
                                        <li><a href="/home/detailPage/jazbaat" class="mega-menu-text">जज़्बात </a></li>
                                        <li><a href="/home/detailPage/kahi-ankahi" class="mega-menu-text">कही-अनकही </a>
                                        </li>
                                        <li><a href="/home/detailPage/amrat" class="mega-menu-text">अमृत </a></li>
                                        <li><a href="/home/detailPage/katil" class="mega-menu-text">क़ातिल का गीत </a>
                                        </li>
                                        <li><a href="/home/detailPage/rawab" class="mega-menu-text">रवाब </a></li>
                                        <li><a href="/home/detailPage/aao-bacho" class="mega-menu-text">आओ बच्चों हम तुम
                                                गाएँ-निर्मल भाव--उकाल उंदार </a></li>
                                        <li><a href="/home/detailPage/subah-ka-suraj" class="mega-menu-text">सुबह का
                                                सूरज अब मेरा नहीं है </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/hamari-prastutiya"
                                            class="mega-menu-heading">हमारी प्रस्तुतियाँ और नाटक</a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/dusri-duniya" class="mega-menu-text">दूसरी दुनिया
                                            </a></li>
                                        <li><a href="/home/detailPage/shaddi-ka-interview" class="mega-menu-text">शादी
                                                का इंटरव्यू </a></li>
                                        <li><a href="/home/detailPage/udhar-ka-sukh" class="mega-menu-text">उधार का सुख
                                            </a></li>
                                        <li><a href="/home/detailPage/cheef-ki-dawat" class="mega-menu-text">ची़फ़ की
                                                दावत </a></li>
                                        <li><a href="/home/detailPage/ashwthama" class="mega-menu-text">अश्वथामा </a>
                                        </li>
                                        <li><a href="/home/detailPage/aadhe-adhure" class="mega-menu-text">आधे-अधूरे
                                            </a></li>
                                        <li><a href="/home/detailPage/mitro" class="mega-menu-text">मित्रो मरजानी </a>
                                        </li>
                                        <li><a href="/home/detailPage/surdas" class="mega-menu-text">सूरदास </a></li>
                                        <li><a href="/home/detailPage/janabai" class="mega-menu-text">जनाबाई</a></li>
                                        <li><a href="/home/detailPage/rashmirath" class="mega-menu-text">रश्मिरथि </a>
                                        </li>
                                        <li><a href="/home/detailPage/apni-apni-pasand" class="mega-menu-text">अपनी-अपनी
                                                पसंद </a></li>
                                        <li><a href="/home/detailPage/andha-yug" class="mega-menu-text">अंधा युग </a>
                                        </li>
                                    </ul>
                                    <h6 class="title"><a href="/home/detailpage/bhor" class="mega-menu-heading">भोर - द
                                            डॉन विदइन" का लोकार्पण</a></h6>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- dropdown-mega-menu.// -->
                </li>
                <li class="nav-item dropdown has-megamenu"> <a
                        class="nav-link dropdown-toggle mega-menu-main-heading text-white"
                        href="/home/detail/uplabhdiya" data-toggle="dropdown"> उपलब्धियाँ </a>
                    <div class="dropdown-menu megamenu nav-bg-img" role="menu">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/e-prakashan "
                                            class="mega-menu-heading">ई-संकलन प्रकाशन </a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/sapno-ka-akash" class="mega-menu-text">सपनो का
                                                आकाश और सम्भावनाओ की धरती का विमोचन</a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/international-sammelan"
                                            class="mega-menu-heading">अंतरराष्ट्रीय सम्मलेन में भागीदारी</a> </h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/international-sammelan-2020"
                                                class="mega-menu-text">अंतरराष्ट्रीय</br>हिन्दी
                                                सम्मलेन</br>भारत</br>जनवरी 2020</a></li>
                                        <li><a href="/home/detailPage/international-sammelan-2015"
                                                class="mega-menu-text">अंतरराष्ट्रीय</br>हिन्दी
                                                सम्मलेन</br>अमेरिका</br>2015 </a></li>
                                        <li><a href="/home/detailPage/international-sammelan-2014"
                                                class="mega-menu-text">अंतरराष्ट्रीय</br>हिन्दी सम्मेलन</br>2014</a>
                                        </li>
                                        <li><a href="/home/detailPage/pravasi-hindi"
                                                class="mega-menu-text">प्रवासी</br>हिन्दी लेखक</br>मंच</a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/detailPage/conusell-fest"
                                            class="mega-menu-heading"> काउंसलावास के साथ कार्यक्रम </a></h6>
                                    <h6 class="title mt-3"><a href="/home/details/sanghoshtiya"
                                            class="mega-menu-heading">संगोष्ठियाँ</a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/sanskriti" class="mega-menu-text">संस्कृति और
                                                सभ्यता बदलते हुए परिपेक्ष्य </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/shetriya-bhagidari"
                                            class="mega-menu-heading">क्षेत्रीय भागीदारी </a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/vishwa-hindi" class="mega-menu-text">'विश्व हिन्दी
                                                दिवस ओटवा </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/detailPage/sammanit-members"
                                            class="mega-menu-heading">हमारे सम्मानित सदस्य </a></h6>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/detailPage/manch" class="mega-menu-heading">अन्य
                                            विशिष्ट मंचों पर </a></h6>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- dropdown-mega-menu.// -->
                </li>
                <li class="nav-item dropdown has-megamenu"> <a
                        class="nav-link dropdown-toggle text-white mega-menu-main-heading" href="/home/detail/festival"
                        data-toggle="dropdown"> उत्सव </a>
                    <div class="dropdown-menu megamenu nav-bg-img" role="menu">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/annual-festival"
                                            class="mega-menu-heading">वार्षिक महोत्सव </a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/annual-festival-2019"
                                                class="mega-menu-text">वार्षिक महोत्सव 2019 </a></li>
                                        <li><a href="/home/detailPage/annual-festival-2018"
                                                class="mega-menu-text">वार्षिक महोत्सव 2018 </a></li>
                                        <li><a href="/home/detailPage/annual-festival-2017"
                                                class="mega-menu-text">वार्षिक महोत्सव 2017 </a></li>
                                        <li><a href="/home/detailPage/annual-festival-2016"
                                                class="mega-menu-text">वार्षिक महोत्सव 2016 </a></li>
                                        <li><a href="/home/detailPage/annual-festival-2015"
                                                class="mega-menu-text">वार्षिक महोत्सव 2015 </a></li>
                                        <li><a href="/home/detailPage/annual-festival-2014"
                                                class="mega-menu-text">वार्षिक महोत्सव 2014 </a></li>
                                        <li><a href="/home/detailPage/annual-festival-2013"
                                                class="mega-menu-text">वार्षिक महोत्सव 2013 </a></li>
                                        <li><a href="/home/detailPage/annual-festival-2012"
                                                class="mega-menu-text">वार्षिक महोत्सव 2012 </a></li>
                                        <li><a href="/home/detailPage/annual-festival-2011"
                                                class="mega-menu-text">वार्षिक महोत्सव 2011 </a></li>
                                        <li><a href="/home/detailPage/annual-festival-2010"
                                                class="mega-menu-text">वार्षिक महोत्सव 2010 </a></li>
                                        <li><a href="/home/detailPage/annual-festival-2009"
                                                class="mega-menu-text">वार्षिक महोत्सव 2009 </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/holi-festival"
                                            class="mega-menu-heading">होली महोत्सव</a> </h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/holi-festival-2021" class="mega-menu-text">होली
                                                महोत्सव 2021</a></li>
                                        <li><a href="/home/detailPage/holi-festival-2019" class="mega-menu-text">होली
                                                महोत्सव 2019</a></li>
                                        <!-- <li><a href="/home/detailPage/holi-festival-2018" class="mega-menu-text">होली महोत्सव 2018</a></li>
									<li><a href="/home/detailPage/holi-festival-2017" class="mega-menu-text">होली महोत्सव 2017</a></li> -->
                                        <li><a href="/home/detailPage/holi-festival-2016" class="mega-menu-text">होली
                                                महोत्सव 2016</a></li>
                                        <li><a href="/home/detailPage/holi-festival-2015" class="mega-menu-text">होली
                                                महोत्सव 2015</a></li>
                                        <li><a href="/home/detailPage/holi-festival-2014" class="mega-menu-text">होली
                                                महोत्सव 2014</a></li>
                                        <li><a href="/home/detailPage/holi-festival-2013" class="mega-menu-text">होली
                                                महोत्सव 2013</a></li>
                                        <li><a href="/home/detailPage/holi-festival-2012" class="mega-menu-text">होली
                                                महोत्सव 2012</a></li>
                                        <li><a href="/home/detailPage/holi-festival-2011" class="mega-menu-text">होली
                                                महोत्सव 2011</a></li>
                                        <li><a href="/home/detailPage/holi-festival-2010" class="mega-menu-text">होली
                                                महोत्सव 2010</a></li>
                                        <li><a href="/home/detailPage/holi-festival-2009" class="mega-menu-text">होली
                                                महोत्सव 2009</a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/abhar-divas" class="mega-menu-heading">आभार
                                            दिवस</a> </h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/abhar-divas-2017" class="mega-menu-text">आभार दिवस
                                                2017</a></li>
                                        <li><a href="/home/detailPage/abhar-divas-2012" class="mega-menu-text">आभार दिवस
                                                2012</a></li>

                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="/home/details/hindi-divas"
                                            class="mega-menu-heading">हिन्दी दिवस </a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="/home/detailPage/hindi-divas-2019-2" class="mega-menu-text">हिन्दी
                                                दिवस-जनवरी- 2019 </a></li>
                                        <li><a href="/home/detailPage/hindi-divas-2019" class="mega-menu-text">हिन्दी
                                                दिवस-सितम्बर- 2019 </a></li>
                                        <li><a href="/home/detailPage/hindi-divas-2018" class="mega-menu-text">हिन्दी
                                                दिवस-सितम्बर- 2018 </a></li>
                                        <li><a href="/home/detailPage/hindi-divas-2015" class="mega-menu-text">हिन्दी
                                                दिवस-सितम्बर- 2015 </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- dropdown-mega-menu.// -->
                </li>
                <li class="nav-item dropdown has-megamenu"> <a
                        class="nav-link dropdown-toggle text-white mega-menu-main-heading" href="/home/members"
                        data-toggle="dropdown">हमारे सदस्य </a>
                    <div class="dropdown-menu megamenu nav-bg-img" role="menu">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/members?id=member-1") ?>"
                                            class="mega-menu-heading">संस्थापक निदेशक</a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="<?=site_url("/home/introPage/2")?>" class="mega-menu-text">सुमन घई
                                            </a></li>
                                        <li><a href="<?=site_url("/home/introPage/50")?>" class="mega-menu-text">विजय
                                                विक्रान्त </a></li>
                                        <li><a href="<?=site_url("/home/introPage/1")?>" class="mega-menu-text">शैलजा
                                                सक्सेना </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/members?id=member-2") ?>"
                                            class="mega-menu-heading">निदेशक मंडल </a> </h6>
                                    <ul class="list-unstyled" class="mega-menu-text">
                                        <li><a href="<?=site_url("/home/introPage/3")?>" class="mega-menu-text">कृष्णा
                                                वर्मा कृष्णा </a></li>
                                        <li><a href="<?=site_url("/home/introPage/4")?>" class="mega-menu-text">पूनम
                                                चंद्रा 'मनु'</a></li>
                                        <li><a href="<?=site_url("/home/introPage/5")?>" class="mega-menu-text">आशा
                                                बर्मन </a></li>
                                        <li><a href="<?=site_url("/home/introPage/6")?>" class="mega-menu-text">लता
                                                पाण्डेय </a></li>
                                        <li><a href="<?=site_url("/home/introPage/7")?>" class="mega-menu-text">विद्या
                                                भूषण धर </a></li>
                                        <li><a href="<?=site_url("/home/introPage/8")?>" class="mega-menu-text">संदीप
                                                कुमार </a></li>
                                        <li><a href="<?=site_url("/home/introPage/9")?>" class="mega-menu-text">डॉ. एन
                                                के ग्रोवर </a></li>
                                        <li><a href="<?=site_url("/home/introPage/10")?>" class="mega-menu-text">दीपक
                                                राज़दान </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/members?id=member-3") ?>"
                                            class="mega-menu-heading">मानद सदस्य</a> </h6>
                                    <ul class="list-unstyled">
                                        <li><a href="<?=site_url("/home/introPage/11")?>" class="mega-menu-text">डॉ॰
                                                जगमोहन हूमर</a></li>
                                        <li><a href="<?=site_url("/home/introPage/12")?>"
                                                class="mega-menu-text">तेजेन्द्र शर्मा </a></li>
                                        <li><a href="<?=site_url("/home/introPage/13")?>" class="mega-menu-text">आचार्य
                                                श्रीनाथ प्रसाद द्विवेदी </a></li>
                                        <li><a href="<?=site_url("/home/introPage/14")?>"
                                                class="mega-menu-text">रामेश्वर काम्बोज 'हिमांशु' </a></li>
                                        <li><a href="<?=site_url("/home/introPage/15")?>" class="mega-menu-text">डॉ॰
                                                रत्नाकर नराले </a></li>
                                        <li><a href="<?=site_url("/home/introPage/16")?>" class="mega-menu-text">हरि
                                                शंकर आदेश जी </a></li>
                                        <li><a href="<?=site_url("/home/introPage/17")?>" class="mega-menu-text">डॉ.
                                                शिवनंदन सिंह यादव जी </a></li>
                                        <li><a href="<?=site_url("/home/introPage/18")?>" class="mega-menu-text">डॉ॰
                                                भारतेन्दु श्रीवास्तव </a></li>
                                        <li><a href="<?=site_url("/home/introPage/19")?>" class="mega-menu-text"> श्याम
                                                त्रिपाठी </a></li>
                                        <li><a href="<?=site_url("/home/introPage/20")?>" class="mega-menu-text">अरुणा
                                                भटनागर </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/members?id=member-4") ?>"
                                            class="mega-menu-heading">अन्य माननीय सदस्य </a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="<?=site_url("/home/introPage/22")?>" class="mega-menu-text">मानोशी
                                                चटर्जी </a></li>
                                        <li><a href="<?=site_url("/home/introPage/23")?>" class="mega-menu-text">अम्बिका
                                                शर्मा </a></li>
                                        <li><a href="<?=site_url("/home/introPage/24")?>" class="mega-menu-text">रोमिला
                                                वर्मा </a></li>
                                        <li><a href="<?=site_url("/home/introPage/25")?>" class="mega-menu-text">इंदिरा
                                                वर्मा </a></li>
                                        <li><a href="<?=site_url("/home/introPage/26")?>"
                                                class="mega-menu-text">भुवनेश्वरी पाण्डेय </a></li>
                                        <li><a href="<?=site_url("/home/introPage/27")?>" class="mega-menu-text">सविता
                                                अग्रवाल </a></li>
                                        <li><a href="<?=site_url("/home/introPage/28")?>"
                                                class="mega-menu-text">डॉ.कनिका वर्मा </a></li>
                                        <li><a href="<?=site_url("/home/introPage/29")?>" class="mega-menu-text">अचला
                                                दीप्ति कुमार</a></li>
                                        <li><a href="<?=site_url("/home/introPage/30")?>" class="mega-menu-text">स्नेह
                                                सिंघवी स्नेह </a></li>
                                        <li><a href="<?=site_url("/home/introPage/32")?>" class="mega-menu-text">कुलदीप
                                                अहलुवालिआ </a></li>
                                        <li><a href="<?=site_url("/home/introPage33")?>" class="mega-menu-text">सरोजिनी
                                                जौहर </a></li>
                                        <li><a href="<?=site_url("/home/introPage/34")?>" class="mega-menu-text">प्रमिला
                                                भार्गव </a></li>
                                        <li><a href="<?=site_url("/home/introPage/35")?>" class="mega-menu-text">कैलाश
                                                महंत </a></li>
                                        <li><a href="<?=site_url("/home/introPage/36")?>" class="mega-menu-text">रेणुका
                                                शर्मा </a></li>
                                        <li><a href="<?=site_url("/home/introPage/37")?>" class="mega-menu-text">प्रीति
                                                अग्रवाल </a></li>
                                        <li><a href="<?=site_url("/home/introPage/38")?>" class="mega-menu-text">भगवत
                                                शरण श्रीवास्तव ‘शरण’ </a></li>
                                        <li><a href="<?=site_url("/home/introPage/39")?>" class="mega-menu-text">समीर
                                                लाल </a></li>
                                        <li><a href="<?=site_url("/home/introPage/40")?>"
                                                class="mega-menu-text">किशोरकान्त द्विवेदी </a></li>
                                        <li><a href="<?=site_url("/home/introPage/41")?>" class="mega-menu-text">पंकज
                                                शर्मा </a></li>
                                        <li><a href="<?=site_url("/home/introPage/42")?>" class="mega-menu-text">योगेश
                                                ममगाईं </a></li>
                                        <li><a href="<?=site_url("/home/introPage/43")?>" class="mega-menu-text">अखिल
                                                भंडारी </a></li>
                                        <li><a href="<?=site_url("/home/introPage/44")?>" class="mega-menu-text">डॉ.
                                                जगमोहन संघा </a></li>
                                        <li><a href="<?=site_url("/home/introPage/45")?>" class="mega-menu-text">संदीप
                                                कुमार त्यागी </a></li>
                                        <li><a href="<?=site_url("/home/introPage/46")?>" class="mega-menu-text">राज
                                                महेश्वरी </a></li>
                                        <li><a href="<?=site_url("/home/introPage/47")?>" class="mega-menu-text">निर्मल
                                                सिद्धू </a></li>
                                        <li><a href="<?=site_url("/home/introPage/48")?>" class="mega-menu-text">जसबीर
                                                कालरवि </a></li>
                                        <li><a href="<?=site_url("/home/introPage/49")?>" class="mega-menu-text">प्राण
                                                किरतानी </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- dropdown-mega-menu.// -->
                </li>
                <li class="nav-item dropdown has-megamenu"> <a
                        class="nav-link dropdown-toggle text-white mega-menu-main-heading"
                        href="<?=site_url("/home/detail/prize-respect")?>" data-toggle="dropdown">पुरस्कार/सम्मान </a>
                    <div class="dropdown-menu megamenu nav-bg-img" role="menu">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/details/prize-respect-1")?>"
                                            class="mega-menu-heading">साहित्य गौरव सम्मान </a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="<?=site_url("/home/detailPage/prize-respect-1-1")?>"
                                                class="mega-menu-text">भारत के शिक्षा मंत्री, यशस्वी साहित्यकार डॉ. रमेश
                                                पोखारियाल ’निशंक’ </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/details/prize-respect-2")?>"
                                            class="mega-menu-heading">सरस्वती सम्मान </a> </h6>
                                    <ul class="list-unstyled">
                                        <li><a href="<?=site_url("/home/details/prize-respect-2-1")?>"
                                                class="mega-menu-text">अरुणा भटनागर </a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-2-2")?>"
                                                class="mega-menu-text">श्याम त्रिपाठी</a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-2-4")?>"
                                                class="mega-menu-text">डॉ॰ भारतेन्दु श्रीवास्तव </a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-2-5")?>"
                                                class="mega-menu-text">भुवनेश्वरी पाण्डे </a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-2-6")?>"
                                                class="mega-menu-text">आचार्य श्रीनाथ प्रसाद द्विवेदी </a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-2-3")?>"
                                                class="mega-menu-text">डॉ॰ रत्नाकर नराले </a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-2-7")?>"
                                                class="mega-menu-text">सुमन कुमार घई </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/details/prize-respect-3")?>"
                                            class="mega-menu-heading">साहित्य सृजन सम्मान</a> </h6>
                                    <ul class="list-unstyled">
                                        <li><a href="<?=site_url("/home/details/prize-respect-3-1")?>"
                                                class="mega-menu-text">डॉ॰ शिवनन्दन सिंह यादव</a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-3-2")?>"
                                                class="mega-menu-text">प्रो॰ हरि शंकर आदेश </a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-3-3")?>"
                                                class="mega-menu-text">श्री रामेश्वर काम्बोज हिमांशु </a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-3-4")?>"
                                                class="mega-menu-text">डॉ॰ जगमोहन हूमर</a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/details/prize-respect-4")?>"
                                            class="mega-menu-heading">स्वैच्छिक सेवा पुरस्कार </a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="<?=site_url("/home/detailpage/prize-respect-4-1")?>"
                                                class="mega-menu-text">पूनम चन्द्रा 'मनु' </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-2">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/details/prize-respect-5")?>"
                                            class="mega-menu-heading">स्वागत सम्मान </a></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="<?=site_url("/home/details/prize-respect-5-1")?>"
                                                class="mega-menu-text">तेजेन्द्र शर्मा </a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-5-2")?>"
                                                class="mega-menu-text">रामेश्वर कम्बोज 'हिमांशु' </a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-5-3")?>"
                                                class="mega-menu-text">रोहिणी अग्रवाल </a></li>
                                        <li><a href="<?=site_url("/home/details/prize-respect-5-4")?>"
                                                class="mega-menu-text"> डॉ.शंकरलाल पुरोहित </a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- dropdown-mega-menu.// -->
                </li>
                <li class="nav-item dropdown has-megamenu"> <a
                        class="nav-link dropdown-toggle text-white mega-menu-main-heading" href="/home/detail/dirgha"
                        data-toggle="dropdown">दीर्घा </a>
                    <div class="dropdown-menu megamenu nav-bg-img" role="menu">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/gallery")?>"
                                            class="mega-menu-heading">फोटो गैलरी </a></h6>
                                    <!--<ul class="list-unstyled">
									<li><a href="<?=site_url("/home/gallery")?>" class="mega-menu-text">कवि- सम्मलेन </a></li>
									<li><a href="<?=site_url("/home/gallery")?>" class="mega-menu-text">वार्षिक महोत्सव</a></li>
									<li><a href="<?=site_url("/home/gallery")?>" class="mega-menu-text">होली महोत्सव </a></li>
									<li><a href="<?=site_url("/home/gallery")?>" class="mega-menu-text">नाटक </a></li>
									<li><a href="<?=site_url("/home/gallery")?>" class="mega-menu-text">हिन्दी दिवस </a></li>
									<li><a href="<?=site_url("/home/gallery")?>" class="mega-menu-text">पुरस्कार/सम्मान </a></li>
								</ul>-->
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/videogallery")?>"
                                            class="mega-menu-heading">वीडियो गैलरी </a> </h6>
                                    <!--<ul class="list-unstyled">
									<li><a href="<?=site_url("/home/gallery")?>" class="mega-menu-text">फेसबुक लाइव </a></li>
									<li><a href="<?=site_url("/home/gallery")?>" class="mega-menu-text">आधे अधूरे</a></li>
									<li><a href="<?=site_url("/home/gallery")?>" class="mega-menu-text">उधार का सुख </a></li>
									<li><a href="https://www.youtube.com/watch?v=TeX7BGrrCF0" class="mega-menu-text">अन्तर्राष्ट्रीय क्षेत्रीय हिन्दी सम्मेलन 26 अप्रैल 2014 </a></li>
									<li><a href="https://www.youtube.com/watch?v=NCWC-iUbmtI" class="mega-menu-text">अन्तर्राष्ट्रीय क्षेत्रीय हिन्दी सम्मेलन 27 अप्रैल 2014 (सुबह)</a></li>
									<li><a href="https://www.youtube.com/watch?v=v99mc4t2tMA" class="mega-menu-text">अन्तर्राष्ट्रीय क्षेत्रीय हिन्दी सम्मेलन 27 अप्रैल 2014  (दोपहर)  </a></li>
								</ul>-->
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/audiogallery")?>"
                                            class="mega-menu-heading">ऑडियो गैलरी </a> </h6>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-3">
                                <div class="col-megamenu">
                                    <h6 class="title"><a href="<?=site_url("/home/newspaper")?>"
                                            class="mega-menu-heading">समाचार पत्र में </br>हिन्दी राइटर्स गिल्ड</a>
                                    </h6>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- dropdown-mega-menu.// -->
                </li>
                <li class="nav-item"><a class="nav-link text-white mega-menu-main-heading"
                        href="<?=site_url("/home/ourbooks")?>">प्रकाशित पुस्तकें </a></li>
                <li class="nav-item"><a class="nav-link text-white mega-menu-main-heading"
                        href="<?=site_url("/home/invitations")?>">निमंत्रण-पत्र </a></li>
                <li class="nav-item"><a class="nav-link text-white mega-menu-main-heading"
                        href="<?=site_url("/home/wellWishes")?>">शुभकामनाएं सन्देश </a></li>

            </ul>
            <!--
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Dropdown </a>
				<ul class="dropdown-menu dropdown-menu-right">
				  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
				  <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
				</ul>
			</li>
		
		</ul>-->
        </div>
        <!-- navbar-collapse.// -->
    </nav>

    <!-- Intro Section-->
    <div class="container-fluid" id="star-energy-bg">
        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 intro-box-container">
                <!-- <div class="intro-box-text intro-box-width">

					<p class="text-center wow fadeInUp pb-5 mb-2 page-title" data-wow-delay="0.2s"><b>
							
						</b>
					</p>

				</div> -->
            </div>

        </div>
    </div>

    <!-- Detail page tile section-->
    <div class="container-fluid detail-tile-bg">
        <div class="row mb-2">

            <div class="d-none d-sm-block d-md-block d-lg-block col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
                <img src="<?=site_url("/img/31.png")?>" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 intro-box-container">
                <!-- <div class="row mt-2 p-0">
					<div class="col-sm-12 col-md-12 col-lg-12 intro-box-container ">
						<img src=""
							class="img-fluid mx-auto d-block wow fadeInDown detail-page-heading" data-wow-delay="0.3s"
							alt="intro-box" />
						<div class="intro-box-text ">
							<p class="text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s"><b>
									
							</p>
						</div>
					</div>
				</div> -->
                <div
                    class="d-flex flex-md-row flex-lg-row flex-sm-column justify-content-center flex-wrap mt-2 p-4 mb-5 ">

                    <div class="container">
                        <h2 class="text-dark"> <b>Our Services</b></h2>
                        <section class="customer-logos slider">
                            <div class="slide"><img src="<?=site_url("/img/starenergy/01.png")?>">
                                <h5 class="text-danger">Cold Storgae</h5>
                            </div>
                            <div class="slide"><img src="<?=site_url("/img/starenergy/02.png")?>">
                                <h5 class="text-danger">Food & Beverage Processing</h5>
                            </div>
                            <div class="slide"><img src="<?=site_url("/img/starenergy/03.png")?>">
                                <h5 class="text-danger">Large Industrial</h5>
                            </div>
                            <div class="slide"><img src="<?=site_url("/img/starenergy/04.png")?>">
                                <h5 class="text-danger">Egg Producers</h5>
                            </div>
                            <div class="slide"><img src="<?=site_url("/img/starenergy/02.png")?>">
                                <h5 class="text-danger">Food & Beverage Processing</h5>
                            </div>


                        </section>
                    </div>


                </div>


            </div>
            <div class="d-none d-sm-block d-md-block d-lg-block col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
                <img src="<?=site_url("/img/32.png")?>" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
        </div>
    </div>

    <!-- about us --->
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 pl-0">

            </div>
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 ">
                <div
                    class="d-flex flex-column flex-md-column flex-lg-column flex-sm-column flex-wrap justify-content-center star-enrgy-about-text text-center">
                    <h1 class="text-dark ">About Us</h1>
                    <p>
                        We are energy management consultants. We know how to help you manage your
                        consumption of energy – an increasingly expensive and volatile commodity
                        consumed in your business. We have the experience and expertise to be good
                        at this.
                    </p>
                    <p>
                        We bring together decades of experience in managing energy. We know how to
                        manage the risks of procuring energy for your business and harvest the
                        power of energy efficiency – the greatest untapped source of energy in
                        North America. We know how to lead you into the new world of alternative
                        energy.
                    </p>
                    <p>
                        We often find energy management opportunities even after other advisory
                        firms have finished their work. You can look to our track record as an
                        excellent testimonial to our core competencies.
                    </p>


                </div>

            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">

            </div>
        </div>
    </div>

    <div class="container-fluid bg-light">
        <div class="row">
            <div class="d-none d-sm-block d-md-block d-lg-block col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
                <img src="../img/36.png" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
                    alt="side-design" />
            </div>
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 intro-box-container">

                <div
                    class="d-flex flex-column flex-md-column flex-lg-row flex-sm-column flex-wrap justify-content-between testimonial-text">
                    <div class="star-energy-left-section">
                        <div class="star-energy-left-section-detail">
                            <img src="<?=site_url("/img/starenergy/05.jpg")?>" class="img-fluid w-50"
                                alt="img/starenergy/05.jpg" />
                            <p>This is where we typically see the biggest cost savings for you – changing how you use
                                energy. This takes on an urgent priority given the typical upward pressure on
                                electricity prices.</p>

                        </div>
                        <div class="star-energy-left-section-detail">
                            <img src="<?=site_url("/img/starenergy/06.jpg")?>" class="img-fluid w-50"
                                alt="img/starenergy/06.jpg" />
                            <p>You can improve your energy security and decrease your operational costs by using
                                alternative energy technologies, such as fuel cells co-gen systems, solar panels,
                                batteries etc</p>

                        </div>
                        <div class="star-energy-left-section-detail">
                            <img src="<?=site_url("/img/starenergy/07.jpg")?>" class="img-fluid w-50"
                                alt="img/starenergy/07.jpg" />
                            <p>Capturing energy consumption data is the key to your successful deployment of Sustainable
                                Energy Solutions. This forms the basis upon which everything else is driven.</p>

                        </div>
                    </div>
                    <div class="star-energy-right-section">
                        <img src="<?=site_url("/img/starenergy/side-img.jpg")?>" class="img-fluid"
                            alt="img/starenergy/05.jpg" />
                    </div>

                </div>

            </div>
            <div class="d-none d-sm-block d-md-block d-lg-block col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
                <img src="../img/35.png" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center m-2">
        <a href="https://www.starenergy-solutions.com/" target="_blank"
            class="bg-danger rounded-pill text-white more-info-btn">
            FOR MORE INFORMATION CLICK HERE
        </a>

    </div>
    <div class="d-flex justify-content-center m-2 ">

        <h1 class="text-dark" style="cursor:pointer;">
            Call (416) 800-774
        </h1>
    </div>




    <!-- footer section-->
    <?= $this->include("components/footer") ?>
    <?= $this->include("components/successMessage") ?>
    <script src="<?=site_url("/js/subscribe.js")?>"></script>

    <script src="<?=site_url("/js/wow.min.js")?>"></script>

    <script src="<?=site_url("js/lightgallery.min.js")?>"></script>

    <!-- lightgallery plugins -->

    <script>
        new WOW().init();
    </script>
    <script>
        lightGallery(document.getElementById('animated-thumbnials'), {
            thumbnail: true
        });
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'hi',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

        $(document).ready(function () {
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>


</body>

</html>