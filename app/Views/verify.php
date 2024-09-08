<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="robots" content="noindex, nofollow" />
   
    <link rel="shortcut icon" href="<?php echo base_url('public/images/favicon.png'); ?>">
   
    <title>Login | <?php echo TITLE; ?></title>
    
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/dashlite.css?ver=2.0.0');?>">
    <link id="skin-default" rel="stylesheet" href="<?php echo base_url('public/assets/css/theme.css?ver=2.0.0');?>">
    
    <script src="<?php echo base_url('public/assets/js/bundle.js?ver=2.0.0');?>"></script>
    <script src="<?php echo base_url('public/assets/js/scripts.js?ver=2.0.0');?>"></script>
</head>

<?php
    if(session('webLog') == ""){
        return redirect()->to('login');
    } else if(session('webLog') == "TRUE"){
        return redirect()->to('dashboard');
    }
?>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="<?php echo base_url();?>" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="<?php echo base_url('public/images/logo.png');?>" srcset="<?php echo base_url('public/images/logo.png');?>" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="<?php echo base_url('public/images/logo-dark.png');?>" srcset="<?php echo base_url('public/images/logo-dark2x.png');?>" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title text-center">Plaese Verify Your OTP Number</h5>
                                        <div class="nk-block-des mt-3">
                                            <p>Thanks for giving your login details. An OTP has been sent to your register Mobile Number. Please enter the 8 digit OTP below for Successful Login.</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control form-control-lg"  name="confirm_otp" placeholder="Enter Your OTP Here">
                                            <span class="form-text text-muted small">Your OTP will be continue for 15 minutes.</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Confirm OTP</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="nk-block-content text-center text-lg-center">
                                        <p class="text-soft"><?php echo COPYRIGHT; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>