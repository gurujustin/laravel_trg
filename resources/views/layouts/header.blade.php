
	<div class="header">
		<a href="{{route('home')}}" class="navbar-brand">
			<img src="imgs/wefix-logo-no-bg.svg" alt="WeFix" class="lazy" style="">
		</a>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto">
				<li itemprop="name" class="nav-item">
					<a href="{{route('how-it-works')}}" itemprop="url" class="nav-link">HOW IT WORKS</a>
				</li>
				<li itemprop="name" class="nav-item">
					<a href="{{route('business')}}" itemprop="url" class="nav-link">FOR BUSINESS</a>
				</li>
				<li itemprop="name" class="nav-item">
					<a href="{{route('repair-by-model')}}" class="nav-link">REPAIR BY MODEL</a>
				</li>
				<li itemprop="name" class="nav-item">
					<a href="{{route('repair-by-problem')}}" class="nav-link">REPAIR BY PROBLEM</a>
				</li>
				<li itemprop="name" class="nav-item">
					<a href="{{route('booking')}}" class="nav-link">MANAGE BOOKING</a>
				</li>
				<li itemprop="name" class="nav-item">
					<a href="{{route('contact')}}" class="nav-link">CONTACT</a>
				</li>
			</ul>
		</div>
		<div class="nav-right">
			<div class="item">
				<div class="menu-btn" onclick="openNav()">
					<img src="imgs/menu-icon-d-blue.svg">
					<p>MENU</p>
				</div>
			</div>
			<div class="item">
				<div class="trustpilot">
					<a href="">
						<img src="imgs/trustpilot.png" alt="Trustpilot">
					</a>
				</div>
			</div>

		</div>
	</div>
	<div class="alert covid-19-alert">
		<a href="#">
			<strong>We're still fully operational.</strong> View important information regarding Coronavirus (COVID-19) for WeFix customers <strong class="text-underline">here.</strong>
		</a>
	</div>
	<div class="menu-overlay" id="menu-overlay" >
		<div class="left-side">
			<ul>
				<li>
					<h2><a href="{{route('home')}}">HOME</a></h2>
				</li>
				<li>
					<h2><a href="{{route('how-it-works')}}">HOW IT WORKS</a></h2>
				</li>
				<li>
					<h2><a href="{{route('about')}}">ABOUT</a></h2>
				</li>
				<li>
					<h2><a href="{{route('van')}}">VANS</a></h2>
				</li>
			</ul>
		</div>
		<div class="right-side">
			<a class="close-menu" onclick="closeNav()">
				<p><i class="fa fa-times"></i>  CLOSE</p>
			</a>
			<ul class="mobile-right">
				<li><a href="{{route('home')}}">HOME</a></li>
				<li><a href="{{route('repair-by-model')}}">REPAIER BY MODEL</a></li>
				<li><a href="{{route('repair-by-problem')}}">REPAIER BY PROBLEM</a></li>
				<li><a href="{{route('how-it-works')}}">HOW IT WORKS</a></li>
				<li><a href="{{route('business')}}">FOR BUSINESS</a></li>
				<li><a href="{{route('contact')}}">CONTACT</a></li>
				<li><a href="{{route('van')}}">VANS</a></li>
				<li><a href="{{route('booking')}}">MANAGE BOOKING</a></li>
				<li><a href="{{route('faqs')}}">FAWs</a></li>
				<li><a href="{{route('about')}}">ABOUT</a></li>
			</ul>
			<ul class="desktop-right">
				<li>
					<div class="row">
						<div class="col-sm-1">
							<img src="imgs/message-bubble.png" alt="Message Bubble">
						</div>
						<div class="col-sm-10 desc">
							<h5><a href="{{route('faqs')}}">FAQs</a></h5>
							<div class="line"></div>
							<p>Find answers to the most common questions we get asked.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-sm-1">
							<img src="imgs/van-red.png" alt="Van Bubble">
						</div>
						<div class="col-sm-10 desc">
							<h5><a href="{{route('about')}}">ABOUT</a></h5>
							<div class="line"></div>
							<p>Learn more about WeFix and who we are.</p>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-sm-1">
							<img src="imgs/phone-red.png" alt="Phone Bubble">
						</div>
						<div class="col-sm-10 desc">
							<h5><a href="{{route('contact')}}">CONTACT</a></h5>
							<div class="line"></div>
							<p>If you have any questions or queris give us a call.</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
    </div>