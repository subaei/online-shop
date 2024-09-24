@extends('layouts.app')

@section('content')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a wire:navigate href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- contact area start -->
<div class="contact-area mtb-50px">
    <div class="container">
        <div class="contact-map mb-10">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a wire:navigate href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                </div>
            </div>
        </div>
        <div class="custom-row-2">
            <div class="col-lg-4 col-md-5 mb-lm-30px">
                <div class="contact-info-wrap">
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="ion-android-call"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p><a wire:navigate href="tel://+012 345 678 102">+012 345 678 102</a></p>
                            <p><a wire:navigate href="tel://+012 345 678 102">+012 345 678 102</a></p>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="ion-android-globe"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p><a wire:navigate href="mailto://urname@email.com">urname@email.com</a></p>
                            <p><a wire:navigate href="mailto://urwebsitenaem.com">urwebsitenaem.com</a></p>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="ion-android-pin"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p>Address goes here,</p>
                            <p>street, Crossroad 123.</p>
                        </div>
                    </div>
                    <div class="contact-social">
                        <h3>Follow Us</h3>
                        <div class="social-info">
                            <ul>
                                <li>
                                    <a wire:navigate href="#"><i class="ion-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a wire:navigate href="#"><i class="ion-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a wire:navigate href="#"><i class="ion-social-youtube"></i></a>
                                </li>
                                <li>
                                    <a wire:navigate href="#"><i class="ion-social-google"></i></a>
                                </li>
                                <li>
                                    <a wire:navigate href="#"><i class="ion-social-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="contact-form">
                    <div class="contact-title mb-30">
                        <h2>Get In Touch</h2>
                    </div>
                    <form class="contact-form-style" id="contact-form" action="https://htmldemo.net/abelo/abelo/assets/php/mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <input name="name" placeholder="Name*" type="text" />
                            </div>
                            <div class="col-lg-6">
                                <input name="email" placeholder="Email*" type="email" />
                            </div>
                            <div class="col-lg-12">
                                <input name="subject" placeholder="Subject*" type="text" />
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Your Message*"></textarea>
                                <button class="submit" type="submit">SEND</button>
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->

@endsection