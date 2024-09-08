<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Gmail</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Information Gmail</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?= !empty(session()->get('session_account_gmail_view_previous_url')) ? session()->get('session_account_gmail_view_previous_url') : base_url('view-gmail'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-5">
                                <div class="col-lg-12">
                                    <div class="card card-bordered">
                                        <ul class="data-list is-compact">
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Account Id</div>
                                                    <div class="data-value"><?php echo $infoGmail['account_id'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Account Name</div>
                                                    <div class="data-value"><?php echo $infoGmail['account_name'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Account Email</div>
                                                    <div class="data-value"><?php echo $infoGmail['account_email'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Account Mobile Number</div>
                                                    <div class="data-value"><?php echo $infoGmail['account_mobile_number'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Account Birth Date</div>
                                                    <div class="data-value"><?php echo $infoGmail['account_birth_date'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Account Create Date</div>
                                                    <div class="data-value"><?php echo $infoGmail['account_create_date'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Account Note</div>
                                                    <div class="data-value"><?php echo $infoGmail['account_note'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Account Gender</div>
                                                    <div class="data-value"><?php echo $infoGmail['account_gender'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Account Status</div>
                                                    <div class="data-value"><?php echo $infoGmail['account_status'];?></div>
                                                </div>
                                            </li>
                                        </ul>
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