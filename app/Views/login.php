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
    if(session('webLog') == "TRUE"){
        return redirect()->to('dashboard');
    } else if(session('webLog') == "FALSE"){
        return redirect()->to('confirmOTP');
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
                                <img class="logo-dark logo-img logo-img-lg" src="<?php echo base_url('public/images/logo-dark.png');?>" srcset="<?php echo base_url('public/images/logo-dark.png');?>" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Sign-In</h4>
                                        <div class="nk-block-des">
                                            <p>Access the panel using your email and password.</p>
                                        </div>
                                    </div>
                                </div>
                                <?php $validation = \Config\Services::validation(); ?>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="user_email">Email Address</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" name="user_email" placeholder="Enter email address">
                                            <?php if($validation->getError('user_email')){ ?>
                                                <span class="form-text text-danger small"><?php echo $error = $validation->getError('user_email'); ?></span>
                                            <?php } else { ?>
                                                <span class="form-text text-muted small">We'll never share your email with anyone else.</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="user_password">Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="<?php echo base_url(); ?>login" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input autocomplete="new-password" type="password" class="form-control form-control-lg" id="password" name="user_password" placeholder="Enter user password">
                                        </div>
                                        <?php if($validation->getError('user_password')){ ?>
                                            <small class="text-danger"><?php echo $error = $validation->getError('user_password'); ?></small>
                                        <?php } else { ?>
                                            <small class="text-muted">We'll never share your password with anyone else.</small>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                    <?php if(isset($errors) && $errors != ""){ ?>
                                        <span class="form-text text-danger small mt-2"><?php echo $errors; ?></span>
                                    <?php } ?>
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