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
                                        <p>New Application</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?= !empty(session()->get('session_android_application_view_previous_url')) ? session()->get('session_android_application_view_previous_url') : base_url('view-app'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>
                        </div>
                        
                        <?php if(!empty(session('session_android_application_new_common_json'))){ ?>
                            <div class="alert alert-danger alert-icon mb-2">
                                <em class="icon ni ni-alert-circle"></em>
                                <?php echo session('session_android_application_new_common_json');?> <a href="<?php echo base_url('new-common-json');?>" class="alert-link">Common Json</a> <?php echo session()->remove('session_android_application_new_common_json');?>
                            </div>
                        <?php } ?>
                        
                        <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="row g-gs">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="developer_id">Developer Name *</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select form-control form-control-lg" data-search="on"  name="developer_id" data-placeholder="Select a developer" required>
                                                            <?php if(!empty($developerData)){ ?>
                                                                <?php foreach($developerData as $data){ ?>
                                                                    <option value="<?php echo $data['developer_id'];?>"><?php echo $data['developer_name'];?></option>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <option value="">Empty</option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="concept_id">Concept Name *</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select form-control form-control-lg" data-search="on"  name="concept_id" data-placeholder="Select a concept" required>
                                                            <?php if(!empty($conceptData)){ ?>
                                                                <?php foreach($conceptData as $data){ ?>
                                                                    <option value="<?php echo $data['concept_id'];?>"><?php echo $data['concept_name'];?></option>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <option value="">Empty</option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_code">App Code *</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_code" placeholder="Enter app code" required>
                                                        <span class="text-danger"><?php if(!empty(session('session_android_application_new_app_code'))){ ?> <?php echo session('session_android_application_new_app_code');?> <?php echo session()->remove('session_android_application_new_app_code');?> <?php } ?></span>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_name">App Name *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_name" placeholder="Enter app name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_package">App Package *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_package" placeholder="Enter app package" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_logo">App Logo *</label>
                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">
                                                            <input type="file" class="form-control custom-file-input" name="app_logo" required>
                                                            <label class="custom-file-label" for="app_logo">Choose file</label>
                                                            <span class="text-danger"><?php if(!empty(session('session_android_application_new_app_logo'))){ ?> <?php echo session('session_android_application_new_app_logo');?> <?php echo session()->remove('session_android_application_new_app_logo');?> <?php } ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_developer">App Developer *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_developer" placeholder="Enter app developer" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_website">App Website *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_website" placeholder="Enter app website" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_google">App Google *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_google" placeholder="Enter app google" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_facebook">App Facebook *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_facebook" placeholder="Enter app facebook" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_email">App Email *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_email" placeholder="Enter app email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_store">App Store *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_store" placeholder="Enter app store url" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_privacy">App Privacy *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_privacy" placeholder="https://example.com/privacy/" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_terms">App Terms *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_terms" placeholder="https://example.com/terms/" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_support">App Support *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_support" placeholder="https://example.com/support/" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_release">App Release *</label> 
                                                    <div class="form-control-wrap">
                                                        <div class="form-icon form-icon-right">
                                                            <em class="icon ni ni-calendar-alt"></em>
                                                        </div>
                                                        <input type="text" class="form-control date-picker" name="app_release" placeholder="Enter app release" autocomplete="off" data-date-format="yyyy-mm-dd" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_revenue_type">App Revenue Type *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="app_revenue_type" data-placeholder="Select a type" required>
                                                            <option value="Paid">Paid</option>
                                                            <option value="Organic">Organic</option>
                                                            <option value="Both">Both</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_status">App Status *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="app_status" data-placeholder="Select a status" required>
                                                            <option value="draft">Draft</option>
                                                            <option value="development">Development</option>
                                                            <option value="publish">Publish</option>
                                                            <option value="unpublish">UnPublish</option>
                                                            <option value="suspended">Suspended</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Version</h5>
                                        <p>New Version</p>
                                    </div>
                                </div>
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="row g-gs">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="version_name">Version Name *</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="version_name" placeholder="1.0.0" required>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="version_code">Version Code *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="version_code" placeholder="1" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="main_api">Main Api *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="main_api" placeholder="https://example.com/api/" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="data_api">Data Api *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="data_api" placeholder="https://example.com/data/" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_ads">App Ads *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="app_ads" data-placeholder="Select a ads" required>
                                                            <option value="true">True</option>
                                                            <option value="false">False</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_banner">App Banner *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="app_banner" data-placeholder="Select a banner" required>
                                                            <option value="true">True</option>
                                                            <option value="false">False</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_open">App Open *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="app_open" data-placeholder="Select a open" required>
                                                            <option value="true">True</option>
                                                            <option value="false">False</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="splash_ads">Splash Ads *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="splash_ads" data-placeholder="Select a splash" required>
                                                            <option value="true">True</option>
                                                            <option value="false">False</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="screen_ads">Screen Ads *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="screen_ads" data-placeholder="Select a screen" required>
                                                            <option value="true">True</option>
                                                            <option value="false">False</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="ads_count_one">Ads Count One *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="ads_count_one" placeholder="0" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="ads_count_two">Ads Count Two *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="ads_count_two" placeholder="0" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="ads_count_three">Ads Count Three *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="ads_count_three" placeholder="0" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="ads_count_four">Ads Count Four *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="ads_count_four" placeholder="0" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_review">App Review *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="app_review" data-placeholder="Select a review" required>
                                                            <option value="true">True</option>
                                                            <option value="false">False</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="review_count">Review Count *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="review_count" placeholder="0" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_update">App Update *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="app_update" data-placeholder="Select a update" required>
                                                            <option value="false">False</option>
                                                            <option value="normal">Normal</option>
                                                            <option value="critical">Critical</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="is_crawler">Is Crawler *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="is_crawler" data-placeholder="Select a crawler" required>
                                                            <option value="true">True</option>
                                                            <option value="false">False</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="version_status">Version Status *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="version_status" data-placeholder="Select a status" required>
                                                            <option value="true">True</option>
                                                            <option value="false">False</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Ads</h5>
                                        <p>New Ads</p>
                                    </div>
                                </div>
                                <div class="card card-bordered">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Banner Ads One Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_one[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="banner_ads_one[]" value="@">
                                            <h6 class="overline-title title mt-4">Banner Ads One Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_one[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Banner Ads Two Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_two[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="banner_ads_two[]" value="@">
                                            <h6 class="overline-title title mt-4">Banner Ads Two Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_two[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Banner Ads Three Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_three[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="banner_ads_three[]" value="@">
                                            <h6 class="overline-title title mt-4">Banner Ads Three Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_three[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Banner Ads Four Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_four[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="banner_ads_four[]" value="@">
                                            <h6 class="overline-title title mt-4">Banner Ads Four Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_four[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-bordered">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Native Ads One Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_one[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="native_ads_one[]" value="@">
                                            <h6 class="overline-title title mt-4">Native Ads One Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_one[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Native Ads Two Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_two[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="native_ads_two[]" value="@">
                                            <h6 class="overline-title title mt-4">Native Ads Two Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_two[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Native Ads Three Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_three[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="native_ads_three[]" value="@">
                                            <h6 class="overline-title title mt-4">Native Ads Three Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_three[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Native Ads Four Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_four[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="native_ads_four[]" value="@">
                                            <h6 class="overline-title title mt-4">Native Ads Four Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_four[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-bordered">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Interstitial Ads One Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_one[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="interstitial_ads_one[]" value="@">
                                            <h6 class="overline-title title mt-4">Interstitial Ads One Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_one[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Interstitial Ads Two Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_two[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="interstitial_ads_two[]" value="@">
                                            <h6 class="overline-title title mt-4">Interstitial Ads Two Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_two[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Interstitial Ads Three Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_three[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="interstitial_ads_three[]" value="@">
                                            <h6 class="overline-title title mt-4">Interstitial Ads Three Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_three[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Interstitial Ads Four Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_four[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="interstitial_ads_four[]" value="@">
                                            <h6 class="overline-title title mt-4">Interstitial Ads Four Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_four[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-bordered">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Open Ads One Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="open_ads_one[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="open_ads_one[]" value="@">
                                            <h6 class="overline-title title mt-4">Open Ads One Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="open_ads_one[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Open Ads Two Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="open_ads_two[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="open_ads_two[]" value="@">
                                            <h6 class="overline-title title mt-4">Open Ads Two Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="open_ads_two[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-bordered">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Rewards Ads One Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="rewards_ads_one[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="rewards_ads_one[]" value="@">
                                            <h6 class="overline-title title mt-4">Rewards Ads One Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="rewards_ads_one[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Rewards Ads Two Primary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="rewards_ads_two[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="rewards_ads_two[]" value="@">
                                            <h6 class="overline-title title mt-4">Rewards Ads One Secondary</h6>  
                                            <div class="row g-gs">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google">Google</option>
                                                                <option value="facebook">Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="rewards_ads_two[]" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true">True</option>
                                                                <option value="false">False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-primary">Save Informations</button>
                                </div>
                            </div>
                        </form>
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
	setTimeout(function() {
	    $('.text-danger').fadeOut('fast');
	}, 2000); 
</script>