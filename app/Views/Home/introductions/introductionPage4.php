<!DOCTYPE html>
<html>

<head>
    <title>HWG Web Page</title>
    <meta charset="utf-8">
    	<link rel="icon" href="<?=site_url("/img/HWG-LOGO-21.png") ?>" sizes="196x196">
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
                           पूनम चन्द्रा 'मनु'
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
            <div class="col-sm-10 col-md-10 col-lg-10 ">
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
                                <div class="d-flex flex-row flex-wrap flex-sm-row justify-content-center">
                                    <div class="p-3 bd-highlight pointer" style="font-size:1.8rem;"><a
                                            href="https://www.facebook.com/poonam.chandra1/" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a> </div>
                                    <div class="p-3 bd-highlight pointer" style="font-size:1.8rem;"><a
                                            href="https://www.youtube.com/channel/UC72jWJgsWQXOhhWcOotHpUw"
                                            target="_blank"><i class="fab fa-youtube"></i></a> </div>

                                </div>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                उत्तराखंड की राजधानी देहरादून में जन्मी पूनम चन्द्रा 'मनु' ने गढ़वाल
                                विश्वविद्यालय के डी ए वी कॉलेज से एम ए (अंग्रेजी) की शिक्षा प्राप्त की।
                            </p>
                            <p>
                                'मनु' NCC (national cadet corps) की कैडेट रही हैं जिसके अंतर्गत वो 1992 में
                                रिपब्लिक कैंप में शामिल हुई और NCC की ओर राजपथ के पर मार्च का हिस्सा बनी ।
                            </p>
                            <p>
                                स्कूल के ज़माने से कविताएं लिखने की शुरुआत हुई और 'जज़्बात' नाम से उनकी पहली
                                किताब प्रकाशित हुई।
                            </p>
                            <p>
                                फेसबुक पेज 'jazbaat.manu' और अपनी वेबसाइट 'jazbaat.net' पर हमेशा वह अपने
                                मित्रों से जुड़ी रहती हैं।
                            </p>
                            <p>
                                वह वेबसाइट और ग्राफ़िक डिजाइनिंग के व्यवसाय से जुड़ी हुई हैं और अपने परिवार
                                के साथ साल 2006 से कनाडा में रह रही हैं।
                            </p>
                            <p>
                                'मनु' 'हिन्दी राइटर्स गिल्ड कैनेडा ' के निदेशक मंडल की सदस्या हैं और इस
                                संस्था के प्रमोशन और तकनीकी का काम देखती हैं।
                            </p>
                            <p>
                                'वादों की परछाइयां' उनका पहला उपन्यास है। जिसे उन्होंने अमृता प्रीतम के
                                उपन्यास 'नागमणि' से प्रभावित होकर लिखा। अपनी इस रचना में उन्होंने
                                परिस्थिति, दृश्य, चरित्रों के संवाद और अभिव्यक्ति पर विशेष ध्यान दिया है।
                            </p>
                            <p>
                                उन्हें उम्मीद है कि यह उपन्यास पाठकों के दिल में जगह बनाएगा।
                            </p>
                            <p>
                                <strong>नेट</strong>
                                <strong> </strong>
                                <strong>की</strong>
                                <strong> </strong>
                                <strong>पत्र</strong>
                                <strong>-</strong>
                                <strong>पत्रिकाओं</strong>
                                <strong> </strong>
                                <strong>में</strong>
                                <strong> :</strong>
                            </p>
                            <p>
                                हिंदी चेतना, ई-पुस्तक सपनो का आकाश में कविताओं का प्रकाशन।
                            </p>
                            <p>
                                <strong>सम्मान:</strong>
                            </p>
                            <p>
                                हिन्दी राइटर्स गिल्ड द्वारा स्वैच्छिक सेवा पुरस्कार
                            </p>
                            <p>
                                FB Page-<a href="https://www.facebook.com/jazbaat.manu"
                                    target="_blank">https://www.facebook.com/jazbaat.manu</a>
                            </p>

                            <p>
                                Website: <a href="https://www.jazbaat.net/" target="_blank">https://www.jazbaat.net/</a>
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 intro-box-container">
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
                <div class="d-flex flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center align-items-center mt-5">
                    <div class="intro-box-container intor-page-book-section">
                        <a href="https://www.jazbaat.net/" target="_blank"><img src="<?=site_url("/img/books/5.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" /></a>

                    </div>
                    <div class="intro-box-container intor-page-book-section">
                    <a href="https://www.jazbaat.net/" target="_blank"><img src="<?=site_url("/img/books/6.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" /></a>

                    </div>
                </div>

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