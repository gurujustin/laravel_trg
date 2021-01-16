@extends('layouts.app')
@section('content')
<div class="faqs">
    <div class="header">
        <h1>FAQs</h1>
    </div>
</div>
<div class="faqs-title container">
    <h3 class="main-text-color">Booking</h3>
    <div class="faq-section">
        <?php
        $data = array(
            array(
                'question' => 'Where are the prices?',
                'answer' =>'Head to the Prices Page, select your device and you’ll be able to see what price options are available.'
            ),
            array(
                'question' => 'Can I book multiple repairs?',
                'answer' => 'Yes. When you get to the checkout of the Repair Select page, click \'Add Another Repair\'.'
            ),
            array(
                'question' => 'Is it possible to select a specific time for my repair?',
                'answer' =>'Unfortunately not. You’ll be allocated the earliest appointment available. For a same day repair, this will be confirmed at the checkout. For a next day (or later) appointment, the time will be confirmed to you via SMS and email by 08.00 on the day of your repair.'
            ),
            array(
                'question' => 'Can I change the date of my repair?',
                'answer' =>'Yes, but we require a minimum of 24 hours notice to cancel your original appointment. Giving less than 24 hours notice will incur a £59.00 cancellation fee.'
            ),
            array(
                'question' => 'What happens if I’ve booked the wrong device?',
                'answer' =>'If you book the wrong model and/or colour then your WeFix technican won’t have the correct spares to carry out your repair. This will incur a £59.00 cancellation fee and another appointment wil have to be booked'
            ),
            array(
                'question' => 'What happens if my device is heavily damaged?',
                'answer' =>'Contact the WeFix team beforeyou book if you think your device is heavily damaged.Failure to do so may result in your repair not being carried out and a £59.00 charge being applied.'
            ),
            array(
                'question' => 'Can I cancel my repair?',
                'answer' =>'Yes but we require a minimum of 24 hours notice. Giving less than 24 hours notice will incur a £59.00 cancellation fee.'
            ),
            array(
                'question' => 'How do I manage my booking?',
                'answer' =>'You can manage your booking here where you are prompted to enter your email address and order number to manage your booking.'
            )
    );
        ?>
        @for($i = 0; $i < count($data); $i++)
        <div class="toggle">
            <div class="toggle-title ">
                <h4>
                <i></i>
                <span class="title-name">{{$data[$i]['question']}}</span>
                </h4>
            </div>
            <div class="toggle-inner">
                <p>{{$data[$i]['answer']}}</p>
            </div>
        </div>
        @endfor
    </div>
</div>
<script type="text/javascript">
    if( jQuery(".toggle .toggle-title").hasClass('active') ){
        jQuery(".toggle .toggle-title.active").closest('.toggle').find('.toggle-inner').show();
    }
    jQuery(".toggle .toggle-title").click(function(){
        if( jQuery(this).hasClass('active') ){
            jQuery(this).removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
        }
        else{	jQuery(this).addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);
        }
    });
</script>
@endsection