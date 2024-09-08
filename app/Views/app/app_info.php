<?php 
    $uri = service('uri');
    $appID = $uri->getSegment(2);
?>

<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Application</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Information Application</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="<?php echo base_url();?>" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li><a href="<?php echo base_url('edit-app/'.urlEncodes($getAndroidApp['app_id']));?>" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-edit"></em><span>App</span></a></li>
                                                <li><a href="<?php echo base_url('new-version/'.urlEncodes($getAndroidApp['app_id']));?>" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-plus-round"></em><span>Version</span></a></li>
                                                <li><a href="<?php echo base_url('new-subscription/'.urlEncodes($getAndroidApp['app_id']));?>" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-plus-round"></em><span>Subscription</span></a></li>
                                                <li><a href="<?php echo base_url('view-roi/'.urlEncodes($getAndroidApp['app_id']));?>" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-eye"></em><span>Roi</span></a></li>
                                                <li><a href="<?php echo base_url('edit-privacy/'.urlEncodes($getAndroidApp['app_id']));?>" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-edit"></em><span>Privacy Policy</span></a></li>
                                                <li><a href="<?= !empty(session()->get('session_android_application_view_previous_url')) ? session()->get('session_android_application_view_previous_url') : base_url('view-app'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card card-custom-s1 card-bordered">
                                <div class="row no-gutters">
                                    <div class="col-lg-3">
                                        <div class="card-inner-group">
                                            <div class="card-inner">
                                                <img src="<?php echo base_url('public/uploads/logos/'.$getAndroidApp['app_logo']);?>" alt="" width="300" height="300">
                                            </div>
                                            <div class="card-inner">
                                                <ul class="list list-step">
                                                    <li class="list-step-done"><span class="sub-text sub-text-sm text-soft"><?php echo $getAndroidApp['app_download'];?> Download</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="card-inner h-100">
                                            <div class="align-center flex-wrap flex-md-nowrap g-3">
                                                <div class="nk-block-content">
                                                    <ul class="list list-sm">
                                                        <li>Name: <span><?php echo $getAndroidApp['app_name'];?></span></li>
                                                        <li>Developer: <span><?php echo $getAndroidApp['app_developer'];?></span></li>
                                                        <li>Concept: <span><?php echo $getAndroidApp['concept_name'];?></span></li>
                                                        <li>Code: <span><?php echo $getAndroidApp['app_code'];?></span></li>
                                                        <li>Package: <span><?php echo $getAndroidApp['app_package'];?></span></li>
                                                        <li>Release: <span><?php echo $getAndroidApp['app_release'];?></span></li>
                                                        <li>Privacy: <span><?php echo $getAndroidApp['app_privacy'];?></span></li>
                                                        <li>Terms: <span><?php echo $getAndroidApp['app_terms'];?></span></li>
                                                        <li>Status: <span><?php echo $getAndroidApp['app_status'];?></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-5">
                                <div class="col-lg-12">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title title">Version</h5>
                                            <p>App Versions</p>
                                        </div>
                                    </div>
                                    <div class="card card-bordered card-preview">
                                        <table class="table table-tranx">
                                            <thead>
                                                <tr class="tb-tnx-head">
                                                    <th class="nk-tb-col" width="10%"><span>ID</span></th>
                                                    <th class="nk-tb-col" width="10%"><span>Name</span></th>
                                                    <th class="nk-tb-col" width="15%"><span>Code</span></th>
                                                    <th class="nk-tb-col" width="7%"><span>Ads</span></th>
                                                    <th class="nk-tb-col" width="7%"><span>Splash</span></th>
                                                    <th class="nk-tb-col" width="7%"><span>Screen</span></th>
                                                    <th class="nk-tb-col" width="7%"><span>Banner</span></th>
                                                    <th class="nk-tb-col" width="7%"><span>Review</span></th>
                                                    <th class="nk-tb-col" width="7%"><span>Update</span></th>
                                                    <th class="nk-tb-col" width="7%"><span>Status</span></th>
                                                    <th class="nk-tb-col" width="6%"><span>VPN</span></th>
                                                    <th class="nk-tb-col" width="5%"><span>Crawler</span></th>
                                                    <th class="nk-tb-col" width="5%"><span>Action</span></th>
                                                </tr>
                                            </thead>
                                            <?php if(!empty($getAndroidVersion)){ ?>
                                                <tbody>
                                                    <?php foreach($getAndroidVersion as $data){ ?>
                                                        <tr class="tb-tnx-item">
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['version_id'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['version_name'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['version_code'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['app_ads'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['splash_ads'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['screen_ads'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['app_banner'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['app_review'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['app_update'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php 
                                                                $versionStatus = '';
                                                                if($data['version_status'] == 'true'){
                                                                    $versionStatus.= '<span class="badge badge-dot badge-success">True</span>';
                                                                } else if($data['version_status'] == 'false'){
                                                                    $versionStatus.= '<span class="badge badge-dot badge-danger">False</span>';
                                                                } 
                                                                echo $versionStatus; 
                                                            ?></span></td>
                                                            <td><span class="sub-text"><?php echo $data['is_vpn']; ?></span></td>
                                                            <td><span class="sub-text"><?php echo $data['is_crawler'];?></span></td>
                                                            <td class="tb-tnx-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="<?php echo base_url('info-version/'.urlEncodes($data['version_id']));?>">View</a></li>
                                                                            <li><a href="<?php echo base_url('edit-version/'.urlEncodes($data['version_id']));?>">Edit</a></li>
                                                                            <li><a data-toggle="modal" data-target="#deleteVersionModal<?php echo urlEncodes($data['version_id']);?>">Delete</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <div class="modal fade" tabindex="-1" id="deleteVersionModal<?php echo urlEncodes($data['version_id']);?>">
                                                            <div class="modal-dialog modal-dialog-top" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Version</h5>
                                                                        <a href="<?php echo base_url('info-app/'.$appID);?>" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <em class="icon ni ni-cross"></em>
                                                                        </a>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to delete <?php echo $data['version_name'];?>?</p>
                                                                    </div>
                                                                    <div class="modal-footer bg-light">
                                                                        <span class="sub-text"><a href="<?php echo base_url('delete-version/'.urlEncodes($data['version_id']));?>" class="btn btn-sm btn-danger">Delete</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </tbody>
                                            <?php } else { ?>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="13">
                                                            <div class="nk-block-content text-center p-3">
                                                                <span class="sub-text">No data available in table</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-5">
                                <div class="col-lg-12">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title title">Subscription</h5>
                                            <p>App Subscriptions</p>
                                        </div>
                                    </div>
                                    <div class="card card-bordered card-preview">
                                        <table class="table table-tranx">
                                            <thead>
                                                <tr class="tb-tnx-head">
                                                    <th class="nk-tb-col" width="10%"><span>ID</span></th>
                                                    <th class="nk-tb-col" width="13%"><span>Code</span></th>
                                                    <th class="nk-tb-col" width="12%"><span>T-One</span></th>
                                                    <th class="nk-tb-col" width="12%"><span>T-Two</span></th>
                                                    <th class="nk-tb-col" width="12%"><span>T-Three</span></th>
                                                    <th class="nk-tb-col" width="12%"><span>T-Four</span></th>
                                                    <th class="nk-tb-col" width="10%"><span>Offer</span></th>
                                                    <th class="nk-tb-col" width="7%"><span>Primary</span></th>
                                                    <th class="nk-tb-col" width="7%"><span>Status</span></th>
                                                    <th class="nk-tb-col" width="5%"><span>Action</span></th>
                                                </tr>
                                            </thead>
                                            <?php if(!empty($getAndroidSubscription)){ ?>
                                                <tbody>
                                                    <?php foreach($getAndroidSubscription as $data){ ?>
                                                        <tr class="tb-tnx-item">
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['subscription_id'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['subscription_code'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['subscription_title_one'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['subscription_title_two'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['subscription_title_three'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['subscription_title_four'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['subscription_offer'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php echo $data['subscription_primary'];?></span></td>
                                                            <td class="nk-tb-col"><span class="sub-text"><?php 
                                                                $subscriptionStatus = '';
                                                                if($data['subscription_status'] == 'publish'){
                                                                    $subscriptionStatus.= '<span class="badge badge-dot badge-success">Publish</span>';
                                                                } else if($data['subscription_status'] == 'unpublish'){
                                                                    $subscriptionStatus.= '<span class="badge badge-dot badge-danger">Unpublish</span>';
                                                                } 
                                                                echo $subscriptionStatus; 
                                                            ?></span></td>
                                                            <td class="tb-tnx-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="<?php echo base_url('info-subscription/'.urlEncodes($data['subscription_id']));?>">View</a></li>
                                                                            <li><a href="<?php echo base_url('edit-subscription/'.urlEncodes($data['subscription_id']));?>">Edit</a></li>
                                                                            <li><a data-toggle="modal" data-target="#deleteSubscriptionModal<?php echo urlEncodes($data['subscription_id']);?>">Delete</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <div class="modal fade" tabindex="-1" id="deleteSubscriptionModal<?php echo urlEncodes($data['subscription_id']);?>">
                                                            <div class="modal-dialog modal-dialog-top" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Subscription</h5>
                                                                        <a href="<?php echo base_url('info-app/'.$appID);?>" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <em class="icon ni ni-cross"></em>
                                                                        </a>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to delete this subscription?</p>
                                                                    </div>
                                                                    <div class="modal-footer bg-light">
                                                                        <span class="sub-text"><a href="<?php echo base_url('delete-subscription/'.urlEncodes($data['subscription_id']));?>" class="btn btn-sm btn-danger">Delete</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </tbody>
                                            <?php } else { ?>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="13">
                                                            <div class="nk-block-content text-center p-3">
                                                                <span class="sub-text">No data available in table</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-5">
                                <div class="col-lg-12">
                                    <div class="nk-block-head">
                                        <div class="nk-block-between g-3">
                                            <div class="nk-block-head-content">
                                                <h5 class="nk-block-title title">App Json</h5>
                                                <p>App Json Banners</p>
                                            </div>
                                            <div class="nk-block-head-content">
                                                <ul class="nk-block-tools g-3">
                                                    <?php if(!empty($getAndroidJson)){ ?>
                                                        <li><a href="<?php echo base_url('edit-json/'.urlEncodes($getAndroidJson->json_id));?>" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-edit"></em><span>Edit App Json Data</span></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(!empty($getAndroidJsonData)){ ?>
                                        <div class="row g-gs">
                                            <?php foreach($getAndroidJsonData as $data){ ?>
                                                <div class="col-lg-4">
                                                    <div class="plan-item-card">
                                                        <div class="plan-item-head">
                                                            <div class="plan-item-heading">
                                                                <div class="user-card user-card-s2">
                                                                <img src="<?php echo $data['banner_image'];?>" alt="" width="360" height="140">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="plan-item-body">
                                                            <div class="plan-item-desc card-text">
                                                                <ul class="plan-item-desc-list">
                                                                    <li><span class="desc-label">Title</span> - <span class="desc-data"><?php $bannerTitle = $data['banner_title']; ?>
                                                                        <?php if(strlen($bannerTitle) > 12){ ?>
                                                                            <a data-toggle="tooltip" data-placement="bottom" title="<?php echo $data['banner_title'];?>">
                                                                                <span><?php echo substr($bannerTitle, 0, 12); ?>...</span>
                                                                            </a>
                                                                        <?php } else { ?>
                                                                            <?php echo $bannerTitle; ?>
                                                                        <?php } ?></span>
                                                                    </li>
                                                                    <li><span class="desc-label">Description</span> - <span class="desc-data"><?php $bannerDescription = $data['banner_description']; ?>
                                                                        <?php if(strlen($bannerDescription) > 12){ ?>
                                                                            <a data-toggle="tooltip" data-placement="bottom" title="<?php echo $data['banner_description'];?>">
                                                                                <span><?php echo substr($bannerDescription, 0, 12); ?>...</span>
                                                                            </a>
                                                                        <?php } else { ?>
                                                                            <?php echo $bannerDescription; ?>
                                                                        <?php } ?></span>
                                                                    </li>
                                                                    <li><span class="desc-label">URL</span> - <span class="desc-data"><?php $bannerUrl = $data['banner_url']; ?>
                                                                        <?php if(strlen($bannerUrl) > 12){ ?>
                                                                            <a data-toggle="tooltip" data-placement="bottom" title="<?php echo $data['banner_url'];?>">
                                                                                <span><?php echo substr($bannerUrl, 0, 12); ?>...</span>
                                                                            </a>
                                                                        <?php } else { ?>
                                                                            <?php echo $bannerUrl; ?>
                                                                        <?php } ?></span>
                                                                    </li>
                                                                    <li><span class="desc-label">Button</span> - <span class="desc-data"><?php echo $data['banner_button'];?></span></li>
                                                                    <li><span class="desc-label">Type</span> - <span class="desc-data"><?php if($data['banner_type'] == 0){ ?> Image <?php } else { ?> Text <?php } ?></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-block-content text-center">
                                                    <span class="sub-text">No data available in table</span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-5">
                                <div class="col-lg-12">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title title">Ads</h5>
                                            <p>App Ads</p>
                                        </div>
                                    </div>
                                    <?php if(!empty($getAndroidAds)){ ?>
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <ul class="nav nav-tabs mt-n3">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#appBanner">App Banner</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#appNative">App Native</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#appInterstitial">App Interstitial</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#appOpen">App Open</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#appRewards">App Rewards</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="appBanner">
                                                        <div class="nk-block">
                                                            <div class="card card-bordered card-stretch">
                                                                <div class="card-inner-group">
                                                                    <div class="card-inner">
                                                                        <div class="card-title-group">
                                                                            <div class="card-title">
                                                                                <h5 class="title">All Banners</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-inner p-2">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                  <th scope="col" width="20%">Name</th>
                                                                                  <th scope="col" width="10%">Priority</th>
                                                                                  <th scope="col" width="50%">Code</th>
                                                                                  <th scope="col" width="10%">Status</th>
                                                                                  <th scope="col" width="10%">Clickable</th>
                                                                                </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                <?php
                                                                                    $bannerOne = $getAndroidAds['banner_ads_one'];
                                                                                    $bannerAdsOne = preg_split('/(\s|#|@)/',$bannerOne);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Banner - 1</th>
                                                                                    <td><?= (!empty($bannerAdsOne[0])) ? $bannerAdsOne[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($bannerAdsOne[1])) ? $bannerAdsOne[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsOne2 = '';
                                                                                        if(isset($bannerAdsOne[2])){
                                                                                            if($bannerAdsOne[2] == 'true'){
                                                                                                $bannerAdsOne2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsOne[2] == 'false'){
                                                                                                $bannerAdsOne2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsOne2 = '-';
                                                                                        }
                                                                                        echo $bannerAdsOne2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsOne3 = '';
                                                                                        if(isset($bannerAdsOne[3])){
                                                                                            if($bannerAdsOne[3] == 'true'){
                                                                                                $bannerAdsOne3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsOne[3] == 'false'){
                                                                                                $bannerAdsOne3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsOne3 = '-';
                                                                                        }
                                                                                        echo $bannerAdsOne3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($bannerAdsOne[4])) ? $bannerAdsOne[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($bannerAdsOne[5])) ? $bannerAdsOne[5] : '-'; ?></td>
                                                                                    <td><?php
                                                                                        $bannerAdsOne6 = '';
                                                                                        if(isset($bannerAdsOne[6])){
                                                                                            if($bannerAdsOne[6] == 'true'){
                                                                                                $bannerAdsOne6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsOne[6] == 'false'){
                                                                                                $bannerAdsOne6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsOne6 = '-';
                                                                                        }
                                                                                        echo $bannerAdsOne6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsOne7 = '';
                                                                                        if(isset($bannerAdsOne[7])){
                                                                                            if($bannerAdsOne[7] == 'true'){
                                                                                                $bannerAdsOne7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsOne[7] == 'false'){
                                                                                                $bannerAdsOne7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsOne7 = '-';
                                                                                        }
                                                                                        echo $bannerAdsOne7;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $bannerTwo = $getAndroidAds['banner_ads_two'];
                                                                                    $bannerAdsTwo = preg_split('/(\s|#|@)/',$bannerTwo);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Banner - 2</th>
                                                                                    <td><?= (!empty($bannerAdsTwo[0])) ? $bannerAdsTwo[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($bannerAdsTwo[1])) ? $bannerAdsTwo[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsTwo2 = '';
                                                                                        if(isset($bannerAdsTwo[2])){
                                                                                            if($bannerAdsTwo[2] == 'true'){
                                                                                                $bannerAdsTwo2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsTwo[2] == 'false'){
                                                                                                $bannerAdsTwo2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsTwo2 = '-';
                                                                                        }
                                                                                        echo $bannerAdsTwo2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsTwo3 = '';
                                                                                        if(isset($bannerAdsTwo[3])){
                                                                                            if($bannerAdsTwo[3] == 'true'){
                                                                                                $bannerAdsTwo3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsTwo[3] == 'false'){
                                                                                                $bannerAdsTwo3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsTwo3 = '-';
                                                                                        }
                                                                                        echo $bannerAdsTwo3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($bannerAdsTwo[4])) ? $bannerAdsTwo[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($bannerAdsTwo[5])) ? $bannerAdsTwo[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsTwo6 = '';
                                                                                        if(isset($bannerAdsTwo[6])){
                                                                                            if($bannerAdsTwo[6] == 'true'){
                                                                                                $bannerAdsTwo6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsTwo[6] == 'false'){
                                                                                                $bannerAdsTwo6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsTwo6 = '-';
                                                                                        }
                                                                                        echo $bannerAdsTwo6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsTwo7 = '';
                                                                                        if(isset($bannerAdsTwo[7])){
                                                                                            if($bannerAdsTwo[7] == 'true'){
                                                                                                $bannerAdsTwo7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsTwo[7] == 'false'){
                                                                                                $bannerAdsTwo7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsTwo7 = '-';
                                                                                        }
                                                                                        echo $bannerAdsTwo7;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $bannerThree = $getAndroidAds['banner_ads_three'];
                                                                                    $bannerAdsThree = preg_split('/(\s|#|@)/',$bannerThree);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Banner - 3</th>
                                                                                    <td><?= (!empty($bannerAdsThree[0])) ? $bannerAdsThree[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($bannerAdsThree[1])) ? $bannerAdsThree[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsThree2 = '';
                                                                                        if(isset($bannerAdsThree[2])){
                                                                                            if($bannerAdsThree[2] == 'true'){
                                                                                                $bannerAdsThree2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsThree[2] == 'false'){
                                                                                                $bannerAdsThree2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsThree2 = '-';
                                                                                        }
                                                                                        echo $bannerAdsThree2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsThree3 = '';
                                                                                        if(isset($bannerAdsThree[3])){
                                                                                            if($bannerAdsThree[3] == 'true'){
                                                                                                $bannerAdsThree3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsThree[3] == 'false'){
                                                                                                $bannerAdsThree3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsThree3 = '-';
                                                                                        }
                                                                                        echo $bannerAdsThree3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($bannerAdsThree[4])) ? $bannerAdsThree[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($bannerAdsThree[5])) ? $bannerAdsThree[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsThree6 = '';
                                                                                        if(isset($bannerAdsThree[6])){
                                                                                            if($bannerAdsThree[6] == 'true'){
                                                                                                $bannerAdsThree6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsThree[6] == 'false'){
                                                                                                $bannerAdsThree6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsThree6 = '-';
                                                                                        }
                                                                                        echo $bannerAdsThree6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsThree7 = '';
                                                                                        if(isset($bannerAdsThree[7])){
                                                                                            if($bannerAdsThree[7] == 'true'){
                                                                                                $bannerAdsThree7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsThree[7] == 'false'){
                                                                                                $bannerAdsThree7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsThree7 = '-';
                                                                                        }
                                                                                        echo $bannerAdsThree7;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $bannerFour = $getAndroidAds['banner_ads_four'];
                                                                                    $bannerAdsFour = preg_split('/(\s|#|@)/',$bannerFour);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Banner - 4</th>
                                                                                    <td><?= (!empty($bannerAdsFour[0])) ? $bannerAdsFour[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($bannerAdsFour[1])) ? $bannerAdsFour[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsFour2 = '';
                                                                                        if(isset($bannerAdsFour[2])){
                                                                                            if($bannerAdsFour[2] == 'true'){
                                                                                                $bannerAdsFour2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsFour[2] == 'false'){
                                                                                                $bannerAdsFour2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsFour2 = '-';
                                                                                        }
                                                                                        echo $bannerAdsFour2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsFour3 = '';
                                                                                        if(isset($bannerAdsFour[3])){
                                                                                            if($bannerAdsFour[3] == 'true'){
                                                                                                $bannerAdsFour3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsFour[3] == 'false'){
                                                                                                $bannerAdsFour3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsFour3 = '-';
                                                                                        }
                                                                                        echo $bannerAdsFour3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($bannerAdsFour[4])) ? $bannerAdsFour[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($bannerAdsFour[5])) ? $bannerAdsFour[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsFour6 = '';
                                                                                        if(isset($bannerAdsFour[6])){
                                                                                            if($bannerAdsFour[6] == 'true'){
                                                                                                $bannerAdsFour6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsFour[6] == 'false'){
                                                                                                $bannerAdsFour6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsFour6 = '-';
                                                                                        }
                                                                                        echo $bannerAdsFour6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $bannerAdsFour7 = '';
                                                                                        if(isset($bannerAdsFour[7])){
                                                                                            if($bannerAdsFour[7] == 'true'){
                                                                                                $bannerAdsFour7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($bannerAdsFour[7] == 'false'){
                                                                                                $bannerAdsFour7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $bannerAdsFour7 = '-';
                                                                                        }
                                                                                        echo $bannerAdsFour7;
                                                                                    ?></td>
                                                                                </tr>
                                                                             </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="appNative">
                                                        <div class="nk-block">
                                                            <div class="card card-bordered card-stretch">
                                                                <div class="card-inner-group">
                                                                    <div class="card-inner">
                                                                        <div class="card-title-group">
                                                                            <div class="card-title">
                                                                                <h5 class="title">All Natives</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-inner p-2">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                  <th scope="col" width="20%">Name</th>
                                                                                  <th scope="col" width="10%">Priority</th>
                                                                                  <th scope="col" width="50%">Code</th>
                                                                                  <th scope="col" width="10%">Status</th>
                                                                                  <th scope="col" width="10%">Clickable</th>
                                                                                </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                <?php
                                                                                    $nativeOne = $getAndroidAds['native_ads_one'];
                                                                                    $nativeAdsOne = preg_split('/(\s|#|@)/',$nativeOne);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Native - 1</th>
                                                                                    <td><?= (!empty($nativeAdsOne[0])) ? $nativeAdsOne[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($nativeAdsOne[1])) ? $nativeAdsOne[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsOne2 = '';
                                                                                        if(isset($nativeAdsOne[2])){
                                                                                            if($nativeAdsOne[2] == 'true'){
                                                                                                $nativeAdsOne2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsOne[2] == 'false'){
                                                                                                $nativeAdsOne2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsOne2 = '-';
                                                                                        }
                                                                                        echo $nativeAdsOne2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsOne3 = '';
                                                                                        if(isset($nativeAdsOne[3])){
                                                                                            if($nativeAdsOne[3] == 'true'){
                                                                                                $nativeAdsOne3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsOne[3] == 'false'){
                                                                                                $nativeAdsOne3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsOne3 = '-';
                                                                                        }
                                                                                        echo $nativeAdsOne3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($nativeAdsOne[4])) ? $nativeAdsOne[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($nativeAdsOne[5])) ? $nativeAdsOne[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsOne6 = '';
                                                                                        if(isset($nativeAdsOne[6])){
                                                                                            if($nativeAdsOne[6] == 'true'){
                                                                                                $nativeAdsOne6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsOne[6] == 'false'){
                                                                                                $nativeAdsOne6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsOne6 = '-';
                                                                                        }
                                                                                        echo $nativeAdsOne6; 
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsOne7 = '';
                                                                                        if(isset($nativeAdsOne[7])){
                                                                                            if($nativeAdsOne[7] == 'true'){
                                                                                                $nativeAdsOne7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsOne[7] == 'false'){
                                                                                                $nativeAdsOne7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsOne7 = '-';
                                                                                        }
                                                                                        echo $nativeAdsOne7;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $nativeTwo = $getAndroidAds['native_ads_two'];
                                                                                    $nativeAdsTwo = preg_split('/(\s|#|@)/',$nativeTwo);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Native - 2</th>
                                                                                    <td><?= (!empty($nativeAdsTwo[0])) ? $nativeAdsTwo[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($nativeAdsTwo[1])) ? $nativeAdsTwo[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsTwo2 = '';
                                                                                        if(isset($nativeAdsTwo[2])){
                                                                                            if($nativeAdsTwo[2] == 'true'){
                                                                                                $nativeAdsTwo2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsTwo[2] == 'false'){
                                                                                                $nativeAdsTwo2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsTwo2 = '-';
                                                                                        }
                                                                                        echo $nativeAdsTwo2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsTwo3 = '';
                                                                                        if(isset($nativeAdsTwo[3])){
                                                                                            if($nativeAdsTwo[3] == 'true'){
                                                                                                $nativeAdsTwo3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsTwo[3] == 'false'){
                                                                                                $nativeAdsTwo3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsTwo3 = '-';
                                                                                        }
                                                                                        echo $nativeAdsTwo3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($nativeAdsTwo[4])) ? $nativeAdsTwo[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($nativeAdsTwo[5])) ? $nativeAdsTwo[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsTwo6 = '';
                                                                                        if(isset($nativeAdsTwo[6])){
                                                                                            if($nativeAdsTwo[6] == 'true'){
                                                                                                $nativeAdsTwo6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsTwo[6] == 'false'){
                                                                                                $nativeAdsTwo6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsTwo6 = '-';
                                                                                        }
                                                                                        echo $nativeAdsTwo6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsTwo7 = '';
                                                                                        if(isset($nativeAdsTwo[7])){
                                                                                            if($nativeAdsTwo[7] == 'true'){
                                                                                                $nativeAdsTwo7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsTwo[7] == 'false'){
                                                                                                $nativeAdsTwo7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsTwo7 = '-';
                                                                                        }
                                                                                        echo $nativeAdsTwo7; 
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $nativeThree = $getAndroidAds['native_ads_three'];
                                                                                    $nativeAdsThree = preg_split('/(\s|#|@)/',$nativeThree);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Native - 3</th>
                                                                                    <td><?= (!empty($nativeAdsThree[0])) ? $nativeAdsThree[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($nativeAdsThree[1])) ? $nativeAdsThree[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsThree2 = '';
                                                                                        if(isset($nativeAdsThree[2])){
                                                                                            if($nativeAdsThree[2] == 'true'){
                                                                                                $nativeAdsThree2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsThree[2] == 'false'){
                                                                                                $nativeAdsThree2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsThree2 = '-';
                                                                                        }
                                                                                        echo $nativeAdsThree2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsThree3 = '';
                                                                                        if(isset($nativeAdsThree[3])){
                                                                                            if($nativeAdsThree[3] == 'true'){
                                                                                                $nativeAdsThree3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsThree[3] == 'false'){
                                                                                                $nativeAdsThree3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsThree3 = '-';
                                                                                        }
                                                                                        echo $nativeAdsThree3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($nativeAdsThree[4])) ? $nativeAdsThree[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($nativeAdsThree[5])) ? $nativeAdsThree[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsThree6 = '';
                                                                                        if(isset($nativeAdsThree[6])){
                                                                                            if($nativeAdsThree[6] == 'true'){
                                                                                                $nativeAdsThree6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsThree[6] == 'false'){
                                                                                                $nativeAdsThree6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsThree6 = '-';
                                                                                        }
                                                                                        echo $nativeAdsThree6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsThree7 = '';
                                                                                        if(isset($nativeAdsThree[7])){
                                                                                            if($nativeAdsThree[7] == 'true'){
                                                                                                $nativeAdsThree7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsThree[7] == 'false'){
                                                                                                $nativeAdsThree7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsThree7 = '-';
                                                                                        }
                                                                                        echo $nativeAdsThree7;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $nativeFour = $getAndroidAds['native_ads_four'];
                                                                                    $nativeAdsFour = preg_split('/(\s|#|@)/',$nativeFour);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Native - 4</th>
                                                                                    <td><?= (!empty($nativeAdsFour[0])) ? $nativeAdsFour[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($nativeAdsFour[1])) ? $nativeAdsFour[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsFour2 = '';
                                                                                        if(isset($nativeAdsFour[2])){
                                                                                            if($nativeAdsFour[2] == 'true'){
                                                                                                $nativeAdsFour2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsFour[2] == 'false'){
                                                                                                $nativeAdsFour2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsFour2 = '-';
                                                                                        }
                                                                                        echo $nativeAdsFour2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsFour3 = '';
                                                                                        if(isset($nativeAdsFour[3])){
                                                                                            if($nativeAdsFour[3] == 'true'){
                                                                                                $nativeAdsFour3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsFour[3] == 'false'){
                                                                                                $nativeAdsFour3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsFour3 = '-';
                                                                                        }
                                                                                        echo $nativeAdsFour3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($nativeAdsFour[4])) ? $nativeAdsFour[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($nativeAdsFour[5])) ? $nativeAdsFour[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsFour6 = '';
                                                                                        if(isset($nativeAdsFour[6])){
                                                                                            if($nativeAdsFour[6] == 'true'){
                                                                                                $nativeAdsFour6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsFour[6] == 'false'){
                                                                                                $nativeAdsFour6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsFour6 = '-';
                                                                                        }
                                                                                        echo $nativeAdsFour6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $nativeAdsFour7 = '';
                                                                                        if(isset($nativeAdsFour[7])){
                                                                                            if($nativeAdsFour[7] == 'true'){
                                                                                                $nativeAdsFour7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($nativeAdsFour[7] == 'false'){
                                                                                                $nativeAdsFour7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $nativeAdsFour7 = '-';
                                                                                        }
                                                                                        echo $nativeAdsFour7;
                                                                                    ?></td>
                                                                                </tr>
                                                                             </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="appInterstitial">
                                                        <div class="nk-block">
                                                            <div class="card card-bordered card-stretch">
                                                                <div class="card-inner-group">
                                                                    <div class="card-inner">
                                                                        <div class="card-title-group">
                                                                            <div class="card-title">
                                                                                <h5 class="title">All Interstitials</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-inner p-2">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                  <th scope="col" width="20%">Name</th>
                                                                                  <th scope="col" width="10%">Priority</th>
                                                                                  <th scope="col" width="50%">Code</th>
                                                                                  <th scope="col" width="10%">Status</th>
                                                                                  <th scope="col" width="10%">Clickable</th>
                                                                                </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                <?php
                                                                                    $interstitialOne = $getAndroidAds['interstitial_ads_one'];
                                                                                    $interstitialAdsOne = preg_split('/(\s|#|@)/',$interstitialOne);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Interstitial - 1</th>
                                                                                    <td><?= (!empty($interstitialAdsOne[0])) ? $interstitialAdsOne[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($interstitialAdsOne[1])) ? $interstitialAdsOne[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsOne2 = '';
                                                                                        if(isset($interstitialAdsOne[2])){
                                                                                            if($interstitialAdsOne[2] == 'true'){
                                                                                                $interstitialAdsOne2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsOne[2] == 'false'){
                                                                                                $interstitialAdsOne2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsOne2 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsOne2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsOne3 = '';
                                                                                        if(isset($interstitialAdsOne[3])){
                                                                                            if($interstitialAdsOne[3] == 'true'){
                                                                                                $interstitialAdsOne3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsOne[3] == 'false'){
                                                                                                $interstitialAdsOne3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsOne3 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsOne3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($interstitialAdsOne[4])) ? $interstitialAdsOne[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($interstitialAdsOne[5])) ? $interstitialAdsOne[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsOne6 = '';
                                                                                        if(isset($interstitialAdsOne[6])){
                                                                                            if($interstitialAdsOne[6] == 'true'){
                                                                                                $interstitialAdsOne6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsOne[6] == 'false'){
                                                                                                $interstitialAdsOne6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsOne6 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsOne6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsOne7 = '';
                                                                                        if(isset($interstitialAdsOne[7])){
                                                                                            if($interstitialAdsOne[7] == 'true'){
                                                                                                $interstitialAdsOne7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsOne[7] == 'false'){
                                                                                                $interstitialAdsOne7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsOne7 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsOne7;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $interstitialTwo = $getAndroidAds['interstitial_ads_two'];
                                                                                    $interstitialAdsTwo = preg_split('/(\s|#|@)/',$interstitialTwo);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Interstitial - 2</th>
                                                                                    <td><?= (!empty($interstitialAdsTwo[0])) ? $interstitialAdsTwo[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($interstitialAdsTwo[1])) ? $interstitialAdsTwo[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsTwo2 = '';
                                                                                        if(isset($interstitialAdsTwo[2])){
                                                                                            if($interstitialAdsTwo[2] == 'true'){
                                                                                                $interstitialAdsTwo2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsTwo[2] == 'false'){
                                                                                                $interstitialAdsTwo2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsTwo2 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsTwo2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsTwo3 = '';
                                                                                        if(isset($interstitialAdsTwo[3])){
                                                                                            if($interstitialAdsTwo[3] == 'true'){
                                                                                                $interstitialAdsTwo3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsTwo[3] == 'false'){
                                                                                                $interstitialAdsTwo3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsTwo3 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsTwo3; 
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($interstitialAdsTwo[4])) ? $interstitialAdsTwo[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($interstitialAdsTwo[5])) ? $interstitialAdsTwo[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsTwo6 = '';
                                                                                        if(isset($interstitialAdsTwo[6])){
                                                                                            if($interstitialAdsTwo[6] == 'true'){
                                                                                                $interstitialAdsTwo6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsTwo[6] == 'false'){
                                                                                                $interstitialAdsTwo6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsTwo6 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsTwo6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsTwo7 = '';
                                                                                        if(isset($interstitialAdsTwo[7])){
                                                                                            if($interstitialAdsTwo[7] == 'true'){
                                                                                                $interstitialAdsTwo7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsTwo[7] == 'false'){
                                                                                                $interstitialAdsTwo7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsTwo7 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsTwo7;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $interstitialThree = $getAndroidAds['interstitial_ads_three'];
                                                                                    $interstitialAdsThree = preg_split('/(\s|#|@)/',$interstitialThree);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Interstitial - 3</th>
                                                                                    <td><?= (!empty($interstitialAdsThree[0])) ? $interstitialAdsThree[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($interstitialAdsThree[1])) ? $interstitialAdsThree[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsThree2 = '';
                                                                                        if(isset($interstitialAdsThree[2])){
                                                                                            if($interstitialAdsThree[2] == 'true'){
                                                                                                $interstitialAdsThree2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsThree[2] == 'false'){
                                                                                                $interstitialAdsThree2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsThree2 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsThree2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsThree3 = '';
                                                                                        if(isset($interstitialAdsThree[3])){
                                                                                            if($interstitialAdsThree[3] == 'true'){
                                                                                                $interstitialAdsThree3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsThree[3] == 'false'){
                                                                                                $interstitialAdsThree3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsThree3 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsThree3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($interstitialAdsThree[4])) ? $interstitialAdsThree[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($interstitialAdsThree[5])) ? $interstitialAdsThree[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsThree6 = '';
                                                                                        if(isset($interstitialAdsThree[6])){
                                                                                            if($interstitialAdsThree[6] == 'true'){
                                                                                                $interstitialAdsThree6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsThree[6] == 'false'){
                                                                                                $interstitialAdsThree6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsThree6 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsThree6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsThree7 = '';
                                                                                        if(isset($interstitialAdsThree[7])){
                                                                                            if($interstitialAdsThree[7] == 'true'){
                                                                                                $interstitialAdsThree7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsThree[7] == 'false'){
                                                                                                $interstitialAdsThree7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsThree7 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsThree7;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $interstitialFour = $getAndroidAds['interstitial_ads_four'];
                                                                                    $interstitialAdsFour = preg_split('/(\s|#|@)/',$interstitialFour);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Interstitial - 4</th>
                                                                                    <td><?= (!empty($interstitialAdsFour[0])) ? $interstitialAdsFour[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($interstitialAdsFour[1])) ? $interstitialAdsFour[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsFour2 = '';
                                                                                        if(isset($interstitialAdsFour[2])){
                                                                                            if($interstitialAdsFour[2] == 'true'){
                                                                                                $interstitialAdsFour2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsFour[2] == 'false'){
                                                                                                $interstitialAdsFour2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsFour2 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsFour2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsFour3 = '';
                                                                                        if(isset($interstitialAdsFour[3])){
                                                                                            if($interstitialAdsFour[3] == 'true'){
                                                                                                $interstitialAdsFour3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsFour[3] == 'false'){
                                                                                                $interstitialAdsFour3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsFour3 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsFour3; 
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($interstitialAdsFour[4])) ? $interstitialAdsFour[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($interstitialAdsFour[5])) ? $interstitialAdsFour[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsFour6 = '';
                                                                                        if(isset($interstitialAdsFour[6])){
                                                                                            if($interstitialAdsFour[6] == 'true'){
                                                                                                $interstitialAdsFour6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsFour[6] == 'false'){
                                                                                                $interstitialAdsFour6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsFour6 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsFour6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $interstitialAdsFour7 = '';
                                                                                        if(isset($interstitialAdsFour[7])){
                                                                                            if($interstitialAdsFour[7] == 'true'){
                                                                                                $interstitialAdsFour7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($interstitialAdsFour[7] == 'false'){
                                                                                                $interstitialAdsFour7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $interstitialAdsFour7 = '-';
                                                                                        }
                                                                                        echo $interstitialAdsFour7;
                                                                                    ?></td>
                                                                                </tr>
                                                                             </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="appOpen">
                                                        <div class="nk-block">
                                                            <div class="card card-bordered card-stretch">
                                                                <div class="card-inner-group">
                                                                    <div class="card-inner">
                                                                        <div class="card-title-group">
                                                                            <div class="card-title">
                                                                                <h5 class="title">All Opens</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-inner p-2">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                  <th scope="col" width="20%">Name</th>
                                                                                  <th scope="col" width="10%">Priority</th>
                                                                                  <th scope="col" width="50%">Code</th>
                                                                                  <th scope="col" width="10%">Status</th>
                                                                                  <th scope="col" width="10%">Clickable</th>
                                                                                </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                <?php
                                                                                    $openOne = $getAndroidAds['open_ads_one'];
                                                                                    $openAdsOne = preg_split('/(\s|#|@)/',$openOne);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Open - 1</th>
                                                                                    <td><?= (!empty($openAdsOne[0])) ? $openAdsOne[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($openAdsOne[1])) ? $openAdsOne[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $openAdsOne2 = '';
                                                                                        if(isset($openAdsOne[2])){
                                                                                            if($openAdsOne[2] == 'true'){
                                                                                                $openAdsOne2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($openAdsOne[2] == 'false'){
                                                                                                $openAdsOne2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $openAdsOne2 = '-';
                                                                                        }
                                                                                        echo $openAdsOne2;
                                                                                    ?></td>
                                                                                    <td><?php
                                                                                        $openAdsOne3 = '';
                                                                                        if(isset($openAdsOne[3])){
                                                                                            if($openAdsOne[3] == 'true'){
                                                                                                $openAdsOne3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($openAdsOne[3] == 'false'){
                                                                                                $openAdsOne3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $openAdsOne3 = '-';
                                                                                        }
                                                                                        echo $openAdsOne3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($openAdsOne[4])) ? $openAdsOne[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($openAdsOne[5])) ? $openAdsOne[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $openAdsOne6 = '';
                                                                                        if(isset($openAdsOne[6])){
                                                                                            if($openAdsOne[6] == 'true'){
                                                                                                $openAdsOne6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($openAdsOne[6] == 'false'){
                                                                                                $openAdsOne6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $openAdsOne6 = '-';
                                                                                        }
                                                                                        echo $openAdsOne6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $openAdsOne7 = '';
                                                                                        if(isset($openAdsOne[7])){
                                                                                            if($openAdsOne[7] == 'true'){
                                                                                                $openAdsOne7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($openAdsOne[7] == 'false'){
                                                                                                $openAdsOne7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $openAdsOne7 = '-';
                                                                                        }
                                                                                        echo $openAdsOne7;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $openTwo = $getAndroidAds['open_ads_two'];
                                                                                    $openAdsTwo = preg_split('/(\s|#|@)/',$openTwo);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Open - 2</th>
                                                                                    <td><?= (!empty($openAdsTwo[0])) ? $openAdsTwo[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($openAdsTwo[1])) ? $openAdsTwo[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $openAdsTwo2 = '';
                                                                                        if(isset($openAdsTwo[2])){
                                                                                            if($openAdsTwo[2] == 'true'){
                                                                                                $openAdsTwo2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($openAdsTwo[2] == 'false'){
                                                                                                $openAdsTwo2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $openAdsTwo2 = '-';
                                                                                        }
                                                                                        echo $openAdsTwo2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $openAdsTwo3 = '';
                                                                                        if(isset($openAdsTwo[3])){
                                                                                            if($openAdsTwo[3] == 'true'){
                                                                                                $openAdsTwo3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($openAdsTwo[3] == 'false'){
                                                                                                $openAdsTwo3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $openAdsTwo3 = '-';
                                                                                        }
                                                                                        echo $openAdsTwo3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($openAdsTwo[4])) ? $openAdsTwo[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($openAdsTwo[5])) ? $openAdsTwo[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $openAdsTwo6 = '';
                                                                                        if(isset($openAdsTwo[6])){
                                                                                            if($openAdsTwo[6] == 'true'){
                                                                                                $openAdsTwo6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($openAdsTwo[6] == 'false'){
                                                                                                $openAdsTwo6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $openAdsTwo6 = '-';
                                                                                        }
                                                                                        echo $openAdsTwo6; 
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $openAdsTwo7 = '';
                                                                                        if(isset($openAdsTwo[7])){
                                                                                            if($openAdsTwo[7] == 'true'){
                                                                                                $openAdsTwo7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($openAdsTwo[7] == 'false'){
                                                                                                $openAdsTwo7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $openAdsTwo7 = '-';
                                                                                        }
                                                                                        echo $openAdsTwo7;
                                                                                    ?></td>
                                                                                </tr>
                                                                             </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="appRewards">
                                                         <div class="nk-block">
                                                            <div class="card card-bordered card-stretch">
                                                                <div class="card-inner-group">
                                                                    <div class="card-inner">
                                                                        <div class="card-title-group">
                                                                            <div class="card-title">
                                                                                <h5 class="title">All Rewards</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-inner p-2">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                  <th scope="col" width="20%">Name</th>
                                                                                  <th scope="col" width="10%">Priority</th>
                                                                                  <th scope="col" width="50%">Code</th>
                                                                                  <th scope="col" width="10%">Status</th>
                                                                                  <th scope="col" width="10%">Clickable</th>
                                                                                </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                <?php
                                                                                    $rewardsOne = $getAndroidAds['rewards_ads_one'];
                                                                                    $rewardsAdsOne = preg_split('/(\s|#|@)/',$rewardsOne);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Rewards - 1</th>
                                                                                    <td><?= (!empty($rewardsAdsOne[0])) ? $rewardsAdsOne[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($rewardsAdsOne[1])) ? $rewardsAdsOne[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $rewardsAdsOne2 = '';
                                                                                        if(isset($rewardsAdsOne[2])){
                                                                                            if($rewardsAdsOne[2] == 'true'){
                                                                                                $rewardsAdsOne2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($rewardsAdsOne[2] == 'false'){
                                                                                                $rewardsAdsOne2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $rewardsAdsOne2 = '-';
                                                                                        }
                                                                                        echo $rewardsAdsOne2; 
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $rewardsAdsOne3 = '';
                                                                                        if(isset($rewardsAdsOne[3])){
                                                                                            if($rewardsAdsOne[3] == 'true'){
                                                                                                $rewardsAdsOne3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($rewardsAdsOne[3] == 'false'){
                                                                                                $rewardsAdsOne3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $rewardsAdsOne3 = '-';
                                                                                        }
                                                                                        echo $rewardsAdsOne3; 
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($rewardsAdsOne[4])) ? $rewardsAdsOne[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($rewardsAdsOne[5])) ? $rewardsAdsOne[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $rewardsAdsOne6 = '';
                                                                                        if(isset($rewardsAdsOne[6])){
                                                                                            if($rewardsAdsOne[6] == 'true'){
                                                                                                $rewardsAdsOne6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($rewardsAdsOne[6] == 'false'){
                                                                                                $rewardsAdsOne6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $rewardsAdsOne6 = '-';
                                                                                        }
                                                                                        echo $rewardsAdsOne6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $rewardsAdsOne7 = '';
                                                                                        if(isset($rewardsAdsOne[7])){
                                                                                            if($rewardsAdsOne[7] == 'true'){
                                                                                                $rewardsAdsOne7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($rewardsAdsOne[7] == 'false'){
                                                                                                $rewardsAdsOne7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $rewardsAdsOne7 = '-';
                                                                                        }
                                                                                        echo $rewardsAdsOne7;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <?php
                                                                                    $rewardsTwo = $getAndroidAds['rewards_ads_two'];
                                                                                    $rewardsAdsTwo = preg_split('/(\s|#|@)/',$rewardsTwo);
                                                                                ?>
                                                                                <tr>
                                                                                    <th scope="row" rowspan="2">Rewards - 2</th>
                                                                                    <td><?= (!empty($rewardsAdsTwo[0])) ? $rewardsAdsTwo[0] : '-'; ?></td>
                                                                                    <td class="text-primary"><?= (!empty($rewardsAdsTwo[1])) ? $rewardsAdsTwo[1] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $rewardsAdsTwo2 = '';
                                                                                        if(isset($rewardsAdsTwo[2])){
                                                                                            if($rewardsAdsTwo[2] == 'true'){
                                                                                                $rewardsAdsTwo2 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($rewardsAdsTwo[2] == 'false'){
                                                                                                $rewardsAdsTwo2 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $rewardsAdsTwo2 = '-';
                                                                                        }
                                                                                        echo $rewardsAdsTwo2;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $rewardsAdsTwo3 = '';
                                                                                        if(isset($rewardsAdsTwo[3])){
                                                                                            if($rewardsAdsTwo[3] == 'true'){
                                                                                                $rewardsAdsTwo3 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($rewardsAdsTwo[3] == 'false'){
                                                                                                $rewardsAdsTwo3 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $rewardsAdsTwo3 = '-';
                                                                                        }
                                                                                        echo $rewardsAdsTwo3;
                                                                                    ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= (!empty($rewardsAdsTwo[4])) ? $rewardsAdsTwo[4] : '-'; ?></td>
                                                                                    <td><?= (!empty($rewardsAdsTwo[5])) ? $rewardsAdsTwo[5] : '-'; ?></td>
                                                                                    <td><?php 
                                                                                        $rewardsAdsTwo6 = '';
                                                                                        if(isset($rewardsAdsTwo[6])){
                                                                                            if($rewardsAdsTwo[6] == 'true'){
                                                                                                $rewardsAdsTwo6 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($rewardsAdsTwo[6] == 'false'){
                                                                                                $rewardsAdsTwo6 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $rewardsAdsTwo6 = '-';
                                                                                        }
                                                                                        echo $rewardsAdsTwo6;
                                                                                    ?></td>
                                                                                    <td><?php 
                                                                                        $rewardsAdsTwo7 = '';
                                                                                        if(isset($rewardsAdsTwo[7])){
                                                                                            if($rewardsAdsTwo[7] == 'true'){
                                                                                                $rewardsAdsTwo7 .= '<span class="badge badge-dot badge-success">True</span>';
                                                                                            } else if($rewardsAdsTwo[7] == 'false'){
                                                                                                $rewardsAdsTwo7 .= '<span class="badge badge-dot badge-danger">False</span>';
                                                                                            }
                                                                                        } else {
                                                                                            $rewardsAdsTwo7 = '-';
                                                                                        }
                                                                                        echo $rewardsAdsTwo7;
                                                                                    ?></td>
                                                                                </tr>
                                                                             </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="nk-block-content text-center">
                                                    <span class="sub-text">No data available in table</span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>