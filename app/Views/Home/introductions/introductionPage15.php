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
            <div class="col-sm-10 col-md-10 col-lg-10 ">
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

                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

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
                                <strong>
                                    <br />
                                </strong>
                            </p>
                            <p>
                                <strong>नाम</strong>
                                <strong> :</strong>
                                डॉ. रत्नाकर नराले
                            </p>
                            <p>
                                प्रो. हिन्दी, रायर्सन विश्वविद्यालय, टोरंटो कनाडा
                            </p>
                            <p>
                                50 वर्ष से कनाडा निवासी
                            </p>
                            <p>
                                <strong>शैक्षणिक</strong>
                                <strong> :</strong>
                                एम.एस्-सी. (पुणे विश्वविद्यालय),
                            </p>
                            <p>
                                पीएच.डी. (आई. आई. टी. खड़गपुर),
                            </p>
                            <p>
                                पीएच.डी. (कालीदास संस्कृत विश्वविद्यालय, नागपुर).
                            </p>
                            <p>
                                <strong>औद्योगिक</strong>
                                <strong> :</strong>
                                प्रो. हिन्दी, रायर्सन विश्वविद्यालय, टोरंटो कनाडा (2008 से)
                            </p>
                            <p>
                                पूर्ववर्ती प्रो. हिन्दी, यार्क विश्वविद्यालय, टोरंटो कनाडा
                            </p>
                            <p>
                                पूर्ववर्ती प्रो. हिन्दी, टोरंटो विश्वविद्यालय, टोरंटो कनाडा
                            </p>
                            <p>
                                अध्यापक हिन्दी, टोरंटो स्कूलबार्ड, टोरंटो कनाडा
                            </p>
                            <p>
                                अध्यापक संस्कृत, टोरंटो स्कूलबार्ड, टोरंटो कनाडा
                            </p>
                            <p>
                                अध्यक्ष, संस्कृत हिन्दी रिसर्च इन्स्टिट्यूट, टोरंटो, कनाडा
                            </p>
                            <p>
                                अध्यक्ष, पुस्तक भारती, टोरंटो, कनाडा
                            </p>
                            <p>
                                प्रधानानार्य, हिंदु इन्स्टिट्यूट, टोरंटो, कनाडा (1995 से)
                            </p>
                            <p>
                                प्रमुख संपादक, पुस्तक भारती रिसर्च जर्नल, त्रैमासिक, टोरंटो, कनाडा
                            </p>
                            <p>
                                मुख्य संपादक, साहित्य सौरभ त्रैमासिक, टोरंटो, कनाडा
                            </p>
                            <p>
                                <strong>मुख्य पुरस्कार</strong>
                                <strong>:</strong>
                                “संगीताचार्य सम्मान” कनेडियन हिंदू मिशन, स्कारबरो (2018)
                            </p>
                            <p>
                                “विश्व हिंदी सम्मान” भारतीय विदेश मंत्रालय (मारीशस 2018)
                            </p>
                            <p>
                                “सरस्वती सम्मान” हिंदी राइटर्स गिल्ड, टोरंटो. कनाडा, 2018
                            </p>
                            <p>
                                “कला वारिधि सम्मान” अखिल विश्व हिंदी समिति, टोरंटो. कनाडा, 2018
                            </p>
                            <p>
                                “हिन्दू रत्न” पुरस्कार, कनाडा के 150वी-जयंती महोत्सव पर, 2017
                            </p>
                            <p>
                                “Artist of the Year Award” Panwar Music and Dance Productions, टोरंटो,
                                कनाडा, 2016
                            </p>
                            <p>
                                “संगीतोचार्य सम्मान” कनेडियन हिंदू मिशन सेंटर, स्कारबरो, कनाडा, 2020
                            </p>
                            <p>
                                “Author, Linguist and Accomplished Scholar Award” HIL, टोरंटो, कनाडा, 2010;
                                अन्य
                            </p>
                            <p>
                                <strong>रुची </strong>
                                <strong>:</strong>
                                काव्य, प्रकाशन, संगीत, चित्रकला
                            </p>
                            <p>
                                <strong>भाषाएँ </strong>
                                <strong>: </strong>
                                हिन्दी, संस्कृत, मराठी, बंगाली, पंजाबी, तमिल, उर्दू, अंग्रेज़ी, फ्रेंच
                            </p>
                            <p>
                                <strong>.</strong>
                                <strong></strong>
                            </p>
                            <p>
                                <strong>रत्नाकर नराले लिखित कुछ मुख्य पुस्तकें </strong>
                                <strong>:</strong>
                                <strong> </strong>
                                (40 books published on
                                <a
                                    href="https://www.amazon.com/s/ref=nb_sb_ss_i_1_16?url=search-alias%3Daps&amp;field-keywords=ratnakar+narale&amp;sprefix=Ratnakar+Narale+%2Caps%2C152&amp;crid=14Y9MXVDUA0LU&amp;rh=i%3Aaps%2Ck%3Aratnakar+narale">
                                    www. Amazon.com
                                </a>
                                )
                            </p>
                            <p>
                                <strong>हिन्दी काव्य</strong>
                                1. हिंदू राजतरंगिणी, सांस्कृतिक ज्ञानगंगा (ISBN 9781897416044)
                            </p>
                            <p>
                                2. बालकृष्ण दोहावली (ISBN 978-1-897416-94-5) (2019)
                            </p>
                            <p>
                                3. नंदकिशोर दोहावली (ISBN 978-1-897416-95-2) (2019)
                            </p>
                            <p>
                                4. गीता दोहावली (ISBN 9781897416860) (2017)
                            </p>
                            <p>
                                5. रामायण दोहावली (ISBN 978-1-897416-93-8) (2019)
                            </p>
                            <p>
                                6. संगीत श्रीकृष्णायन (ISBN 9781897416822) (2017)
                            </p>
                            <p>
                                7. संगीत श्रीरामायण (ISBN 9781897416815) (2017)
                            </p>
                            <p>
                                <strong>हिन्दी पुस्तकें</strong>
                                <strong> :</strong>
                                1. गीता की छंद मीमांसा (ISBN 9781897416174)
                            </p>
                            <p>
                                2. गीता का शब्दकोश और अनुक्रमणी (ISBN 9781897416648) (2014)
                            </p>
                            <p>
                                3. गीता दर्शन (ISBN 9781897416693) (2014)
                            </p>
                            <p>
                                4. हिंदी शिक्षक (ISBN 9781897416754) (2015)
                            </p>
                            <p>
                                5. नयी संगीत रोशनी (ISBN 9781897416402) (2013)
                            </p>
                            <p>
                                6. संगीत श्रीकृष्णरामायण के गिने-चुने पुष्प (ISBN 978-1-897416-02-0) (2017)
                            </p>
                            <p>
                                7. संगीत श्री-सत्यनारायण व्रत कथा (ISBN 9781897416839) (2016)
                            </p>
                            <p>
                                8.
                                <a href="https://myaccount.ingramspark.com/Titles/TitleInfo/CSS1576426">
                                    Hindi Teacher for English Speaking People
                                </a>
                                (ISBN 9781897416617) (2014)
                            </p>
                            <p>
                                8. Hindi Teacher for Hindu Children (ISBN 9781897416754) (2015)
                            </p>
                            <p>
                                <strong>संस्कृत पुस्तकें</strong>
                                <strong> :</strong>
                                1. रत्नाकर-रचितं गीतोपनिषद् महाकाव्यम् (संस्कृत) (ISBN 9781897416723)
                                (2015)
                            </p>
                            <p>
                                2. पातंजल-योगदर्शन-दीपिका (ISBN 9781897416532) (2014)
                            </p>
                            <p>
                                3.
                                <a href="https://myaccount.ingramspark.com/Titles/TitleInfo/CSS1797537">
                                    Sanskrit Teacher All-in-One
                                </a>
                                (ISBN 9781897416679) (2014)
                            </p>
                            <p>
                                4.
                                <a href="https://myaccount.ingramspark.com/Titles/TitleInfo/CSS1313920">
                                    Sanskrit Grammar and Reference Book
                                </a>
                                (ISBN 9781897416488) (2013)
                            </p>
                            <p>
                                5.
                                <a href="https://myaccount.ingramspark.com/Titles/TitleInfo/CSS1511893">
                                    Sanskrit Primer
                                </a>
                                (ISBN 9781897416556) (2014)
                            </p>
                            <p>
                                6.
                                <a href="https://myaccount.ingramspark.com/Titles/TitleInfo/CSS1706378">
                                    Gita as She Is, in Krishna's Own Words
                                </a>
                                , Vol. I (ISBN 9781897416563) (2013)
                            </p>
                            <p>
                                7.
                                <a href="https://myaccount.ingramspark.com/Titles/TitleInfo/CSS1763425">
                                    Gita as She Is, in Krishna's Own Words, Vol. II
                                </a>
                                (ISBN 9781897416501) (2013)
                            </p>
                            <p>
                                8.
                                <a href="https://myaccount.ingramspark.com/Titles/TitleInfo/CSS1763425">
                                    Gita as She Is, in Krishna's Own Words, Vol. II
                                </a>
                                I (ISBN 9781897416501) (2013)
                            </p>
                            <p>
                                9. गीता ज्ञान कोश (ISBN 978-1897416150)
                            </p>
                            <p>
                                <strong>पाठ्य पुस्तकें</strong>
                                <strong> :</strong>
                                1. Gurumukhi Teacher ਗੁਰਮੁਖੀ ਟੀਚਰ (ISBN 9781897416761) (2015)
                            </p>
                            <p>
                                2.
                                <a href="https://myaccount.ingramspark.com/Titles/TitleInfo/CSS1553413">
                                    Tamil Teacher
                                </a>
                                தமிழ் ஆசிரியர் (ISBN 9781897416587) (2014)
                            </p>
                            <p>
                                3.
                                <a href="https://myaccount.ingramspark.com/Titles/TitleInfo/CSS1626696">
                                    Urdu Teacher
                                </a>
                                <strong>اردو</strong>
                                <strong> </strong>
                                <strong>استاد</strong>
                                (ISBN 9781897416662) (2014)
                            </p>
                            <p>
                                4. Flipped English Dictionary (ISBN 9781897416624) (2014)
                            </p>
                            <p>
                                Dr. Ratnakar Narale, <em>Prof. Hindi, Ryerson University, Toronto.</em>
                            </p>
                            <p>
                                180 Torresdale Ave. Toronto, Canada M2R 3E4
                            </p>
                            <p>
                                Local phone : +1 416 739 8004
                            </p>
                            <p>
                                WhatsApp : +1 416 666 6932
                            </p>
                            <p>
                                Email : pustak.bharati.canada@gmail.com, rnarale@yahoo.ca
                            </p>
                            <p>
                                Web : www.pustak-bharati-canada.com
                            </p>
                            <p>
                                FaceBook Account : https://www.facebook.com//Ratnakar Narale
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/10.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    हिंदू राजतरंगिणी, सांस्कृतिक ज्ञानगंगा (ISBN 9781897416044)
                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                भारत की स्वतंत्रता के पूर्व लगभग एक हजार वर्ष और स्वातंत्र्य के बाद भी
                                पीछले 70 साल से हमारी दिव्य हिंदू सकृति और उज्जवल इतिहास को नष्ट करने के
                                हीन उद्देश्य से आज तक पग-पग पर अगोरात्र दबाया, छुपाया, झुठलाया, नजरअंदाज,
                                अप्रकाशित, विकृत और बदनाम किया गया है. मगर अब हमारी आँखें खुल गई हैं और समय
                                आगया है कि हम इस षड्यंत्र को भंग करने का अहम सत्कार्य दायित्व समझ कर करें.
                            </p>
                            <p>
                                भारतवासी जनता अपना महान इतिहास समझ कर अपनी मंगल संस्कृति के दैवी बल पर भारत
                                देश को पुनःश्च रामराज्य बना कर विश्व में उसे आदर्श करें. यही हमारा आद्य
                                कर्तव्य है. इसी उद्देश्य से यह ज्ञान परक और मनोरम पुस्तक लिखी गइ है. आशा है
                                कि यह अनुसंधान पूर्वक ज्ञानगंगा अज्ञाता और ज्ञाता पाठकों की ज्ञान वृद्धि
                                करे और रिसर्च स्कालर्स के लिए यह अमर्याद सामग्री का अतुलनीय योगदान करे.
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/11.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    रत्नाकरी गीता (ISBN 9781897416068)
                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                रत्नाकर नराले द्वारा रचित संस्कृत श्लोक बद्ध गीतोपनिषद महाकाव्य
                                वाल्मीकि-रामायण समान श्लोक छंद में पार्श्वभूमिका सहित संपूर्ण गीता का विश्व
                                का पहला संस्कृत प्रतिपादन है. श्रीमद्भगवद् गीता के 700 मिश्रश्लोकों के
                                समान्तर ही इस महाकाव्य में 1500 नए शुद्ध अनुष्टुभ् श्लोक प्रस्तुत हैं. यह
                                कृति न तो गीता का अनुवाद है और न ही भाष्य, बल्कि यह श्रीमद्भगवद् गीता पर एक
                                ज्ञानप्रद भक्तिमय काव्य है.
                            </p>
                            <p>
                                इस ग्रंथ का उद्देश्य अनुत्तरित प्रश्नों का उत्तर देना और विदित कड़ियों पर
                                प्रश्नोत्तर करना है. यहाँ प्रत्येक यौगिक शब्द को स्पष्ट रूप से सुलभ भाषा
                                में परिभाषित किया गया है. ऐसा करते समय, उद्देश्य है गीता पठन के लिए उचित
                                पृष्ठभूमि प्रदान करना और गलत धारणाओं को दूर करना है, जो गीता टीकाकारों ने
                                अनजाने में उत्पन्न की हुई हैं. गीता के स्कालर्स व गीता के प्रेमियों के लिए
                                यह ज्ञान का सागर है.
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/12.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    गीता की छंद मीमांसा (ISBN 9781897416174)
                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                संस्कृत, काव्य, छंद औक व्याकरण स्कालर्स के लिए गीता का छंद मीमांसा एक मात्र
                                ऐसी पुस्तक है जिसमें मात्रा, गण, छंद, श्लोक, आदि संज्ञाओं का सविस्तर विवेचन
                                करके गीता के सभी 701 पद्यों के सभी 2804 चरणों के सभी वर्णों की मात्राएँ,
                                गुण, गण और छंदों का हर विधि से विवरण, हर रीति से जाँच, सुव्यवस्थित
                                वैयाकरणीय विश्लेषण और वर्गीकरण करके यथोचित तालिकाओं मे प्रस्तुत किया गया
                                है. गीता के एवं छंदों के स्कॉलर, पंडित और जिज्ञासुओं के लिए यह मीमांसा एक
                                अनमोल देन है. इस मीमांसा के द्वारा ही हमें ज्ञात होता है कि गीता में 109
                                विभिन्न छंद विद्यमान हैं और यहाँ उन सभी 109 छंदों का स्वरूप, व्याख्या,
                                उदाहरण और गीता में उपस्थित पुनरावृत्ति का गहन अभ्यास दृष्टिगोचर होता है. इस
                                पुस्तक में प्रस्तुत विशेष तालिकाएँ और मनोरम विश्लेषण अन्यत्र कहीं भी
                                विद्यमान नहीं है. गीता के 109 छंदों के सविस्तर अभ्यास के अतिरिक्त इस पुस्तक
                                में रुचि के लिए कुछ अन्य लोकप्रिय छंदों का भी स्वल्प अभ्यास भी दिया गया है.
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/13.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    “गीता एज इट इज इन कृष्णाज ओन वर्डस् - तीन-खंडः
                                    (ISBN 9781897416563, 9781897416501, 9781897416693)

                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                This book is not for average readers. It is a critical Sanskrit Grammatical study for
                                Gita and Sanskrit Scholars. It is an ocean of research topics for Ph.D. and D.litt.
                                scholars. This is a critical research work. This book is a lifetime study for those who
                                have dedication and patience to learn and contemplate on every word of the Divine Gita.
                                May you be a new learner, a scholar, an author, a swami, a Professor or an Institution,
                                this is the right resource for those who wish to go beyond. If one wants to learn or
                                teach Gita through Sanskrit and Sanskrit through Gita, there is no substitute.

                                From an elementary level to most scholarly level, to know the "Gita As She is in
                                Krishna's Own Sanskrit Words," this book is the sole authority. Regardless of how many
                                books on Gita you may have read, studied or written, while going through this treasure
                                of information, you will discover many Surprises, Interesting facts and Important
                                points, which you would never have known without going through this book. This books
                                removes all the misconceptions and wrong notions one has collected without properly
                                knowing what the Sanskrit words of Krishna truly mean. Seeing is believing.

                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/14.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    संगीत श्रीकृष्णायन (ISBN 9781897416822)

                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                काव्य ऐसा न था न होगा कभी. महाकाव्य परम्परा में नवरसों युक्त विभिन्न छन्दों व संगीतात्मक
                                गीतों की सुरलिपि से सुसज्जित श्रीकृष्णायन एक अद्भुत विलक्षण संगीत-लिपिबद्ध ग्रंथ है
                                जिसमें प्रेरक, शिक्षाप्रद तथा नैतिक लघु कथाएँ और उपकथाएँ विभिन्न दृष्टान्तों के साथ
                                प्रस्तुत की गईं हैं. इसमें कहीं भगवान श्रीकृष्ण की अलौकिक बाल क्रीड़ाओं की झाँकी मन को
                                सम्मोहित करती है, कहीं भगवान श्रीकृष्ण योगेश्वर के रूप में अर्जुन की भाँति किंकर्तव्य
                                विमूढ़ मानव को ज्ञान, कर्म व भक्ति का संदेश देकर उस की सोई अन्तर्चेतना को जगाते हैं.
                                इतिहास रचने वाला भारतीय संस्कृति-संस्कृत-हिंदी संगीत जगत का सबसे अनूठा एवं महान न भूतो न
                                भविष्यति हिंदी संगीत बृहत महाकाव्य है. यह बृहत् ग्रंथ हिंदी वांङ्मय की पराकाष्ठा है. राग
                                व छंदशास्त्र कि यह मंगल कविता-सविता शत-प्रतिशत संगीत से भरी है. भारतीय संस्कृति का व
                                गीत-संगीत विषय का ऐसा शायद ही कोई पहलू होगा जो इस ग्रंथ में सुंदरता से प्रस्तुत न किया
                                गया हो. इसे भारत के कई पद्म विभूषित रथी-महारथियों के आशीर्वाद हैं. यह सरस्वती का वरदान
                                है.

                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/15.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    संगीत श्रीरामायण (ISBN 9781897416815)

                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                कहीं मर्यादा पुरुषोत्तम राम के पुरुषार्थ की आदर्श कथाएँ मानव जीवन का आदर्श प्रस्तुत करती
                                हैं, तो कहीं श्रीरामभक्त हनुमान की श्रद्धा, निष्ठा व स्वामीभक्ति का त्रिवेणी संगम भक्ति
                                रस में अवगाहन करा देता है, तो कहीं सीता देवी के दैवी रूप. इस कविता को चौपाई, दोहे, छन्द,
                                श्लोक व मौलिक स्वरबद्ध गीतों से सज़ाया गया है. रामकथाओं का इतना सुंदर, मधुर, सुव्यवस्थित
                                और संगीतमय वर्णन अन्यत्र कहीं नहीं मिलेगा. यह अद्भुत ग्रन्थ कवि की सर्वतोमुखी प्रतिभा का
                                परिचायक है । इसमें आदि से अन्त तक ज्ञान, कर्म व भक्ति की त्रिवेणी प्रवाहित है . इसमें
                                अनेक नैतिक, आध्यात्मिक व प्रेरणात्मक दृष्टान्तों के साथ साथ संगीत की अनेक राग रागनियोंसे
                                परिपूर्ण भजन, गीत, आरती, कीर्तन, कीर्जन, ग़ज़ल, मुक्तक अपने विभिन्न रंग की छटा दिखाकर सब
                                को सम्मोहित कर रहे हैं । इसमें कई सारे ऐसे महत्त्वपूर्ण और दिलचस्प वर्णन हैं जो और कहीं
                                भी नहीं मिलेंगे. इस महाकाव्य में श्री राम, सीता, हनुमान, शिवजी, गौरी, विष्णु, लक्ष्मी,
                                गणेश, सरस्वती, त्यौहार, कर्म, तत्त्वज्ञान, नारी शक्ति, निसर्ग वर्णन, भारत दिग्दर्शन आदि
                                के जितने और जितने सुंदर नये पद्य पाये जाते हैं, उतने और कहीं नहीं. यह महान कृति भक्त
                                जनों के साथ साथ संगीत प्रेमियों, संगीत जिज्ञासुओं तथा नृत्य-नाटक संस्थाओं लिये भी
                                उपयुक्त साधन है .

                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/16.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    श्री शिवाजी चरित्र (ISBN 978-1-897416-84-6)

                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                यह ऐतिहासिक ग्रंथ श्री छत्रपति शिवाजी महाराज के अद्भुत कर्मों की रोचक
                                कहानियों की न भूतं न च भविष्यति हिंदी, संस्कृत, मराठी और संगीत में महाकाव्य
                                है. यह दुनिया का पहला 110 कहानियों में बना शिव अवतार शिवाजी के प्रेरणादायक
                                कर्मों के अद्भुत, मनोरंजक दर्शन कराता है. ओवी, दोहा, छांद, श्लोक और प्यारे
                                गीत अलग-अलग रागों और छंदों में दिए हैं. घटनाओं को चित्रित करने के लिए
                                पोवाडा, लावनी, भजन, आरती, कीर्तन, कविता और ग़ज़ल के साथ अलंकृत किया हैं. इस
                                तरह के प्यारे, मधुर, व्यवस्थित और संगीत संबंधी वर्णन आपको कहीं और नहीं
                                मिलेंगे, क्योंकि यदि आप इस ग्रंथ का बारकाई से पढ़ते हैं, तो आप ज्ञान के साथ
                                प्रबुद्ध होंगे. यह सिर्फ महाकाव्य से अधिक है. यह वास्तव में ज्ञान चाहने
                                पिपासु के लिए ज्ञाननीर का एक महासागर है. इसे यथासंभव उपयोगकर्ता के अनुकूल
                                रखा गया है. यह नक्षों और समय तालिकाओं से परिपूर्ण और गंभीर शोध कार्य है।
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/17.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    सांस्कृतिक ऐतिहासिक गीत रत्नाकर (ISBN 978-1-989416-03-7)

                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                इस 500 पृष्ठ कि बृहत् पुस्तक में उज्जवल भारतीय सांस्कृति के 150 से अधिक विभिन्न विषयों
                                पर लिखे हुए सुंदर ज्ञानदा श्री गणेश, स्वरदा देवी सरस्वती, भगवा ध्वज, भारत राष्ट्र गौरव,
                                जय जवान, महाराष्ट्र गौरव, माता-पिता गौरव, राष्ट्रभाषा हिंदी, देववाणी संस्कृत, महाराष्ट्र
                                भाषा मराठी, लक्ष्मी नारायण, गजेंद्र मोक्ष, सूर्य नारायण, सत्यनारायण भगवान,
                                शिव-पार्वती-गणेश, ब्रह्म विष्णु महेश, श्रवण कुमार, दशरथ जी, रामचंद्र प्रभु, जनक जी,
                                सीताराम, सीता देवी, वनवास गमन, वीर जटायु, वीर संपाती, गुह निषाद, नीतिवीर विभीषण, सुबंधु
                                लक्ष्मण, सुबंधु भरत, महावीर हनुमान, सेतु बंधन, लंका दहन, छातीफाड़ हनुमान, पुष्पक विमान,
                                रामराज्य, दीपावली, रामायण, लव-कुश, कृष्ण कुमार, देवकी नंदन, कृष्ण कन्हैया, गोविंद, माखन
                                चोरी, हरि घनश्याम, नंद गोपाल, रासलीला, राधेश्याम, मोहन, नंद किशोर, राधाकृष्ण, नटखट
                                श्याम, मुरली वाला, पूतना वध, वत्सासुर वध, तृणावर्त वध, बकासुर वध, अघासुर वध,
                                गोवर्धनधारी, कालिया मर्दन, केशिनीषूदन, कंस निकंदन, योगेश्वर श्रीकृष्ण, अध्यात्म ज्ञान,
                                ब्रह्मज्ञान, माया, आत्मशाँति-विश्वशाँति, वसुधैव कुटुम्बकम्, भूत दया, वेद वाणी, अहिंसा,
                                सांख्य योग, कर्मयोग, धर्म, ज्ञान-अज्ञान, धर्म युद्ध, अवतार, बुद्धि योग, भक्तियोग,
                                भक्ति-भाव, भवचक्र, श्रद्धा, योग सिद्धि, प्रणव, विभूति योग, ज्ञान योग, पुरुष-प्रकृति,
                                विश्वरूप दर्शन, संसार वृक्ष, गुणमाया, गीता सार, शबरी भीलनी, पुंजिकस्थला देवी, अहल्या
                                देवी, अनसूया देवी, देवी मंदोदरी, महाराणी पद्मावती, भक्त मीरा बाई, राजमाता जिजाबाई,
                                महारानी सईबाई, झाँसी की रानी, साँई, श्री दत्तात्रय, गुरु कृपा, नारद मुनि, वाल्मीक मुनि,
                                व्यास मुनि, भरद्वाज मुनि, शरभंग मुनि, सुतीक्ष्ण मुनि, महर्षि पतंजलि, गुरु नानक, गुरु
                                रामदास, वीर राजपूत लोग, महाराजा बाप्पा रावल, महाराजा चाच, महाराजा दाहीर, महाराणा संग,
                                महाराणा प्रताप सिंह, वीर मराठा लोग, छत्रपति शिवाजी, अफजलखान वध, शाहिस्तेखान पराभव,
                                शिवाजी राज्याभिषेक, वीर मुरारबाजी, वीर तानाजी, वीर बाजी प्रभु, वीर फिरंगोजी, सह्याद्री
                                पर्वत, विंध्य पर्वत, सातपुड़ा पर्वत, सिंधु नदी, गंगा मैया, यमुना रानी, नर्मदा देवी, तापी
                                देवी, गोदावरी देवी, कावेरी देवी, रामभूमि अयोध्या, तीर्थक्षेत्र चित्रकूट, पवित्र धाम
                                पंचवटी, व्रजभूमि, मधुबन, मथुरा नगरी, वृंदावन, होली, कृष्ण की द्वारका, समृद्ध विजयनगर,
                                सावन ऋतु, आदि 150 से अधिक विषयों पर आसावरी, अड़ाना, अल्हैया बिलावल, बंजारा, मिश्र,
                                बागेश्री, भैरव, भैरवी, बहार, भीमपलासी, बरहंस, भूपाली, देशकार, देस, दरबारी कान्हड़ा,
                                दुर्गा, धुनी, गौड़ मल्हार, होरी खमाज, हमीर, भिन्न षड्ज, बिहाग, बिलावल, हिंडोल, तिलंग,
                                तिलक कामोद, जंगला, जोगीया, जौनपुरी, जयजयवंती, केदार, काफी, कलावती, मालकंस, मारवा,
                                मुल्तानी, शंकरा, शुद्ध सारंग, पीलू, प्रमाती, पूर्वी, पूरिया, पूरिया धनाश्री, रामकली,
                                रासडा, रत्नाकर, खमाज, तोड़ी, वृंदावनी सारंग, यमन कल्याण, आदि 60 राग और अभंग, बालानंद,
                                भुजंगप्रयात, चौपाई, दोहा, शिखरिणी, लावणी, शार्दूलविक्रीडित, श्लोक, पृथ्वी, वसंततिलका,
                                आदि 12 छंदों के दादरा ताल, रूपक ताल, तीव्र ताल, कहरवा ताल, झप ताल, एक ताल, चौताल, तीन
                                ताल, दीपचंदी ताल, और धमार ताल, आदि 12 तालों पर लिखे हुए हमारे नए गीतों में से मनोरम
                                संगीतमय 668 गीत चुन कर प्रस्तुत किए हैं.
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/18.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    पातंजलयोगसूत्रदीपिका (ISBN 978-1-897416-88-4)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                इस आध्यात्मिक विवेचन में योगानुशासन, चित्तवृत्तिनिरोध, चित्तवृत्ति, प्रमाण, विपर्यय,
                                विकल्प, निद्रावृत्ति, स्मृति, वैराग्यम्, अविपाक, समापत्ति, क्रियायोग, क्लेश, अविद्या,
                                अस्मिता, राग, द्वेष, अभिनिवेष, क्लेशमूल, दुःख, दृश्य, गुण, दृष्टा, दृश्य, संयोग, विवेक,
                                प्रज्ञा, योगाङ्ग, यम, विश्वत्व, नियम, दोष, सत्यप्रतिष्ठा, ब्रह्मचर्य, अपरिग्रह, शौच,
                                सन्तोष, तप, स्वाध्याय, ईश्वरप्रणिधान, आसमन, द्वन्द्वातीतता, प्राणायाम, प्रत्याहार,
                                धारणा, ध्यान, समाधि, संयम, प्रज्ञालोक, अन्तरङ्ग, बहिरङ्ग, एकाग्रता, धर्मी, हेतुः,
                                परिणाम, रुतज्ञान, पुनर्जन्म, परचित्तज्ञान, अन्तर्धान, मृत्युज्ञान, हस्तिबल,
                                दूरवस्तुज्ञान, भुवनज्ञान, क्षुत्पिपासानिवृत्ति, कुण्डलीनिविद्या, सर्वज्ञान, आत्मज्ञान,
                                भुवनज्ञान, सिद्धि, परदेहप्रवेश, दिव्यश्रवणशक्ति, आकाशगमन, महाविदेह, पञ्चभूतप्रकृतिविजय,
                                कायसम्पत्, इन्द्रियजय, कैवल्य, जात्यन्तर, कर्म, फल, गुणधर्म, पन्थ, क्रम,
                                आत्म-भाव-भावना-विनिवृत्ति, आदि योगाभ्यास के बिंदुओं पर पातंजलयोगसूत्रानुसार सूक्ष्म
                                विश्लेषण किया गया है.
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/19.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    बाल कृष्ण दोहावली (ISBN 9781897416945)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                प्रस्तुत बाल श्रीकृष्ण दोहावली महाकाव्य सर्वतोपरी दैवी अद्भुत लीलाओं से ओतप्रोत भरा हुआ
                                व आध्यात्मिक गहनता से परिपूर्ण, प्रतिभावान और जागतिक इतिहास में अनुपम है. विशेष बात यह
                                कि इस काव्य के दोहे बोलचाल की साधारण सरल हिंदी भाषा में ही रचे गए हैं.

                                मायाविनी पूतना, राक्षस तृणावर्त, मायावी वत्सासुर, मायावी बकासुर, मायावी अघासुर, कालिया
                                मर्दन, गोविंद गिरिधारी, चाणूर मुष्टिक, कुवलयापीड़, कंसनिकंदन, आदि कथाएँ, भारतीय संस्कृति
                                का ऐसा कोई भी पहलू नहीं है जो इस अनूठे काव्य में रुचिरता से सन्नद्ध न किया हो. यह काव्य
                                प्रेमियों के लिये दोहाबद्ध विशाल भांडागार है.

                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/20.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    नंदकिशोर दोहावली (ISBN9781897416952)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                प्रस्तुत नंदकिशोर दोहावली काव्य राधा-कृष्ण की मनोरम रास लीलाओं से भरा हुआ व गोपाल कृष्ण
                                की नटखट कलाओं का छंद बद्ध विवरण है. विशेष बात यह कि इस काव्य के दोहे बोलचाल की साधारण
                                सरल हिंदी भाषा में ही रचे गए हैं. माखन चोरी, नटखट मुरली मनोहर, वृंदावन में होली,
                                द्वारकाधीश कृष्ण, आदि कथाएँ. भारतीय संस्कृति के लगभग सभी पहलू इस काव्य में यथोचित रूप से
                                प्रस्तुत किए गए हैं. यह काव्य प्रेमियों के लिये दोहाबद्ध विशाल भांडार है. यह महान ग्रंथ
                                लेखक की काव्य तपस्या व साधना है.
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/21.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    गीता दोहावली (ISBN 9781897416860)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                गीता दोहावली दुनिया की सबसे लंबी संगीतमय हिंदी कविता है. यह हिंदी दोहा छंद में पूर्ण रूप
                                से गीता का प्रतिपादन. श्रीमद्भगवद् गीता के 700 श्लोकों के साथ इसके 2000 दोहों का गठन
                                किया गया है. ब्रह्मण्ड दर्शन, शान्ति पाठ, योगेश्वर श्रीकृष्ण, गीता की पार्श्वभूमि,
                                धर्मक्षेत्र, धर्मयुद्ध, अर्जुन का विषाद, साङ्ख्य योग,निष्काम बुद्धि, कर्मयोग, ज्ञानयोग,
                                अभ्यासयोग, भक्तियोग, ज्ञानयोग, ब्रह्म संपदा, आत्मसंयम, द्वंद्व-भाव, गीतारहस्य,
                                विभूतियोग, क्षेत्र-क्षेत्रज्ञ, संसारवृक्ष, दैवी संपदा, श्रद्धा, मोक्ष, श्रीकृष्ण के 301
                                नाम, आदि निरूपण से समृद्ध है. यह कृति न तो अनुवाद है और न ही भाष्य, बल्कि यह
                                श्रीमद्भगवद् गीता पर एक भक्तिकाव्य है. इसका उद्देश्य अनुत्तरित प्रश्नों का उत्तर देना और
                                गीता का प्रत्येक योगिक शब्द स्पष्ट रूप से संगीतमय भाषा में परिभाषित करना है. साथ-साथ
                                गीता की उचित पृष्ठभूमि प्रदान करना और गलत धारणाओं को दूर करना है. काव्य प्रेमियों के
                                लिए, यह आध्यात्मिक ज्ञान का एक महासागर है.।
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/22.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    रामायण दोहावली (ISBN 9781897416938)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                इतिहास रचनेवाला संगीत महाकाव्य ऐसा न कभी हुआ न होगा. रघुवीर श्रीराम चंद्र व परम भक्त
                                श्री हनुमान के सर्वतोपरी दैवी अद्भुत लीलाओं से ओतप्रोत भरा हुआ यह मनोरम व आध्यात्मिक
                                गहनता से परिपूर्ण चरित्र जागतिक इतिहास में अनुपम हैं. नये रूप में रामायण लिख कर उसे
                                उत्तमतम छंद, राग सरगम से अलंकृत की हुई यह दोहाबद्ध कवितारूप प्रस्तुति अपूर्व, असामान्य
                                एवं अद्वितीय है. भारतीय संस्कृति का ऐसा कोई भी पहलू नहीं है जो इस अनूठे महाकाव्य में
                                रुचिरता से सन्नद्ध न किया हो. यह केवल काव्य मात्र ही नही बल्कि यह गंभीर संशोधन से भरा
                                हुआ शोधप्रबंध भी है. यह काव्य-संगीत प्रेमियों के लिये राग-छंदों का दोहाबद्ध व्याख्याओं
                                का ऐसा महान भांडागार है जैसा अन्य कहीं भी विद्यमान नहीं है. शिव-पार्वती गणेश,
                                लक्ष्मीनारायण, सरस्वती, राधेरानी, गुरुवर वाल्मीकि, अयोध्या वर्णन, राजा दशरथ, श्रवण
                                कुमार, श्री राम जन्म, ताड़का वध, जनक जी, अहल्योद्धार, परशुराम भार्गव, कुब्जा मंथरा,
                                दुष्ट कैकेयी, वनवास गमन, गंगा मैया, यमुना रानी, गोदावरी देवी, चित्रकूट पर्वत,
                                विंध्याद्रि पर्वत, पंचवटी, गुह निषाद, भरत मिलाप, अनसूया देवी, शरभंग मुनि, सुतीक्ष्ण ऋषि,
                                अगस्त्य मुनि, शूर्पणखा, खर-दूषण, मायावी मारीच, कांचन-मृग, लक्ष्मण रेखा, सीता अपहरण, सीता
                                विलाप, राम विलाप, वीर जटायु, गजेंद्र मोक्ष, अशोक वटिका, मंदोदरी देवी, भक्त कबंध, शबरी
                                भीलनी, पुंजिकस्थला, वीर हनुमान, सुग्रीव, तारा देवी, सरमा देवी, सेतु बंधन, लंका दहन,
                                कुंभकर्ण, इन्द्रजीत मेघनाद, राम-रावण युद्ध, संजीवनी बूटी, अग्नि परीक्षा, राम
                                राज्याभिषेक, रामराज्य, लव-कुश, दिवाली उत्सव, आदि से सजी है. यह स्वरलीपी से परिपूर्ण महान
                                ग्रंथ लेखक की दस वर्षों की काव्य तपस्या व संगीत साधना है. विश्व का पहिला रामायण श्री
                                वाल्मीकि जी का था, उनके बाद श्री तुलसी रामायण और फिर अनेकों रामायण निकले, परंतु प्रस्तुत
                                काव्य विश्व का सर्वप्रथम और एकमेव दोहाबद्ध स्वरलिपि युक्त संगीत-रामायण है.
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/23.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    श्री शिवाजी चरित्र दोहावली (ISBN 978-1-897416-30-3)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                यह ऐतिहास्कि महाकविता छत्रपति श्री शिवाजी महाराज के अद्भुत इतिवृत्त का संगीतमय
                                शिवलीलामृत है. इस के तीन सहस्र से अधिक दोहों में और एक शत से अधिक नूतन सांस्कृतिक,
                                ऐतिहासिक और राष्ट्रभक्ति के हिंदी गीतों में राष्ट्रप्रेम और प्रेरणा का अमृत ओतप्रोत भरा
                                हुआ है. महाराष्ट्र के आदितम इतिहास के साथ मराठों का अनुसंधानात्मक पूर्ववृत्त इस
                                महत्कार्य की एक अनूठी विशेषता है.
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/24.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    संगीत सत्यनारायण व्रत कथा (9781897416839)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                श्री-सत्य-नारायण व्रत की नई संगीत कथाएँ यहाँ स्कंद पुराण के रेवा खंड में भगवान व्यास
                                मुनि द्वारा वर्णित दिव्य कहानियों के साथ प्रस्तुत की गई हैं. व्यास मुनि के लेखन को अंतिम
                                सत्य के रूप में रखते हुए, नई कहानियों को पाठकों के सवालों के जवाब देने और उनकी शंकाओं,
                                भ्रम और गलतफहमी को दूर करने के लिए सुलझाया जाता है. इन कहानियों को पढ़ते हुए, जो पाठक
                                पहले से ही अन्य स्रोतों से कहानियों को जान चुके हैं, वे सकारात्मक अंतर को देखेंगे.
                                वर्तमान कहानियों में, कोई अकृत्रिम या असंगत विवरण नहीं है. प्रत्येक कहानी में प्रत्येक
                                दृश्य के समकालीन बारीक विवरण को सावधानीपूर्वक शामिल करने के लिए देखभाल भी की जाती है.
                                कहानियों को लिखते समय, यह विशेष रूप से समझा जाता है कि सुरक्षा देने के दौरान, प्रभु
                                भक्तों और उनकी संपत्ति को अस्थायी रूप से अपने भक्तों के लिए दंडित करने की प्रक्रिया के
                                दौरान कोई नुकसान या विनाश नहीं होने देते हैं. सत्यनारायण कथा के पुराने पाठक इन कहानियों
                                को थोड़ा अलग पा सकते हैं, क्यों कि यहाँ भगवान लोगों और संपत्ति को होने वाले किसी भी
                                स्पष्ट नुकसान को पुनर्स्थापित करते हैं. इस विशेष अच्छे कारण के लिए, मेरा नया
                                श्री-सत्य-नारायण व्रत कथा सागर थोड़ा अलग है जिससे कि आप यही कहानियाँ कहीं और पुस्तक में
                                पढ़ेंगे.
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/25.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    गीता का शब्दकोश व अनुक्रमणी (ISBN 9781897416648)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                गहन संशोधन और आध्यात्मिक चिंतन से रची हुई एक ऐसी अद्वितीय पुस्तक है कि जो गीता व संस्कृत
                                के गम्भीर छात्रों के लिए अनमोल ज्ञान का भंडार है. ऐसी रचना पद्धति और तांत्रिक प्रणालि
                                अन्य किसी भी श्ब्दकोश में विद्यमान नही है. इस अनूठे व अनुपम पुस्तक के बारे में दिल्ली के
                                श्रीमान कुलदीप धीमान जी कहते हैं, “Dear Dr Narale, I bought your book Geeta Ka Shabdkosh
                                from World Book Fair New Delhi 2017. I would like to congratulate you on your superb
                                scholarship and hard work. It is a wonderful book and it will be very useful to scholars
                                and serious readers. Please keep up the good work.”
                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/26.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    हिंदी टीचर (ISBN 9781897416716)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                अहिंदी भाषी छात्रों के लिए खास लिखी हुई यह लोकप्रिय पुस्तक है विषय घिसा-पिटा बुनियादी
                                होकर भी हिंदी सीखने की अन्य सभी पुस्तकों से इसकी रचना एकदम भिन्न मगर प्रभावशाली है.
                                इसमें पाए जाने वाले हिंदी के नौ नोबल-सिद्धांत, हिंदी व्याकरण की ब्रेन-सर्जरी, एक्स-रे
                                विजन से हिंदी वाक्य विन्यास, संपूर्ण हिंदी के प्रथम पुरुष, द्वितीय पुरुष, तृतीय पुरुष,
                                पुंलिंग, स्त्रीलिंग, एक वचन, अनेक वचन, साधारण, अपूर्ण, पूर्ण वर्तमान, भूत, भविष्यत काल,
                                आद् सभी वैयाकरणीय विधाओं के प्रयोग दर्शाने वाली अनूठी, सरल व सुगम तालिका, ...आदि प्रकरण
                                न पहले कभी किसी ले सोचे, न अन्य किसी पुस्तक में पाए जा सकते हैं. हिंदी के पंडित भी इस
                                अनुसंधान को देख कर विस्मित होते हैं. डॉ. नेविन यंग कहते हैं, “इट इज़ ए वर्क ऑफ जीनियस.”
                                यह पुस्तक खास उन भारतीय डाइस्पोरा छात्रों के लिए लिखी है जिनकी बोलचोल की साधारण भाषा
                                अंग्रेज़ी है. इस कारण से, पहली पायदान से ही इसकी रचना पद्धति अलग व नूतन ढंग से बनी है,
                                जो कि अन्य किसी भी पुस्तक में नहीं पाई जा सकती. यह रीति केवल नई ही नहीं बल्कि बहुत सुगम
                                व प्रभावशाली है. अतः आशा है कि भविष्य में यह रीति सर्वतः आपनाई जाए. ज्ञात है, कि लोग
                                चलती जारही रूढ़ीबद्ध रीति छोड़ कर नया बदलाव स्वीकारने में झिझकते हैं, मगर लाभ इसी में
                                है. प्रवासी भारतीय तथा अहिंदी-भाषी भारतीय हिंदी शिक्षार्थियों के लिये इससे बढ़ कर
                                सर्वतोपरी परिपूर्ण अन्य सुलभ साधन नहीं है.

                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/27.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    हिंदी टीचर फॉर हिंदु चिल्ड्रेन (ISBN 9781897416754)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                प्रवासी भारतीय द्वारा प्रवासी हिंदु भारतीय व डायस्पोरा युवकों के लिए हिंदी भाषा व हिंदु
                                संस्कृति की शिक्षा की पुस्तक भारती की यह अद्वितीय पुस्तक है.भारत के बाहर रहने वाले हमारे
                                अंग्रेज़ी भाषी बच्चों को हिंदी के साथ-साथ सनातन भारतीय संस्कृति की शिक्षा प्रदान करने का
                                यह एक नया प्रकल्प है. इस पुस्तक में विशेष दिग्दर्शन हैं हिंदु लोगों की वैश्विक, भारतीय
                                और भौगोलिक विद्यमानता, हमारे पवित्र तीर्थस्थान, पवित्र नदियाँ, पवित्र ऋषि-मुनि, पवित्र
                                महाभाग, पवित्र मंदिर, पवित्र त्यौहार, हमारा पवित्र धर्म, पवित्र सदाचार, पवित्र इतिहास,
                                पवित्र प्रार्थनाएँ, पवित्र संगीत, देवनागरी के पवित्र अक्षर और अंकों का वैदिक महत्व, आदि
                                प्रकरण जो किसी अन्य पुस्तक में विद्यमान नहीं हैं. इस विधा की यब विश्न कग प्रथम व एकमात्र
                                पुस्तक है.
                                इसकी शिक्षा प्रणाली का रंग-ढंग उपरोक्त हिंदी टीचर की शैली जैसा है. राष्ट्रीय स्वयंसेवक
                                संघ के पूजनीय सरसंघचालक महाभाग श्री मोहन भागवत जी से सराहना व शुभ आशीर्वाद प्राप्त यह
                                पुस्तक समुचित चित्रों से ओतप्रोत परिपूर्ण है. हमारी नई पीढ़ी के लिए यह विना पर्याय की एक
                                संग्रहणीय पुस्तिका है. इसका लाभ कई देशों के प्रवासी भारतीय व भारतीय मूल के लोग उठा रहे
                                हैं.


                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/28.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    संस्कृत व्याकरण व संदर्भ पुस्तक (ISBN 9781897416686)



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                अखिल विश्व में बड़ी संस्था संख्या में खरीदे जाने वाले यह 750 पृष्ठ वाला अनुपम महाकोश
                                संस्कृत सीखने एवं लिखने वालों के लिए असामान्य ज्ञान भांडागार है. संस्कृत के बुनियादी
                                छात्र से लेकर पीएचडी तक के सभी छात्रों और संस्कृत प्रेमियों के लिए अति उपयुक्त और
                                अनिवार्य वाले इन पुस्तकों में ऐसे कई अहम पाठ हैं, ऐसे कई अनूठे प्रतिपादन हैं, ऐसे
                                आविष्कार हैं, ऐसे नूतन प्रत्यय हैं, कि जो अन्य किसी एक पुस्तक में नहीं पाए जाते. धातु का
                                वैयाकरणिक कोष, पिंगल छंदशास्त्र का बृहत छंदसूत्र सागर, विभिन्न विभक्ति प्रयोग की
                                परिपूर्ण विशाल तालिका, क्रियापद प्रयोग की प्रक्रियाएँ, आदि के पाठ इस पुस्तक की असाधारण
                                एवं अतुलनीय विशेषताएँ हैं. यह संस्कृत की एक महत्वपूर्ण मुल्यातीत पुस्तक है.

                                4, 5, 6, 7, 8, 9, अन्य शैक्षणिक पुस्तकें --
                                तमिल टीचर, गुरुमुखी टीचर, उर्दू टीचर, बंगाली टीचर, गुजराती टीचर, मराठी टीचर, आदि.


                            </p>
                        </div>
                        <!--end -->

                    </div>
                </div>
                <div class="row rounded bg-white pt-3 pb-3 mb-5 w-100 wow fadeInUp mt-4 intro-description-page"
                    data-wow-delay="0.5s">

                    <div class="col-sm-12 col-md-12 col-lg-12 pl-3 pr-0 pt-2 wow fadeInRight" data-wow-delay="1.8s">
                        <div class="col-sm-8 col-md-8 col-lg-6 pl-0 pr-0 pt-2 pr-2 float-left">
                            <img src="<?=site_url("/img/books/29.jpg")?>"
                                class="w-50 img-fluid mx-auto d-block wow fadeInLeft" style="border:8px solid #ff3354;"
                                data-wow-delay="1.8s" alt="intro-image">
                            <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                                style="font-size:1.8rem;color:#6A1B4D; word-wrap: break-word;"><b>
                                    अहम पत्रकारिता



                                </b></p>
                        </div>
                        <!-- intro description here -->
                        <div class="intro-page-description">
                            <p>
                                रत्नाकर नराले के संपादन व अध्यक्षता में पुस्तक भारती कनाडा की ISSN (2562-6086) प्राप्त
                                पत्रकारिता है, ई-पत्रिकाएँ पुस्तक भारती रिसर्च जर्नल और भारत-सौरभ
                                (www.pustak-bharati-canada.com). यह त्रैमासिक-द्विभाषीय शोधपरक ई-पत्रिका हिंदी, संस्कृत,
                                भारतीय कला, संगीत एवं संस्कृति के प्रचार-प्रसार हेतु टोरंटो, कनाडा से प्रकाशित है. यह
                                कनाडा की एक मात्र भारतीय रिसर्च जर्नल है. इस पत्रिका में केवल यथोचित संदर्भ, आरेख और
                                छायाचित्र के साथ लिखे हुए उच्च स्तरीय शोधपरक, ज्ञानपरक अथवा नाविन्यपूर्ण गद्य/पद्य आलेख
                                ही प्रकाशित होते हैं. इसके कार्यकारी मंडल में विश्व के भारत और कनाडा के अतिरीक्त 20 से
                                अधिक देशों से विश्वविद्यालयिन वाइस-चांसलरर्स, प्रोफेसरर्स, डीन्स तथा इन्यान्य दिग्गज
                                महाभाग संलग्न हैं. इन ई-पत्रिकाओं द्वारा इंटरनेट के माध्यम से कनाडा, भारत और सारे विश्व
                                के हिंदी जन समाज को वाङ्मयीन सेवा दे रही है.


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
                        <img src="<?=site_url("/img/books/30.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

                    </div>
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/31.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

                    </div>
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/32.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

                    </div>
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/33.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

                    </div>
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/34.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

                    </div>
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/35.jpg")?>"
                            class="img-fluid shadow-lg w-75 wow fadeInLeft" data-wow-delay="0.3s"
                            alt="activity-cricle" />

                    </div>
                    <div class="intro-box-container intor-page-book-section">
                        <img src="<?=site_url("/img/books/36.jpg")?>"
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