<div>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a href="/">Home</a></li>
                            <li>Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- account area start -->
    <div class="checkout-area mtb-50px">
        <div class="container">
            <div class="row">
                <div class="ms-auto me-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div id="faq" class="panel-group">
                            <div class="panel panel-default single-my-account">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>1 .</span> <a data-bs-toggle="collapse" data-bs-target="#my-account-1">Edit your account information </a></h3>
                                </div>
                                <div id="my-account-1">
                                    <div class="panel-body">
                                        <div class="myaccount-info-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>My Account Information</h4>
                                                <h5>Your Personal Details</h5>
                                            </div>
                                            <div class="account-info-wrapper">
                                            @if (session('success'))
                                                <div class="error-span text-success message-span">
                                                    <i class="lnr lnr-user text-success"></i> 
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
                                            <form wire:submit.prevent='updateInfo'>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>First Name</label>
                                                            <input wire:model="first_name" class="@error('name') error @enderror" type="text" />
                                                            @error('first_name')
                                                                <i class="lnr lnr-warning text-danger"></i>
                                                                <span class="error-span text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Last Name</label>
                                                            <input wire:model="last_name" class="@error('name') error @enderror" type="text" />
                                                            @error('last_name')
                                                                <i class="lnr lnr-warning text-danger"></i>
                                                                <span class="error-span text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Email Address</label>
                                                            <input wire:model="email" class="@error('name') error @enderror" type="email" />
                                                            @error('email')
                                                                <i class="lnr lnr-warning text-danger"></i>
                                                                <span class="error-span text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="billing-back-btn">
                                                    <div class="billing-back">
                                                        <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                    </div>
                                                    <div class="billing-btn">
                                                        <button type="submit" class="basic-btn btn-hover" href="#">
                                                            <span wire:loading.remove>Update Info</span>
                                                            <span wire:loading>Updating...</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>2 .</span> <a data-bs-toggle="collapse" data-bs-target="#my-account-2">Change your password </a></h3>
                                </div>
                                <div id="my-account-2">
                                    <div class="panel-body">
                                        <div class="myaccount-info-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>Change Password</h4>
                                                <h5>Your Password</h5>
                                            </div>
                                            <div class="account-info-wrapper">
                                            @if (session('success2'))
                                                <div class="error-span text-success message-span">
                                                    <i class="lnr lnr-user text-success"></i> 
                                                    {{ session('success2') }}
                                                </div>
                                            @endif
                                            @if (session('error2'))
                                                <div class="error-span text-danger message-span">
                                                    <i class="lnr lnr-warning text-danger"></i> 
                                                    {{ session('error2') }}
                                                </div>
                                            @endif
                                            </div>
                                                <form wire:submit.prevent='updatePassword'>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Old Password</label>
                                                            <input wire:model="old_password" class="@error('old_password') error @enderror" type="password" />
                                                            @error('old_password')
                                                                <i class="lnr lnr-warning text-danger"></i>
                                                                <span class="error-span text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>New Password</label>
                                                            <input wire:model="password" class="@error('password') error @enderror" type="password" />
                                                            @error('password')
                                                                <i class="lnr lnr-warning text-danger"></i>
                                                                <span class="error-span text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Password Confirm</label>
                                                            <input wire:model="password_confirmation" class="@error('password_confirmation') error @enderror" type="password" />
                                                            @error('password_confirmation')
                                                                <i class="lnr lnr-warning text-danger"></i>
                                                                <span class="error-span text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="billing-back-btn">
                                                    <div class="billing-back">
                                                        <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                    </div>
                                                    <div class="billing-btn">
                                                        <button type="submit" class="basic-btn btn-hover" href="#">
                                                            <span wire:loading.remove>Update Password</span>
                                                            <span wire:loading>Updating...</span>
                                                        </button>
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
    </div>
    <!-- account area end -->
</div>
