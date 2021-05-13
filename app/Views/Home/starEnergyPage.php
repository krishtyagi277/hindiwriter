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
   
     <!--Navigation menu-->
    <?= $this->include("components/navbar") ?>

    <!-- Intro Section-->
    <div class="container-fluid" id="star-energy-bg">
        <div class="row">
        <div class="col-8 col-sm-8 col-md-8 col-lg-8 ">
    </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 ">
               <a href="https://www.starenergy-solutions.com/" target="_blank" class=""><img
                src="<?=site_url("/img/starenergy2.png") ?>" class="img-fluid w-50 " style="margin-top:20px;" alt="Brand"
                ></a>
                
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