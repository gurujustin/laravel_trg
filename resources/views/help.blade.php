@extends('layouts.app')
@section('content')
<div class="repairs-land lazy" data-src="imgs/land.png">
    <img src="imgs/clouds-3.svg" class="clouds lazy" alt="">

<div class="header">
    <h5>HOW DOES IT WORK?</h5>
    <h1>JOIN US ON THE ROAD TO THE PERFECT REPAIR</h1>
</div>
<div class="scroll-icon">
    <p>SCROLL</p>
    <div class="scroll-img"></div>
</div>
<img src="imgs/van.png" alt="" class="van">
<div class="road">
    <div class="start rectangle">
        START
    </div>
    <img src="imgs/road.svg" alt="Road">
    <div class="end rectangle">END</div>
</div>
<div class="steps">
    <?php 
        $data = array(
            array(
                'title' => 'Select your device',
                'desc' => 'Select the device you’d like repaired. If you can’t see the device you’re looking for call WeFix – we like to think we can repair just about anything.'
            ),
            array(
                'title' => 'Choose a day',
                'desc' => 'WeFix technicians work Monday-Friday (but not bank holidays). Choose a day and time that’s good for you – we can even repair the same day.'
            ),
            array(
                'title' => 'WeFix comes to you',
                'desc' => 'WeFix’s fully trained and security cleared technicians come to wherever you are – at home, place of work, hotel or even hairdressers.* All we need is a place to park.'
            ),
            array(
                'title' => 'All aboard the WeFix mobile workshop',
                'desc' => 'All work is carried out in our mobile workshops, which are Samsung approved, equipped with the latest tools and tech and generously stocked with genuine spares and components'
            ),
            array(
                'title' => 'Done, dusted and guaranteed',
                'desc' => 'Once repaired, your technician will demo’ your device to ensure you’re completely happy with the WeFix service. All repairs are guaranteed for twelve whole months.'
            )
        )
        
        ?>
    @for($i = 0; $i < 5; $i++)
    <div class="step">
        <div class="head">
            <div class="number">
                <h3>STEP</h3>
                <h3 class="large">{{$i+1}}</h3>
            </div>
            <div class="title">
                <h4>{{$data[$i]['title']}}</h4>
            </div>
        </div>
        <p>{{$data[$i]['desc']}}</p>
    </div>
    @endfor
</div> 
</div>

@endsection