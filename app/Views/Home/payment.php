<head>
  <meta charset="utf-8">
  <script src="https://js.braintreegateway.com/web/dropin/1.27.0/js/dropin.min.js"></script>
  <script src="https://js.braintreegateway.com/web/3.76.0/js/client.min.js"></script>
  <script src="https://js.braintreegateway.com/web/3.76.0/js/data-collector.min.js"></script>

</head>

<body>

  <form id="payment-form" action="/home/paymentSubmit" method="post">
    <!-- Putting the empty container you plan to pass to
      `braintree.dropin.create` inside a form will make layout and flow
      easier to manage -->
    <div id="dropin-container"></div>
    <input type="submit" />
    <input type="hidden" id="nonce" name="payment_method_nonce" />
    <input type="hidden" id="email" name="email" value="<?php echo $émail?>" />
    <input type="hidden" id="name" name="fullName" value="<?php echo $fullName?>" />
    <input type="hidden" id="amount" name="amount" value="<?php echo $amount?>" />
  </form>

  <script type="text/javascript">
    // call braintree.dropin.create code here

    const form = document.getElementById('payment-form');

    braintree.dropin.create({
      authorization: '<?php echo $clientToken; ?>',
      container: '#dropin-container',
      paypal: {
        flow: 'checkout',
        amount: <?php echo $amount; ?>,
        currency: 'INR'
      },
    }, (error, dropinInstance) => {
      if (error) console.error(error);

      form.addEventListener('submit', event => {
        event.preventDefault();

        dropinInstance.requestPaymentMethod((error, payload) => {
          if (error) console.error(error);

          // Step four: when the user is ready to complete their
          //   transaction, use the dropinInstance to get a payment
          //   method nonce for the user's selected payment method, then add
          //   it a the hidden field before submitting the complete form to
          //   a server-side integration
          document.getElementById('nonce').value = payload.nonce;
          form.submit();
        });
      });
    });
  </script>
</body>


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
    <input type="hidden" id="nonce" name="payment_method_nonce" />
    <input type="hidden" id="email" name="email" value="<?php echo $émail?>" />
    <input type="hidden" id="name" name="fullName" value="<?php echo $fullName?>" />
    <input type="hidden" id="amount" name="amount" value="<?php echo $amount?>" />
    <!-- <div id="paypal-button"></div> -->
       <!-- Detail page tile section-->
       <div class="container-fluid bg-light detail-tile-bg">
        <div class="row mb-2">

            <div class="d-none d-sm-none d-md-block d-lg-block col-md-2 col-lg-2 pl-0">
                <img src="<?=site_url("/img/31.png")?>" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 ">
                
                <div class="mt-2 shadow-lg sponser-form mb-5 bg-white rounded text-dark">

                   
                        <div class="form-group row">
                            <label for="full_name" class="col-sm-4 control-label">Full Name *</label>
                            <div class="col-sm-8 ">
                                <input type="text" name="full_name" id="full_name" class="form-control" value="<?=$fullName;?>"
                                    placeholder="in English" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 control-label">Email *</label>
                            <div class="col-sm-8 ">
                                <input type="text" name="email" id="email"
                                    class="form-control" value="<?=$émail;?>" placeholder="Email ID" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone_no" class="col-sm-4 control-label">Currency *</label>
                            <div class="col-sm-8 ">
                                <input type="text" name="currency" id="phone_no" class="form-control" value="<?=$currency;?>"
                                    placeholder="Phone No." disabled>
                            </div>
                        </div>
                        
                    
                        <div class="form-group row">
                            <label for="amount" class="col-sm-4 control-label">Donation Amount*</label>
                            <div class="col-sm-8 ">
                                <input type="text" name="amount" id="amount" class="form-control" value="<?=$amount;?>" disabled>
                            </div>
                        </div>

                       
                        <div class="form-group row">
                            <div class="col-sm-12 ">
                            <div id="paypal-button"></div>
                            </div>
                        </div>
                  
                </div>

            </div>
            <div class="d-none d-sm-none d-md-block d-lg-block col-md-2 col-lg-2 pr-0">
                <img src="<?=site_url("/img/32.png")?>" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
                    data-wow-delay="0.3s" alt="side-design" />
            </div>
        </div>
    </div>

    <?= $this->include("components/footer") ?>
  
  <!-- Orders Integration -->
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
   <script>
     paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AaUwtQvn-BRNvNh3IXfMV5ar19R-aJlIMEnv8BCTkzcSu4zmxXKTW-TBTQCCVHKnoavCFSnRBzSCleH6',
      production: 'AcKZDVCl8jQvG8xRNylwzxrgNqKp-ZNY98S6XDDFC38buQAoLSGQjQgMxw8PnjUJUgVwDOWkoO5Dlwc2'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      label:'paypal',
      size: 'responsive',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '<?=$amount != null?$amount:'0.1'; ?>',
            currency: '<?=$currency !=null?$currency:'USD';?>',
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function(details) {
        // Show a confirmation message to the buyer
        console.log("AUTHORIZE")
        console.log(details)

       const paymentObject = {
         donationUid : <?=$donationUid;?>,
         paymentid:details.id,
         payload:JSON.stringify(details),
       }

       fetch(`http://${window.location.hostname}/home/paymentSuccess`, {
  method: 'POST', // or 'PUT'
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(paymentObject),
})
.then(response => response.json())
.then(data => {
  window.location.replace(`http://${window.location.hostname}/home/paymentSuccessPage/${data.paymentid}`);
})
.catch((error) => {
  console.error('Error:', error);
});

      });
    },
    onCancel:function(data){
      console.log(data);
      console.log(`Cancel: ${data}`)

      const paymentObject = {
         donationUid : <?=$donationUid;?>,
         paymentid:data.paymentID,
         payload:JSON.stringify(data),
       }

      fetch(`http://${window.location.hostname}/home/paymentCancel`, {
  method: 'POST', // or 'PUT'
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(paymentObject),
})
.then(response => response.json())
.then(data => {
  window.location.replace(`http://${window.location.hostname}/home/paymentCancelPage/${data.paymentid}`);
})
.catch((error) => {
  console.error('Error:', error);
});
    }
  }, '#paypal-button');


   </script>
</body>
</html>