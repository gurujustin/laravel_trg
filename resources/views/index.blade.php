@extends('layouts.app')
@section('content')
<div class="home-header lazy"  data-src="imgs/wefix-van-header.jpg">
    <div class="form">
        <div class="inner">
            <h1>
                <span>SMARTPHONE</span> AND <span>TABLET</span> REPAIRS
            </h1>
            <h1>
                WE COME TO YOU
            </h1>
            <div class="postcode-input">
                <section>
                    <div class="postcode-container">
                        <div class="input-container">
                            <span id="placeholder" class="holder">
                                Enter the <span>postcode</span>
                                <img src="imgs/pin-grey.png" alt="Pin Icon">
                            </span>
                            <input type="text" id="postcode-input" autocomplete="off">
                        </div>
                        <button>BOOK NOW</button>
                    </div>
                </section>
            </div>
            <h5>Where do you want your device repaired?</h5>
        </div>
    </div>
    <img src="imgs/mna-2020-winner-badge.png" alt="Mobile News Awards 2020 Winner - Best Service and Repair" class="mna-winner-badge lazy">
</div>
<div class="home-container container-fluid">
    <div class="text-center col-md-12 usps-desktop">	
        <div class="row">
            <div class="col-md-4 col-xs-6 usps">
                <img src="imgs/pin-dblue.png" alt="Pin Icon" class="lazy">
                <h5>Repaired at your location</h5>
                <p>WeFix comes to you - at home, on holiday , your workplace or even, hotel.
            </div>				
            <div class="col-md-4 col-xs-6 usps">
                <img src="imgs/clock.png" alt="Pin Icon" class="lazy">
                <h5>One-hour window</h5>
                <p>We’ll confirm your technician’s time of arrival by SMS and email.</p>
            </div>				
            <div class="col-md-4 col-xs-6 usps">
                <img src="imgs/phone-loop.svg" alt="Pin Icon" class="lazy">
                <h5>Twelve month warranty</h5>
                <p>WeFix guarantees all repairs for twelve months – it’s as simple as that.</p>
            </div>
        </div>
        <div class="row">				
            <div class="col-md-4 col-xs-6 usps">
                <img src="imgs/done.png" alt="Pin Icon" class="lazy">
                <h5>Fixed in under an hour</h5>
                <p>A WeFix repair usually takes no more than sixty minutes.
            </div>				
            <div class="col-md-4 col-xs-6 usps">
                <img src="imgs/lock.png" alt="Pin Icon" class="lazy">
                <h5>Same day repairs</h5>
                <p>WeFix offers a same day repair service – early-bird bookers do best.
            </div>				
            <div class="col-md-4 col-xs-6 usps">
                <img src="imgs/today-cal.png" alt="Pin Icon" class="lazy">
                <h5>Safe and sound</h5>
                <p>Your personal content remains 100% secure. It will neither be accessed or copied.
            </div>
        </div>				
    </div>
    <div class="text-center col-md-12 usps-mobile">	
        <div class="row">
            <div class="col-md-4 col-xs-6 usps">
                <img data-src="imgs/pin-dblue.png" alt="Pin Icon" class="lazy">
                <h5>Repaired at your location</h5>
                <p>WeFix comes to you - at home, on holiday , your workplace or even, hotel.
            </div>				
            <div class="col-md-4 col-xs-6 usps">
                <img data-src="imgs/clock.png" alt="Pin Icon" class="lazy">
                <h5>One-hour window</h5>
                <p>We’ll confirm your technician’s time of arrival by SMS and email.</p>
            </div>	
        </div>
        <div class="row">			
            <div class="col-md-4 col-xs-6 usps">
                <img data-src="imgs/phone-loop.svg" alt="Pin Icon" class="lazy">
                <h5>Twelve month warranty</h5>
                <p>WeFix guarantees all repairs for twelve months – it’s as simple as that.</p>
            </div>		
                        
            <div class="col-md-4 col-xs-6 usps">
                <img data-src="imgs/done.png" alt="Pin Icon" class="lazy">
                <h5>Fixed in under an hour</h5>
                <p>A WeFix repair usually takes no more than sixty minutes.
            </div>	
        </div>
        <div class="row">			
            <div class="col-md-4 col-xs-6 usps">
                <img data-src="imgs/lock.png" alt="Pin Icon" class="lazy">
                <h5>Same day repairs</h5>
                <p>WeFix offers a same day repair service – early-bird bookers do best.
            </div>				
            <div class="col-md-4 col-xs-6 usps">
                <img data-src="imgs/today-cal.png" alt="Pin Icon" class="lazy">
                <h5>Safe and sound</h5>
                <p>Your personal content remains 100% secure. It will neither be accessed or copied.
            </div>
        </div>				
    </div>
    <div class="handshake-blurred lazy" data-src="imgs/handshake-blurred-light.jpg">
        <h3>Our curstomers rate us as excellent!</h3>
        <a href="#" target="_blank">
            <img src="imgs/5stars.png" alt="Trustpilot" class="t-stars lazy">
            <br>
            <img src="imgs/text-d-bgd156.png" class="t-logo lazy" alt="Trustpilot">
        </a>
        <br>
        <a href="#">
            <button class="btn w-line-button">
                READ REVIEWS <i class="fa fa-plus"></i>
            </button>
        </a>
    </div>
    <div class="inside-van lazy" data-src="imgs/will-zoomed.png">
        <div class="text">
            <h2>It's what's inside that counts!</h2>
            <p>WeFix mobile workshops are a marvel in their own right, kitted out with all the latest tools and equipment needed to repair your device to the highest possible standard.</p>
            <ul>
                <li>Manufacturer approved specification</li>
                <li>Fully trained and security-cleared technician</li>
                <li>Grounded flooring and anti-static desk</li>
                <li>Clean, lab-tech environment</li>
                <li>Comprehensively stocked with Samsung approved parts</li>
                <li>Approved tools and equipment</li>
            </ul>
            <a href="#">
                <button class="w-line-button">
                    TAKE A LOOK INSIDE 
                    <i class="fa fa-plus"></i>
                </button>
            </a>
        </div>
    </div>
    <div class="live-tracking lazy" data-src="imgs/live-tracking-ipad.png">
        <div class="text">
            <h2>Track your technician</h2>
            <p>On the day of your repair WeFix will send you an email link so you can track the exact location of your technician.
            
            <br><br>				
            Once on their way to you, their ETA is clearly displayed.
        
            </p>
        </div>
    </div>
</div>
@endsection
	