<?php
    $sessionAndroidBanner = session()->get('session_android_banner');
    $sessionAndroidBannerType = session()->get('session_android_banner_type');
    $sessionAndroidBannerStatus = session()->get('session_android_banner_status');
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
                                    <h3 class="nk-block-title page-title">Banner</h3>
                                    <div class="nk-block-des text-soft">
                                        <p><?php echo "You have total $bannerCount banners."; ?></p>
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
                                                    <input type="text" class="form-control" name="search_android_banner" value="<?php if(!empty($sessionAndroidBanner)){ echo $sessionAndroidBanner; } ?>" placeholder="Search by" autocomplete="off">
                                                </div>
                                                <input type="submit" class="btn btn-sm btn-info d-none" name="submit_search" value="Filter">
                                                <input type="submit" class="btn btn-sm btn-secondary d-none" name="reset_search" value="Reset">
                                            </form>
                                        </li>
                                        <li>
                                            <select class="form-control" id="search-type" name="search_android_banner_type" data-placeholder="Select a type">
                                                <?php $str='';
                                                    if(!empty($sessionAndroidBannerType == 'all')){
                                                        $str.='selected';
                                                } ?> <option value="all"<?php echo $str; ?>>All</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidBannerType == 'image')){
                                                        $str.='selected';
                                                } ?> <option value="image"<?php echo $str; ?>>Image</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidBannerType == 'text')){
                                                        $str.='selected';
                                                } ?> <option value="text"<?php echo $str; ?>>Text</option>
                                            </select>   
                                        </li>
                                        <li>
                                            <select class="form-control" id="search-status" name="search_android_banner_status" data-placeholder="Select a status">
                                                <?php $str='';
                                                    if(!empty($sessionAndroidBannerStatus == 'all')){
                                                        $str.='selected';
                                                } ?> <option value="all"<?php echo $str; ?>>All</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidBannerStatus == 'true')){
                                                        $str.='selected';
                                                } ?> <option value="true"<?php echo $str; ?>>True</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidBannerStatus == 'false')){
                                                        $str.='selected';
                                                } ?> <option value="false"<?php echo $str; ?>>False</option>
                                            </select>   
                                        </li>
                                        <li class="nk-block-tools-opt"><a href="<?php echo base_url('new-banner');?>" class="btn btn-primary"><em class="icon ni ni-plus"></em></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <?php if(!empty(session('session_android_banner_delete_common_json'))){ ?>
                            <div class="alert alert-danger alert-icon mb-2">
                                <em class="icon ni ni-alert-circle"></em>
                                <?php echo session('session_android_banner_delete_common_json');?> <a href="<?php echo base_url('view-common-json');?>" class="alert-link">Common Json</a> <?php echo session()->remove('session_android_banner_delete_common_json');?>
                            </div>
                        <?php } ?>
                        
                        <?php if(!empty(session('session_android_banner_delete_json'))){ ?>
                            <div class="alert alert-danger alert-icon mb-2">
                                <em class="icon ni ni-alert-circle"></em>
                                <?php echo session('session_android_banner_delete_json');?> <a href="<?php echo base_url('view-app');?>" class="alert-link">Json</a> <?php echo session()->remove('session_android_banner_delete_json');?>
                            </div>
                        <?php } ?>
                        
                        <div class="nk-block">
                            <div class="row gy-4">
                                <?php if(!empty($viewBanner)){ ?>
                                    <?php foreach($viewBanner as $data){ ?>
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
                                                            <li><span class="desc-label">Type</span> - <span class="desc-data"><?php echo $data['banner_type'];?></span></li>
                                                            <li><span class="desc-label">Status</span> - <span class="desc-data"><?php echo $data['banner_status'];?></span></li>
                                                        </ul>
                                                        <div class="plan-item-action">
                                                            <ul class="nk-tb-actions gx-2 justify-content-center">
                                                                <li class="nk-tb-action">
                                                                    <a href="<?php echo base_url('edit-banner/'.urlEncodes($data['banner_id']));?>" class="bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="tooltip" data-placement="top" title="Edit"><em class="icon ni ni-edit"></em></a>
                                                                </li>
                                                                <li class="nk-tb-action">
                                                                    <a data-toggle="modal" data-target="#deleteModal<?php echo urlEncodes($data['banner_id']);?>" class="bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="modal fade" tabindex="-1" id="deleteModal<?php echo urlEncodes($data['banner_id']);?>">
                                                            <div class="modal-dialog modal-dialog-top" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Banner</h5>
                                                                        <a href="<?= !empty(session()->get('session_android_banner_view_previous_url')) ? session()->get('session_android_banner_view_previous_url') : base_url('view-banner'); ?>" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <em class="icon ni ni-cross"></em>
                                                                        </a>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Are you sure you want to delete this banner?</p>
                                                                    </div>
                                                                    <div class="modal-footer bg-light">
                                                                        <span class="sub-text"><a href="<?php echo base_url('delete-banner/'.urlEncodes($data['banner_id']));?>" class="btn btn-sm btn-danger">Delete</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                            <ul class="pagination justify-content-center mt-3">
                                <?= $pager->links() ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    $(window).bind("load", function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 3000);
    });
</script>

<script>
    document.getElementById('search-type').addEventListener('change', function() {
        var selectedStatus = this.value;
        $.ajax({
            url: '<?= base_url('view-banner'); ?>',
            type: 'POST',
            data: { search_android_banner_type: selectedStatus },
            success: function() {
                location.reload();
            }
        });
    });
</script>

<script>
    document.getElementById('search-status').addEventListener('change', function() {
        var selectedStatus = this.value;
        $.ajax({
            url: '<?= base_url('view-banner'); ?>',
            type: 'POST',
            data: { search_android_banner_status: selectedStatus },
            success: function() {
                location.reload();
            }
        });
    });
</script>