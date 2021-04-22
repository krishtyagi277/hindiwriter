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
    <meta name="title" content="ऑडियो गैलरी ">
    <meta name="description" content="हिन्दी राइटर्स गिल्ड ऑडियो गैलरी ">
    <meta property="og:url" content="<?=site_url("/home/audiogallery")?>" />
    <meta property="og:type" content="website">
    <meta property="og:description" content="हिन्दी राइटर्स गिल्ड ऑडियो गैलरी ">
    <meta property="og:title" content="ऑडियो गैलरी ">
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
    <div class="container-fluid " id="detail-bg">
        <div class="row">
            <div class="col-3 col-sm-2 col-md-2 col-lg-2 pl-0">
                <img src="<?=site_url("/img/41.png")?>" class="img-fluid float-left side-flower wow fadeInLeft"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
            <div class="col-6 col-sm-8 col-md-8 col-lg-8 intro-box-container">
                <div class="intro-box-text intro-box-size">

                    <p class="text-center wow fadeInUp p-3 pb-5 mb-2 page-title" data-wow-delay="0.2s"><b>
                            ऑडियो गैलरी
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
                                    <a href="<?=site_url("/home/detail/gatividhiya")?>" class="text-white">ऑडियो गैलरी
                                    </a></b>
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="d-flex flex-md-column flex-lg-row flex-sm-column justify-content-center align-items-center flex-wrap">
                    <div
                        class="audio-video text-center d-flex flex-column flex-sm-column flex-md-column flex-lg-column align-items-center">
                        <audio controls>
                            <source src="<?=site_url("/img/audio/1.mp3")?>" type="audio/ogg">
                            <source src="<?=site_url("/img/audio/1.mp3")?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <p class="mt-2">
                            विश्वरंग कैनेडा कार्यक्रम की रिपोर्ट - डॉ. शैलजा सक्सेना जी से अम्बिका शर्मा जी की बातचीत
                        </p>
                    </div>
                    <div
                        class="audio-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <audio controls>
                            <source src="<?=site_url("/img/audio/2.mp3")?>" type="audio/ogg">
                            <source src="<?=site_url("/img/audio/2.mp3")?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <p class="mt-2">
                            विश्व हिंदी दिवस पर फीजी के साहित्य का विशेषांक और डॉ. 'निशंक' जी को साहित्य गौरव सम्मान-
                            डॉ. शैलजा सक्सेना जी से अम्बिका शर्मा जी की बातचीत
                        </p>
                    </div>
                    <div
                        class="audio-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <audio controls>
                            <source src="<?=site_url("/img/audio/3.mp3")?>" type="audio/ogg">
                            <source src="<?=site_url("/img/audio/3.mp3")?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <p class="mt-2">
                            विश्वरंग कैनेडा के अंतर्गत सपनों का आकाश और संभावनाओं की धरती संकलन के विमोचन पर डॉ. शैलजा
                            सक्सेना से अम्बिका शर्मा जी की बातचीत
                        </p>
                    </div>
                    <div
                        class="audio-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <audio controls>
                            <source src="" type="audio/ogg">
                            <source src="" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <p class="mt-2"><a class="" href="https://soundcloud.com/shailja-saksena/vkv-episode-1" target="_blank">
                        कविता- "गाँठ में बांध लायी अम्मा की कविता" </br>
                        कहानी-सुबह साढ़े सात से पहले</br>
                        लेखक सुमन कुमार घई  </br>
                        आवाज़- डॉ. शैलजा सक्सेना 
                        </a></p>
                    </div>

                    <div
                        class="audio-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <audio controls>
                            <source src="" type="audio/ogg">
                            <source src="" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <p class="mt-2"><a class="" href="https://soundcloud.com/shailja-saksena/vkv-episode-2?in=shailja-saksena/sets/vkv" target="_blank">
                        कविता- "हरि घाँस पर क्षणभर"-'अज्ञेय'  </br>
                        कविता- तुम्हा मौन -कवि-  डॉ॰ शिवनन्दन सिंह यादव</br>
                        लघुकथा- "आजकल की लड़कियाँ"- लेखिका-डॉ. शैलजा सक्सेना  </br>
                        आवाज़- डॉ. शैलजा सक्सेना  
                        </a></p>
                    </div>
                    <div
                        class="audio-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <audio controls>
                            <source src="" type="audio/ogg">
                            <source src="" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <p class="mt-2"><a class="" href="https://soundcloud.com/shailja-saksena/vkv-episode-3?in=shailja-saksena/sets/vkv" target="_blank">
                        कहानी- "पगला बाबा" -लेखक-गोविन्द मिश्र   </br>
                        कहानी -"ऊंचाई"-रामेश्वर कम्बोज 'हिमांशु' </br>
                        आवाज़- डॉ. शैलजा सक्सेना  
                        </a></p>
                    </div>
                    <div
                        class="audio-video text-center flex-md-column d-flex flex-lg-column flex-column flex-sm-column align-items-center">
                        <audio controls>
                            <source src="" type="audio/ogg">
                            <source src="" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <p class="mt-2"><a class="" href="https://soundcloud.com/shailja-saksena/vkv-episode-4?in=shailja-saksena/sets/vkv" target="_blank">
                        कहानी- "पूस की रात"-लेखक- मुंशी प्रेमचंद    </br>
                        आवाज़- डॉ. शैलजा सक्सेना 
                        </a></p>
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