@extends('layouts.app')
@section('content')
<div class="business">
    <div class="header-home lazy" data-src="imgs/phone-repair-header.jpg">
        <h1>Keep working with WeFix</h1>
        <a href="">
            <button>REGISTER NOW</button>
        </a>
        <p>Already have an account? <a href="">Login</a></p>
    </div>
    <div class="row usps">
        <div class="col-xl-4 col-xl-offset-2 col-lg-offset-1 col-lg-5 col-sm-6">
            <h3>Take control of your smartphone and tablet repairs.</h3>
            <p>Even the best employee will find it hard to do a good job with a broken smartphone or tablet.</p>
            <p>WeFix offers corporate customers a fast, efficient and secure repair service, whereever staff are located.</p>
            <p>Book online and a WeFix technician will attend, within sixty minutes of a given time (provided on day of repair) ensuring inconvenience is minimised and productivity maintained.</p>
            <p>Fully-trained and accredited technicians working in factory-fitted mobile workshops guarantee a professional repair every time.</p>
            <a href="">Register Now</a>
        </div>
        <div class="col-xl-4 col-lg-5 col-sm-6">
            <ul>
                <li>
                    <span><img class="lazy" data-src="imgs/done-white.svg" alt="Done"></span>
                    <span><p>Up to 10% discount for your business devices</p></span>
                </li>
                <li>
                    <span><img data-src="imgs/pin-white.svg" class="lazy" alt="Pin White"></span>
                    <span><p>Repairs whereever employees are located</p></span>
                </li>
                <li>
                    <span><img data-src="imgs/clock-white.svg" alt="Clock White" class="lazy"></span>
                    <span><p>Fixed in under one hour</p></span>
                </li>
                <li>
                    <span><img class="lazy" data-src="imgs/phone-circle-white.svg" alt="Phone Circle"></span>
                    <span><p>Twelve-month guarantee</p></span>
                </li>
                <li>
                    <span><img data-src="imgs/today-white.svg" class="lazy" alt="Today"></span>
                    <span><p>Same-day repairs</p></span>
                </li>
                <li>
                    <span><img data-src="imgs/lock-white.svg" class="lazy" alt="Lock"></span>
                    <span><p>Safe, sound and secure</p></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="easy-123">
        <h3>Booking is as easy as 1, 2, 3...</h3>
        <div class="triangle"></div>
    </div>
    <div class="row steps">
        <?php 
        $data = array(
            array(
                'title' => 'Book online',
                'desc' => 'Select the device you want to repair. If you can’t see the device you need, give us a call - we’re confident we can repair just about anything.',
                'image' => 'woman-working-late-tablet.jpg'
            ),
            array(
                'title' => 'Choose a date that works for you',
                'desc' => 'Select your preferred date - we can even carry out repairs the same day.',
                'image' => '3-van.jpg'
            ),
            array(
                'title' => 'We come to you!',
                'desc' => 'WeFix’s fully trained and security cleared technicians come to wherever your employees need us - at head office, a regional office, or even to remote workers.',
                'image' => 'hotel-phone-repair.jpg'
            )
        )        
        ?>
        @for($i = 0; $i < 3; $i++)
            <div class="col-sm-4 lazy step step-{{$i+1}}" data-src="imgs/{{$data[$i]['image']}}">
                <div class="text">
                    <div class="title">
                        <div class="number">{{$i+1}}</div>
                        <h3>{{$data[$i]['title']}}</h3>
                    </div>
                    <p>{{$data[$i]['desc']}}</p>
                </div>
            </div>
        @endfor
        
    </div>
</div>
@endsection