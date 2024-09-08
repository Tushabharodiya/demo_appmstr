<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Common Json</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Edit Common Json</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?= !empty(session()->get('session_android_common_json_view_previous_url')) ? session()->get('session_android_common_json_view_previous_url') : base_url('view-common-json'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                <div class="row gy-4">
                                    <?php if(!empty($androidBannerData)){ ?>
                                        <?php foreach($androidBannerData as $data){ ?>
                                            <div class="col-lg-4">
                                                <input type="checkbox" class="form-control plan-control" id="plan-iv-<?php echo $data['banner_id'];?>" name="data_json[]" value="<?php echo $data['banner_id']; ?>" 
                                                    <?php if(!empty($androidJsonData)){ 
                                                    $bannerIDs = $androidJsonData['json_data'];
                                                    $bannerArray = explode(",", $bannerIDs);
                                                    foreach($bannerArray as $row){
                                                        $bannerID = $row;
                                                        if($bannerID == $data['banner_id']){ ?>
                                                            checked
                                                    <?php } } } ?> required>
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
                                                            <div class="plan-item-action">
                                                                <label for="plan-iv-<?php echo $data['banner_id'];?>" class="plan-label">
                                                                    <span class="plan-label-base">Choose this json</span>
                                                                    <span class="plan-label-selected">Json Selected</span>
                                                                </label>
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
                                    <?php if(!empty($androidBannerData)){ ?>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-md btn-primary"> <span>Update</span></button>
                                        </div>
                                    <?php } ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>