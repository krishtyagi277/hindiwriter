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
            <div class="col-sm-1 col-md-1 col-lg-1 ">
            </div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 ">
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

                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page" data-wow-delay="1.5s">

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
                                            href="https://www.facebook.com/profile.php?id=100005248741506" target="_blank"><i
                                                class="fab fa-facebook-square"></i></a> </div>

                                </div>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                <strong>शिक्षा</strong>
                                <strong>: </strong>
                                <strong>दिल्ली</strong>
                                <strong> </strong>
                                <strong>विश्वविद्यालय</strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>प्रकाशित</strong>
                                <strong> </strong>
                                <strong>कृतियाँ</strong>
                                <strong>, </strong>
                                <strong>वर्ष</strong>
                                <strong> </strong>
                                <strong>एवं</strong>
                                <strong> </strong>
                                <strong>प्रकाशन</strong>
                                <strong> :</strong>
                            </p>
                            <p>
                                <strong><u>पुस्तकें</u></strong>
                                <br />
                                अम्बर बाँचे पाती (हाइकु संग्रह) २०१४, हिन्दी राइटर्स गिल्ड, कनाडा से
                                प्रकाशित; २०१४ द्वितीय संस्करण, अयन प्रकाशन, भारत से।
                            </p>
                            <p>
                                <strong><u>संग्रहों</u></strong>
                                <strong><u> </u></strong>
                                <strong><u>में</u></strong>
                                <strong><u> </u></strong>
                                <strong><u>प्रकाशित</u></strong>
                                <strong><u> </u></strong>
                                <strong><u>रचनाएँ</u></strong>
                                <em><u>-</u></em>
                            </p>
                            <p>
                                1.यादों के पाखी (२०१२-हाइकु संग्रह)
                            </p>
                            <p>
                                2.अलसाई चाँदनी (२०१२-सेदोका संग्रह)
                            </p>
                            <p>
                                3.उजास साथ रखना (२०१३-चोका संग्रह)
                            </p>
                            <p>
                                4.आधी आबादी का आकाश (२०१४-हाइकु संग्रह)
                            </p>
                            <p>
                                5.पीर भरा दरिया (२०१६-माहिया संग्रह)
                            </p>
                            <p>
                                6.स्वप्न-श्रंखला (२०१८-हाइकु संग्रह),
                            </p>
                            <p>
                                7.झरा प्यार-निर्झर (२०१८-तांका संग्रह)
                            </p>
                            <p>
                                8.गीले आखर (२०१८-चोका संग्रह)
                            </p>
                            <p>
                                9.लघुकथा अनवरत एवं कविता अनवरत संकलनों में रचनाएँ।
                            </p>
                            <p>
                                <strong><u>समीक्षाएँ</u></strong>
                                <strong><u>-</u></strong>
                            </p>
                            <p>
                                1."लघुकथा का वर्तमान परिदृश्य"-लघुकथा समालोचना (रामेश्वर काम्बोज ’हिमांशु’)
                            </p>
                            <p>
                                2.“तुम सर्दी की धूप"- काव्य-संग्रह (रामेश्वर काम्बोज ’हिमांशु’)
                            </p>
                            <p>
                                3.“ज़रा रोशनी मैं लाऊँ"- काव्य-संग्रह (डॉ. भावना कुँअर)
                            </p>
                            <p>
                                4.“घुँघरी"-काव्य-संग्रह (डॉ. कविता भट्ट)
                            </p>
                            <p>
                                5.“वादों की परछाइयाँ"- उपन्यास (पूनम चंद्रा ’मनु’)
                            </p>
                            <p>
                                <strong><u>पत्र</u></strong>
                                <em><u>-</u></em>
                                <strong><u>पत्रिकाओं</u></strong>
                                <em><u>, </u></em>
                                <strong><u>वेब</u></strong>
                                <em><u>-</u></em>
                                <strong><u>पत्रिकाओं</u></strong>
                                <strong><u> </u></strong>
                                <strong><u>में</u></strong>
                                <strong><u> </u></strong>
                                <strong><u>प्रकाशन</u></strong>
                                <em><u>-</u></em>
                            </p>
                            <p>
                                हिन्दी चेतना, गर्भनाल, सादर इण्डिया, नेवा: हाइकु, शोध दिशा, सरस्वती सुमन,
                                अम्स्टेल गंगा, गवेषणा, हरिगंधा, हाइफन, हिन्दी-टाइम्स
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
                                हिन्दी हाइकु, त्रिवेणी, सहज साहित्य, लघुकथा.कॉम , साहित्य कुंज नेट,
                                अभिव्यक्ति मासिक, रचनाकार, उदन्ती.कॉम आदि में हाइकु, ताँका, चोका, सेदोका,
                                माहिया, कविताएँ, क्षणिकाएँ, लघुकथाएँ एवं समीक्षाओं का प्रकाशन।
                            </p>
                            <p>
                                <strong>उपलब्धि</strong>
                                <strong>:</strong>
                            </p>
                            <p>
                                सरदार पटेल विश्वविद्यालय की शोधार्थी पूर्वा शर्मा के शोधपत्र के एक अध्याय <em>"</em>सरहद
                                के पार<em>: </em>हिन्दी हाइकुकार<em>" </em>में मेरे हाइकु
                                शामिल।
                            </p>
                            <p>
                                <strong><u>पुरस्कार</u></strong>
                                <em><u>:</u></em>
                            </p>
                            <p>
                                विश्व हिन्दी सचिवालय की अंतर्राष्ट्रीय हिन्दी कविता प्रतियोगिता (2013) में
                                द्वितीय स्थान प्राप्त।
                            </p>
                            <p>
                                <strong><u>प्रशस्ति</u></strong>
                                <strong><u> </u></strong>
                                <strong><u>पत्र</u></strong>
                                <em><u>:</u></em>
                            </p>
                            <p>
                                हिन्दी प्रचारणी सभा व हिन्दी चेतना (कैनेडा) द्वारा काव्य साधना एवं हाइकु
                                विधा के प्रति अनुराग हेतु प्रशस्ति पत्र की प्राप्ति।
                            </p>
                            <p>
                                <strong><u>अभिनय</u></strong>
                                <em><u>:</u></em>
                            </p>
                            <p>
                                हिन्दी राइटर्स गिल्ड द्वारा मंचित इन नाटकों में माँ की भूमिका निभाई।
                            </p>
                            <p>
                                1.मित्रो मरजानी (लेखिका: कृष्णा सोबती)
                            </p>
                            <p>
                                2.संत जनाबाई
                            </p>
                            <p>
                                3.चीफ की दावत (लेखक: भीष्म साहनी)
                            </p>
                            <p>
                                4.उधार का सुख (लेखक: अभिराम भडकमकर) श्री प्रकाश दाते द्वारा निर्देशित नाटक
                                मराठी नाटक ’सुखांशी भाडंती आहि’ का हिन्दी रूपांतरण [द्वारा: डॉ. शैलजा
                                सक्सेना तथा श्री प्रकाश दाते]
                            </p>
                            <p>
                                <strong>सम्प्रति</strong>
                                <strong>:</strong>
                            </p>
                            <p>
                                स्वतंत्र लेखन, हिन्दी राइटर्स गिल्ड की परिचालन निदेशिका। कनाडा की
                                अंतर्राष्ट्रीय त्रैमासिक पत्रिका हिन्दी चेतना के परामर्श-मंडल की सदस्या।
                            </p>
                            <p>
                                <strong>निवास</strong>
                                <strong>:</strong>
                            </p>
                            <p>
                                62, हिलहर्सट ड्राइव, रिचमण्डहिल, ओंटेरियो, कनाडा, एल4बी 2वी3
                            </p>
                            <p>
                                <strong>सम्पर्क</strong>
                                <strong>:</strong>
                                <a href="mailto:kvermahwg@gmail.com">
                                    <strong>kvermahwg@gmail.com</strong>
                                </a>
                            </p>
                            <p>
                                <strong>Phone:</strong>
                                1-905-918-0919
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
                        <img src="<?=site_url("/img/books/2.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

                    </div>
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/3.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

                    </div>
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/4.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

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