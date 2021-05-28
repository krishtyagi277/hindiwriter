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
    मेरा जन्म भारत देश का स्वर्ग कहलाने वाले काशमीर में 1968 को हुआ। जहाँ मैंने
    अपने जीवन के प्रथम 17 वर्ष व्यतीत किए, उसी दौरान मैं अपने विद्या अध्ययन के
    साथ साथ, रंगमंच, दूरदर्शन, एवं रेडियो पर होने वाले विभिन्न कायक्रमों में
    हिस्सा लेता रहा। मैंने छोटी आयु में कई नाटक लिखे व निदेशित किए, जोकि
    विद्यालय, दूरर्दशन तथा अन्य कई स्थानों पर प्रस्तुत किये गए। मैंने कुछ नाटक,
    विभिन्न विषयों पर आधारित, दूरदर्शन श्रीनगर के लिए लिखे जोकि विशेषकर बच्चों
    के लिये थे जिनमें से कुछ विषय वनसरंक्षण एंव छुआछूत जैसे भी थे। राष्ट्रीय
    नाट्‍य विद्यालय में जाना चाहता था पर होनी को कुछ और ही मन्जूर था।
    <br/>
    <br/>
    तदोपरान्त, मैं, अपनी अभियन्त्रण शिक्षा हेतु पंजाब स्थानान्त्रित हो गया जहाँ
    मैंने पंजाब की संस्कृती, संगीत तथा नृत्य की जानकारी प्राप्त की, एवं भाषा
    में निपुणुता प्राप्त कर, सांस्कृतिक कार्यक्रमों में सम्मलित हुआ। यह समय
    बहुत से कायक्रमों में व्यतीत हुआ।
    <br/>
    <br/>
    मैं अपनी अभियन्त्रण ((Electronics) शिक्षा प्राप्त कर, 1989 में, अपने जन्म
    स्थल काशमीर लौटा, जहाँ कुछ महीने काम किया और फिर आतंकवाद के काले विषैले
    बादलों ने एक अन्जान स्थान तक मेरा और मेरे परिवार का पीछा किया। "विस्थापन"
    की त्रासदी, आज ३० वर्षों के बाद भी सीने में एक हूक सी उठती है कि अपने ही
    देश में हम परदेशी हो गए। विस्थापन ने हमें बहुत कुछ सिखाया .........कौन अपना
    है कौन पराया इसकी पहचान हो गई.....
    <br/>
    <br/>
    पिछले (२८ ) वर्षों में, मुझे कई देशों का भ्रमण करने का सौभाग्य प्राप्त हुआ,
    मैंने बहुत कुछ पढ़ा व लिखा, परन्तु मेरी लेखनी में, मेरे जन्म स्थान काशमीर का
    जिक्र अवश्य रहा, तथा हर कहानी में किसी न किसी प्रकार यह विस्थापन का दर्द
    मेरे शब्दों में उजागर हुआ। कहानी लेखन के अलावा, मुझे कविता लिखने मे भी रुचि
    है। मेरी कई कविताएँ छप चुकी हैं।
    <br/>
    <br/>
    मैं अपनी यह भावना, दुख, यह सच्चाई, अपनी कहानीयों और कविताओं के द्वारा, उन
    लाखों करोड़ों हिन्दुस्तानी साथियों तक पहुँचाना चाहता हूँ, जो देश या विदेश
    में कहीं भी रह रहे हैं कि आतंकवाद के कारण क्या क्या सहन करना पड़ रहा है।
    <br/>
    <br/>
    में पिछले १२ वर्षों से हिन्दी राइटर्स गिल्ड का सदस्य हूँ जिसका उद्देश्य
    कैनेडा में हिन्दी साहित्य का प्रचार व् प्रसार के अतरिक्त , प्रवासी भारतीयों
    में हिंदी भाषा के प्रति रुचि जगाना, लेखकों को कैनेडा की पृष्ठभूमि को ध्यान
    में रखते हुए लेखन के लिए प्रोत्साहित करना, कैनेडा में हिन्दी पुस्तकों के
    प्रकाशन को स्थापित करना इत्यादि हैं! गिल्ड ने पिछले १२ वर्षों में हिंदी
    रंगमच को नए आयाम दिए ! गिल्ड ने १० प्रसिद्ग नाटकों का सफलतापूर्वक मंचन किया
    जिसमे अँधा युग, रश्मि रथी , मित्रो मरजानी , चीफ की दावत , पसंद अपनी अपनी,
    आधे अधूरे और उधार का सुख शामिल है और मैंने इन सभी नाटकों में मुख भूमिका
    निभाई है.
    <br/>
    <br/>
    कनाडा में , में अपने संयोजित परिवार मेंरह रहा हूँ, माता पिता , सपत्नी तथा
    दो बच्चों शिवान्श (पुत्र) २२ वर्ष, तथा वितस्ता (झेलम नदी का पुराणिक नाम)
    (पुत्री) १९ के साथ, जो दोनों वॉटरलू महाविद्यालय में विद्या अध्यन कर रहे है
    <br/>
    <br/>
    <br/>
    भगवान की असीम कृपा है, फिर भी मेरा मन उन लाखों भाई बहनों के लिए हमेशा रोता
    है, जो विस्थापन की त्रासदी आज भी झेल रहे हैं, तथा टूटे फूटे आशियानों में
    अपनी बहू, बेटियों की आबरू छिपाने के प्रयत्नों में जुटे हैं।
    <br/>
    २८ वर्ष विदेश मैं व्यतीत करने के उपरान्त भी हमेशा अपने विचार और अहसास में
    अपने ही देश भारत में रहता हूँ।
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