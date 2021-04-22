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
                                <strong>जन्म</strong>
                                <strong> </strong>
                                <strong>और</strong>
                                <strong> </strong>
                                <strong>बचपन</strong>
                                <strong> : </strong>
                                21 अक्टूबर, 1952 को पंजाब के शहर जगराँव के रेलवे क्वार्टरों में। पिता वहाँ
                                के सहायक स्टेशन मास्टर थे। उचाना, रोहतक (अब हरियाणा में) व मौड़ मंडी में
                                बचपन के कुछ वर्ष बिता कर 1960 में पिता का तबादला उन्हें दिल्ली ले आया।
                                पंजाबी भाषी तेजेन्द्र शर्मा की स्कूली पढ़ाई दिल्ली के अंधा मुग़ल क्षेत्र के
                                सरकारी स्कूल में हुई।
                                <br />
                                <strong>शिक्षा</strong>
                                <strong> : </strong>
                                दिल्ली विश्विद्यालय से बी.ए. (ऑनर्स) अंग्रेज़ी एवं एम.ए. अंग्रेज़ी, कम्प्यूटर
                                कार्य में डिप्लोमा
                                <br />
                                <strong>संप्रति</strong>
                                <strong> :</strong>
                                लंदन के ओवरग्राउण्ड रेलवे में कार्यरत।
                                <br />
                                <strong>प्रकाशित</strong>
                                <strong> </strong>
                                <strong>कृतियाँ</strong>
                                <strong> : </strong>
                                काला सागर (वाणी प्रकाशन - 1990) ढिबरी टाईट (वाणी प्रकाशन - 1994), देह की
                                कीमत (वाणी प्रकाशन - 1999) यह क्या हो गया ! (डायमण्ड बुक्स - 2003), बेघर
                                आंखें (अरू प्रकाशन - 2007), सीधी रेखा की परतें (वाणी प्रकाशन - 2009 -
                                तेजेन्द्र शर्मा की समग्र कहानियां भाग-1), क़ब्र का मुनाफ़ा (सामयिक प्रकाशन
                                - 2010), दीवार में रास्ता (वाणी प्रकाशन - 2012), मेरी प्रिय कथाएं
                                (ज्योतिपर्व - 2014), प्रतिनिधि कहानियां (किताबघर - 2014) सभी कहानी संग्रह।
                                ये घर तुम्हारा है... (मेधा बुक्स - 2007 - कविता एवं ग़ज़ल संग्रह)।
                                <br />
                                1. Black &amp; White – the Biography of a Banker (2007), 2. John Keats -
                                TheTwo Hyperions (1978) 3. Lord Byron - Don Juan (1977)
                                <br />
                                <strong>अन्य</strong>
                                <strong> </strong>
                                <strong>लेखन</strong>
                                <strong> : </strong>
                                दूरदर्शन के लिए "शांति" सीरियल का लेखन।
                                <br />
                                <strong>अनूदित</strong>
                                <strong> </strong>
                                <strong>कृतियाँ</strong>
                                <strong> : </strong>
                                Grave Profits (अंग्रेज़ी – कहानियाँ), Building Bridges – ( Bilingual Poems)
                                ढिबरी टाइट, एवं कल फेर आंवीं नाम से पंजाबी, इँटों का जंगल नाम से उर्दू तथा
                                पासपोर्ट का रंगहरू नाम से नेपाली में भी उनकी अनूदित कहानियों के संग्रह
                                प्रकाशित हुए हैं। तेजेन्द्र शर्मा की कहानियाँ उड़िया, मराठी, गुजराती, चेक
                                भाषा एवं अंग्रेज़ी में भी अनूदित हो चुकी हैं।
                                <br />
                                <strong>तेजेन्द्र</strong>
                                <strong> </strong>
                                <strong>शर्मा</strong>
                                <strong> </strong>
                                <strong>के</strong>
                                <strong> </strong>
                                <strong>लेखन</strong>
                                <strong> </strong>
                                <strong>पर</strong>
                                <strong> </strong>
                                <strong>उपलब्ध</strong>
                                <strong> </strong>
                                <strong>पुस्तकें</strong>
                                <strong> :</strong>
                            </p>
                            <ol start="1" type="1">
                                <li>
                                    तेजेन्द्र शर्मा – वक़्त के आइने में (संपादकः हरि भटनागर),
                                </li>
                                <li>
                                    रचना समय – तेजेन्द्र शर्मा विशेषांक (संपादकः हरि भटनागर),
                                </li>
                                <li>
                                    बातें (तेजेन्द्र शर्मा के साक्षात्कार) – संपादकः मधु अरोड़ा
                                </li>
                                <li>
                                    हिन्दी की वैश्विक कहानी (संदर्भ तेजेन्द्र शर्मा का रचना संसार) –
                                    संपादकः नीना पॉल।
                                </li>
                                <li>
                                    कथा त्रिकोण – संपादक श्रीनिवास श्रीकान्त (एस.आर हरनोट, मनीषा कुलश्रेष्ठ
                                    एवं तेजेन्द्र शर्मा का लेखन संसार)
                                </li>
                            </ol>
                            <p>
                                <strong>* </strong>
                                कहानी अभिशप्त चौधरी चरण सिंह विश्वविद्यालय, मेरठ के एम.ए. हिन्दी के
                                पाठ्यक्रम में शामिल। और कहानी पासपोर्ट का रंग गौतम बुद्ध विश्वविद्यालय,
                                नोयडा के एम.ए. हिन्दी के पाठ्यक्रम में शामिल।
                                <br />
                                <strong>अंग्रेज़ी</strong>
                                <strong> </strong>
                                <strong>में</strong>
                                <strong> :</strong>
                                1. Building Bridges (A collection of bilingual poems – 2014), 2. Grave
                                Profits (Collection of Short Stories – 2013); 2. Black &amp; White
                                (biography of a banker – 2007), 3. Lord Byron - Don Juan (1976), 4. John
                                Keats - The Two Hyperions (1977)
                                <br />
                                <strong>अन्य</strong>
                                <strong> </strong>
                                <strong>लेखन</strong>
                                <strong> :</strong>
                                दूरदर्शन के लिये शांति सीरियल का लेखन।
                                <br />
                                <strong>गतिविधियाँ</strong>
                                <strong> : </strong>
                                अन्नु कपूर द्वारा निर्देशित फिल्म "अभय" में नाना पाटेकर के साथ अभिनय
                                <br />
                                बी.बी.सी. लन्दन, ऑल इंडिया रेडियो व दूरदर्शन के कार्यक्रमों की प्रस्तुति,
                                नाटकों में भाग एवं समाचार वाचन।
                                <br />
                                ऑल इंडिया रेडियो व सनराईज़ रेडियो लन्दन से बहुत सी कहानियों का प्रसारण।
                                <br />
                                <strong>पुरस्कार</strong>
                                <strong> :</strong>
                            </p>
                            <ol start="1" type="1">
                                <li>
                                    केन्द्रीय हिन्दी संस्थान, आगरा का डॉ. मोटुरी सत्यनारायण सम्मान – 2011.
                                </li>
                                <li>
                                    यू.पी. हिन्दी संस्थान का प्रवासी भारतीय साहित्य भूषण सम्मान 2013.
                                </li>
                                <li>
                                    हरियाणा राज्य साहित्य अकादमी सम्मान - 2012
                                </li>
                                <li>
                                    ढिबरी टाइट के लिये महाराष्ट्र राज्य साहित्य अकादमी पुरस्कार - 1995
                                    प्रधानमंत्री श्री अटल बिहारी वाजपेयी के हाथों।
                                </li>
                                <li>
                                    सहयोग फ़ाउंडेशन का युवा साहित्यकार पुरस्कार - 1998
                                </li>
                                <li>
                                    सुपथगा सम्मान – 1987
                                </li>
                                <li>
                                    \प्रथम संकल्प साहित्य सम्मान – दिल्ली (2007)
                                </li>
                            </ol>
                            <ol start="8" type="1">
                                <li>
                                    तितली बाल पत्रिका का साहित्य सम्मान – बरेली (2007)
                                </li>
                            </ol>
                            <p>
                                <strong>पुरस्कार</strong>
                                <strong>/</strong>
                                <strong>सम्मान</strong>
                                <strong> (</strong>
                                <strong>विदेश</strong>
                                <strong>) :</strong>
                            </p>
                            <ul type="disc">
                                <li>
                                    भारतीय उच्चायोग, लन्दन द्वारा डॉ. हरिवंशराय बच्चन सम्मान (2008).
                                </li>
                                <li>
                                    कृति यू.के. द्वारा वर्ष 2002 के लिये बेघर आंखें को सर्वश्रेष्ठ कहानी का
                                    पुरस्कार।
                                </li>
                            </ul>
                            <strong>सम्पर्क :</strong>
                            <a href="mailto:kahanikar@gmail.com">kahanikar@gmail.com</a>
                            ,
                            <a href="mailto:kathauk@gmail.com">kathauk@gmail.com</a>
                            <br />
                            <br />
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

</body>

</html>