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
    ब्रैम्पटन (ओंटेरियो) कैनेडा
</p>
<p>
    <strong>जन्म:</strong>
    1977 ई. सिसौना,
</p>
<p>
    जनपद-बि जनौर (उ. प्र.) भारत
</p>
<p>
    <strong>संप्रति:</strong>
    प्रो. शेरिडन कॉलेज
</p>
<p>
    (ओकविल, ओंटेरियो, कैनेडा)
</p>
<p>
    <strong>शिक्षा:</strong>
    विद्याभास्कर: (गुरुकुल महाविद्यालय ज्वालापुर (हरिद्वार);
    सिद्धान्त-शास्त्री: उपदेशक
</p>
<p>
    महाविद्यालय ज्वालापुर(हरिद्वार); साहित्याचार्य: संपूर्णानंद संस्कृत
    विश्वविद्यालय (वाराणसी);
</p>
<p>
    <strong>संगीत-</strong>
    <strong>प्रभाकर:</strong>
    प्रयाग संगीत समिति(इलाहाबाद)
</p>
<p>
    <strong>साहित्यक </strong>
    <strong>गतिविधियाँ:</strong>
    लगभग 400 स्फुट
</p>
<p>
    कविताओं का सृजन। हिन्दी, संस्कृत, उर्दू और आंग्लभाषा में काव्य सृजन व लेखन।
    आकाशवाणी
</p>
<p>
    कें द्र एवं उत्तरी अमेरिकीय टी.वी. चैनलों पर कवि सम्मेलनों के माध्यम से समय
    समय पर काव्यपाठ।
</p>
<p>
    देश-विदेश की स्तरीय विभिन्न पत्र-पत्रिकाओं में रचनाओं का प्रकाशन। देश-विदेश
    के अन्तर्राष्ट्रीय
</p>
<p>
    कार्यक्रमों में काव्यपाठ एवं भाषण। भारतीय धर्म,दर्शन, संस्कृतिसाहित्य एवं
    भाषा(संस्कृत, हिंदी)
</p>
<p>
    आदिके प्रचार प्रसार में संलग्न।
</p>
<p>
    <strong>प्रकाशन:</strong>
    चन्द्रशेखर 'आज़ाद'-शतक (क्रांति-काव्य)
</p>
<p>
    2001; योग-चालीसा प्रकाशित 2014; साँझ (गीत-संग्रह) प्रकाशित 2014; Spirit of
    Love
</p>
<p>
    (आंग्लभाषीय कविताएँ) 2004
</p>
<p>
    <strong>सम्बद्धता:</strong>
    संस्थापक – स्वातंत्र्य-योग गुरुकुल (Freedom Yoga Gurukul Inc. Canada),
    संस्कृत योग सभा कनाडा (पूर्णत: लाभ-निरपेक्ष
</p>
<p>
    संस्था); सहसंस्थापक – महर्षि कणाद विद्यापीठ सिसौना (बि जनौर) उ.प्र.
</p>
<p>
    <strong>सोशल </strong>
    <strong>मीडिया:</strong>
    आचार्य संदीप कुमार त्यागी ’दीप’
</p>
<p>
    <strong>Website:</strong>
    <a href="https://www.freedomyoga.ca/">https://www.freedomyoga.ca/</a>
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