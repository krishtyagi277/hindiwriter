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
                                मेरी<strong> </strong>कविता<strong> </strong>मेरा<strong> </strong>परिचय
                                <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                मेरा<strong> </strong>परिचय<strong> </strong>मेरे<strong> </strong>भाव <strong></strong>
                            </p>
                            <p>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>जन्म</strong>
                                <strong>:</strong>
                                <strong> </strong>
                                मैनपुरी उत्तर प्रदेश,
                            </p>
                            <p>
                                <strong>आप्रवास: कैनाडा में अक्टूबर 1969</strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>शिक्षा</strong>
                                <strong>:</strong>
                                <strong> </strong>
                                <strong> </strong>
                                M.A.{English}<strong> </strong>Christ<strong> </strong>Church<strong>
                                </strong>College,<strong> </strong>Kanpur<strong> </strong> <strong></strong>
                            </p>
                            <p>
                                <strong> </strong>
                                B.Ed (C<strong>.</strong>I<strong>.</strong>U<strong>. </strong>N. <strong>
                                </strong>Delhi, India)
                            </p>
                            <p>
                                <strong> </strong>
                                B<strong>.</strong>A<strong> स्वर्णपदक</strong> (B.H.U. Banaras Hindu
                                University ) (B.A में बनारस हिन्दू विश्व विद्यालय के सभी science,
                                engineering व अन्य समस्त विभागों के समस्त छात्रों में ( जिन्होंने
                            </p>
                            <p>
                                परीक्षा में प्रवेश किया था) सर्वाधिक अंक अर्जित कर <strong>स्वर्णपदक व छात्रवृति
                                </strong>प्राप्त की ।
                            </p>
                            <p>
                                (I was awarded a gold medal for topping the list of all students 0f all
                                divisions who appeared in the BA exam of B.H.U.) In the year 1958)
                            </p>
                            <p>
                                Further<strong> </strong>education:<strong> </strong> IN<strong> </strong>
                                Canada<strong> </strong>Specialized in teaching of Art, Reading, ESL,
                                Special education and Integrated Studies.
                            </p>
                            <p>
                                <strong>1960 में नीहारिका पत्रिका द्वारा लेख प्रतियोगिता </strong>
                                “<strong>नारी का क्षेत्र घर या बाहर </strong>“<strong> </strong>
                                <strong>
                                    विषय पर मेरे लेख को द्वितीय पुरस्कार भी मिला। तथा प्रसिध्द लेिखका सोमा
                                    वीरा को मिला था प्रथम।
                                </strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>कार्य क्षेत्र</strong>
                                <strong>:</strong>
                                <strong> </strong>
                                In<strong> </strong>India taught in Bal Bharti Air Force school in 1967. In
                                1968 as a grade Eleven English teacher in Sarojini Nagar Govt High School,
                                New Delhi, India
                            </p>
                            <p>
                                <strong> </strong>
                                <strong>कैनाडा में</strong>
                                <strong>: </strong>
                                Started<strong> </strong>to supply teach in Canada in Dec <strong>, 1969 </strong>and
                                taught as a regular class room teacher from
                                September 1970 for The Peel Board of Education.
                            </p>
                            <p>
                                Taught<strong> </strong>until<strong> 1998 </strong>for Peel Board of
                                Education.
                            </p>
                            <p>
                                Retired<strong> </strong>in<strong> </strong>June<strong> 1998</strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>अन्य </strong>
                                <strong>गतिविधियाँ</strong>
                                <strong></strong>
                            </p>
                            <p>
                                AWIC:<strong> </strong>(Association of women of India in Canada) के लिये
                                कार्यशालाओं का आयोजन कार्यशाला व संचालन
                            </p>
                            <p>
                                Panorama<strong> </strong>India: बाल दिवस, व कवि सम्मेलन का आयोजन व संचालन,
                            </p>
                            <p>
                                <strong>हिंदी साहित्य सभा संस्थापक सदस्य</strong>
                                <strong>:</strong>
                                <strong> </strong>
                                तथा<strong> </strong>हिंदी साहित्य सभा के कवि सम्मेलनों का आयोजन व संचालन
                            </p>
                            <p>
                                <strong> पूज्य श्री श्री रवि शंकर जी</strong>
                                के टोरौन्टो के कार्यक्रमों का आयोजन व संचालन
                            </p>
                            <p>
                                <strong>संस्थापक सदस्य</strong>
                                <strong>:</strong>
                                <strong> </strong>
                                ICCS<strong> </strong>India<strong> </strong>Canada<strong> </strong>
                                Cultural<strong> </strong>Society
                            </p>
                            <p>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>हिंदी राइटर्स गिल्ड</strong>
                                <strong>:</strong>
                                सदस्य, उनके द्वारा प्रकाशित गद्य संकलन “संभावनाओं की धरती“ तथा पद्य संकलन
                                “सपनों का आकाश” में मेरी कुछ रचनायें सम्मिलित हैं।
                            </p>
                            <p>
                                <strong>चिन्मयामिशन कैनेडा: सक्रिय सदस्य</strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong></strong>
                            </p>
                            <p>
                                Share<strong> </strong>and care<strong>:</strong><strong> </strong>One of
                                the Founder members, a charitable sanstha run by only<strong> </strong>
                                ladies, providing food and other necessities to people in distress.
                            </p>
                            <p>
                                <strong>अभिरुचि: </strong>
                                बागबानी, आध्यात्म, संगीत, सितार तथा लेखन, हिन्दी व अग्रेजी दोनों भाषाओँ में
                                कविता कहानी व निबंध लेखन। कवितायें काव्य संकलन “काव्योत्पल” “प्रवासी काव्य”
                                काव्य किंजल, विश्वा, हिंदी चेतना, ““संभावनाओं की धरती” व “सपनों का आकाश”
                                कतिपय हाइकू डिजिटल पत्रिकाओं में भी प्रकाशित हुई हैं।
                            </p>
                            <p>
                                लिखा बहुत कुछ है संकलन व प्रकाशन शेष है।
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