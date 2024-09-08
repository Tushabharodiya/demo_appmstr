<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><span>My Profile</span></div>
                        <h2 class="nk-block-title fw-normal">Account Info</h2>
                        <div class="nk-block-des">
                            <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Personal Information</h5>
                            <div class="nk-block-des">
                                <p>Basic info, like your name and email, that you use on <?php echo TITLE; ?>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-bordered">
                        <div class="nk-data data-list">
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">User Name</span>
                                    <span class="data-value">
                                        <?php if(session() != null) { ?>
                                            <?php if(!empty(session('user_name'))) { echo session('user_name'); } else { echo "-"; } ?>
                                        <?php } ?>
                                    </span>
                                </div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">User Email</span>
                                    <span class="data-value">
                                        <?php if(session() != null) { ?>
                                            <?php if(!empty(session('user_email'))) { echo session('user_email'); } else { echo "-"; } ?>
                                        <?php } ?>
                                    </span>
                                </div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">User Role</span>
                                    <span class="data-value">
                                        <?php if(session() != null) { ?>
                                            <?php if(!empty(session('user_role'))) { echo session('user_role'); } else { echo "-"; } ?>
                                        <?php } ?>
                                    </span>
                                </div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">User Login</span>
                                    <span class="data-value">
                                        <?php if(session() != null) { ?>
                                            <?php if(!empty(session('user_login'))) { echo session('user_login'); } else { echo "-"; } ?>
                                        <?php } ?>
                                    </span>
                                </div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Is Login</span>
                                    <span class="data-value">
                                        <?php if(session() != null) { ?>
                                            <?php if(!empty(session('is_login'))) { echo session('is_login'); } else { echo "-"; } ?>
                                        <?php } ?>
                                    </span>
                                </div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">User Status</span>
                                    <span class="data-value">
                                        <?php if(session() != null) { ?>
                                            <?php if(!empty(session('user_status'))) { echo session('user_status'); } else { echo "-"; } ?>
                                        <?php } ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>