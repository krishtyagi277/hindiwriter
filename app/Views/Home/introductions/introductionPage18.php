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
                                डॉ. भारतेन्दु श्रीवास्तव का जन्म सन्‌ 1935 में उत्तर प्रदेश (भारत) के बाँदा
                                नगर में हुआ। उन्हें इलाहाबाद विश्वविद्यालय से 1955 में बी.एस.सी. और 1958
                                में एम.एस.सी.(टैक) की उपाधि मिली। कनाडा के सास्केचुआन विश्वविद्यालय ने उनके
                                शोध कार्य पर पी.एच.डी. की उपाधि दी। कनाडा मौसम-विज्ञान विभाग में वैज्ञानिक
                                के रूप में लम्बी सेवा के उपरान्त उन्होंने दिसम्बर 1996 में अवकाश ग्रहण
                                किया।
                            </p>
                            <p>
                                डॉ. भारतेन्दु बचपन से ही साहित्य और संगीत के प्रेमी तथा कवि हृदय हैं। उनकी
                                कविताएँ समय-समय पर पत्रिकाओं में प्रकाशित होती रहती हैं। उनका कविता-संग्रह
                                ’उस पार से’ उनकी वैज्ञानिक साधना और देश-प्रेम का परिचायक है। लम्बे
                                विदेश-प्रवास के बावजूद भारत की संस्कृति और धर्म से उनका लगाव अद्‌भुत है।
                                देश-प्रेम उन्हें स्वतन्त्रता-संग्राम में भाग लेने वाली पूजनीया माता जी से
                                विरासत में मिला है।
                            </p>
                            <p>
                                कनाडा -प्रवास में डॉ. भारतेन्दु ने वहाँ भारतीयों में भारतीय धर्म, अध्यात्म
                                और संस्कृति के प्रचार का कार्य निरन्तर किया। नियमित रूप से रामायण,
                                श्रीमद्‌भगवद्‌ गीता पर प्रवचन किए। आजकल भी हिन्दू इन्सटीट्‌यूट, टोरोंटो में
                                अहिन्दी भाषीय भारतीय मूल के विद्यार्थियों को श्री रामचरितमानस पढ़ाने में
                                सेवारत्त हैं।
                            </p>
                            <p>
                                उनके द्वारा लिखी गई पुस्तकों में ’भगवद्‌गीता ज्ञान एवं गान’ एक वृहद्‌ ग्रंथ
                                है। उन्होंने इंग्लिश पद्य में ’रामाज़ ग्लोरी’ में रामचरित मानस और वाल्मिकी
                                रामायण पर आधारित, एक पुस्तक लिखी, जो कि 1995 में "कुन्ति गोयल
                                अन्तर्राष्ट्रीय पुरस्कार" प्राप्त कर चुकी है।
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