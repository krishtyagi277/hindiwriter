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
    <div class="container-fluid" id="detail-bg">
        <div class="row">
            <div class="col-3 col-sm-2 col-md-2 col-lg-2 pl-0 d-flex align-items-center">
                <img src="<?=site_url("/img/41.png")?>" class="img-fluid float-left side-flower wow fadeInLeft"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
            <div class="col-6 col-sm-8 col-md-8 col-lg-8 intro-box-container">
                <div class="intro-box-text intro-box-size">

                    <p class="text-center wow fadeInUp p-3 pb-5 mb-2 page-title" data-wow-delay="0.2s"><b>
                            <?= $pageData['name']?>
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
    <div class="container-fluid detail-tile-bg ">
        <div class="row mb-2">
            <div class="col-sm-1 col-md-1 col-lg-1 pl-0">
            </div>
            <div class="col-sm-10 col-md-10 col-lg-10">
                <div class="row mt-2 p-0">
                    <div class="col-sm-12 col-md-12 col-lg-12 intro-box-container ">
                        <img src="<?=site_url("/img/9.png")?>"
                            class="img-fluid mx-auto d-block wow fadeInDown detail-page-heading" data-wow-delay="0.3s"
                            alt="intro-box" />
                        <div class="intro-box-text ">
                            <p class="text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s"><b>
                                    <a href="<?=site_url("/home/members")?>" class="text-white">हमारे सदस्य</a></b>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page" data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/members/".$pageData['image']."")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    <?= $pageData['name']?>
                                </b></p>
                            <div class="d-flex flex-row flex-wrap flex-sm-row justify-content-center">
                                <div class="p-3 bd-highlight pointer" style="font-size:1.8rem;"><a
                                        href="https://www.facebook.com/kishorekant.dwivedi" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a> </div>

                            </div>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                09 अगत को , कटक,ओडसा में जन्मे कशोरकान्त द्विवेदी ने विज्ञान में
                            </p>
                            <p>
                                स्नात्तकोतर शिक्षा पाई । करिब 45 वर्षों तक ओडसा में बस ने के बाद एक दशक
                            </p>
                            <p>
                                पटना, बिहार मे सेवारत रहे।
                            </p>
                            <p>
                                ईन्होने फार्मस्युटिकल में मार्केटिंग को अपना कार्यक्षेत्र चुना और अवकाश तक
                            </p>
                            <p>
                                उसी में संलग्न रहे ।
                            </p>
                            <p>
                                स्कूल, कॅालेज काल से ही लेखन में रूचि रखते थे एवं स्कूल कॉलेज के विभिन्न
                            </p>
                            <p>
                                प्रकाशनों में ईन की रचनाएँ नियमित रूप से प्रकाशीत होती थीं । व्यावसाइक
                                व्यस्तता एवं बढ़ते। हुए संसारीक जिम्मेदारियों के कारण यह शौक कुछ समय के
                                लिये शुषुप्त रहा ।सेवा निवृत्ति के पश्चात फिर ये लेखन कार्य शुरू हुआ।ये
                                गुजराती एवं हिन्दि में कविता, गजल एव्ं लघु नाटिकायें लिखते हैं।
                            </p>
                            <p>
                                मूलत: गुजरात के हैं एवं गुजराती एवं हिन्दी भाषाओं में लिखते हैं।।गुजराती
                                एवं हिन्दी के अतिरिक्त इन्हें अंग्रेजी,,बगंला एवं ऊडिया भाषाओं का भी अच्छा
                                ज्ञान है ।
                            </p>
                            <p>
                                सांप्रत अहमदावाद में स्थाई हैं एवं कनाडा में स्थाई आवासी के रूप में रहते
                                हैं ।।परिवार में पत्नी नलिनी द्विवेदी एवं दो पुत्र, पुत्रवधु एवं ४ पोतियाँ
                                हैं ।
                            </p>
                            <p>
                                अहमदावाद में गुजरात साहित्य परिषद , एवं कनाडा में हिन्दी राईटर्स गील्ड़ ,
                                विश्व हिन्दी परिषद के सदस्य हैं ।इन की रचनाऐं कई सामयिकों एवं संग्हों में
                                प्रकाशित होती रहतीं है।ईन के अपने दो प्रकाशन
                            </p>
                            <p>
                                अभिव्यक्ति
                            </p>
                            <p>
                                ( कविता एवं गजल संग्रह ) एवं
                            </p>
                            <p>
                                आगामी पुस्तक “संक्षिप्त रामकथा” जो सरल छंदों में रामायण का संक्षिप्त
                                रूपांतरण है, अपेक्षा रत है।
                            </p>
                            <p>
                                ऊपलब्ध हैं
                            </p>
                            <p>
                                सपंर्क: -1415, Crozier Crescent,MILTON, ON,L9T6N1
                            </p>
                            <p>
                                M 905 805 5158
                            </p>
                            <p>
                                H 289 851 1768
                            </p>
                            <p>
                                Email:-
                                <a
                                    href="file:///D:/hwg-project/HWG%20WEBSITE%20DETAILS/%E0%A4%B8%E0%A4%A6%E0%A4%B8%E0%A5%8D%E0%A4%AF/kant44@yahoo.com">
                                    kant44@yahoo.com
                                </a>
                            </p>

                            <p>
                                YouTube:-
                                <a href="https://www.youtube.com/user/Mintaben">
                                    https://www.youtube.com/user/Mintaben
                                </a>
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 pr-0">
            </div>
        </div>

        <div class="row pb-5" style="cursor:pointer;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 pl-0 pr-0 intro-box-container">
                <div class="row m-0 p-0 mt-2 mb-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 intro-box-container">
                        <img src="<?=site_url("/img/9.png")?>"
                            class="img-fluid mx-auto d-block section-heading wow fadeInDown" data-wow-delay="0.3s"
                            alt="intro-box" />
                        <div class="intro-box-text">
                            <p class="text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s"><b>
                                    प्रकाशित पुस्तकें</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center mt-5">
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/41.jpg")?>"
                            class="img-fluid shadow-lg border-0 w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

                    </div>
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/42.jpg")?>"
                            class="img-fluid shadow-lg border-0 w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

                    </div>

                </div>

            </div>

        </div>
       
    </div>






    <!-- footer section-->
    <?= $this->include("components/footer") ?>

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

</body>

</html>