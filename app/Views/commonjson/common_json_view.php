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
                                        <p><?php echo "You have total $commonJsonCount common jsons."; ?></p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools g-3">
                                        <?php if(!empty($viewJsonBanner)){ ?>
                                            <li><a href="<?php echo base_url('edit-common-json/'.urlEncodes($jsonData->json_id));?>" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-edit"></em><span>Edit Common Json Data</span></a></li>
                                        <?php } ?>
                                        <li class="nk-block-tools-opt"><a href="<?php echo base_url('new-common-json');?>" class="btn btn-primary"><em class="icon ni ni-plus"></em></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row gy-4">
                                <?php if(!empty($viewJsonBanner)){ ?>
                                    <?php foreach($viewJsonBanner as $data){ ?>
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