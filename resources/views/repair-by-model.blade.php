@extends('layouts.app')
@section('content')
<div class="device-types">
    <div class="header-part">
        <h1 class="main-text-color">MOBILE <span class="main-link-color">PHONE</span> AND <span class="main-link-color">TABLET</span> REPAIRS <br>
            WHEREVER YOU ARE
        </h1>
    </div>
    <div class="select">
        <h2><div>1</div>Select Type</h2>
        <div class="square-selects">
            <a href="">
                <div class="square-select">
                    <img src="imgs/silver.svg" alt="iPhone 6 Silver">
                    <p>Apple Phones</p>
                </div>
            </a>
            <a href="">
                <div class="square-select">
                    <img src="imgs/gold.svg" alt="iPad Air Gold">
                    <p>Apple Tablets</p>
                </div>
            </a>
            <a href="">
                <div class="square-select">
                    <img src="imgs/artic-silver.svg" alt="iPhone 6 Silver">
                    <p>Samsung Phones</p>
                </div>
               
            </a>
        </div>
    </div>
    <div class="container-fluid row">
        <div class="col-md-6 usps" style="background: #f5f5f5">            
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <h3 class="main-text-color">WHY CHOOSE WEFIX?</h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    $data = array(array('title' => 'Repaired at your location',
                                        'desc' => 'WeFix comes to you - at home, on holiday, your workplace or even, hotel.',
                                        'icon' => 'pin-dblue.png'),
                                array('title' => 'One-hour window',
                                        'desc' => 'Receive a one hour time slot when our WeFix technician will arrive via SMS & email.',
                                        'icon' => 'clock.png'),
                                array('title' => 'Twelve month warranty',
                                        'desc' => 'WeFix guarantees all repairs for twelve months – it’s as simple as that.',
                                        'icon' => 'phone-loop.svg'),
                                array('title' => 'Fixed in under an hour',
                                        'desc' => 'A WeFix repair usually takes no more than sixty minutes.',
                                        'icon' => 'done.png'),
                                array('title' => 'Same day repairs',
                                        'desc' => 'WeFix offers a same day repair service – early-bird bookers do best.',
                                        'icon' => 'today-cal.png'),
                                array('title' => 'Safe and sound',
                                        'desc' => 'Your personal content remains 100% secure. It will neither be accessed or copied.',
                                        'icon' => 'lock.png'));                    
                    ?>
                    @for($i = 0; $i < 6 ; $i++)
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xl-3 text-center">
                                <img src="imgs/{{$data[$i]['icon']}}" alt="Pin Icon">
                            </div>
                            <div class="col-md-9 col-sm-9 col-xl-9">
                                <h5>{{$data[$i]['title']}}</h5>
                                <p class="main-text-color">{{$data[$i]['desc']}}</p>
                            </div>
                        </div>
                    </div>
                    @endfor

                
            </div>
        </div>
        <div class="col-md-6 trustpilot">
            <p>Trustpilot Widget</p>
        </div>
    </div>
</div>

@endsection