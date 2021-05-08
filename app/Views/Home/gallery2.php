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
	<meta name="title" content="हिन्दी राइटर्स गिल्ड कैनेडा-दीर्घा">
	<meta name="description" content="हिन्दी राइटर्स गिल्ड कैनेडा-दीर्घा">
	<meta property="og:url" content="<?=site_url("/home/gallery")?>" />
	<meta property="og:type" content="website">
	<meta property="og:description" content="हिन्दी राइटर्स गिल्ड कैनेडा-दीर्घा">
	<meta property="og:title" content="हिन्दी राइटर्स गिल्ड कैनेडा-दीर्घा">
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
			<div class="col-3 col-sm-2 col-md-2 col-lg-4 pl-0">
				<img src="<?=site_url("/img/41.png")?>" class="img-fluid float-left side-flower wow fadeInLeft"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
			<div class="col-6 col-sm-8 col-md-8 col-lg-4 intro-box-container">
				<div class="intro-box-text intro-box-size">

					<p class="text-center wow fadeInUp p-3 pb-5 mb-2 page-title" data-wow-delay="0.2s"><b>
							फोटो गैलरी
						</b>
					</p>

				</div>
			</div>
			<div class="col-3 col-sm-2 col-md-2 col-lg-4 pr-0">
				<img src="<?=site_url("/img/16.png")?>" class="img-fluid float-right side-flower wow fadeInRight"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
		</div>
	</div>
	<!-- Detail page tile section-->
	<div class="container-fluid bg-light detail-tile-bg">
		<div class="row mb-2">
			<div class="col-2 col-sm-2 col-md-2 col-lg-1 pl-0">
				<img src="<?=site_url("/img/31.png")?>" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
			<div class="col-8 col-sm-8 col-md-8 col-lg-10 intro-box-container">
				<div class="row mt-2 p-0">
					<div class="col-sm-12 col-md-12 col-lg-12 intro-box-container ">
						<img src="<?=site_url("/img/9.png")?>"
							class="img-fluid mx-auto d-block wow fadeInDown detail-page-heading" data-wow-delay="0.3s"
							alt="intro-box" />
						<div class="intro-box-text ">
							<p class="text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s"><b><a
										class="text-white" href="<?=site_url("/home/detail/dirgha")?>">दीर्घा</a></b>
							</p>
						</div>
					</div>
				</div>

				<div class="d-flex flex-md-column flex-lg-row  flex-sm-column flex-wrap justify-content-center"
					>
					<div id="accordion" class="mt-5">
						<!-- <div class="card">
							<div class="card-header text-center" id="headingOne">
								<h5 class="mb-0">
									<button class="btn text-danger video-collapse-btn" data-toggle="collapse"
										data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										कवि- सम्मलेन
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
								data-parent="#accordion">
								<div class="card-body">
									<div
										class="d-flex flex-md-column flex-lg-row flex-sm-column justify-content-center align-items-center flex-wrap">
										<?php foreach($kaviData as $data):?>
										<a href="<?=site_url("/img/gallery/".$data['parent']."/".$data['name']."")?>" target="_blank" class="p-1 m-0 gallery detail-page-img"><img
												src="<?=site_url("/img/gallery/".$data['parent']."/".$data['name']."")?>"
												class="img-fluid img-fit wow fadeInLeft " data-wow-delay="0.3s"
												alt="photo-gallery" /></a>
												<?php endforeach;?>
									</div>
								</div>
							</div>
						</div> -->
						<div class="card">
							<div class="card-header text-center" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn text-danger collapsed video-collapse-btn" data-toggle="collapse"
										data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										उत्सव
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
								data-parent="#accordion">
								<div class="card-body">
                                <div class="row">
						<div class="col-md-3">
							<div class="col-megamenu">
								<h6 class="title"><a href="#" class="mega-menu-heading">वार्षिक महोत्सव </a></h6>
								<ul class="list-unstyled">
								    <li><a href="/home/galleryPage/annual-festival-2019" class="mega-menu-text">वार्षिक महोत्सव 2019 </a></li>
									<li><a href="/home/galleryPage/annual-festival-2018" class="mega-menu-text">वार्षिक महोत्सव 2018 </a></li>
									<li><a href="/home/galleryPage/annual-festival-2017" class="mega-menu-text">वार्षिक महोत्सव 2017 </a></li>
									<li><a href="/home/galleryPage/annual-festival-2016" class="mega-menu-text">वार्षिक महोत्सव 2016 </a></li>
									<li><a href="/home/galleryPage/annual-festival-2015" class="mega-menu-text">वार्षिक महोत्सव 2015 </a></li>
									<li><a href="/home/galleryPage/annual-festival-2014" class="mega-menu-text">वार्षिक महोत्सव 2014 </a></li>
									<li><a href="/home/galleryPage/annual-festival-2013" class="mega-menu-text">वार्षिक महोत्सव 2013 </a></li>
									<li><a href="/home/galleryPage/annual-festival-2012" class="mega-menu-text">वार्षिक महोत्सव 2012 </a></li>
									<li><a href="/home/galleryPage/annual-festival-2011" class="mega-menu-text">वार्षिक महोत्सव 2011 </a></li>
									<li><a href="/home/galleryPage/annual-festival-2010" class="mega-menu-text">वार्षिक महोत्सव 2010 </a></li>
									<li><a href="/home/galleryPage/annual-festival-2009" class="mega-menu-text">वार्षिक महोत्सव 2009 </a></li>
								</ul>
							</div>
							<!-- col-megamenu.// -->
						</div>
						<!-- end col-3 -->
						<div class="col-md-3">
							<div class="col-megamenu">
								<h6 class="title"><a href="#" class="mega-menu-heading">होली महोत्सव</a> </h6>
								<ul class="list-unstyled">
								    <li><a href="/home/galleryPage/holi-festival-2021" class="mega-menu-text">होली महोत्सव 2021</a></li>
									<!-- <li><a href="/home/galleryPage/holi-festival-2019" class="mega-menu-text">होली महोत्सव 2019</a></li> -->
									<!-- <li><a href="/home/detailPage/holi-festival-2018" class="mega-menu-text">होली महोत्सव 2018</a></li>
									<li><a href="/home/detailPage/holi-festival-2017" class="mega-menu-text">होली महोत्सव 2017</a></li> -->
									<li><a href="/home/galleryPage/holi-festival-2016" class="mega-menu-text">होली महोत्सव 2016</a></li>
									<li><a href="/home/galleryPage/holi-festival-2015" class="mega-menu-text">होली महोत्सव 2015</a></li>
									<li><a href="/home/galleryPage/holi-festival-2014" class="mega-menu-text">होली महोत्सव 2014</a></li>
									<li><a href="/home/galleryPage/holi-festival-2013" class="mega-menu-text">होली महोत्सव 2013</a></li>
									<li><a href="/home/galleryPage/holi-festival-2012" class="mega-menu-text">होली महोत्सव 2012</a></li>
									<li><a href="/home/galleryPage/holi-festival-2011" class="mega-menu-text">होली महोत्सव 2011</a></li>
									<li><a href="/home/galleryPage/holi-festival-2010" class="mega-menu-text">होली महोत्सव 2010</a></li>
									<li><a href="/home/galleryPage/holi-festival-2009" class="mega-menu-text">होली महोत्सव 2009</a></li>
								</ul>
							</div>
							<!-- col-megamenu.// -->
						</div>
						<!-- end col-3 -->
						<div class="col-md-3">
							<div class="col-megamenu">
								<h6 class="title"><a href="#" class="mega-menu-heading">आभार दिवस</a> </h6>
								<ul class="list-unstyled">
								    <li><a href="/home/galleryPage/abhar-divas-2017" class="mega-menu-text">आभार दिवस 2017</a></li>
									<li><a href="/home/galleryPage/abhar-divas-2012" class="mega-menu-text">आभार दिवस 2012</a></li>
									
								</ul>
							</div>
							<!-- col-megamenu.// -->
						</div>
						<div class="col-md-3">
							<div class="col-megamenu">
								<h6 class="title"><a href="#" class="mega-menu-heading">हिन्दी दिवस  </a></h6>
								<ul class="list-unstyled">
									<li><a href="/home/galleryPage/hindi-divas-2019-2" class="mega-menu-text">हिन्दी दिवस-जनवरी- 2019  </a></li>
									<li><a href="/home/galleryPage/hindi-divas-2019" class="mega-menu-text">हिन्दी दिवस-सितम्बर- 2019  </a></li>
									<li><a href="/home/galleryPage/hindi-divas-2018" class="mega-menu-text">हिन्दी दिवस-सितम्बर- 2018  </a></li>
									<li><a href="/home/galleryPage/hindi-divas-2015" class="mega-menu-text">हिन्दी दिवस-सितम्बर- 2015  </a></li>
								</ul>
							</div>
							<!-- col-megamenu.// -->
						</div>
						<!-- end col-3 -->
					</div>
								</div>
							</div>
						</div>
					
						
						
						<div class="card">
							<div class="card-header text-center" id="headingSeven">
								<h5 class="mb-0">
									<button class="btn text-danger collapsed video-collapse-btn" data-toggle="collapse"
										data-target="#collapseSeven" aria-expanded="false"
										aria-controls="collapseSeven">
										पुरस्कार/सम्मान
									</button>
								</h5>
							</div>
							<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
								data-parent="#accordion">
								<div class="card-body">
                                <div class="row">
						<div class="col-md-2">
							<div class="col-megamenu">
								<h6 class="title"><a href="#" class="mega-menu-heading">साहित्य गौरव सम्मान </a></h6>
								<ul class="list-unstyled">
									<li><a href="<?=site_url("/home/detailPage/prize-respect-1-1")?>" class="mega-menu-text">भारत के शिक्षा मंत्री, यशस्वी साहित्यकार डॉ. रमेश पोखारियाल ’निशंक’   </a></li>
								</ul>
							</div>
							<!-- col-megamenu.// -->
						</div>
						<!-- end col-3 -->
						<div class="col-md-2">
							<div class="col-megamenu">
								<h6 class="title"><a href="#" class="mega-menu-heading">सरस्वती सम्मान </a> </h6>
								<ul class="list-unstyled">
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-2-1")?>" class="mega-menu-text">अरुणा भटनागर </a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-2-2")?>" class="mega-menu-text">श्याम त्रिपाठी</a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-2-4")?>" class="mega-menu-text">डॉ॰ भारतेन्दु श्रीवास्तव </a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-2-5")?>" class="mega-menu-text">भुवनेश्वरी पाण्डे </a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-2-6")?>" class="mega-menu-text">आचार्य श्रीनाथ प्रसाद द्विवेदी </a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-2-3")?>" class="mega-menu-text">डॉ॰ रत्नाकर नराले  </a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-2-7")?>" class="mega-menu-text">सुमन कुमार घई </a></li>
								</ul>
							</div>
							<!-- col-megamenu.// -->
						</div>
						<!-- end col-3 -->
						<div class="col-md-2">
							<div class="col-megamenu">
								<h6 class="title"><a href="#" class="mega-menu-heading">साहित्य सृजन सम्मान</a> </h6>
								<ul class="list-unstyled">
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-3-1")?>" class="mega-menu-text">डॉ॰ शिवनन्दन सिंह यादव</a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-3-2")?>" class="mega-menu-text">प्रो॰ हरि शंकर आदेश </a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-3-3")?>" class="mega-menu-text">श्री रामेश्वर काम्बोज हिमांशु </a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-3-4")?>" class="mega-menu-text">डॉ॰ जगमोहन हूमर</a></li>
								</ul>
							</div>
							<!-- col-megamenu.// -->
						</div>
						<div class="col-md-2">
							<div class="col-megamenu">
								<h6 class="title"><a href="#" class="mega-menu-heading">स्वैच्छिक सेवा पुरस्कार  </a></h6>
								<ul class="list-unstyled">
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-4-1")?>" class="mega-menu-text">पूनम चन्द्रा 'मनु'  </a></li>
								</ul>
							</div>
							<!-- col-megamenu.// -->
						</div>
						<div class="col-md-2">
							<div class="col-megamenu">
								<h6 class="title"><a href="#" class="mega-menu-heading">स्वागत सम्मान   </a></h6>
								<ul class="list-unstyled">
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-5-1")?>" class="mega-menu-text">तेजेन्द्र शर्मा   </a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-5-2")?>" class="mega-menu-text">रामेश्वर कम्बोज 'हिमांशु'  </a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-5-3")?>" class="mega-menu-text">रोहिणी अग्रवाल   </a></li>
									<li><a href="<?=site_url("/home/galleryPage/prize-respect-5-4")?>" class="mega-menu-text"> डॉ.शंकरलाल पुरोहित   </a></li>
								</ul>
							</div>
							<!-- col-megamenu.// -->
						</div>
						<!-- end col-3 -->
					</div>
								</div>
							</div>
						</div>
					</div>


				</div>



			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-1 pr-0">
				<img src="<?=site_url("/img/32.png")?>" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
		</div>
	</div>





	<!-- photo gallery and video section-->


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