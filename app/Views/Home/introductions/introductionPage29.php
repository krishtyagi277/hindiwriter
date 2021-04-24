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
                                <strong>  </strong>
                                <strong>जन्म</strong>
                                <strong> </strong>
                                <strong> :</strong>
                                <strong> </strong>
                                <strong>
                                    श्रीमती अचला दीप्ति कुमार का जन्म भारतवर्ष में साहित्यिक गतिविधियों से
                                    जीवंत शहर इलाहाबाद में हुआ
                                </strong>
                                <strong>| </strong>
                                <strong>  </strong>
                                <strong> शिक्षा</strong>
                                <strong> </strong>
                                <strong>:</strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> बी ०</strong>
                                <strong> </strong>
                                <strong> ए ०</strong>
                                <strong> </strong>
                                <strong> एवं</strong>
                                <strong> </strong>
                                <strong> एम ० ए ०</strong>
                                <strong> </strong>
                                <strong> ( प्राचीन इतिहास )</strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> की</strong>
                                <strong> </strong>
                                <strong> उपाधियाँ</strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> इलाहाबाद</strong>
                                <strong> </strong>
                                <strong>
                                    वि ० वि ० से प्रथम श्रेणी से में प्राप्त की और वहीं कुछ वर्षों तक
                                    अध्यापन
                                </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>  </strong>
                                <strong> किया ।</strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>
                                    इनके पिता श्री बाबूराम सक्सेना यूनिवर्सिटी के संस्कृत विभाग के प्रोफेसर
                                    थे ।
                                </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>बचपन से ही उत्तम भाषास्तर तथा साहित्य से परिचय हुआ </strong>
                                <strong>|</strong>
                                <strong>
                                    इलाहाबाद उस समय सांस्कृतिक व साहित्यिक गतिविधियों से जीवंत था
                                </strong>
                                <strong>|</strong>
                                <strong>
                                    इलाहाबाद विश्वविद्यालय से प्रथम श्रेणी में बीए तथा एमएम की पढ़ाई की ।
                                </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong>
                                    विवाह के पश्चात इलाहाबाद विश्वविद्यालय के डिग्री कॉलेज में
                                </strong>
                                <strong>4 </strong>
                                <strong>वर्ष प्राध्यापन किया</strong>
                                <strong> | </strong>
                            </p>
                            <p>
                                <strong>1966 </strong>
                                <strong>
                                    में कनाडा आगमन के पश्चात् यहीं टीचर्स ट्रेनिंग करके पब्लिक स्कूल में
                                    लंबे समय तक शिक्षण किया ।
                                </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>साहित्य क्षेत्र</strong>
                                <strong> </strong>
                                <strong> :</strong>
                                <strong> </strong>
                                <strong> </strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> घर में आने वाले प्रतिष्ठित साहित्यकार के संपर्क</strong>
                                <strong>  </strong>
                                <strong> </strong>
                                <strong>ने आप में अच्छे साहित्य की गहरी समझ पैदा की</strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong>
                                    । साहित्य लेखन का कार्य कनाडा में ही मौलिक लेखन का आरंभ हुआ
                                </strong>
                                <strong>| </strong>
                                <strong>इन्होंने कविताएं</strong>
                                <strong>, </strong>
                                <strong>
                                    संस्मरण तथा लेख लिखे जो अनेक भारतीय वह कनाडा की हिंदी पत्रिकाओं
                                </strong>
                                <strong> </strong>
                                <strong>में प्रकाशित हुए </strong>
                                <strong>| "</strong>
                                <strong>
                                    उदगार "हिंदी पत्रिका के संपादन मंडल में भी कई वर्ष कार्य किया
                                </strong>
                                <strong>| </strong>
                                <strong>पिछले कई वर्षों से </strong>
                                <strong>'</strong>
                                <strong>हिंदी साहित्य सभा </strong>
                                <strong>' </strong>
                                <strong>नामक हिंदी संस्था में सक्रिय रूप से भाग लिया</strong>
                                <strong>| </strong>
                                <strong>पति तथा मित्रों की प्रेरणा से</strong>
                                <strong> </strong>
                                <strong>इनकी प्रथम पुस्तक "अनेक रंग" नाम से प्रकाशित हुई</strong>
                                <strong>, </strong>
                                <strong>जिसमें कविताएं तथा संस्मरण दोनों का समावेश है</strong>
                                <strong> | </strong>
                            </p>
                            <p>
                                <strong>पुस्तक के प्रकाशन में पति</strong>
                                <strong> </strong>
                                <strong>का बहुत सहयोग है </strong>
                                <strong>| </strong>
                                <strong>
                                    दीर्घ काल के अध्यापन के कारण नन्हें बच्चों के भावात्मक विकास क़ी समझआई
                                    और उससे प्रेरित होकर कुछ संस्मरण भी लिखे
                                </strong>
                                <strong> | </strong>
                            </p>
                            <p>
                                <strong>इनकी </strong>
                                रचनायें कनाडा की हिन्दी लिट्ररेरी सोसाइटी की पत्रिका ’हिन्दी संवाद’ और
                                अमरीका की अंतर्राष्ट्रीय हिन्दी समिति की पत्रिका ’विश्वा’, कनाडा की हिन्दी
                                प्रचारिणी सभा की पत्रिका ’हिन्दी चेतना’ तथा अन्य पत्र पत्रिकाओं में
                                प्रकाशित हुई हैं। इसके अतिरिक्त आपकी कविताएँ ’कनेडियन हिन्दी काव्य-धारा’,
                                ’काव्य किंजल्क’ तथा ’प्रवासी काव्य’ पुस्तकों में भी प्रकाशित हुई हैं। इनकी
                                रचनायें ‘हिन्दी राइटर्स गिल्ड’ द्वारा प्रकाशित 'सपनों का आकाश ' तथा
                                'संम्भावनाओं की धरती' में भी संकलित हैं ।<strong></strong>
                            </p>
                            <p>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> विषय शैली</strong>
                                <strong> </strong>
                                <strong> :</strong>
                                <strong> </strong>
                                <strong> कविताओं में आत्मानुभूति सत्य तथा जीवन को सकारात्मक रूप से</strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> अपनाने का भाव रहता है</strong>
                                <strong> </strong>
                                <strong> । पाठक से भावनात्मक तादात्मय बनाने में आप कुशल हैं ।</strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> आपकी भाषा और शैली प्रवाहपूर्ण है ।</strong>
                                <strong> </strong>
                                <strong> इनकी रचनाओं में जीवन के विविध पक्षों का</strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong>
                                    अनुभव ही लेखन का मूल आधार रहा है । आपने हिन्दी सम्पादन मंडल में कई वर्ष
                                </strong>
                                <strong>  </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> कार्य </strong>
                                किया <strong> व विविध हिन्दी संस्थानों से संबंद्ध रही
                                    हैं</strong><strong> </strong><strong> ।</strong><strong> </strong><strong>
                                </strong> <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> इनकी साहित्यिक व प्रवाह - पूर्ण</strong>
                                <strong> </strong>
                                <strong> भाषा भावों के बिम्ब सहज ही प्रस्तुत कर देती है । </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> उपलब्धियाँ</strong>
                                <strong> </strong>
                                <strong> :</strong>
                                <strong> </strong>
                                <strong> आप टोरांटो</strong>
                                <strong> </strong>
                                <strong> साहित्य जगत की प्रतिष्ठित कवियित्री हैं</strong>
                                <strong> </strong>
                                <strong> । १९९४ में यॉर्क </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong>
                                    वि ० वि ० में हुये अंतर्रा्ष्ट्रीय हिन्दी अधिवेशन के अधिवेशन के अंतर्गत
                                    आयोजित कवि
                                </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong>
                                    सम्मेलन का आपने संचालन किया था ।आप हिन्दी साहित्य जगत की उपाध्यक्षा रही
                                    हैं
                                </strong>
                                <strong> </strong>
                                <strong> ।</strong>
                                <strong> </strong>
                                <strong> </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong> Email: deeptiachla@yahoo.ca</strong>
                            </p>
                            <p>
                                <strong></strong>
                            </p>
                            <p>
                                वेब उपस्थिति:
                            </p>
                            <p>
                                अनुभूति--http://www.abhivyakti-hindi.org/
                            </p>
                            <p>
                                साहित्य कुञ्ज:--- http://sahityakunj.net/
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
                        <img src="<?=site_url("/img/books/40.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
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