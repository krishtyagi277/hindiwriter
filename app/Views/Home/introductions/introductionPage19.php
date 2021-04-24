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
                                </p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                <strong>जन्म</strong>
                                <strong>:</strong>
                                जेवाँ (उ.प्र.)
                            </p>
                            <p>
                                <strong>निवास स्थान</strong>
                                <strong>:</strong>
                                इंग्लैंड, गयाना व
                            </p>
                            <p>
                                सूरीनाम इत्यादिदेशों में रहने के
                            </p>
                            <p>
                                बाद अब मार्खम (ओंटेरियो) में
                            </p>
                            <p>
                                निवास
                            </p>
                            <p>
                                <strong>शिक्षा</strong>
                                <strong>:</strong>
                                एम.ए. (इंग्लि श), बी.एड. (टोरोंटो वि.वि.),
                            </p>
                            <p>
                                हिन्दी साहित्य रत्न प्रथम भाग
                            </p>
                            <p>
                                <strong>अध्यापन</strong>
                                <strong>:</strong>
                                आरम्भ में कैम्प कॉलेज, दिल्ली में अँग्रेज़ी
                            </p>
                            <p>
                                के लेक्चरार। अमेरिकन दूतावास और अमेरिकन
                            </p>
                            <p>
                                इंटरनेशनल स्कूल में हिन्दी भाषा और भारतीय
                            </p>
                            <p>
                                सभ्यता का शिक्षण। इंग्लैंड में लन्दन के इनर लन्दन
                            </p>
                            <p>
                                इजूकेशन एथारटी के अंतर्गत लगभग 10 वर्ष हाई
                            </p>
                            <p>
                                स्कूल में अध्यापन कार्य। स्कारबोरो बोर्ड ऑफ़
                            </p>
                            <p>
                                एजुकेशन में अध्यापन। लगभग 4 वर्षों तक टोरोंटो
                            </p>
                            <p>
                                वि. वि. में हिन्दी का शिक्षण
                            </p>
                            <p>
                                <strong>सम्पादन</strong>
                                <strong>:</strong>
                                लगभग 23 वर्षों से हिन्दी भाषा एवं
                            </p>
                            <p>
                                हिन्दी चेतना नामक पत्रिका के संरक्षक एवं प्रमुख
                            </p>
                            <p>
                                सम्पादक
                            </p>
                            <p>
                                <strong>प्रकाशन</strong>
                                <strong>:</strong>
                                प्रवासी काव्य और "सूखे आँसू" (आत्म
                            </p>
                            <p>
                                कथा) प्रकाशित। अनेक पत्र-पत्रिकाओं में रचनाएँ
                            </p>
                            <p>
                                प्रकाशित
                            </p>
                            <p>
                                <strong>अन्य गतिविधियाँ</strong>
                                <strong>:</strong>
                                हिन्दी प्रचार और प्रसार के हेतु
                            </p>
                            <p>
                                अनेक विराट कविसम्मेलनों का आयोजन
                            </p>
                            <p>
                                <strong>सम्मान</strong>
                                <strong>:</strong>
                                2007 में हिन्दी चेतना के प्रकाशन व हिन्दी
                            </p>
                            <p>
                                की सेवा के हेतु "अक्षरम " की ओर से डॉ. आनन्द
                            </p>
                            <p>
                                शर्मा द्वारा सम्मानित; 2017 में मारीशस के 'हिन्दी
                            </p>
                            <p>
                                सचिवालय द्ववारा’ हिन्दी सेवा के लिए विशेष
                            </p>
                            <p>
                                सम्मान
                            </p>
                            <p>
                                <strong>सम्प्रति</strong>
                                <strong>:</strong>
                                स्कारबोरो बोर्ड ऑफ़ एजुकेशन से
                            </p>
                            <p>
                                अध्यापक के पद से सेवानिवृत्त। अब हिन्दी और
                            </p>
                            <p>
                                साहित्यिक गतिविधि यों में व्यस्त।
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