<?php 
if (!isset($transactionid)) {
    header("Location: ".site_url("/home/donation"));
    exit;
}

?>
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
    <link rel="stylesheet" href="<?=site_url("/css/style.css")?>" />
    
</head>

<body>

 <!-- Top header-->
 <?= $this->include("components/header") ?>

<!--Navigation menu-->
<?= $this->include("components/navbar") ?>
  <!-- Putting the empty container you plan to pass to
      `braintree.dropin.create` inside a form will make layout and flow
      easier to manage -->
   
    <!-- <div id="paypal-button"></div> -->
       <!-- Detail page tile section-->
       <div class="container-fluid bg-light detail-tile-bg">
        <div class="row mb-2">

            <div class="d-none d-sm-block d-md-block d-lg-block col-sm-2 col-md-2 col-lg-2 pl-0">
                <img src="<?=site_url("/img/31.png")?>" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
            <div class="col-12 col-sm-8 col-md-8 col-lg-8 ">
                
                <div class="mt-2 shadow-lg sponser-form mb-5 bg-white rounded text-dark h-100 text-center">
                    <p style="color:green; font-size:68px;"><i class="fa fa-check-circle" aria-hidden="true"></i></p>
                   <h3>इस अधिक सहयोग के लिए हिन्दी राइटर्स गिल्ड कैनेडा आपका हार्दिक धन्यवाद करती हैं।</h3>
                   <h5>Transaction Id: <?=$transactionid; ?></h5>
                </div>

            </div>
            <div class="d-none d-sm-block d-md-block d-lg-block col-sm-2 col-md-2 col-lg-2 pr-0">
                <img src="<?=site_url("/img/32.png")?>" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
        </div>
    </div>

    <?= $this->include("components/footer") ?>
  
 
</body>
</html>