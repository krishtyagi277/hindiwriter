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
        currency: 'USD'
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