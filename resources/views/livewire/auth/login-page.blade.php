<div>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a wire:navigate href="index.html">Home</a></li>
                            <li>Login</li>
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
                            <a wire:navigate class="active" href="#">
                                <h4>login</h4>
                            </a>
                            <a wire:navigate href="/register">
                                <h4>register</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form wire:submit.prevent='login'>
                                            @if (session('error'))
                                                <div class="error-span text-danger">
                                                    <i class="lnr lnr-warning text-danger"></i> 
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                            <label>Email</label>
                                            <input type="email" wire:model="email" class="@error('email') error @enderror" placeholder="Email" />
                                            @error('email')
                                                <i class="lnr lnr-warning text-danger"></i>
                                                <span class="error-span text-danger">{{ $message }}</span>
                                            @enderror
                                            <label class="password-label">Password <a wire:navigate href="/forget">Forget password?</a></label>
                                            <input type="password" wire:model="password" class="@error('password') error @enderror" placeholder="Password" />
                                            @error('password')
                                                <i class="lnr lnr-warning text-danger"></i>
                                                <span class="error-span text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="button-box">
                                                <button type="submit" class="btn-block">
                                                    <span>Login<span wire:loading wire:target='login'>...</span></span>
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
