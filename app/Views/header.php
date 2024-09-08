<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <!--<base href="../../../">-->
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="robots" content="noindex, nofollow" />
   
    <link rel="shortcut icon" href="<?php echo base_url('public/images/favicon.png');?>">
   
    <title><?php echo TITLE; ?></title>
    
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/dashlite.css?ver=2.0.0');?>">
    <link id="skin-default" rel="stylesheet" href="<?php echo base_url('public/assets/css/theme.css?ver=2.0.0');?>">
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<?php
    if(session('webLog') == ""){
        return redirect()->to('login');
    } else if(session('webLog') == "FALSE"){
        return redirect()->to('confirmOTP');
    }
?>

<?php if(session('theme_mode') == "dark"){ ?>
    <body class="nk-body npc-invest bg-lighter dark-mode">
<?php } else { ?>
    <body class="nk-body npc-invest bg-lighter ">
<?php } ?>
    <div class="nk-app-root">
        <div class="nk-wrap ">
            <div class="nk-header nk-header-fluid is-theme">
                <div class="container-xxl wide-xxl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                            <a href="<?php echo base_url('#'); ?>" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand">
                            <a href="<?php echo base_url('#'); ?>" class="logo-link">
                                <img class="logo-light logo-img" src="<?php echo base_url('public/images/logo.png');?>" srcset="<?php echo base_url('public/images/logo2x.png');?>" alt="logo">
                            </a>
                        </div>
                        <div class="nk-header-menu" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a href="<?php echo base_url('#'); ?>" class="logo-link">
                                        <img class="logo-light logo-img" src="<?php echo base_url('public/images/logo.png');?>" srcset="<?php echo base_url('public/images/logo.png');?>" alt="logo">
                                        <img class="logo-dark logo-img" src="<?php echo base_url('public/images/logo-dark.png');?>" srcset="<?php echo base_url('public/images/logo-dark.png');?>" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-menu-trigger mr-n2">
                                    <a href="<?php echo base_url('#'); ?>" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div>
                            <ul class="nk-menu nk-menu-main ui-s2">
                                <li class="nk-menu-item">
                                    <a href="<?php echo base_url('dashboard');?>" class="nk-menu-link">
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo base_url('view-app');?>" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">Android</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?php echo base_url('view-app');?>" class="nk-menu-link"><span class="nk-menu-text">Application</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo base_url('view-developer');?>" class="nk-menu-link"><span class="nk-menu-text">Developer</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo base_url('view-concept');?>" class="nk-menu-link"><span class="nk-menu-text">Concept</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo base_url('view-banner');?>" class="nk-menu-link"><span class="nk-menu-text">Banners</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo base_url('view-common-json');?>" class="nk-menu-link"><span class="nk-menu-text">Json</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo base_url('view-device');?>" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">Inhouse</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?php echo base_url('view-device');?>" class="nk-menu-link"><span class="nk-menu-text">Device</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo base_url('view-ip');?>" class="nk-menu-link"><span class="nk-menu-text">Ip</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo base_url('view-gmail');?>" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">Account</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?php echo base_url('view-gmail');?>" class="nk-menu-link"><span class="nk-menu-text">Gmail</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo base_url('view-facebook');?>" class="nk-menu-link"><span class="nk-menu-text">Facebook</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="<?php echo base_url('view-simcard');?>" class="nk-menu-link">
                                        <span class="nk-menu-text">Simcard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="<?php echo base_url('view-feedback');?>" class="nk-menu-link">
                                        <span class="nk-menu-text">Feedback</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="#" data-toggle="modal" data-target="#copyApp" class="nk-menu-link">
                                        <span class="nk-menu-text">Demo</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown user-dropdown order-sm-first">
                                    <a href="<?php echo base_url('#'); ?>" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status"><?php if(session('user_role') != null){ ?> <?php echo session('user_role'); ?> <?php } ?></div>
                                                <div class="user-name dropdown-indicator"><?php if(session('user_name') != null){ ?> <?php echo session('user_name'); ?> <?php } ?></div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span><?php echo get_first_letters(session('user_name')); ?></span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text"><?php echo session('user_name'); ?></span>
                                                    <span class="sub-text"><?php echo session('user_email'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="<?php echo base_url('user-profile');?>"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                <li><a href="<?php echo base_url('remove-session');?>"><em class="icon ni ni-reload-alt"></em><span>Referesh</span></a></li>
                                                <?php if(session('theme_mode') == "dark"){ ?>
                                                    <li><a href="<?php echo base_url('is-theme');?>"><em class="icon ni ni-sun"></em><span>Light Mode</span></a></li>
                                                <?php } else { ?>
                                                    <li><a href="<?php echo base_url('is-theme');?>"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="<?php echo base_url('logout');?>"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" tabindex="-1" id="copyApp">
                <div class="modal-dialog modal-dialog-top" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Application</h5>
                            <a href="<?php echo base_url('#'); ?>" class="close" data-dismiss="modal" aria-label="Close">
                                <em class="icon ni ni-cross"></em>
                            </a>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to copy demo app?</p>
                        </div>
                        <div class="modal-footer bg-light">
                            <span class="sub-text"><a href="<?php echo base_url('demo-app');?>" class="btn btn-sm btn-primary">Copy</a></span>
                        </div>
                    </div>
                </div>
            </div>