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
    <meta name="title" content="सदस्य बनिये">
    <meta name="description" content="सदस्य बनिये">
    <meta property="og:url" content="<?=site_url("/home/becomesponser")?>" />
    <meta property="og:type" content="website">
    <meta property="og:description" content="सदस्य बनिये">
    <meta property="og:title" content="सदस्य बनिये">
    <meta property="og:image" content="<?=site_url("/img/HWG-LOGO-21.png") ?>">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="720">
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
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
                <img src="<?=site_url("/img/41.png")?>" class="img-fluid float-left side-flower wow fadeInLeft"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 pl-0 pr-0 intro-box-container">
                <div class="intro-box-text intro-box-size">

                    <p class="text-center wow fadeInUp p-3 pb-5 mb-2" data-wow-delay="0.2s"
                        style="font-size:2.8vw;color:#6A1B4D; word-wrap: break-word;"><b>
                            सदस्य बनिये
                        </b>
                    </p>

                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
                <img src="<?=site_url("/img/16.png")?>" class="img-fluid float-right side-flower wow fadeInRight"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
        </div>
    </div>
    <!-- Detail page tile section-->
    <div class="container-fluid bg-light detail-tile-bg">
        <div class="row mb-2">

            <div class="d-none d-sm-block d-md-block d-lg-block col-sm-2 col-md-2 col-lg-2 pl-0">
                <img src="<?=site_url("/img/31.png")?>" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 ">
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 intro-box-container ">
                        <img src="<?=site_url("/img/9.png")?>"
                            class="img-fluid mx-auto d-block wow fadeInDown detail-page-heading" data-wow-delay="0.3s"
                            alt="intro-box" />
                        <div class="intro-box-text ">
                            <p class="text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s"><b>
                                    सदस्य बनिये</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-2 shadow-lg donation-form mb-5 bg-white rounded text-dark">
                    <div class="row">
                        <div
                            class="col-sm-10 col-md-10 col-lg-10 col-xs-12 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 text-justify">
                            <p>हिन्दी राइटर्स गिल्ड का स्दस्य बनने में रुचि दिखाने के लिए धन्यवाद। हमारी की सदस्त्या की
                                जानकारी निम्नलिखित है -</p>

                            <ul>
                                <li>हमारी की सदस्यता वार्षिक है यानी प्रति वर्ष सदस्यता का नवीकरण अनिवार्य है।&nbsp;
                                </li>
                                <li>सदस्यता का कोई शुल्क नहीं है परन्तु आपकी आर्थिक सहायता का स्वागत है और इसके बारे
                                    जानकारी नीचे दान के अंतर्गत दी गयी है।</li>
                                <li>हमारी में सदस्यता दो प्रकार की है।</li>
                                <li>पहली श्रेणी लेखकों की है और दूसरी श्रेणी उन हिन्दी साहित्य प्रेमियों की है, जो लिखते
                                    नहीं परन्तु अच्छे साहित्य में रुचि लेते हैं। हिन्दी राइटर्स गिल्ड में सभी का स्वागत
                                    है।</li>
                                <li>माँगे गये फोन नम्बरों में से होम फोन या मोबाइल में एक अनिवार्य है। ऑफ़िस नम्बर या
                                    फ़ैक्स नंबर अगर आप देना चाहें तो यहाँ लिख सकते हैं।</li>
                                <li>नीचे दिये गए फ़ॉर्म में Publications Links केवल लेखकों के लिए है। इसका उद्देश्य
                                    सदस्यता प्रदान करने से पहले आवेदक के लेखन कर्म से परिचित होने का है। अगर आपकी रचनाएँ
                                    इंटरनेट पर किसी भी प्रारूप में उपलब्ध हैं तो कृपया उनमें से अपनी प्रतिनिधि रचनाओं के
                                    लिंक यहाँ पर पेस्ट कर दें। अगर आपके पास लिंक नहीं है तो आप अपनी प्रतिनिधि रचना यहाँ
                                    पेस्ट कर दें।</li>
                                <li>अगर आपकी प्रकाशित पुस्तके किसी भी प्रकाशक की वेबसाईट पर देखी जा सकतीं हैं तो उनके भी
                                    लिंक भेज दें।&nbsp;</li>
                                <li>Password - यह पासवर्ड आपका अपने एकाउंट का है। &nbsp;अगर आप अपना सदस्यता खाता देखना
                                    चाहते हैं तो आपको इसकी आवश्यकता होगी, इसलिए ऐसा पासवर्ड चुनें जो आसानी से याद रह
                                    सके।</li>
                            </ul>

                            <p><em><strong>दान</strong></em></p>

                            <ol>
                                <li>हिन्दी राइटर्स गिल्ड पंजीकृत &nbsp;(फ़ेडरल) लाभ निरपेश संस्था है और इसका कोई सदस्यता
                                    शुल्क नहीं है। परन्तु कोई भी संस्था को जीवित रखने के लिए धन की आवश्यकता होती है -
                                    इसलिए आपके दान का स्वागत है। &nbsp;#25 CDN से अधिक दिये दान की टैक्स रसीद आपको ई-मेल
                                    से भेज दी जाएगी।</li>
                                <li>आप आर्थिक सहायता चेक द्वारा या ई-ट्रांसफ़र द्वारा कर सकते हैं। उपयुक्त बॉक्स को चेक
                                    करने से पॉप अप विंडों में विधि बतायी गयी है।</li>
                            </ol>
                        </div>
                    </div>
                    <form name="member_registration_form" id="member_registration"
                        onsubmit="becomeMemberEmail(event)" 
                        class="form-horizontal" >
                        <div class="form-group row">
                            <label for="first_name" class="col-sm-2 control-label">First Name *</label>
                            <div class="col-sm-5 ">
                                <input type="text" name="first_name" id="first_name" class="form-control" value=""
                                    placeholder="in English">
                            </div>
                            <div class="col-sm-5 ">
                                <input type="text" name="first_name_hn" id="first_name_hn" class="form-control" value=""
                                    placeholder="in Hindi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-sm-2 control-label">Last Name *</label>
                            <div class="col-sm-5 ">
                                <input type="text" name="last_name" id="last_name" class="form-control" value=""
                                    placeholder="in English">
                            </div>
                            <div class="col-sm-5 ">
                                <input type="text" name="last_name_hn" id="last_name_hn" class="form-control" value=""
                                    placeholder="in Hindi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 control-label">Email *</label>
                            <div class="col-sm-5 ">
                                <input type="text" name="email" onchange="setEmailId(event)" id="email" class="form-control" value=""
                                    placeholder="Email ID (this will be your login ID)">
                            </div>
                            <label for="author" class="col-sm-2 control-label" style="font-size: 0.9em;">Are you a
                                Writer? *</label>
                            <div class="col-sm-3 ">
                                <label class="radio-inline">
                                    <input type="radio" name="author" id="author-yes" value="yes"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="author" id="author-no" value="no"> No
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone_no" class="col-sm-2 control-label">Mobile No *</label>
                            <div class="col-sm-5 ">
                                <input type="text" name="phone_no" id="phone_no" class="form-control" value=""
                                    placeholder="Mobile No.">
                            </div>
                            <label for="office_no" class="col-sm-1 control-label"
                                style="padding-left: 0; padding-right: 0;">Office No</label>
                            <div class="col-sm-4 ">
                                <input type="text" name="office_no" id="office_no" class="form-control" value=""
                                    placeholder="Office No.">
                            </div>

                            <!--						<label for="photo" class="col-sm-1 control-label">Photo *</label>-->
                            <!--						<div class="col-sm-2">-->
                            <!--							<input type="file" name="photo" id="photo" class="">-->
                            <!--							<p class="help-block">Max file size: 2 MB</p>-->
                            <!--						</div>-->

                        </div>
                        <div class="form-group row">
                            <label for="home_no" class="col-sm-2 control-label">Home No</label>
                            <div class="col-sm-5 ">
                                <input type="text" name="home_no" id="home_no" class="form-control" value=""
                                    placeholder="Home No.">
                            </div>
                            <label for="fax_no" class="col-sm-1 control-label">Fax No</label>
                            <div class="col-sm-4 ">
                                <input type="text" name="fax_no" id="fax_no" class="form-control" value=""
                                    placeholder="Fax No.">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-sm-2 control-label">Location *</label>
                            <div class="col-sm-4 ">
                                <input type="text" name="city" id="city" class="form-control" value=""
                                    placeholder="City *">
                            </div>
                            <!--						<label for="state" class="col-sm-1 control-label">State</label>-->
                            <div class="col-sm-3 ">
                                <input type="text" name="state" id="state" class="form-control" value=""
                                    placeholder="State *">
                            </div>
                            <!--						<label for="country" class="col-sm-1 control-label">Country</label>-->
                            <div class="col-sm-3 ">
                                <input type="text" name="country" id="country" class="form-control" value=""
                                    placeholder="Country *">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="website" class="col-sm-2 control-label">Website</label>
                            <div class="col-sm-5">
                                <input type="text" name="website" id="website" class="form-control" value=""
                                    placeholder="Website URL">
                            </div>
                            <label for="primary_language" class="col-sm-2 control-label"
                                style="font-size: 0.9em;padding-left: 0;">Primary Language*</label>
                            <div class="col-sm-3 ">
                                <input type="text" name="primary_language" id="primary_language" class="form-control"
                                    value="" placeholder="e.g. Hindi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="blog" class="col-sm-2 control-label">Blog</label>
                            <div class="col-sm-5">
                                <input type="text" name="blog" id="blog" class="form-control" value=""
                                    placeholder="Blog URL">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="blog" class="col-sm-2 control-label">Password *</label>
                            <div class="col-sm-5">
                                <input type="password" name="password" id="password" class="form-control" value=""
                                    placeholder="Password (for login)" autocomplete="off">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" name="donation_amount" id="donation_amount" class="form-control"
                                    value="" placeholder="Donation Amount" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="blog" class="col-sm-2 control-label">Password *</label>
                            <div class="col-sm-5">
                                <input type="password" name="confirm_password" id="confirm_password"
                                    class="form-control" value="" placeholder="Confirm Password" autocomplete="off">
                            </div>
                            <div class="col-sm-5">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="published_links" class="col-sm-2 control-label">Publications Links </label>
                            <div class="col-sm-10 ">
                                <textarea name="published_links" id="published_links" class="form-control"
                                    rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button type="submit" name="member_registration_submit" id="member_registration_submit"
                                    class="btn btn-warning btn-block btn-lg">APPLY</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="d-none d-sm-block d-md-block d-lg-block col-sm-2 col-md-2 col-lg-2 pr-0">
                <img src="<?=site_url("/img/32.png")?>" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
        </div>
    </div>



    
    <!-- footer section-->
    <?= $this->include("components/footer") ?>
    <?= $this->include("components/successMessage") ?>
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