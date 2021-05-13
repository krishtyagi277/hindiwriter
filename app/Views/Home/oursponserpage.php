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
	<meta name="title" content="हमारे प्रायोजक">
    <meta name="description" content="हमारे प्रायोजक">
    <meta property="og:url" content="<?=site_url("/home/oursponsers")?>" />
    <meta property="og:type" content="website">
    <meta property="og:description" content="हमारे प्रायोजक">
    <meta property="og:title" content="हमारे प्रायोजक">
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
			<div class="col-3 col-sm-2 col-md-2 col-lg-2 pl-0">
				<img src="<?=site_url("/img/41.png")?>" class="img-fluid float-left side-flower wow fadeInLeft"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
			<div class="col-6 col-sm-8 col-md-8 col-lg-8 intro-box-container">
				<div class="intro-box-text intro-box-width">

					<p class="text-center wow fadeInUp pb-5 mb-2 page-title" data-wow-delay="0.2s"><b>
                    हमारे प्रायोजक
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

    <div class="container-fluid detail-tile-bg">
		<div class="row">
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
				<img src="../img/31.png" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
			<div class="col-8 col-sm-8 col-md-8 col-lg-8 intro-box-container">
				<div class="row m-4 p-0">
					<div class="col-sm-12 col-md-12 col-lg-12 intro-box-container">
						<img src="../img/9.png"
							class="img-fluid mx-auto d-block section-heading section-heading-spl wow fadeInDown"
							data-wow-delay="0.3s" alt="intro-box" />
						<div class="intro-box-text">
							<a href="<?=site_url("#")?>" class="text-center mt-2 wow fadeInUp section-text"
								data-wow-delay="0.3s"><b>
								हमारे प्रायोजक </b>
							</a>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-around">
					<div class="m-2">
						<a href="<?=site_url("/home/starenergy")?>"><img src="<?=site_url("/img/starenergy2.png")?>"
								class="img-fluid w-75" alt="member-image"></a>

					</div>
					<div class="m-2">
						<a href="<?=site_url("/home/sahityakunj")?>"><img src="<?=site_url("/img/circle-cropped.png")?>"
								class="img-fluid w-75" alt="member-image"></a>

					</div>
					
				</div>
				
			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
				<img src="../img/32.png" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
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