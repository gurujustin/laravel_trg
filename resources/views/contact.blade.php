@extends('layouts.app')
@section('content')
<div class="contact">
    <div class="text-center container">
        <div class="header-part">
            <h1 class="main-text-color">Contact Us</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5 class="mb-5 main-text-color">How would you like to get in touch?</h5>
            </div>
            <div class="col-md-4 col-sm-4 call-us-container">
                <div class="card selectable-card" id="call-us">
                    <div class="card-body">
                        <img src="imgs/call-us.svg" alt="Phone Icon" class="contact-icon">
                        <h5>Call Us</h5>
                        <p>Provide your details so we'll be ready when you give us a call.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 livechat-container">
                <div class="card selectable-card" id="livechat-open">
                    <div class="card-body">
                        <img src="imgs/live-chat.svg" alt="Live Chat Icon" class="contact-icon">
                        <h5>Live Chat</h5>
                        <p>Get a quote for a repair or speak to a member of our team now.</p>
                        <span class="badge badge-primary">Recommended</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 email-us-container">
                <div class="card selectable-card" id="email-us">
                    <div class="card-body">
                        <img src="imgs/email-us.svg" alt="Email Icon" class="contact-icon">
                        <h5>Message Us</h5>
                        <p>Send a message and a member of our team will get back to you within 48 hours.</p>
                    </div>
                </div>
            </div>
            
            
        </div>
        <hr class="bottom-divider">
    </div>
</div>
@endsection