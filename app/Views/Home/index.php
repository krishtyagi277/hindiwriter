<!DOCTYPE html>
<html>

<head>
	<title>HWG Web Page</title>
	<link rel="icon" href="<?=site_url("/img/HWG-LOGO-21.png") ?>" sizes="196x196">
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

	<link rel="stylesheet" href="css/style.css" />
	<meta name="title" content="हिन्दी राइटर्स गिल्ड">
    <meta name="description" content="हिन्दी राइटर्स गिल्ड">
    <meta property="og:url" content="<?=site_url("/")?>" />
    <meta property="og:type" content="website">
    <meta property="og:description" content="हिन्दी राइटर्स गिल्ड">
    <meta property="og:title" content="हिन्दी राइटर्स गिल्ड">
    <meta property="og:image" content="<?=site_url("/img/HWG-LOGO-21.png") ?>">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="720">
</head>

<body>
	<!-- Top header-->
	<?= $this->include("components/header") ?>

	<!--Navigation menu-->
	<?= $this->include("components/navbar") ?>

	<!-- Hero Banner -->

	<div class="container-fluid index-page-bg-img">
		<div class="row">
			<div class="d-none col-sm-2 col-md-3 col-lg-2 pl-0 d-flex flex-column flex-wrap justify-content-between">
				<div class="d-none d-sm-block d-md-block d-lg-block mb-4 pb-2 corner-png-top">
					<img src="../img/37.png" class="w-75 img-fluid float-left wow fadeInLeft " data-wow-delay="0.2s"
						alt="top-left-png">
				</div>
				<div class="d-none d-sm-block d-md-block d-lg-block mt-5 pt-4 corner-png-bottom justify-content-end	">
					<img src="../img/25.png" class="w-75 img-fluid float-left wow fadeInLeft " data-wow-delay="0.2s"
						alt="top-left-png">
				</div>
			</div>
			<div class="col-12 col-sm-8 col-md-6 col-lg-8 " >
				<video class="m-0" id="intro-video" controls autoplay>
					<source src="<?=site_url("/img/HINDI WRITERS GUILD- POST EVENT.mp4") ?>" type="video/mp4" />
					Your browser does not support HTML5 video.
				</video>
				<div class="p-5 m-2 text-center">
							<a href="/home/main" class="btn btn-outline-info bg-dark" style="font-size:20px;"><b>SKIP</b></a>
						</div>

				<!--<div class="container-fluid">
					<div class="row bg-none border-top-0 p-5">
						<div class="col-md-12 col-lg-12 pl-0 text-center">
							<a href="/home/main" class="btn btn-outline-info bg-dark" style="font-size:20px;"><b>SKIP</b></a>
						</div>
					</div>
				</div>-->
			</div>
			<div class="d-none col-sm-2 col-md-3 col-lg-2 pr-0 d-flex flex-column flex-wrap justify-content-between">
				<div class="d-none d-sm-block d-md-block d-lg-block mb-4 pb-2 corner-png-top">
					<img src="../img/26.png" class="w-75 img-fluid float-right wow fadeInRight " data-wow-delay="0.2s"
						alt="top-right-png">
				</div>
				<div class="d-none d-sm-block d-md-block d-lg-block mt-5 pt-4 corner-png-bottom justify-content-end">
					<img src="../img/25.png" class="w-75 img-fluid float-right wow fadeInRight " data-wow-delay="0.2s"
						alt="top-left-png">
				</div>
			</div>
		</div>

	</div>


   <script>
    if(window.innerWidth > 992) {
    let navLinksArr = document.querySelectorAll(".nav-link.dropdown-toggle.mega-menu-main-heading");
    for(let navlink of navLinksArr){
        navlink.removeAttribute("data-toggle");
    }
} else{
    let navLinksArr = document.querySelectorAll(".nav-link.dropdown-toggle.mega-menu-main-heading");
    for(let navlink of navLinksArr){
        navlink.setAttribute("data-toggle", "dropdown");
    }
	
}


$(document).ready(()=>{
	document.getElementById('intro-video').play();
})
    

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