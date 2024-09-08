<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Subscription</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Information Subscription</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?php echo base_url('info-app/'.urlEncodes($appID));?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
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
                                                    <div class="data-label">Subscription Id</div>
                                                    <div class="data-value"><?php echo $infoSubscription['subscription_id'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Subscription Code</div>
                                                    <div class="data-value"><?php echo $infoSubscription['subscription_code'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Subscription Title One</div>
                                                    <div class="data-value"><?php echo $infoSubscription['subscription_title_one'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Subscription Title Two</div>
                                                    <div class="data-value"><?php echo $infoSubscription['subscription_title_two'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Subscription Title Three</div>
                                                    <div class="data-value"><?php echo $infoSubscription['subscription_title_three'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Subscription Title Four</div>
                                                    <div class="data-value"><?php echo $infoSubscription['subscription_title_four'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Subscription Offer</div>
                                                    <div class="data-value"><?php echo $infoSubscription['subscription_offer'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Subscription Primary</div>
                                                    <div class="data-value"><?php echo $infoSubscription['subscription_primary'];?></div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col">
                                                    <div class="data-label">Subscription Status</div>
                                                    <div class="data-value"><?php echo $infoSubscription['subscription_status'];?></div>
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