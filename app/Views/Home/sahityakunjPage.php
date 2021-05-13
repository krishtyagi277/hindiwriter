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

    <meta property="og:url" content="<?=site_url("/home/sahityakunj")?>" />
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
    <?= $this->include("components/navbar") ?>

    <!-- Intro Section-->
    <div class="container-fluid" id="sahtiya-kunj-energy-bg">
        
        <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-1" >
    </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4" >
               <a href="http://sahityakunj.net/" target="_blank"><img src="<?=site_url("/img/circle-cropped.png") ?>" style="margin:20px;" class="img-fluid w-50 " alt="Brand"
                id="brand"></a>
                
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
                       
                        <section class="customer-logos slider">
                            <div class="slide">
                                <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            साहित्य कुंजकाव्य साहित्य 
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            शायरी  
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            कथा-साहित्य 
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            हास्य/व्यंग्य
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            अनूदित साहित्य
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            आलेख
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            सम्पादकीय
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            संस्मरण 
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            बाल साहित्य 
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            नाट्य-साहित्य
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            साक्षात्कार
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                            <div class="m-2 intro-box-container">
                                    <img src="../img/sahityakunj/box-img.png" class="img-fluid wow fadeInDown"
                                        data-wow-delay="0.3s" alt="activity-cricle" />
                                    <div class="intro-box-text">
                                        <a href="#" class="text-dark text-center wow fadeInUp section-block-text"
                                            data-wow-delay="0.3s"><b>


                                            समीक्षा
                                            </b>
                                        </a>
                                    </div>
                                </div>
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
                    <h1 class="text-dark mt-2">हमारे बारे में</h1>
                    <p>
                        साहित्य कुंज आपकी प्रिय साहित्यिक पाक्षिक पत्रिका। हमारा पूरा प्रयास रहता है कि उत्कृष्ट साहित्य
                        आपके लिए प्रस्तुत करें। परन्तु भावी लेखकों को प्रोत्साहित करने और उनका मार्गदर्शन करना भी इस
                        ई-पत्रिका का एक महत्वपूर्ण उद्देश्य है
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
                        <div class="sahitya-left-section-detail p-4">
                            <img src="<?=site_url("/img/sahityakunj/person.jpg")?>" class="img-fluid w-50 float-left"
                                alt="05.jpg" />
                            <p class="">समीक्षक और सम्पादक
                                सम्पादन की परिभाषा क्या है? मैं किताब में दी गई परिभाषा की बात नहीं करता; वह क्या है हम
                                सब जानते हैं। परन्तु मैं व्यवहारिक परिभाषा की बात करता हूँ। प्रायः सम्पादकों के साथ इस
                                विषय पर जब बात होती है तो कोई भी संतोषजनक उत्तर नहीं मिलता या यूँ कहूँ कि उत्तर से मुझे
                                संतोष नहीं मिलता। संतोष क्यों नहीं मिलता – अब मैं आत्मविवेचन में उलझ जाता हूँ; अंतर्मुख
                                हो, जितना विचार करता हूँ उतने ही अपने लिए प्रश्न खड़े कर लेता हूँ। क्या रचना का मूल्यांकन
                                करते समय मैं उतना निष्पक्ष हो पाता हूँ जितना कि सम्पादक होना चाहिए? क्या मैं रचना को
                                पढ़ते हुए अपने पूर्वाग्रहों को, अपनी अवधारणाओं को त्याग पाता हूँ? क्या मेरा सीमित
                                साहित्यिक ज्ञान किसी की रचना को अस्वीकार करने का मुझे अधिकार देता है? सम्पादक की परिभाषा
                                मुझे संशोधन, परिवर्तन या परिवर्धन इत्यादि का अधिकार देती है। क्या ऐसा करना लेखक के
                                अधिकारों का अतिक्रमण नहीं है? अगर मैं केवल लेखक के अधिकारों और उनकी रचनात्मक स्वतंत्रता
                                का आदर करता हूँ तो साहित्य कुञ्ज के पाठक वर्ग की भी तो कुछ अपेक्षाएँ हैं। प्रायः पाठक
                                किसी पत्रिका विशेष की ओर केवल इसलिए आकर्षित होते हैं क्योंकि उसमें प्रकाशित साहित्य उनकी
                                मानसिक और साहित्यिक पिपासा को तुष्ट करता है। परन्तु दूसरी ओर पाठकों के तुष्टीकरण में
                                सम्पादकीय दायित्व को भी तो नहीं भुलाया जा सकता।

                                ऐसे ही अन्य कई प्रश्न हैं जिन से मैं प्रतिदिन उलझता हूँ और संघर्ष करता हूँ। </p>

                        </div>

                    </div>
                    <div class="star-energy-right-section">
                        <img src="<?=site_url("/img/sahityakunj/books.jpg")?>" class="img-fluid"
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
        <a href="http://sahityakunj.net/" target="_blank"
            class="bg-danger rounded-pill text-white more-info-btn">
            अधिक जानकारी के लिए यहां क्लिक करें
        </a>

    </div>
    <div class="d-flex justify-content-center m-2 ">

        <h1 class="text-dark" style="cursor:pointer;">
            Email: sahityakunj@gmail.com
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