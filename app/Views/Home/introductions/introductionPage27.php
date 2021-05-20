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
                            <div class="d-flex flex-row flex-wrap flex-sm-row justify-content-center">
                                <div class="p-3 bd-highlight pointer" style="font-size:1.8rem;"><a
                                        href="https://www.facebook.com/savita.aggarwal.566" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a> </div>
                               

                            </div>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                        <p>
    <strong>जन्म</strong>
    <strong> </strong>
    <strong>तिथि</strong>
    <strong>: 17</strong>
    <strong> </strong>
    <strong>जनवरी</strong>
    <strong> 1951 </strong>
    <strong></strong>
</p>
<p>
    <strong>जन्म</strong>
    <strong> </strong>
    <strong>स्थान</strong>
    : मेरठ, उत्तर प्रदेश, भारत
</p>
<p>
    <strong>वर्तमान</strong>
    <strong> </strong>
    <strong>निवास</strong>
    : मिसिसागा, ओंटारियो, कैनेडा
</p>
<p>
    <strong>शिक्षा</strong>
    : एम. ए. (कला), मेरठ विश्विद्यालय के अंतर्गत
</p>
<p>
    <strong>काव्य</strong>
    <strong> </strong>
    <strong>संग्रह</strong>
    : “भावनाओं के भंवर से” प्रकाशित |
</p>
<p>
    <strong>प्रकाशित</strong>
    <strong> </strong>
    <strong>रचनाएँ</strong>
    : कैनेडा, भारत और निदरलैंड की पत्र-पत्रिकाओं, हिंदी टाइम्स, हिंदी चेतना,
    साहित्य कुञ्ज, चाणक्य वार्ता, साहित्य सुधा, हिंदी मीडिया, प्रयास, सहज
    साहित्य, हिंदी हाइकु, गर्भनाल, त्रिवेणी, अम्स्तेलगंगा, रंग और नूर में
    प्रकाशन | “खट्टे मीठे रिश्ते” उपन्यास की सह-लेखिका | गद्य संकलन ‘संभावनाओं
    की धरती’ और पद्य संकलन ‘सपनों का आकाश’ में कहानी, संस्मरण, कवितायेँ और
    हाइकु प्रकाशित | “ग्लोबल हिंदी ज्योति” के सौजन्य से प्रकाशित “हाइकु एक
    बोंजाई” हाइकु संकलन में प्रतिभागिता |
</p>
<p>
    <strong>लेखन</strong>
    <strong> </strong>
    <strong>विधाएं</strong>
    : कविता, कहानी, लघु कथा, हाइकु, सेदोका, दोहे, क्षणिकाएं, चतुष्पदियाँ,
    संस्मरण, व्यंजन |
</p>
<p>
    <strong>उल्लेखनीय</strong>
    <strong> </strong>
    <strong>गतिविधियाँ</strong>
    : लेखन, समाज सेवा, कार्यक्रम संचालन, योग, बागवानी |
</p>
<strong>संपर्क</strong>
<p>
    : savita51@yahoo.com
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
                <div class="d-flex flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center align-items-center mt-5">
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/39.jpg")?>"
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