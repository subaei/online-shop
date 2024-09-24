<div>
    <!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a wire:navigate href="/">Home</a></li>
                        <li>Contact Us page</li>
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
                    <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4840.066234237638!2d32.50964736430998!3d15.668334561892893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e8d16d18d92f1%3A0xcee149eaefc93f34!2sAlghemayer%20mosque!5e0!3m2!1sen!2s!4v1727195984810!5m2!1sen!2s" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
                            <p><a wire:navigate href="#">+249 117 311 231</a></p>
                            <p><a wire:navigate href="#">+249 901 975 878</a></p>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="ion-android-globe"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p><a wire:navigate href="#">subaei86@email.com</a></p>
                            <p><a target="_blank" href="https://subaei-portfolio.vercel.app/">subaei-portfolio.vercel.app</a></p>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="ion-android-pin"></i>
                        </div>
                        <div class="contact-info-dec">
                            <p>Omdurman, Khartoum, Sudan</p>
                            <p>Kabajab, 1.</p>
                        </div>
                    </div>
                    <div class="contact-social">
                        <h3>Follow Us</h3>
                        <div class="social-info">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/subaeiwda"><i class="ion-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/in/mohammed-alsubaei-4b6212a3/"><i class="ion-social-linkedin"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/subaei86/"><i class="ion-social-instagram"></i></a>
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
                    <div class="contact-title mb-30">
                        @if (session('success'))
                            <div class="error-span text-success message-span">
                                <i class="lnr lnr-envelope text-success"></i> 
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="error-span text-danger message-span">
                                <i class="lnr lnr-warning text-danger"></i> 
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <form wire:submit.prevent='contactMessage' class="contact-form-style">
                        <div class="row">
                            <div class="col-lg-6">
                                <input wire:model="name" class="@error('name') error @enderror" placeholder="Name*" type="text" />
                                @error('name')
                                    <i class="lnr lnr-warning text-danger"></i>
                                    <span class="error-span text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <input wire:model="email" class="@error('email') error @enderror" placeholder="Email*" type="email" />
                                @error('email')
                                    <i class="lnr lnr-warning text-danger"></i>
                                    <span class="error-span text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <input wire:model="subject" class="@error('subject') error @enderror" placeholder="Subject*" type="text" />
                                @error('subject')
                                    <i class="lnr lnr-warning text-danger"></i>
                                    <span class="error-span text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <textarea wire:model="message" class="@error('message') error @enderror" placeholder="Your Message*"></textarea>
                                @error('message')
                                    <i class="lnr lnr-warning text-danger"></i>
                                    <span class="error-span text-danger">{{ $message }}</span>
                                @enderror
                                <button type="submit" class="basic-btn btn-hover" href="#">
                                    <span wire:loading.remove>Send Message</span>
                                    <span wire:loading>Sending...</span>
                                </button>
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
</div>
