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
            <div class=" col-sm-1 col-md-1 col-lg-1 pl-0">
            </div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-10">
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
                                        href="https://www.facebook.com/shailja.saksena" target="_blank"><i
                                            class="fab fa-facebook-square"></i></a> </div>

                            </div>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                <strong>1. </strong>
                                <strong>शिक्षा</strong>
                                <strong> :</strong>
                                एम ए, (हिंदी), एम फिल, पी.एच.डी. ( दिल्ली विश्वविद्यालय, दिल्ली), मानव
                                संसाधन डिप्लोमा (ह्यूमन रिसोर्स मैनेजमेंट) (मैक मास्टर यूनिवर्सिटी,
                                हैमिल्टन, कनाडा)
                            </p>
                            <p>
                                <strong>2. </strong>
                                <strong>उपलब्धियाँ</strong>
                                <strong>:</strong>
                                २०१४ और २०१५ में न्यूयार्क और न्यू जर्सी के “अंतर्राष्ट्रीय हिन्दी सम्मेलन”
                                में कनाडा का प्रतिनिधित्व तथा “कनाडा में हिन्दी साहित्य”; “कनाडा में नाटक
                                लेखन और प्रस्तुति” पर पत्र प्रस्तुति तथा कविता और कहानी सभा में प्रस्तुति;
                            </p>
                            <p>
                                काउंसलेट ऑफ इंडिया ऑफिस तथा अन्य हिन्दी की साहित्यिक संस्थाओं द्वारा
                                सम्मान, टोरोंटो की संस्था “डांसिग डैमसैल्स” के माध्यम से प्राविंशियल सरकार
                                द्वारा “वूमैन अचीवर अवार्ड-२०१८” की प्राप्ति
                            </p>
                            <p>
                                <strong>3. </strong>
                                <strong>प्रकाशित</strong>
                                <strong> </strong>
                                <strong>कृतियाँ</strong>
                                <strong>, </strong>
                                <strong>वर्ष</strong>
                                <strong> </strong>
                                <strong>एवं</strong>
                                <strong> </strong>
                                <strong>प्रकाशक</strong>
                                <strong> : </strong>
                            </p>
                            <p>
                                पुस्तकें –
                            </p>
                            <p>
                                <strong> 1.</strong>
                                क्या तुम को भी ऐसा लगा? (काव्य संग्रह), २०१४, हिन्दी राइटर्स गिल्ड, कनाडा
                                से प्रकाशित, २०१४ द्वितीय संस्करण, अयन प्रकाशन, भारत
                            </p>
                            <p>
                                <strong>2. </strong>
                                <strong>संग्रहों</strong>
                                <strong> </strong>
                                <strong>में</strong>
                                <strong> </strong>
                                <strong>प्रकाशित</strong>
                                <strong> </strong>
                                <strong>रचनायें</strong>
                                <strong>:</strong>
                            </p>
                            <p>
                                “अष्टाक्षर” (१९९२, काव्य-संग्रह) में आठ कवितायें, “काव्योत्पल” (२००९)
                                (कविता-संग्रह) में कवितायें, “हाशिये उलांघती औरत: प्रवासी” २०१३
                                कहानी-संग्रह (रमणिका फाउंडेशन, दिल्ली) में कहानी, “इतर” कहानी-संग्रह (२०१५,
                                नेशनल बुक ट्रस्ट) में कहानी तथा अन्य संग्रहों में कहानियाँ;
                            </p>
                            <p>
                                वैश्विक रचनाकार: कुछ मूलभूत जिज्ञासायें- भाग २(२०१७) में “साक्षात्कार”
                                प्रकाशित
                            </p>
                            <p>
                                3. महात्मा गाँधी विश्वविद्यालय, वर्धा और ज्ञानपीठ से प्रकाशित ”विश्व में
                                हिन्दी” पुस्तक में “कनाडा में हिन्दी” लेख
                            </p>
                            <p>
                                4. दिल्ली विश्वदिद्यालय की ई-लर्निंग साइट (ILL) पर निर्मल वर्मा के “अंतिम
                                अरण्य” लेख
                            </p>
                            <p>
                                <strong>5. </strong>
                                <strong>प्राक्कथन</strong>
                                <strong>:</strong>
                            </p>
                            <p>
                                “निर्मल भाव”- काव्य-संग्रह (निर्मल सिद्धू), “कही-अनकही”-काव्य-संग्रह (आशा
                                बर्मन)“अमृत”- उपन्यास (जसबीर कालरवि), “मृगतृष्णा”- काव्य-संग्रह (भगवतशरण
                                श्रीवास्तव), “भावनाओं के भँवर से” –काव्य-संग्रह (सविता अग्रवाल), “अम्बर
                                बाँचे पाँती”-हाइकू-संग्रह (कृष्णा वर्मा)
                            </p>
                            <p>
                                6. अनेक पत्रिकाओं तथा वेब पत्रिकाओं में समीक्षायें, साहित्यिक निबंध तथा
                                रचनायें प्रकाशित (सारिका, पाँचजन्य, शोध दिशा, क्षितिज, अनभै साँचा, गर्भनाल,
                                साहित्यकुंज, रचना समय, दस्तक, अनुभूति-हिन्दी.ओर्ग, अभिव्यक्ति-हिन्दी.ओर्ग
                                आदि)
                            </p>
                            <p>
                                <strong> 7. </strong>
                                <strong>संपादन</strong>
                                <strong>-</strong>
                                “काव्योत्पल”- २००९ सह-संपादन- हिन्दी साहित्य सभा, साहित्यकुंज.नेट- वेब
                                पत्रिका साहित्यिक परामर्श दाता
                            </p>
                            <p>
                                <strong> 8. </strong>
                                <strong>प्रकाशनाधीन</strong>
                                <strong>: </strong>
                                “अंत से पहले अनंत गाथा: भीष्म” (खंड काव्य) “थोडी देर और तथा अन्य कहानियाँ””
                                (कहानी संग्रह)
                            </p>
                            <p>
                                <strong> 9. </strong>
                                <strong>नाटक</strong>
                                <strong> </strong>
                                <strong>निर्देशन</strong>
                                <strong>:</strong>
                                अंधायुग, रश्मिरथी, मित्रो मरजानी, संत सूरदास-जीवन, संत जनाबाई
                            </p>
                            <p>
                                <strong> 10. </strong>
                                <strong>अभिनय</strong>
                                <strong>:</strong>
                                अंधायुग में गांधारी, अपनी-अपनी पसंद में माँ, उनकी चिठ्ठियाँ (तुम्हारी अमृता
                                का संक्षिप्त रूप), आई एम स्टिल मी, उधार का सुख
                            </p>
                            <p>
                                11. मेंटल और इमोशनल हैल्थ अवेयरनैस थ्रू आर्ट रेनैंसा (MEHAR) संस्था के साथ
                                नाटक द्वारा डिप्रैशन आदि बीमारियों के बारे में प्रस्तुति
                            </p>
                            <p>
                                संप्रति: स्वतंत्र लेखन, “हिन्दी राइटर्स गिल्ड” की सह-संस्थापक निदेशिका;
                                हिन्दी साहित्य सभा की आजीवन सदस्या और भूतपूर्व उपाध्यक्षा
                            </p>
                            <p>
                                <strong>निवास</strong>
                                <strong>:</strong>
                                (२२८८, डेलरिज ड्राइव, ओकविल, कनाडा- एल ६ एम, ३ एल ५) 2288, Dale Ridge Dr.
                                Oakville, Ontario-L6M 3L5
                            </p>
                            <p>
                                <strong>सम्पर्क</strong>
                                <strong>:</strong>
                                shailjasaksena@gmail.com
                            </p>
                            <p>
                                <strong>Phone no.</strong>
                                1-905-847-8663
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
            </div>
            <div class=" col-sm-1 col-md-1 col-lg-1 pr-0">
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
                <div class="d-flex flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center mt-5">
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/1.jpg")?>"
                            class="img-fluid shadow-lg border-0 w-75 wow fadeInLeft" data-wow-delay="0.3s"
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

</body>

</html>