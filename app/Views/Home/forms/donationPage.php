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
    <meta name="title" content="आर्थिक सहयोग">
    <meta name="description" content="आर्थिक सहयोग">
    <meta property="og:url" content="<?=site_url("/home/donation")?>" />
    <meta property="og:type" content="website">
    <meta property="og:description" content="आर्थिक सहयोग">
    <meta property="og:title" content="आर्थिक सहयोग">
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
                            आर्थिक सहयोग
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
                                    आर्थिक सहयोग</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-2 shadow-lg sponser-form mb-5 bg-white rounded text-dark">

                    <form name="donation_form" id="donation_form" action="<?=site_url("/home/payment")?>" method="post"
                        class="form-horizontal " onsubmit="donationEmail(event)">
                        <div class="form-group row">
                            <label for="full_name" class="col-sm-3 control-label">Full Name *</label>
                            <div class="col-sm-5 ">
                                <input type="text" name="full_name" id="full_name" class="form-control" value=""
                                    placeholder="in English">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 control-label">Email *</label>
                            <div class="col-sm-5 ">
                                <input type="text" onchange="setEmailId(event)" name="email" id="email"
                                    class="form-control" value="" placeholder="Email ID">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone_no" class="col-sm-3 control-label">Contact No *</label>
                            <div class="col-sm-5 ">
                                <input type="text" name="phone_no" id="phone_no" class="form-control" value=""
                                    placeholder="Phone No.">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="type" class="col-sm-3 control-label">Currency*</label>
                            <div class="col-sm-5">
                                <select name="currency" class="form-control select2" id="currency" style="width: 100%">
                                <option value="AED">AED</option>
                            <option value="AMD">AMD</option>
                            <option value="AOA">AOA</option>
                            <option value="ARS">ARS</option>
                            <option value="AUD">AUD</option>
                            <option value="AWG">AWG</option>
                            <option value="AZN">AZN</option>
                            <option value="BAM">BAM</option>
                            <option value="BBD">BBD</option>
                            <option value="BDT">BDT</option>
                            <option value="BGN">BGN</option>
                            <option value="BIF">BIF</option>
                            <option value="BMD">BMD</option>
                            <option value="BND">BND</option>
                            <option value="BOB">BOB</option>
                            <option value="BRL">BRL</option>
                            <option value="BSD">BSD</option>
                            <option value="BWP">BWP</option>
                            <option value="BYN">BYN</option>
                            <option value="BZD">BZD</option>
                            <option value="CAD">CAD</option>
                            <option value="CHF">CHF</option>
                            <option value="CLP">CLP</option>
                            <option value="CNY">CNY</option>
                            <option value="COP">COP</option>
                            <option value="CRC">CRC</option>
                            <option value="CVE">CVE</option>
                            <option value="CZK">CZK</option>
                            <option value="DJF">DJF</option>
                            <option value="DKK">DKK</option>
                            <option value="DOP">DOP</option>
                            <option value="DZD">DZD</option>
                            <option value="EGP">EGP</option>
                            <option value="ETB">ETB</option>
                            <option value="EUR">EUR</option>
                            <option value="FJD">FJD</option>
                            <option value="FKP">FKP</option>
                            <option value="GBP">GBP</option>
                            <option value="GEL">GEL</option>
                            <option value="GHS">GHS</option>
                            <option value="GIP">GIP</option>
                            <option value="GMD">GMD</option>
                            <option value="GNF">GNF</option>
                            <option value="GTQ">GTQ</option>
                            <option value="GYD">GYD</option>
                            <option value="HKD">HKD</option>
                            <option value="HNL">HNL</option>
                            <option value="HRK">HRK</option>
                            <option value="HTG">HTG</option>
                            <option value="HUF">HUF</option>
                            <option value="IDR">IDR</option>
                            <option value="ILS">ILS</option>
                            <option value="INR">INR</option>
                            <option value="ISK">ISK</option>
                            <option value="JMD">JMD</option>
                            <option value="JPY">JPY</option>
                            <option value="KES">KES</option>
                            <option value="KGS">KGS</option>
                            <option value="KHR">KHR</option>
                            <option value="KMF">KMF</option>
                            <option value="KRW">KRW</option>
                            <option value="KYD">KYD</option>
                            <option value="KZT">KZT</option>
                            <option value="LAK">LAK</option>
                            <option value="LBP">LBP</option>
                            <option value="LKR">LKR</option>
                            <option value="LRD">LRD</option>
                            <option value="LSL">LSL</option>
                            <option value="LTL">LTL</option>
                            <option value="MAD">MAD</option>
                            <option value="MDL">MDL</option>
                            <option value="MKD">MKD</option>
                            <option value="MNT">MNT</option>
                            <option value="MOP">MOP</option>
                            <option value="MUR">MUR</option>
                            <option value="MVR">MVR</option>
                            <option value="MWK">MWK</option>
                            <option value="MXN">MXN</option>
                            <option value="MYR">MYR</option>
                            <option value="MZN">MZN</option> 
                            <option value="NAD">NAD</option>
                            <option value="NGN">NGN</option>
                            <option value="NIO">NIO</option>
                            <option value="NOK">NOK</option>
                            <option value="NPR">NPR</option>
                            <option value="NZD">NZD</option>
                            <option value="PAB">PAB</option>
                            <option value="PEN">PEN</option>
                            <option value="PGK">PGK</option>
                            <option value="PHP">PHP</option>
                            <option value="PKR">PKR</option>
                            <option value="PLN">PLN</option>
                            <option value="PYG">PYG</option>
                            <option value="QAR">QAR</option>
                            <option value="RON">RON</option>
                            <option value="RSD">RSD</option>
                            <option value="RUB">RUB</option>
                            <option value="RWF">RWF</option>
                            <option value="SAR">SAR</option>
                            <option value="SBD">SBD</option>
                            <option value="SCR">SCR</option>
                            <option value="SEK">SEK</option>
                            <option value="SGD">SGD</option>
                            <option value="SHP">SHP</option>
                            <option value="SLL">SLL</option>
                            <option value="SOS">SOS</option>
                            <option value="SRD">SRD</option>
                            <option value="STD">STD</option>
                            <option value="SVC">SVC</option>
                            <option value="SYP">SYP</option>
                            <option value="SZL">SZL</option>
                            <option value="THB">THB</option>
                            <option value="TJS">TJS</option>
                            <option value="TOP">TOP</option>
                            <option value="TRY">TRY</option>
                            <option value="TTD">TTD</option>
                            <option value="TWD">TWD</option>
                            <option value="TZS">TZS</option>
                            <option value="UAH">UAH</option>
                            <option value="UGX">UGX</option>
                            <option value="USD" selected>USD</option>
                            <option value="UYU">UYU</option>
                            <option value="UZS">UZS</option>
                            <option value="VES">VES</option>
                            <option value="VND">VND</option>
                            <option value="VUV">VUV</option>
                            <option value="WST">WST</option>
                            <option value="XAF">XAF</option>
                            <option value="XCD">XCD</option>
                            <option value="XOF">XOF</option>
                            <option value="XPF">XPF</option>
                            <option value="YER">YER</option>
                            <option value="ZAR">ZAR</option>
                            <option value="ZMK">ZMK</option>
                            <option value="ZWD">ZWD</option>
                                </select>
                            </div>
                       </div>
                        <div class="form-group row">
                            <label for="amount" class="col-sm-3 control-label">Donation Amount*</label>
                            <div class="col-sm-2 ">
                                <input type="text" name="amount" id="amount" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="notes" class="col-sm-3 control-label">Additional Notes </label>
                            <div class="col-sm-9 ">
                                <textarea name="notes" id="notes" class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-3">
                                <button type="submit" name="donation_submit" id="donation_submit"
                                    class="btn btn-warning btn-block btn-lg">SEND REQUEST</button>
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
    <?php if($transaction != null){?>
    <div class="d-block alert alert-success alert-dismissible fade show email-alert w-100" role="alert">
    <strong>आपकी जानकारी भरने के लिए धन्यवाद!
कृपया अपना ईमेल देखें।</strong>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
     </div>
     <?php }?>
    <script src="<?=site_url("/js/subscribe.js")?>"></script>

    <script src="<?=site_url("/js/wow.min.js")?>"></script>

    <script src="<?=site_url("js/lightgallery.min.js")?>"></script>

    <!-- lightgallery plugins -->
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