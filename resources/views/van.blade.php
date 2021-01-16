@extends('layouts.app')
@section('content')
<div class="vans">
    <div class="image-container" transition="" style="background-image: url(imgs/clean-environment.png)">
        
    </div>
    <div class="slider-dots">
        
        <ul>
            <li>
                <img class="dot-1" src="imgs/dot-ring.png" alt="Dot" onclick="showSlides('1')">                
            </li>
            <li>
                <img class="dot-2" src="imgs/dot.png" alt="Dot" onclick="showSlides('2')">
            </li>
            <li>
                <img class="dot-3" src="imgs/dot.png" alt="Dot" onclick="showSlides('3')">                
            </li>
            <li>
                <img class="dot-4" src="imgs/dot.png" alt="Dot" onclick="showSlides('4')">                
            </li>
            <li>
                <img class="dot-5" src="imgs/dot.png" alt="Dot" onclick="showSlides('5')">                
            </li>
            <li>
                <img class="dot-6" src="imgs/dot.png" alt="Dot" onclick="showSlides('6')">                
            </li>
            <li>
                <img class="dot-7" src="imgs/dot.png" alt="Dot" onclick="showSlides('7')">                
            </li>
        </ul>
    </div>
    <div class="slider-controls">
        <div class="row">
            <div class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1"></div>
            <div class="col-md-1 col-sm-1 col-xs-1">
                <i class="fa fa-angle-left" onclick="showSlide(-1)"></i>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1"></div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <h4>Anti-Static ESD</h4>
                <p>Our vans our fully kitted out with ESD equipment (Anti static) so your device is repaired in the best environment possible.</p>

            </div>
            <div class="col-md-1 col-sm-1 col-xs-1"></div>
            <div class="col-md-1 col-sm-1 col-xs-1">
                <i class="fa fa-angle-right" onclick="showSlide(1)"></i>
            </div>
            <div class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1"></div>
        </div>
    </div>
</div>
<script>
    var before = '1';
    var current = 1;
    function showSlides(i){
        current = parseInt(i);
        clearInterval(interval);
        interval = setInterval(function(){
            showSlide(1);            
        },8000);
        var ringSrc = 'imgs/dot-ring.png';
        var dotSrc = 'imgs/dot.png'
        $('.dot-'+before).attr('src', dotSrc);
        $('.dot-'+i).attr('src', ringSrc);
        
        $('.image-container').removeClass(' bg-'+before);
        $('.image-container').addClass(' bg-'+i);
        before = i;
    }
    function showSlide(i){
        current += i;
        if(current > 7){
            current = 1;
        }
        if(current < 1){
            current = 7;
        }
        showSlides(current.toString());
    }
    var interval = setInterval(function(){
            showSlide(1);            
        },8000);
    interval;
    
</script>
@endsection