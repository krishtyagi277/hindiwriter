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
                                अम्बिका शर्मा, रेडियो, थिएटर, भाषा, नृत्य और संगीत में गहरी रूचि व प्रवीणता
                                . छात्रवस्था से हिंदी में सक्रिय लेखन । कवितायेँ व् लेख पत्र पत्रिकाओं में
                                प्रकाशित . फ्रीलांस अनुवादक। थिएटर में अभिनय व Montreal based डांस कंपनी की
                                फाउंडर. स्थानीय 'कबीर पोएट्री क्लब' Montreal की प्रबंधक व संचालक. कनाडा में
                                वर्तमान में दो हिंदी रेडियो शो की प्रेसेंटर (RJ ) जो बॉलीवुड गीतों,
                                कवितायेँ, ख़बरों पर आधारित है. इसके अतिरिक्त थिएटर, गायन और से जुड़ाव .
                            </p>
                            <p>
                                "लगातार सीखते रहना और हर पल सृजन के लिए प्रेरित रहने " में विश्वास रखने की
                                वजह से IIT से बायोसाइंस में शिक्षित होने के साथ ही लेखन और सृजन में संलग्न
                                रहीं। सोशल मीडिया की गहरी समझ और लेखन और विचारों में फेमिनिज्म और women
                                empowerment हमेशा एक मुख्य थीम रही है .
                            </p>
                            <p>
                                <u>कविता और लेखन अनुभव</u>
                                <u></u>
                            </p>
                            <p>
                                · मोंट्रियल की प्रतिष्ठित संस्था कबीर सेंटर फॉर आर्ट्स एंड कल्चर कबीर काव्य
                                क्लब के लिए कलात्मक निदेशक, क्यूरेटर और आयोजक
                            </p>
                            <ul>
                                <li>
                                    महोत्सव ओरिएंटलियों,मॉन्ट्रियल के लिए स्वलिखित कविताओं पर मूवमेंट
                                    पोएट्री
                                </li>
                            </ul>
                            <p>
                                · अंतर्राष्ट्रीय सम्मेलन में प्रस्तुति : हिंदी मंच बोस्टन, विश्व रंग कनाडा
                                की अंतरराष्ट्रीय साहित्यिक बैठक सहित उत्तरी अमेरिका में कई प्लेटफार्मों पर
                                प्रदर्शन कविता प्रस्तुत
                            </p>
                            <p>
                                · हिंदी राइटर्स गिल्ड द्वारा प्रकाशित कैनेडा के 41 कवियों के पद्य संकलन
                                ’सपनों का आकाश’ में कवितायेँ प्रकाशित
                            </p>
                            <p>
                                · पत्र पत्रिकाओं में कविता प्रकाशन ( अहा ज़िन्दगी, उत्कर्ष, नवल उत्तराखंड,
                                नव भारत टाइम्स )
                            </p>
                            <ul>
                                <li>
                                    पर्पल फोकस विज्ञापन, भारत के लिए कॉपीराइटर
                                </li>
                                <li>
                                    नवनीत प्रकाशन मुम्बई के लिए ई - लर्निंग कंटेंट पोर्टल
                                </li>
                            </ul>
                            <p>
                                · भारतीय विद्या भवन, मुंबई के साथ विज्ञानं पर प्रकाशन
                            </p>
                            <ul>
                                <li>
                                    मुंबई के लिए हॉर्नबिल पत्रिका के लिए सहायक संपादक
                                </li>
                            </ul>
                            <p>
                                <u></u>
                            </p>
                            <p>
                                <u>प्रसारण</u>
                                <u></u>
                            </p>
                            <p>
                                · रेडियो हमसफर में रेडियो शो होस्ट, 1610 AM, मॉन्ट्रियल डेली लाइव शो के लिए
                            </p>
                            <p>
                                · CKUT कम्युनिटी रेडियो McGill, 90.3 एफएम मॉन्ट्रियल में रेडियो शो होस्ट,
                                एक्टिविस्ट और इश्यू बेस्ड प्रोग्रामिंग
                            </p>
                            <p>
                                · आकाशवाणी, मुंबई के लिए विविध भारती के लिए रेडियो होस्ट
                            </p>
                            <p>
                                <u>टेलीविजन</u>
                                <u></u>
                            </p>
                            <p>
                                <u></u>
                            </p>
                            <p>
                                · 2020 - कला और संस्कृति, मॉन्ट्रियल के लिए कबीर केंद्र द्वारा कला प्रशंसा
                                परियोजना Artasia के टीवी संस्करण के लिए एक साक्षात्कारकर्ता
                            </p>
                            <p>
                                · २०१८-प्राइम कनाडा टीवी , मॉन्ट्रियल में टीवी प्रस्तोता
                            </p>
                            <p>
                                <u>रंगमंच </u>
                                <u></u>
                            </p>
                            <p>
                                · थिएटर न्यू ब्रंसविक यंग कंपनी,सानिया की भूमिका, Saniya The Destroyer, ,
                                माँ और पिताजी की भूमिका, ग्रेटेल और हंसल, फ्रेडेरिटन, कनाडा
                            </p>
                            <p>
                                · Repurcussion थिएटर, मॉन्ट्रियल के लिए ड्रामाटर्गवाई और टेबल रीडिंग
                            </p>
                            <p>
                                · भारत - दक्षिण अफ्रीका सांस्कृतिक आदान-प्रदान कार्यक्रम, दक्षिण अफ्रीका के
                                हिस्से के रूप में जोबर्ग में निर्देशित और पटकथा
                            </p>
                            <p>
                                · २०१०- नृत्य नाटक होलिका युवा रंगमंच जोहानसबर्ग, दक्षिण अफ्रीका के लिए
                                पटकथा और निर्देशन
                            </p>
                            <ul>
                                <li>
                                    २००८-एक कॉर्पोरेट प्रतियोगिता, भारत के लिए एक पुरस्कार विजेता कॉमेडी <em>जिंदगी अबाद
                                    </em><em>है </em>में प्रमुख अभिनेता
                                </li>
                            </ul>
                            <p>
                                नृत्य अनुभव
                            </p>
                            <p>
                                •मॉन्ट्रियल में डांस ग्रुप की संस्थापक, अंतरराष्ट्रीय स्तर पर प्लेटफार्मों
                                पर भारतीय लोक और फ्यूजन नृत्य को कोरियोग्राफी
                            </p>
                            <p>
                                •विभिन्न डांस महोत्सवों में प्रस्तुति डिजिटल, Festival
                                ओरिएंटलिस,मॉन्ट्रियल, FestivaL'inde, मॉन्ट्रियल
                            </p>
                            <p>
                                •भारतीय उच्चायोग, दक्षिण अफ्रीका द्वारा क्रॉस कल्चरल इवेंट के लिए राजस्थानी
                                लोक के लिए कोरियोग्राफर और प्रस्तोता
                            </p>
                            <p>
                                राजस्थानी लोक नृत्य घूमर , पर कार्यशाला श्रृंखला
                            </p>
                            <p>
                                <u></u>
                            </p>
                            <p>
                                <u>कार्यशालाएं आयोजित</u>
                                <u></u>
                            </p>
                            <ul>
                                <li>
                                    <u>2018 - रासथानी</u>
                                    <u> लोक नृत्य </u>
                                    <u>घोमर,मॉन्ट्रियल</u>
                                    पर कार्यशाला श्रृंखला<u></u>
                                </li>
                                <li>
                                    <u>2019 - राजस्थानी लोक नृत्य घुम्मण</u>
                                    <u> कार्यशालाएं आयोजित की, फ्रेडेरिटन, </u>
                                    <u>कनाडा</u>
                                    <u></u>
                                </li>
                            </ul>
                            <p>
                                · 2009-10: दक्षिण अफ्रीकी क्रिकेट टीम, जोहानसबर्ग, दक्षिण अफ्रीका के लिए
                                टीवी वाणिज्यिक के लिए डिक्शन कोच
                            </p>
                            <p>
                                <u></u>
                            </p>
                            <p>
                                <u></u>
                            </p>
                            <p>
                                <u></u>
                            </p>
                            <p>
                                <u></u>
                            </p>
                            <p>
                                <u>पुरस्कार</u>
                                <u></u>
                            </p>
                            <ul>
                                <li>
                                    <u>2018 - बोस्टन में हिंदी </u>
                                    मंच के अंतरराष्ट्रीय साहित्यिक समारोह में भाग लेने के <u> लिए पुरस्कार</u><u></u>
                                </li>
                            </ul>
                            <p>
                                <u></u>
                            </p>
                            <p>
                                <u>स्वयंसेवक</u>
                                <u></u>
                            </p>
                            <p>
                                · मॉन्ट्रियल (2018) में महिलाओं के लिए एक कार्यक्रम का आयोजन किया गयाजहां
                                विभिन्न क्षेत्रों की महिलाओं ने अपनी प्रतिभा का प्रदर्शन किया
                            </p>
                            <ul>
                                <li>
                                    CKUT सामुदायिक रेडियो मैकगिल में रेडियो एफएम स्वयंसेवक
                                </li>
                                <li>
                                    सामुदायिक ग्रीष्मकालीन शिविरों, मॉन्ट्रियल के दौरान बच्चों को नृत्य
                                    सिखाने के लिए स्वयं सेवा
                                </li>
                            </ul>
                            <p>
                                · एबेनेज़र हनाह होम अनाथालय का समर्थन करना। नृत्य और संगीत के रूप में
                                सांस्कृतिक हस्तक्षेप के साथ महिला संगठन के माध्यम से जोहानसबर्ग।
                            </p>
                            <p>
                                · एक चैरिटी Chaaon के संस्थापक सदस्य है कि भारत में जरूरतमंद कॉलेज के छात्र
                                का समर्थन करता है
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