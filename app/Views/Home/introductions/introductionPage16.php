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
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                <strong>जन्मभूमि</strong>
                                <strong>:</strong>
                                भारतवर्ष
                                <br />
                                <strong>कर्मभूमि</strong>
                                <strong>:</strong>
                                ट्रिनिडाड, कनाडा, संयुक्त राज्य अमेरिका
                                <br />
                                <strong>जन्मतिथि</strong>
                                <strong>:</strong>
                                ७ अगस्त, १९३६ ई.
                                <br />
                                <strong>शिक्षा</strong>
                                <strong>:</strong>
                                एम.ए. (हिन्दी, संस्कृत, संगीत), बी.टी., साहित्याचार्य, साहित्यालंकार,
                                साहित्य रत्न, विद्या वाचस्पति, संगीत विशारद, संगीताचार्य आदि।
                                <br />
                                <br />
                                <strong>कार्यक्षेत्र</strong>
                                <strong>:</strong>
                                बहुमुखी प्रतिभा संपन्न प्रो. आदेश ने कनाडा, अमेरिका व त्रिनिडाड के मिनिस्टर
                                ऑफ रिलीजन, भारतीय विद्या संस्थान के महानिदेशक, श्री आदेश आश्रम ट्रिनिडाड के
                                कुलपति, ज्योति एवं जीवन ज्योति त्रैमासिक के प्रधान संपादक- तथा वर्ष विवेक
                                एवं अंतरिक्ष समीक्षा के संपादक जैसे महत्वपूर्ण पदों पर कार्य किया है। वे
                                अंतर्राष्ट्रीय हिन्दू समाज अमेरिका तथा विद्या मन्दिर कनाडा के आध्यात्मिक
                                गुरु स्वतंत्र साहित्यकार एवं संगीतकार, संगीत निर्देशक, गायक, वादक, प्रवाचक,
                                यायावर, मानद उप राज्यपाल व भूतपूर्व सांस्कृतिक दूत (भारत) भी रहे हैं। आश्रम
                                कॉलिज ट्रिनिडाड में प्रधानाचार्य व हिन्दी तथा संगीत के प्रोफ़ेसर के पद पर
                                आपने महत्वपूर्ण सेवाएँ समाज को अर्पित की हैं।
                            </p>
                            <p>
                                <strong>सम्मान</strong>
                                <strong> </strong>
                                <strong>एवं</strong>
                                <strong> </strong>
                                <strong>पुरस्कार</strong>
                                <strong>:</strong>
                                टिनिडाड, कनाडा, यू. के. व यू. एस. ए. के अनेक प्रतिष्ठित सम्मानों व
                                पुरस्कारों से सम्मानित। वर्ष २००२ में भारत सरकार के पद्मविभूषण डॉ मोटूरि
                                सत्यनारायण पुरस्कार से सम्मानित।
                            </p>
                            <p>
                                <strong>कृतियाँ</strong>
                                <strong>:</strong>
                                <br />
                                हिन्दी अंग्रेज़ी व उर्दू की लगभग सभी विधाओं में साहित्य व संगीत की रचना।
                                लगभग १६० पुस्तकें व ११० रेकॉर्ड प्रकाशित।
                            </p>
                            <p>
                                प्रो. 'आदेश' हरिशंकर की रचनाएँ-
                            </p>
                            <p>
                                <strong>गीतों </strong>
                                <strong>में-</strong>
                            </p>
                            <p>
                                आया मधुमास
                            </p>
                            <p>
                                अमल भक्ति दो माता
                            </p>
                            <p>
                                एक दीप
                            </p>
                            <p>
                                चन्दन वन
                            </p>
                            <p>
                                जीवन और भावना
                            </p>
                            <p>
                                धरती कहे पुकार के
                            </p>
                            <p>
                                नया उजाला देगी हिन्दी
                            </p>
                            <p>
                                रश्मि जगी
                            </p>
                            <p>
                                लौट चलो घर
                            </p>
                            <p>
                                वन में दीपावली
                            </p>
                            <p>
                                विहान हुआ
                            </p>
                            <p>
                                सरस्वती वंदना
                            </p>
                            <p>
                                <strong>कविताएँ</strong>
                                -
                            </p>
                            <p>
                                जीवन
                            </p>
                            <p>
                                प्रश्न
                            </p>
                            <p>
                                मृत्यु
                            </p>
                            <p>
                                संपूर्ण
                            </p>
                            <p>
                                <strong>संकलन </strong>
                                <strong>में-</strong>
                            </p>
                            <p>
                                ज्योतिपर्व - दीपक जलता
                            </p>
                            <p>
                                - मधुर दीपक
                            </p>
                            <p>
                                - मत हो हताश
                            </p>
                            <p>
                                मेरा भारत - मातृभूमि जय हे
                            </p>
                            <p>
                                जग का मेला -चंदामामा रे
                            </p>
                            <p>
                                नया साल -शुभ हो नूतन वर्
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 pr-0">
            </div>
        </div>


    </div>






    <!-- footer section-->
    <?= $this->include("components/footer") ?>
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