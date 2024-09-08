<?php
    $uri = service('uri');
    $conceptID = $uri->getSegment(2);
    
    $sessionConceptAndroidApps = session()->get('session_concept_android_apps');
    $sessionConceptAndroidAppsRevenueType = session()->get('session_concept_android_apps_revenue_type');
    $sessionConceptAndroidAppsStatus = session()->get('session_concept_android_apps_status');
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
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-search"></em>
                                                    </div>
                                                    <input type="text" class="form-control" name="search_concept_android_apps" value="<?php if(!empty($sessionConceptAndroidApps)){ echo $sessionConceptAndroidApps; } ?>" placeholder="Search by" autocomplete="off">
                                                </div>
                                                <input type="submit" class="btn btn-sm btn-info d-none" name="submit_search" value="Filter">
                                                <input type="submit" class="btn btn-sm btn-secondary d-none" name="reset_search" value="Reset">
                                            </form>
                                        </li>
                                        <li>
                                            <select class="form-control" id="search-revenue-type" name="search_concept_android_apps_revenue_type" data-id="<?php echo $conceptID;?>" data-placeholder="Select a type">
                                                <?php $str='';
                                                    if(!empty($sessionConceptAndroidAppsRevenueType == 'all')){
                                                        $str.='selected';
                                                } ?> <option value="all"<?php echo $str; ?>>All</option>
                                                <?php $str='';
                                                    if(!empty($sessionConceptAndroidAppsRevenueType == 'Paid')){
                                                        $str.='selected';
                                                } ?> <option value="Paid"<?php echo $str; ?>>Paid</option>
                                                <?php $str='';
                                                    if(!empty($sessionConceptAndroidAppsRevenueType == 'Organic')){
                                                        $str.='selected';
                                                } ?> <option value="Organic"<?php echo $str; ?>>Organic</option>
                                                <?php $str='';
                                                    if(!empty($sessionConceptAndroidAppsRevenueType == 'Both')){
                                                        $str.='selected';
                                                } ?> <option value="Both"<?php echo $str; ?>>Both</option>
                                            </select>   
                                        </li>
                                        <li>
                                            <select class="form-control" id="search-status" name="search_concept_android_apps_status" data-id="<?php echo $conceptID;?>" data-placeholder="Select a status">
                                                <?php $str='';
                                                    if(!empty($sessionConceptAndroidAppsStatus == 'all')){
                                                        $str.='selected';
                                                } ?> <option value="all"<?php echo $str; ?>>All</option>
                                                <?php $str='';
                                                    if(!empty($sessionConceptAndroidAppsStatus == 'draft')){
                                                        $str.='selected';
                                                } ?> <option value="draft"<?php echo $str; ?>>Draft</option>
                                                <?php $str='';
                                                    if(!empty($sessionConceptAndroidAppsStatus == 'development')){
                                                        $str.='selected';
                                                } ?> <option value="development"<?php echo $str; ?>>Development</option>
                                                <?php $str='';
                                                    if(!empty($sessionConceptAndroidAppsStatus == 'publish')){
                                                        $str.='selected';
                                                } ?> <option value="publish"<?php echo $str; ?>>Publish</option>
                                                <?php $str='';
                                                    if(!empty($sessionConceptAndroidAppsStatus == 'unpublish')){
                                                        $str.='selected';
                                                } ?> <option value="unpublish"<?php echo $str; ?>>Unpublish</option>
                                                <?php $str='';
                                                    if(!empty($sessionConceptAndroidAppsStatus == 'suspended')){
                                                        $str.='selected';
                                                } ?> <option value="suspended"<?php echo $str; ?>>Suspended</option>
                                            </select>   
                                        </li>
                                        <li class="nk-block-tools-opt">
                                            <a href="<?= !empty(session()->get('session_android_concept_view_previous_url')) ? session()->get('session_android_concept_view_previous_url') : base_url('view-concept'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-4">
                                <?php if(!empty($getConceptAndroidApps)){ ?>
                                    <?php foreach($getConceptAndroidApps as $data){ ?>
                                        <div class="col-lg-3">
                                            <div class="plan-item-card">
                                                <div class="plan-item-head">
                                                    <div class="plan-item-heading">
                                                        <div class="user-card user-card-s2">
                                                            <img src="<?php echo base_url('public/uploads/logos/'.$data['app_logo']);?>" alt="" width="200" height="200">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-item-body">
                                                    <div class="plan-item-desc card-text">
                                                        <ul class="plan-item-desc-list">
                                                            <li><span class="desc-label">Name</span> - <span class="desc-data"><?php $appName = $data['app_name']; ?>
                                                                <?php if(strlen($appName) > 10){ ?>
                                                                    <a data-toggle="tooltip" data-placement="bottom" title="<?php echo $data['app_name'];?>">
                                                                        <span><?php echo substr($appName, 0, 10); ?>...</span>
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <?php echo $appName; ?>
                                                                <?php } ?></span>
                                                            </li>
                                                            <li><span class="desc-label">Dev</span> - <span class="desc-data"><?php $appDeveloper = $data['app_developer']; ?>
                                                                <?php if(strlen($appDeveloper) > 10){ ?>
                                                                    <a data-toggle="tooltip" data-placement="bottom" title="<?php echo $data['app_developer'];?>">
                                                                        <span><?php echo substr($appDeveloper, 0, 10); ?>...</span>
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <?php echo $appDeveloper; ?>
                                                                <?php } ?></span>
                                                            </li>
                                                            <li><span class="desc-label">Code</span> - <span class="desc-data"><?php echo $data['app_code'];?></span></li>
                                                            <li><span class="desc-label">Status</span> - <span class="desc-data"><?php echo $data['app_status'];?></span></li>
                                                            <li>
                                                                <?php if($data['app_today_roi'] === null){ ?>
                                                                    <span class="desc-label text-soft">T : 0%</span>
                                                                <?php } else if($data['app_today_roi'] > 40){ ?>
                                                                    <span class="desc-label text-success">T : <?php echo $data['app_today_roi'] . '%';?></span>
                                                                <?php } else { ?>
                                                                    <span class="desc-label text-danger">T : <?php echo $data['app_today_roi'] . '%';?></span>
                                                                <?php } ?> -
                                                                <?php if($data['app_weekly_roi'] === null){ ?>
                                                                    <span class="desc-data text-soft">W : 0%</span>
                                                                <?php } else if($data['app_weekly_roi'] > 40){ ?>
                                                                    <span class="desc-data text-success">W : <?php echo $data['app_weekly_roi'] . '%';?></span>
                                                                <?php } else { ?>
                                                                    <span class="desc-data text-danger">W : <?php echo $data['app_weekly_roi'] . '%';?></span>
                                                                <?php } ?>
                                                            </li>        
                                                            <li>
                                                                <span class="desc-label text-soft">I : <?php echo ($data['app_weekly_in'] === null) ? '0' : $data['app_weekly_in'];?></span> - 
                                                                <span class="desc-data text-soft">O : <?php echo ($data['app_weekly_out'] === null) ? '0' : $data['app_weekly_out'];?></span>
                                                            </li>
                                                        </ul>
                                                        <div class="plan-item-action">
                                                            <ul class="nk-tb-actions gx-2 justify-content-center">
                                                                <li class="nk-tb-action">
                                                                    <a href="<?php echo base_url('info-app/'.urlEncodes($data['app_id']));?>" class="bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="tooltip" data-placement="top" title="View"><em class="icon ni ni-eye"></em></a>
                                                                </li>
                                                                <li class="nk-tb-action">
                                                                    <a href="<?php echo base_url('edit-app/'.urlEncodes($data['app_id']));?>" class="bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="tooltip" data-placement="top" title="Edit"><em class="icon ni ni-edit"></em></a>
                                                                </li>
                                                                <li class="nk-tb-action">
                                                                    <a href="https://play.google.com/store/apps/details?id=<?php echo $data['app_package'];?>" target="_blank" class="bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="tooltip" data-placement="top" title="Store"><em class="icon ni ni-google-play-store"></em></a>
                                                                </li>
                                                                <li class="nk-tb-action">
                                                                    <a href="<?php echo base_url('view-roi/'.urlEncodes($data['app_id']));?>" class="bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="tooltip" data-placement="top" title="Roi"><em class="icon ni ni-growth-fill"></em></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } else { ?>
                                    <div class="col-lg-12">
                                        <div class="plan-item-card">
                                            <div class="nk-block-content text-center p-4">
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

<script>
    document.getElementById('search-revenue-type').addEventListener('change', function() {
        var selectedStatus = this.value;
        var conceptID = $(this).data('id');
        $.ajax({
            url: '<?= base_url('info-concept'); ?>/' + conceptID,
            type: 'POST',
            data: { search_concept_android_apps_revenue_type: selectedStatus },
            success: function() {
                location.reload();
            }
        });
    });
</script>

<script>
    document.getElementById('search-status').addEventListener('change', function() {
        var selectedStatus = this.value;
        var conceptID = $(this).data('id');
        $.ajax({
             url: '<?= base_url('info-concept'); ?>/' + conceptID,
            type: 'POST',
            data: { search_concept_android_apps_status: selectedStatus },
            success: function() {
                location.reload();
            }
        });
    });
</script>