@extends('layouts.app')
@section('content')
<div class="repair-by-problem">
    <div class="problems">
        <div class="header">
            <h1>
                MOBILE <span>PHONE</span> AND <span>TABLET</span> REPAIRS <br>
            BY PROBLEM
            </h1>
        </div>
        <div class="select">
            <h2><div>1</div>Select Problem</h2>
            <div class="round-selects">
                <?php
                $data = array(
                    array(
                        'item' => 'Phone Screen',
                        'image' => 'screen.svg'
                    ),
                    array(
                        'item' => 'Home Button',
                        'image' => 'home-button.svg'
                    ),
                    array(
                        'item' => 'Battery',
                        'image' => 'battery.svg'
                    ),
                    array(
                        'item' => 'Power Button',
                        'image' => 'power-button.svg'
                    ),
                    array(
                        'item' => 'Microphone',
                        'image' => 'microphone.svg'
                    ),
                    array(
                        'item' => 'Headphone Jack',
                        'image' => 'headphone-jack.svg'
                    ),
                    array(
                        'item' => 'Ear Speaker',
                        'image' => 'ear-speaker.svg'
                    ),
                    array(
                        'item' => 'Volume Button',
                        'image' => 'volume-buttons.svg'
                    ),
                    array(
                        'item' => 'Mute Button',
                        'image' => 'mute-button.svg'
                    ),
                    array(
                        'item' => 'Front Camera',
                        'image' => 'front-camera.svg'
                    ),
                    array(
                        'item' => 'Rear Camera',
                        'image' => 'rear-camera.svg'
                    ),
                    array(
                        'item' => 'Vibrator',
                        'image' => 'vibrator.svg'
                    ),
                    array(
                        'item' => 'Back Housing',
                        'image' => 'back-housing.svg'
                    ),
                    array(
                        'item' => 'Loud Speaker',
                        'image' => 'loud-speaker.svg'
                    ),
                    array(
                        'item' => 'Tablet Glass',
                        'image' => 'glass.svg'
                    ),
                    array(
                        'item' => 'Tablet LCD',
                        'image' => 'lcd.svg'
                    ),
                    array(
                        'item' => 'Charger Port',
                        'image' => 'charger-port.svg'
                    ),
                    array(
                        'item' => 'Back Glass',
                        'image' => 'back-glass.svg'
                    ),
                    array(
                        'item' => 'Frame',
                        'image' => 'frame.svg'
                    ),
                    array(
                        'item' => 'Finger Print',
                        'image' => 'finger-print.svg'
                    ),
                    array(
                        'item' => 'Wireless Charging',
                        'image' => 'wireless-charging.svg'
                    ),
                    array(
                        'item' => 'Proximity Issue',
                        'image' => 'proximity-issue.svg'
                    ),
                    array(
                        'item' => 'SIM Card',
                        'image' => 'sim-card.svg'
                    ),
                    array(
                        'item' => 'S Pen',
                        'image' => 's-pen.svg'
                    ),
                    array(
                        'item' => 'Iris Camera',
                        'image' => 'iris-camera.svg'
                    ),
                )
                ?>
                @for($i = 0; $i < count($data); $i++)
                    <a href="">
                        <div class="square-container">
                            <img src="imgs/{{$data[$i]['image']}}">
                            <p>{{$data[$i]['item']}}</p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection