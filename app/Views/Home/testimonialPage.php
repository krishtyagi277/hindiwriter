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

    <meta property="og:url" content="<?=site_url("/home/testimonial")?>" />
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?=site_url("/img/HWG-LOGO-21.png") ?>">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="720">
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
    <div class="container-fluid" id="wishes-bg">
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

                    <h2 class="text-dark"><b>Testimonials</b></h2>
                    <div>
                        <div class="rounded-circle">
                         <img src="<?=site_url('/img/harish-nuniyal.jpg')?>" class="rounded-circle testimonial-image" alt="harish-nuniyal.jpg"/>

                        </div>
                        <div
                            class="d-flex flex-column flex-md-column flex-lg-column flex-sm-column flex-wrap justify-content-center testimonial-image-text">
                            We are energy management consultants. We know how to help you manage your consumption of
                            energy - an increasingly expensive and volatile commodity consumed in your business. We have
                            the experience and expertise to be good at this.

                        </div>

                    </div>


                </div>


            </div>
            <div class="d-none d-sm-block d-md-block d-lg-block col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
                <img src="<?=site_url("/img/32.png")?>" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
                    data-wow-delay="0.3s" alt="side-design" />
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
                    class="d-flex flex-column flex-md-column flex-lg-column flex-sm-column flex-wrap justify-content-center testimonial-text">
                    We are energy management consultants. We know how to help you manage your consumption of energy - an
                    increasingly expensive and volatile commodity consumed in your business. We have the experience and
                    expertise to be good at this.

                </div>

            </div>
            <div class="d-none d-sm-block d-md-block d-lg-block col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
                <img src="../img/35.png" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
        </div>
    </div>





    <!-- footer section-->
    <?= $this->include("components/footer") ?>
    <?= $this->include("components/successMessage") ?>
    <script src="<?=site_url("/js/subscribe.js")?>"></script>

    <script src="<?=site_url("/js/wow.min.js")?>"></script>

    <script src="<?=site_url("js/lightgallery.min.js")?>"></script>

    <!-- lightgallery plugins -->
    <script src="<?=site_url("js/lg-thumbnail.min.js")?>"></script>
    <script src="<?=site_url("js/lg-fullscreen.min.js")?>"></script>
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
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>


</body>

</html>