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
                                </b>
                                <p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                <strong>जन्मः</strong>
                                19 मार्च,1949 , हरिपुर , जिला-सहारनपुर ।
                            </p>
                            <p>
                                <strong>प्रकाशित </strong>
                                <strong>रचनाएँ:</strong>
                                माटी,पानी और हवा ,अँजुरी भर आसीस, कुकडूँ कूँ, हुआ सवेरा, मैं घर लौटा, तुम
                                सर्दी की धूप, बनजारा मन ( काव्य-संग्रह),मेरे सात जनम, माटी की नाव, बन्द कर
                                लो द्वार(हाइकु-संग्रह), मिले किनारे (ताँका और चोका संग्रह संयुक्त रूप से डॉ
                                हरदीप सन्धु के साथ), झरे हरसिंगार(ताँका-संग्रह), तीसरा पहर( ताँका , सेदोका
                                , चोका ),धरती के आँसू (उपन्यास),दीपा,दूसरा सवेरा(लघु उपन्यास),असभ्य
                                नगर(लघुकथा-संग्रह-दो संस्करण), खूँटी पर टँगी आत्मा(व्यंग्य-संग्रह-3
                                संस्करण), भाषा-चन्द्रिका (व्याकरण), लघुकथा का वर्त्तमान परिदृश्य, (लघुकथा
                                -समालोचना), सह-अनुभूति एवं काव्य-शिल्प ( काव्य-समालोचना), हाइकु आदि
                                काव्य-धारा( जापानी काव्यविधाओं की समालोचना),फुलिया और मुनिया(बालकथा हिन्दी
                                और अंग्रेज़ी, अंग्रेज़ी संस्करण दो बार इटली के विश्व पुस्तक मेले में
                                प्रदर्शित), राष्ट्रीय पुस्तक न्यास द्वारा हरियाली और पानी(बालकथा),
                                गीड्-गदेड् ओन्डो: दः अ ( हरियाली और पानी का हो बोली में ),हरियार और द: अ: (
                                हरियाली और पानी का ‘असुरी’ बोली में) ,उड़िया, पंजाबी और गुजराती भाषा में
                                अनुवाद) प्रकाशित, झरना, सोनमछरिया, कुआँ(पोस्टर बाल कविताएँ),रोचक बाल कथाएँ
                                । लोकल कवि का चक्कर(2005 में आकाशवाणी जबलपुर से नाटक का प्रसारण)।‘ऊँचाई’
                                लघुकथा पर लघु फ़िल्म। नेपाली, पंजाबी,अंग्रेज़ी,उर्दू, मराठी,
                                गुजराती,संस्कृत ,बांग्ला में अनूदित कुछ रचनाएँ।
                            </p>
                            <p>
                                <strong>अनुवादः </strong>
                                राष्ट्रीय पुस्तक न्यास के लिए 2 पुस्तकों का अंग्रेज़ी से हिन्दी में।
                            </p>
                            <p>
                                <strong>सम्पादनः</strong>
                                सुकेश साहनी, डॉ.भावना कुँअर, डॉ.हरदीप सन्धु, डॉ.कविता भट्ट,और डॉ.ज्योत्स्ना
                                शर्मा के साथ कुल 37 सम्पादित पुस्तकें। laghukatha.com (सुकेश साहनी के साथ
                                लघुकथा की एकमात्र वेब साइट), www.hindihaiku.net तथा
                                http://trivenni.blogspot.com के डॉ. हरदीप कौर सन्धु के साथ सहयोगी सम्पादक।
                            </p>
                            <p>
                                <strong>प्रसारणः</strong>
                                रेडियो सीलोन,आकाशवाणी गुवाहाटी, रामपुर, नज़ीबाबाद , अम्बिकापुर एवं जबलपुर ,
                                दूरदर्शन हिसार, टैग टी.वी.और सी. एन.(कैनेडा )से।
                            </p>
                            <p>
                                केन्द्रीय विद्यालय के प्राचार्य-पद से सेवानिवृत्त), सम्प्रतिःस्वतन्त्र
                                लेखन।
                            </p>
                            <p>
                                <strong>सम्पर्कः</strong>
                                -रामेश्वर काम्बोज ‘हिमांशु’
                            </p>
                            <p>
                                <strong>ई-</strong>
                                <strong>मेलः</strong>
                                rdkamboj@gmail.com
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-md-1
             col-lg-1 pr-0">
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