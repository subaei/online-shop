<div>
     <!-- Breadcrumb Area Start -->
     <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a wire:navigate href="index.html">Home</a></li>
                            <li>Forget Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- login area start -->
    <div class="login-register-area mb-50px mt-40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ms-auto me-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a wire:navigate href="#">
                                <h4>Forget Password</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg2" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form wire:submit.prevent='resetPass'>
                                            @if (session('error'))
                                                <i class="lnr lnr-envelope text-danger"></i>
                                                <span class="error-span text-danger">{{ session('error') }}</span>
                                            @endif
                                            <input wire:model="password" class="@error('password') error @enderror" placeholder="Password" type="password" />
                                            @error('password')
                                                <i class="lnr lnr-warning text-danger"></i>
                                                <span class="error-span text-danger">{{ $message }}</span>
                                            @enderror
                                            <input type="password" class="@error('password_confirmation') error @enderror" wire:model="password_confirmation" placeholder="Confirmed Password" />
                                            @error('password_confirmation')
                                                <i class="lnr lnr-warning text-danger"></i>
                                                <span class="error-span text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="button-box">
                                                <button type="submit" class="btn-block">
                                                    <span>Reset Password<span wire:loading wire:target='resetPass'>...</span></span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->
</div>
