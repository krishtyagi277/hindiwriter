<div class="container-fluid border-top border-light bg-dark">
	<div class="row mt-4">
		<div class="col-md-3 col-lg-3 pl-0">
			<ul class="text-white font-weight-bolder m-4" style="list-style-type:circle; font-size: 22px;">
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a class="text-white" href="<?=site_url("/home/detailPage/sanstha-ka-parichai")?>" >संस्था का परिचय</a></li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a class="text-white" href="<?=site_url("/home/detail/gatividhiya")?>" >गतिविधियाँ</a</li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a class="text-white" href="<?=site_url("/home/detail/uplabhdiya")?>" >उपलब्धियाँ</a></li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a class="text-white" href="<?=site_url("/home/detail/festival")?>" >उत्सव</a></li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a class="text-white" href="<?=site_url("/home/members")?>" >सदस्य</a></li>
			</ul>
		</div>
		<div class="col-md-3 col-lg-3 pl-0">
			<ul class="text-white font-weight-bolder m-4" style="list-style-type:circle; font-size: 22px;">
				<li class="mb-2" data-wow-delay="0.2s"><a href="<?=site_url("/home/detail/prize-respect")?>" class="text-white">पुरस्कार/सम्मान</a></li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a href="<?=site_url("/home/detailpage/Udghatan-samroh")?>" class="text-white">उद्‌घाटन समारोह</li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a href="<?=site_url("/home/gallery")?>" class="text-white">दीर्घा</li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a href="<?=site_url("/home/ourbooks")?>" class="text-white">हमारी प्रकाशित पुस्तकें</li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a href="<?=site_url("/home/invitations")?>" class="text-white">निमंत्रण पत्र</li>
			</ul>
		</div>
		<div class="col-md-3 col-lg-3 pl-0">
			<ul class="text-white font-weight-bolder m-4" style="list-style-type:circle; font-size: 22px;">
				<li class="mb-2" data-wow-delay="0.2s"><a href="<?=site_url("/home/upcomingevents")?>" class="text-white">आगामी कार्यक्रम</a></li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a href="<?=site_url("/home/calendar")?>" class="text-white">गूगल कैलेंडर</li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a href="<?=site_url("/home/becomesponser")?>" class="text-white">प्रायोजक बनिये</li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a href="<?=site_url("/home/becomemember")?>" class="text-white">सदस्य बनिये</li>
				<li class="wow fadeInUp mb-2" data-wow-delay="0.2s"><a href="<?=site_url("/home/donation")?>" class="text-white">आर्थिक सहयोग</li>
			</ul>
		</div>
		<div class="col-md-3 col-lg-3 pl-2">
			<div class="d-flex flex-column justify-content-center">
				<div class="d-flex flex-wrap justify-content-center">
					<div class="wow fadeInUp bd-highlight text-white p-2" data-wow-delay="0.2s" style="font-size: 32px;"><a href="https://www.facebook.com/hindiwritersguildcanada" class="text-white" target="_blank"><i class="fab fa-facebook-f"></i></a> </div>
					<div class="wow fadeInUp bd-highlight text-white p-2" data-wow-delay="0.3s" style="font-size: 32px;"><a href="https://twitter.com/GuildHindi" class="text-white" target="_blank"><i class="fab fa-twitter"></i></a> </div>
					<div class="wow fadeInUp bd-highlight text-white p-2" data-wow-delay="0.4s" style="font-size: 32px;"><a href="https://www.youtube.com/channel/UC-JTN_aLIpIjl3aSa0JKdmw/videos" class="text-white" target="_blank"><i class="fab fa-youtube"></i> </a></div>
					<div class="wow fadeInUp bd-highlight text-white p-2" data-wow-delay="0.5s" style="font-size: 32px;"><a href="https://www.instagram.com/hwg2008" class="text-white" target="_blank"><i class="fab fa-instagram"></i></a> </div>
				</div>
				<div class="wow fadeInUp d-flex justify-content-center rounded-lg" data-wow-delay="0.2s" style="background-color: #ff3354;">
					<p class="wow fadeInUp text-white text-center font-weight-bolder" data-wow-delay="0.2s" style="font-size: 18px;"><a href="<?=site_url("/home/contactus")?>" class="text-white">संपर्क सूत्र </a>
						<br/> <a href="<?=site_url("/home/becomemember")?>" class="text-white">सदस्य बनिए</a>
						<br> <a href="<?=site_url("/home/donation")?>" class="text-white">आर्थिक सहयोग</a></p>
				</div>
				<div class="wow fadeInUp d-flex justify-content-center rounded-lg bg-light mt-3 p-4 h-25" data-wow-delay="0.2s">
					<form onsubmit="sendSubscribeEmail(event)">
						<div class="form-group">
							<label for="Subscribe to our newsletter">Subscribe to our newsletter</label>
							<input type="email" class="form-control" id="exampleInputEmail1" onchange="setEmailId(event)" aria-describedby="emailHelp" placeholder="Enter Your Email Address" required> <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>
						<button type="submit" class="btn btn-primary bg-dark float-right">Subscribe</button>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	<div class="row mt-4 bg-dark border-top p-3">
		<div class="col-md-12 col-lg-12 pl-0">
		<p class="wow fadeInUp text-white text-center">Visitors: <a href="javascript:void(0)" title="free counters"><img src="https://counter6.stat.ovh/private/freecounterstat.php?c=nw7lsmqjb4rnnlmrae4cc3hs64q7cl8c" border="0" title="free counters" alt="free counters"></a></p>
			<p class="wow fadeInUp text-white text-center" data-wow-delay="0.2s"> <a href="http://mapleitesolutions.com/" class="text-white" target="_blank"> Copyright 2021-Website designing & Development by Mapleitesolutions.com </a> </p>
		</div>
	</div>
</div>