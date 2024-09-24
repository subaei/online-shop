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
                                        <form wire:submit.prevent='forget'>
                                            @if (session('success'))
                                                <i class="lnr lnr-envelope text-success"></i>
                                                <span class="error-span text-success">{{ session('success') }}</span>
                                            @endif
                                            <input wire:model="email" class="@error('email') error @enderror" placeholder="Email" type="email" />
                                            @error('email')
                                                <i class="lnr lnr-warning text-danger"></i>
                                                <span class="error-span text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="button-box">
                                                <button type="submit" class="btn-block">
                                                    <span>Reset Password<span wire:loading wire:target='forget'>...</span></span>
                                                </button>
                                                <div class="login-toggle-btn">
                                                    <a wire:navigate href="/login"><i class="fa fa-arrow-left"></i> Back to Login</a>
                                                </div>
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
