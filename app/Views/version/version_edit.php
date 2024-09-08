<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Version</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Edit Version</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?php echo base_url('info-app/'.urlEncodes($appID));?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="version_name">Version Name *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="version_name" value="<?php echo $versionData['version_name'];?>" placeholder="Enter version name" required>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="version_code">Version Code *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="version_code" value="<?php echo $versionData['version_code'];?>" placeholder="Enter version code" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="main_api">Main Api *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="main_api" value="<?php echo $versionData['main_api'];?>" placeholder="https://example.com/api/" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="data_api">Data Api *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="data_api" value="<?php echo $versionData['data_api'];?>" placeholder="https://example.com/data/" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="app_ads">App Ads *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="app_ads" data-placeholder="Select a ads" required>
                                                        <option value="true"<?php echo ($versionData['app_ads'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['app_ads'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="app_banner">App Banner *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="app_banner" data-placeholder="Select a banner" required>
                                                        <option value="true"<?php echo ($versionData['app_banner'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['app_banner'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="app_open">App Open *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="app_open" data-placeholder="Select a open" required>
                                                        <option value="true"<?php echo ($versionData['app_open'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['app_open'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="splash_ads">Splash Ads *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="splash_ads" data-placeholder="Select a splash" required>
                                                        <option value="true"<?php echo ($versionData['splash_ads'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['splash_ads'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="screen_ads">Screen Ads *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="screen_ads" data-placeholder="Select a screen" required>
                                                        <option value="true"<?php echo ($versionData['screen_ads'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['screen_ads'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="ads_count_one">Ads Count One *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="ads_count_one" value="<?php echo $versionData['ads_count_one'];?>" placeholder="0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="ads_count_two">Ads Count Two *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="ads_count_two" value="<?php echo $versionData['ads_count_two'];?>" placeholder="0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="ads_count_three">Ads Count Three *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="ads_count_three" value="<?php echo $versionData['ads_count_three'];?>" placeholder="0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="ads_count_four">Ads Count Four *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="ads_count_four" value="<?php echo $versionData['ads_count_four'];?>" placeholder="0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="app_review">App Review *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="app_review" data-placeholder="Select a review" required>
                                                        <option value="true"<?php echo ($versionData['app_review'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['app_review'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="review_count">Review Count *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="review_count" value="<?php echo $versionData['review_count'];?>" placeholder="0" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="update_title">Update Title *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="update_title" value="<?php echo $versionData['update_title'];?>" placeholder="Enter update title" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="update_description">Update Description *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="update_description" value="<?php echo $versionData['update_description'];?>" placeholder="Enter update description" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="update_url">Update Url *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="update_url" value="<?php echo $versionData['update_url'];?>" placeholder="Enter update url" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="update_button">Update Button *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="update_button" value="<?php echo $versionData['update_button'];?>" placeholder="Enter update button" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="app_update">App Update *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="app_update" data-placeholder="Select a update" required>
                                                        <option value="false"<?php echo ($versionData['app_update'] == 'false') ? 'selected' : '' ?>>False</option>
                                                        <option value="true"<?php echo ($versionData['app_update'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="critical"<?php echo ($versionData['app_update'] == 'critical') ? 'selected' : '' ?>>Critical</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="is_vpn">Is VPN *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="is_vpn" data-placeholder="Select a vpn" required>
                                                        <option value="true"<?php echo ($versionData['is_vpn'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['is_vpn'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="is_crawler">Is Crawler *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="is_crawler" data-placeholder="Select a crawler" required>
                                                        <option value="true"<?php echo ($versionData['is_crawler'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['is_crawler'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="is_subscription">Is Subscription *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="is_subscription" data-placeholder="Select a subscription" required>
                                                        <option value="true"<?php echo ($versionData['is_subscription'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['is_subscription'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="is_rewarded">Is Rewarded *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="is_rewarded" data-placeholder="Select a rewarded" required>
                                                        <option value="true"<?php echo ($versionData['is_rewarded'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['is_rewarded'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="version_status">Version Status *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="version_status" data-placeholder="Select a status" required>
                                                        <option value="true"<?php echo ($versionData['version_status'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($versionData['version_status'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>