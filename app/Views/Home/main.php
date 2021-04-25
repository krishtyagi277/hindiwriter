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
	<link rel="stylesheet" href="../css/style.css" />
	<meta name="title" content="मुख्य पृष्ठ">
	<meta name="description"
		content="अगर आप हिन्दी साहित्य में रूचि में रखते हैं, लिखते हैं तो हिन्दी राइटर्स गिल्ड कैनेडा के निःशुल्क सदस्य बनिए|">
	<meta property="og:url" content="<?=site_url("/home/main")?>" />
	<meta property="og:type" content="website">
	<meta property="og:description"
		content="अगर आप हिन्दी साहित्य में रूचि में रखते हैं, लिखते हैं तो हिन्दी राइटर्स गिल्ड कैनेडा के निःशुल्क सदस्य बनिए। ">
	<meta property="og:title" content="मुख्य पृष्ठ">
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

	<!-- Hero Banner -->
	<div class="container-fluid hero-parallax">
		<div class="row">
			<div class="d-none d-sm-none d-md-none d-lg-none col-1 col-sm-1 col-md-1 col-lg-1 pl-0 flex-column flex-wrap justify-content-between">
				<div class="mb-4 pb-2 corner-png-top">
					<img src="../img/37.png" class="side-img img-fluid float-left wow fadeInLeft " data-wow-delay="0.2s"
						alt="top-left-png">
				</div>
				<div class="mt-5 pt-4 corner-png-bottom justify-content-end	">
					<img src="../img/25.png" class="side-img img-fluid float-left wow fadeInLeft " data-wow-delay="0.2s"
						alt="top-left-png">
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 p-0">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
					</ul>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?=site_url("/img/a.jpg")?>" alt="Los Angeles" width="1100" height="500">

						</div>
						<div class="carousel-item">
							<img src="<?=site_url("/img/b.jpg")?>" alt="Chicago" width="1100" height="500">

						</div>

					</div>
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
			<div class="d-none d-sm-none d-md-none d-lg-none col-1 col-sm-1 col-md-1 col-lg-1 pr-0  flex-column flex-wrap justify-content-between">
				<div class="mb-4 pb-2 corner-png-top">
					<img src="../img/26.png" class="side-img img-fluid float-right wow fadeInRight "
						data-wow-delay="0.2s" alt="top-right-png">
				</div>
				<div class="mt-5 pt-4 corner-png-bottom justify-content-end">
					<img src="../img/25.png" class="side-img img-fluid float-right wow fadeInRight "
						data-wow-delay="0.2s" alt="top-left-png">
				</div>
			</div>
		</div>
	</div>
	<!-- Intro Section-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
				<img src="../img/28.png" class="img-fluid float-left side-flower wow fadeInLeft" data-wow-delay="0.3s"
					alt="side-design" />
			</div>
			<div class="col-8 col-sm-8 col-md-8 col-lg-8 intro-box-container">
				<img src="../img/9.png" class="img-fluid mx-auto d-block mt-4 main-banner-img" alt="intro-box" />
				<div class="intro-box-text intro-box-size">

					<p class="text-center wow fadeInUp p-3 pb-5 mb-2 intro-detail-text" data-wow-delay="0.2s"><b>
							हमारा परिचय</br>
							हिन्दी राइटर्स गिल्ड का उद्देश्य कैनेडा में हिन्दी साहित्य के प्रति लोगों में रुचि
							जगाना</br> लेखकों को केनेडा की पृष्ठभूमि को ध्यान में रखते हुए लेखन के लिए प्रोत्साहित</br>
							करना केनेडा में हिन्दी पुस्तकों के प्रकाशन को स्थापित करना इत्यादि है।
							</br><a href="<?=site_url("/home/detailPage/sanstha-ka-parichai")?>" class="text-white">
							आगे पढ़ें ...</a>
						</b>
					</p>

				</div>
			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
				<img src="../img/29.png" class="img-fluid float-right side-flower wow fadeInRight" data-wow-delay="0.3s"
					alt="side-design" />
			</div>
		</div>
	</div>
	<!-- Activity section-->
	<div class="container-fluid bg-light">
		<div class="row mb-2">
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
				<img src="../img/31.png" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
			<div class="col-8 col-sm-8 col-md-8 col-lg-8 intro-box-container">
				<div class="row mt-2 p-0">
					<div class="col-sm-12 col-md-12 col-lg-12 intro-box-container">
						<img src="../img/9.png" class="img-fluid mx-auto d-block section-heading wow fadeInDown"
							data-wow-delay="0.3s" alt="intro-box" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/detail/gatividhiya")?>"
								class="text-white text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s">
								<b>गतिविधियाँ</b>
							</a>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-md-column flex-lg-row flex-sm-column justify-content-center">
					<div class="m-2 intro-box-container">
						<img src="../img/33.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/facebookLive")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									फेसबुक लाइव</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/33.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/kavi-sammelan")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									कवि सम्मेलन</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/33.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/pustak-vimochan")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									पुस्तक विमोचन</br> और चर्चा</b>
							</a>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-md-column flex-lg-row flex-sm-column justify-content-center">
					<div class="m-2 intro-box-container">
						<img src="../img/33.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/hamari-prastutiya")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									हमरी प्रस्तुतिया </br>और नाटक</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/33.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/workshop ")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									कार्यशाला</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/33.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/masik-ghoshtiya")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									मासिक गोष्ठियाँ</b>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
				<img src="../img/32.png" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
		</div>
	</div>

	<!-- festival section-->
	<div class="container-fluid festival-parallax festival-box">
		<div class="row">
			<div class="col-sm-2 col-md-2 col-lg-2 pl-0">

			</div>
			<div class="col-sm-8 col-md-8 col-lg-8 intro-box-container">
				<div class="row m-0 p-0">
					<div class=" col-sm-12 col-md-12 col-lg-12 intro-box-container mt-5">
						<img src="../img/9.png" class="img-fluid mx-auto d-block section-heading wow fadeInDown"
							data-wow-delay="0.3s" alt="intro-box" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/detail/festival")?>"
								class="text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s"><b>
									उत्सव</b>
							</a>
						</div>
					</div>
				</div>
				<div
					class="d-flex flex-column flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center m-4">
					<div class="m-2 intro-box-container">
						<img src="../img/34.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/annual-festival")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									वार्षिक
									महोत्सव</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/34.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/holi-festival")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									होली महोत्सव</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/34.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/abhar-divas")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>


									आभार दिवस
								</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/34.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/hindi-divas")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>

									हिन्दी </br>दिवस
								</b>
							</a>
						</div>
					</div>
				</div>

			</div>
			<div class="col-sm-2 col-md-2 col-lg-2 pr-0">
			</div>
		</div>
	</div>

	<!-- Achievements section-->
	<div class="container-fluid bg-light">
		<div class="row">
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
				<img src="../img/36.png" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
					alt="side-design" />
			</div>
			<div class="col-8 col-sm-8 col-md-8 col-lg-8 intro-box-container">
				<div class="row m-0 p-0 mt-2">
					<div class=" col-sm-12 col-md-12 col-lg-12 intro-box-container">
						<img src="../img/9.png" class="img-fluid mx-auto d-block section-heading wow fadeInDown"
							data-wow-delay="0.3s" alt="intro-box" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/detail/uplabhdiya")?>"
								class="text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s">
								<b>उपलब्धियाँ</b>
							</a>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center">
					<div class="m-2 intro-box-container">
						<img src="../img/17.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/detailPage/international-sammelan-2020")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									अंतरराष्ट्रीय हिन्दी सम्मेलन भारत</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/17.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/detailPage/international-sammelan-2015")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									अंतरराष्ट्रीय हिन्दी सम्मेलन
									अमेरिका</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/17.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/detailPage/vishwa-hindi")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									विश्व हिन्दी
									दिवस
									ओटावा</b>
							</a>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center">
					<div class="m-2 intro-box-container">
						<img src="../img/17.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/international-sammelan")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									अंतरराष्ट्रीय क्षेत्रीय हिन्दी सम्मेलन</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/17.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/detailPage/conusell-fest")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									भारतीय
									कौंसुलावास
									में हिन्दी
									दिवस</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/17.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/e-prakashan")?>"
								class="text-white text-center wow fadeInUp section-block-text"
								data-wow-delay="0.3s"><b>ई-संकलन प्रकाशन </b>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
				<img src="../img/35.png" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
		</div>
	</div>

	<!-- Member section-->
	<div class="container-fluid">
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
							<a href="<?=site_url("/home/members")?>" class="text-center mt-2 wow fadeInUp section-text"
								data-wow-delay="0.3s"><b>
									हमारे सदस्य</b>
							</a>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center">
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/2")?>"><img src="<?=site_url("/img/members/1.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/50")?>"><img src="<?=site_url("/img/members/3.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/1")?>"><img src="<?=site_url("/img/members/2.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/3")?>"><img src="<?=site_url("/img/members/4.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/4")?>"><img src="<?=site_url("/img/members/5.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/5")?>"><img src="<?=site_url("/img/members/6.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
				</div>
				<div class="d-flex flex-column flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center">

					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/6")?>"><img src="<?=site_url("/img/members/7.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/7")?>"><img src="<?=site_url("/img/members/8.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/8")?>"><img src="<?=site_url("/img/members/9.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/9")?>"><img src="<?=site_url("/img/members/10.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/10")?>"><img src="<?=site_url("/img/members/11.jpg")?>"
								class="member-card-img-main" alt="member-image"></a>

					</div>
					<div class="member-card-main bg-white m-2">
						<a href="<?=site_url("/home/introPage/22")?>"><img
								src="<?=site_url("/img/members/Manoshi%20Chaterjii.jpg")?>" class="member-card-img-main"
								alt="member-image"></a>

					</div>
				</div>
			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
				<img src="../img/32.png" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
		</div>
	</div>

	<!-- Prize section-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
				<img src="../img/28.png" class="img-fluid float-left side-flower wow fadeInLeft" data-wow-delay="0.3s"
					alt="side-design" />
			</div>
			<div class="col-8 col-sm-8 col-md-8 col-lg-8 intro-box-container">
				<div class="row m-0 p-0">
					<div class="col-sm-12 col-md-12 col-lg-12 intro-box-container mt-5">
						<img src="../img/9.png" class="img-fluid mx-auto d-block section-heading wow wow fadeInDown"
							data-wow-delay="0.3s" alt="intro-box" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/detail/prize-respect")?>"
								class="text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s"><b>
									पुरस्कार/सम्मान</b>
							</a>
						</div>
					</div>
				</div>
				<div
					class="d-flex flex-column flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center m-4">
					<div class="m-2 intro-box-container">
						<img src="../img/20.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/prize-respect-1")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									साहित्य गौरव सम्मान </b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/20.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/prize-respect-2")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									सरस्वती सम्मान </b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/20.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/prize-respect-3")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>


									साहित्य सृजन सम्मान
								</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/20.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/prize-respect-4")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>

									स्वैच्छिक सेवा पुरस्कार
								</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/20.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/details/prize-respect-5")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>

									स्वागत सम्मान
								</b>
							</a>
						</div>
					</div>
				</div>

			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
				<img src="../img/29.png" class="img-fluid float-right side-flower wow fadeInRight" data-wow-delay="0.3s"
					alt="side-design" />
			</div>
		</div>
	</div>


	<!-- photo gallery and video section-->
	<div class="container-fluid bg-light gallery-parallax">
		<div class="row">
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
				<img src="../img/36.png" class="img-fluid float-left side-flower mt-5 wow fadeInLeft"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
			<div class="col-8 col-sm-8 col-md-8 col-lg-8 intro-box-container">
				<div class="row m-0 p-0 mt-2">
					<div class="col-sm-12 col-md-12 col-lg-12 intro-box-container">
						<img src="../img/9.png" class="img-fluid mx-auto d-block section-heading wow fadeInDown"
							data-wow-delay="0.3s" alt="intro-box" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/detail/dirgha")?>" class="text-center mt-2 wow fadeInUp section-text" data-wow-delay="0.3s"><b>
									दीर्घा</b>
							</a>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-md-column flex-lg-row  flex-sm-column justify-content-center">
					<div class="m-2 intro-box-container">
						<h3 class="w-100 text-center text-black-50 wow fadeInLeft" data-wow-delay="0.3s"><b>
						<a href="<?=site_url("/home/videogallery")?>" class="text-danger">वीडियो गैलरी</a></b>
						</h3>
						<a href="<?=site_url("/home/videogallery")?>" class="text-danger video-gallery-icon"><img src="../img/video.jpg" class="w-100 img-fluid wow fadeInLeft" data-wow-delay="0.3s"
								alt="photo-gallery" /></a>

					</div>
					<div class="m-2 intro-box-container">
						<h3 class="w-100 text-center text-black-50 wow fadeInRight" data-wow-delay="0.3s"><b>
								<a href="<?=site_url("/home/gallery")?>" class="text-danger">फोटो गैलरी</a></b>
						</h3>
						<div class="d-flex flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center">
							<a href="<?=site_url("/home/gallery")?>"><img src="../img/galleryimg.JPG" class="w-75 img-fluid wow fadeInLeft" data-wow-delay="0.3s"
								alt="photo-gallery" /></a>
							
						</div>

					</div>
					<div class="m-2 intro-box-container">
						<h3 class="w-100 text-center text-black-50 wow fadeInLeft" data-wow-delay="0.3s"><b>
						<a href="<?=site_url("/home/audiogallery")?>" class="text-danger">ऑडियो गैलरी </a></b>
						</h3>
						<a href="<?=site_url("/home/audiogallery")?>" class="text-danger video-gallery-icon"><img src="../img/audio.jpg" class="w-100 img-fluid wow fadeInLeft" data-wow-delay="0.3s"
								alt="photo-gallery" /></a>

					</div>

				</div>

			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
				<img src="../img/35.png" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
					alt="side-design" />
			</div>
		</div>
	</div>

	<!-- book section-->
	<div class="container-fluid book-parallax">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 intro-box-container">
				<div class="row m-0 p-0 mt-2 mb-2">
					<div class="col-sm-12 col-md-12 col-lg-12 intro-box-container">
						<img src="../img/9.png" class="img-fluid mx-auto d-block section-heading wow fadeInDown"
							data-wow-delay="0.3s" alt="intro-box" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/ourbooks")?>" class="text-center mt-2 wow fadeInUp section-text"
								data-wow-delay="0.3s"><b>
									हमारी प्रकाशित पुस्तकें</b>
							</a>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center">
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/1.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/2.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/3.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/4.png")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/5.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/6.png")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/7.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/8.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/9.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/10.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/11.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/12.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<!-- <div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/13.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div>
					<div class="intro-box-container">
						<img src="<?=site_url("/img/ourbooks/14.jpg")?>"
							class="img-fluid shadow-lg wow fadeInLeft books-display" data-wow-delay="0.3s"
							alt="activity-cricle" />

					</div> -->

				</div>

			</div>

		</div>
	</div>

   <!-- sponser section --->
   <div class="container-fluid">
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
					<div class="bg-white m-2">
						<a href="<?=site_url("/home/starenergy")?>"><img src="<?=site_url("/img/starenergy-logo-web.png")?>"
								class="img-fluid w-100" alt="member-image"></a>

					</div>
					<div class="bg-white m-2">
						<a href="<?=site_url("/home/sahityakunj")?>"><img src="<?=site_url("/img/logo250x66.png")?>"
								class="img-fluid w-100" alt="member-image"></a>

					</div>
					
				</div>
				
			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
				<img src="../img/32.png" class="img-fluid float-right side-flower mt-5 wow fadeInRight"
					data-wow-delay="0.3s" alt="side-design" />
			</div>
		</div>
	</div>

	<!--extra section-->
	<div class="container-fluid border-top border-light">
		<div class="row">
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pl-0">
				<img src="../img/28.png" class="img-fluid float-left side-flower wow fadeInLeft" data-wow-delay="0.3s"
					alt="side-design" />
			</div>
			<div class="col-8 col-sm-8 col-md-8 col-lg-8 intro-box-container">

				<div
					class="d-flex flex-column flex-md-row flex-lg-row flex-sm-column flex-wrap justify-content-center m-4">
					<div class="m-2 intro-box-container">
						<img src="../img/34.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="" class="text-white text-center wow fadeInUp section-block-text"
								data-wow-delay="0.3s"><b>
									आगामी कार्यक्रम</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/34	.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/becomesponser")?>"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									प्रायोजक
									बनिये</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/34.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="<?=site_url("/home/becomemember")?>" target="_blank"
								class="text-white text-center wow fadeInUp section-block-text" data-wow-delay="0.3s"><b>
									सदस्य बनिये</b>
							</a>
						</div>
					</div>
					<div class="m-2 intro-box-container">
						<img src="../img/34.png" class="img-fluid wow fadeInDown" data-wow-delay="0.3s"
							alt="activity-cricle" />
						<div class="intro-box-text">
							<a href="" class="text-white text-center wow fadeInUp section-block-text"
								data-wow-delay="0.3s"><b>
									शुभकामनाएं
									संदेश</b>
							</a>
						</div>
					</div>
				</div>

			</div>
			<div class="col-2 col-sm-2 col-md-2 col-lg-2 pr-0">
				<img src="../img/29.png" class="img-fluid float-right side-flower wow fadeInRight" data-wow-delay="0.3s"
					alt="side-design" />
			</div>
		</div>
	</div>
	
	

	<!-- footer section-->
	<?= $this->include("components/footer") ?>

	<!-- on load video intro
	<div id="myModal" class="container-fluid modal fade">
		<div class="modal-dialog modal-lg bg-dark">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Our Intro</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<iframe class="border-0" width="760" height="410" src="https://www.youtube.com/embed/Y0D07fbJXa8">
					</iframe>
					<button type="button" class="close" data-dismiss="modal">skip</button>
				</div>
			</div>
		</div>
	</div>
	-->

	<script src="../js/wow.min.js"></script>
	<?= $this->include("components/successMessage") ?>
    <script src="<?=site_url("/js/subscribe.js")?>"></script>
	<script>
		new WOW().init();
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