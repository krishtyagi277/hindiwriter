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
    <meta name="title" content="फेसबुक लाइव">
	<meta name="description" content="हिन्दी राइटर्स गिल्ड कैनेडा फेसबुक लाइव कार्यक्रम।">
	<meta property="og:url"
		content="<?=site_url("/home/facebookLive")?>" />
	<meta property="og:type" content="website">
	<meta property="og:description" content="हिन्दी राइटर्स गिल्ड कैनेडा फेसबुक लाइव कार्यक्रम।">
	<meta property="og:title" content="फेसबुक लाइव">
	<meta property="og:image" content="<?=site_url("/img/metaimage/facebookLive.jpg") ?>">
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
    <div class="container-fluid " id="detail-bg">
        <div class="row">
            <div class="col-3 col-sm-2 col-md-2 col-lg-2 pl-0">
                <img src="<?=site_url("/img/41.png")?>" class="img-fluid float-left side-flower wow fadeInLeft"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
            <div class="col-6 col-sm-8 col-md-8 col-lg-8 intro-box-container">
                <div class="intro-box-text intro-box-size">

                    <p class="text-center wow fadeInUp p-3 pb-5 mb-2 page-title" data-wow-delay="0.2s"><b>
                            फेसबुक लाइव
                        </b>
                    </p>

                </div>
            </div>
            <div class="col-3 col-sm-2 col-md-2 col-lg-2 pr-0">
                <img src="<?=site_url("/img/16.png")?>" class="img-fluid float-right side-flower wow fadeInRight"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
        </div>
    </div>
    <!-- Detail page tile section-->
    <div class="container-fluid bg-light detail-tile-bg">
        <div class="row mb-2">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
                <img src="<?=site_url("/img/31.png")?>" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 intro-box-container">
                <div class="row mt-2 p-0">
                    <div class="col-sm-12 col-md-12 col-lg-12 intro-box-container ">
                        <img src="<?=site_url("/img/9.png")?>"
                            class="img-fluid mx-auto d-block section-heading wow fadeInDown" data-wow-delay="0.3s"
                            alt="intro-box" />
                        <div class="intro-box-text">
                            <p class="text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s"><b>
                                    <a href="<?=site_url("/home/detail/gatividhiya")?>"
                                        class="text-white">गतिविधियाँ</a></b>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-md-column flex-lg-row flex-sm-column justify-content-center align-items-center flex-wrap">
                <div id="vid-10" class="display-video text-center d-flex flex-column flex-sm-column flex-md-column flex-lg-column align-items-center">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/3PNp8xpOklA" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                            <p class="mt-2">
                            "रजनीगंधा "मन्नू भंडारी जी के ९०वें जन्मदिन के उत्सव पर आधारित कार्यक्रम 
                            </p>
                    </div>
                    <div id="vid-1" class="display-video text-center d-flex flex-column flex-sm-column flex-md-column flex-lg-column align-items-center">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/YLl0TXqqsno" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                            <p class="mt-2">
                            डॉ. रमेश पोखरियाल 'निशंक' को साहित्य गौरव सम्मान कैनेडा 2021
                            </p>
                    </div>
                    <div id="vid-2" class="display-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/E6aszv7Y78Q" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                            <p class="mt-2">
                            हिन्दी राइटर्स गिल्ड ने मनाया ' विश्व हिन्दी दिवस' फीजी और भारत के साथ
                            </p>
                    </div>
                    <div id="vid-3" class="display-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/Y0D07fbJXa8" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                            <p class="mt-2">
                            विश्वारंग 2020  कैनेडा -उद्घाटन
                            </p>
                    </div>
                    <div id="vid-4" class="display-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/QQeiHcDGQtU" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                            <p class="mt-2">
                            विश्वारंग 2020  कैनेडा -विज्ञान से ज्ञान तक  
                            </p>
                    </div>
                    <div id="vid-5" class="display-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/SE_BznyIhsk" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                            <p class="mt-2">
                            विश्वारंग 2020 कैनेडा -भारतवंशी प्रवासी लेखक
                            </p>
                    </div>
                    <div id="vid-6" class="display-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/shwtySmdu_g" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                            <p class="mt-2">
                            विश्वारंग 2020  कैनेडा -हमारी नींव आधार शिलाएँ
                            </p>
                    </div>
                    <div id="vid-7" class="display-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/xQJmh4iLvs4" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                            <p class="mt-2">
                            विश्वारंग 2020  कैनेडा -जीवन का प्रतिबिंब हैं नाटक 
                            </p>
                    </div>
                    <div id="vid-8" class="display-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/kPEa1NeEkEo" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                            <p class="mt-2">
                            विश्वारंग 2020  कैनेडा -आपका सम्मान- हमारा मान देखन में छोटी लगें और भी विधाएँ हैं कहानी के सिवा- कथेतर साहित्य
                            </p>
                    </div>
                    <div id="vid-9" class="display-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/HoBOHxUWq0o" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                            <p class="mt-2">
                            विश्वारंग 2020  कैनेडा -तेरह रंगों में रंगी, कविता की एक शाम छोटे पर्दे से बड़ा संदेश- लघु फ़िल्म धन्यवाद
                            </p>
                    </div>
                   


                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
                <img src="<?=site_url("/img/32.png")?>" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
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
    
    <script>
        new WOW().init();
    </script>
    <script>
        lightGallery(document.getElementById('animated-thumbnials'), {
            thumbnail: true
        });
    </script>
    <script>
		/*
		 *Scroll effect
		 */
        $(document).ready(function () {
		setTimeout(function () {
			let myParam = location.search.split('id=')[1] ? location.search.split('id=')[1] : false;
			if (myParam) {
				document.getElementById(myParam).scrollIntoView({
					behavior: 'smooth',
					delay: 3000
				});
			}
		}, 10000);
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