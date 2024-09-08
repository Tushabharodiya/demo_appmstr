<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Application <img src="<?php echo base_url('public/uploads/logos/'.$androidAppData['app_logo']);?>" alt="" width="50" height="50"></h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Edit Application - <?php echo $androidAppData['app_name']; ?></p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?= !empty(session()->get('session_android_application_previous_url')) ? session()->get('session_android_application_previous_url') : base_url('view-app'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>
                        </div>
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
                                                            <?php foreach($viewDeveloper as $data){
                                                                $selected = $data['developer_id'] == $developerData['developer_id'] ? 'selected' : '';
                                                                echo '<option value="'.$data['developer_id'].'" '.$selected.'>'.$data['developer_name'].'</option>'; 
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="concept_id">Concept Name *</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select form-control form-control-lg" data-search="on"  name="concept_id" data-placeholder="Select a concept" required>
                                                            <?php foreach($viewConcept as $data){
                                                                $selected = $data['concept_id'] == $conceptData['concept_id'] ? 'selected' : '';
                                                                echo '<option value="'.$data['concept_id'].'" '.$selected.'>'.$data['concept_name'].'</option>'; 
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_code">App Code *</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_code" value="<?php echo $androidAppData['app_code'];?>" placeholder="Enter app code" required>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_name">App Name *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_name" value="<?php echo $androidAppData['app_name'];?>" placeholder="Enter app name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_package">App Package *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_package" value="<?php echo $androidAppData['app_package'];?>" placeholder="Enter app package" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_logo">App Logo *</label>
                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">
                                                            <input type="file" class="form-control custom-file-input" name="app_logo" value="<?php echo $androidAppData['app_logo'];?>">
                                                            <label class="custom-file-label" for="app_logo">Choose file</label>
                                                            <span class="text-danger"><?php if(!empty(session('session_android_application_edit_app_logo'))){ ?> <?php echo session('session_android_application_edit_app_logo');?> <?php echo session()->remove('session_android_application_edit_app_logo');?> <?php } ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_developer">App Developer *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_developer" value="<?php echo $androidAppData['app_developer'];?>" placeholder="Enter app developer" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_website">App Website *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_website" value="<?php echo $androidAppData['app_website'];?>" placeholder="Enter app website" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_google">App Google *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_google" value="<?php echo $androidAppData['app_google'];?>" placeholder="Enter app google" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_facebook">App Facebook *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_facebook" value="<?php echo $androidAppData['app_facebook'];?>" placeholder="Enter app facebook" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_email">App Email *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_email" value="<?php echo $androidAppData['app_email'];?>" placeholder="Enter app email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_store">App Store *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_store" value="<?php echo $androidAppData['app_store'];?>" placeholder="Enter app store url" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_privacy">App Privacy *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_privacy" value="<?php echo $androidAppData['app_privacy'];?>" placeholder="https://example.com/privacy/" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_terms">App Terms *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_terms" value="<?php echo $androidAppData['app_terms'];?>" placeholder="https://example.com/terms/" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="form-group">
                                                    <label class="form-label" for="app_support">App Support *</label> 
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="app_support" value="<?php echo $androidAppData['app_support'];?>" placeholder="https://example.com/support/" required>
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
                                                        <input type="text" class="form-control date-picker" name="app_release" value="<?php echo $androidAppData['app_release'];?>" placeholder="Enter app release" autocomplete="off" data-date-format="yyyy-mm-dd" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_revenue_type">App Revenue Type *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="app_revenue_type" data-placeholder="Select a type" required>
                                                            <option value="Paid"<?php echo ($androidAppData['app_revenue_type'] == 'Paid') ? 'selected' : '' ?>>Paid</option>
                                                            <option value="Organic"<?php echo ($androidAppData['app_revenue_type'] == 'Organic') ? 'selected' : '' ?>>Organic</option>
                                                            <option value="Both"<?php echo ($androidAppData['app_revenue_type'] == 'Both') ? 'selected' : '' ?>>Both</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="app_status">App Status *</label>
                                                    <div class="form-control-wrap ">
                                                        <select class="form-control form-select" name="app_status" data-placeholder="Select a status" required>
                                                            <option value="draft"<?php echo ($androidAppData['app_status'] == 'draft') ? 'selected' : '' ?>>Draft</option>
                                                            <option value="development"<?php echo ($androidAppData['app_status'] == 'development') ? 'selected' : '' ?>>Development</option>
                                                            <option value="publish"<?php echo ($androidAppData['app_status'] == 'publish') ? 'selected' : '' ?>>Publish</option>
                                                            <option value="unpublish"<?php echo ($androidAppData['app_status'] == 'unpublish') ? 'selected' : '' ?>>UnPublish</option>
                                                            <option value="suspended"<?php echo ($androidAppData['app_status'] == 'suspended') ? 'selected' : '' ?>>Suspended</option>
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
                                                <?php
                                                    $bannerOne = $androidAdsData['banner_ads_one']; 
                                                    $bannerAdsOne = preg_split('/(\s|#|@)/', $bannerOne);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($bannerAdsOne[0]) && $bannerAdsOne[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($bannerAdsOne[0]) && $bannerAdsOne[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_one[]" value="<?php echo isset($bannerAdsOne[1]) ? $bannerAdsOne[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($bannerAdsOne[2]) && $bannerAdsOne[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsOne[2]) && $bannerAdsOne[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($bannerAdsOne[3]) && $bannerAdsOne[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsOne[3]) && $bannerAdsOne[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($bannerAdsOne[4]) && $bannerAdsOne[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($bannerAdsOne[4]) && $bannerAdsOne[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_one[]" value="<?php echo isset($bannerAdsOne[5]) ? $bannerAdsOne[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($bannerAdsOne[6]) && $bannerAdsOne[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsOne[6]) && $bannerAdsOne[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($bannerAdsOne[7]) && $bannerAdsOne[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsOne[7]) && $bannerAdsOne[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Banner Ads Two Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $bannerTwo = $androidAdsData['banner_ads_two'];
                                                    $bannerAdsTwo = preg_split('/(\s|#|@)/',$bannerTwo);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($bannerAdsTwo[0]) && $bannerAdsTwo[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($bannerAdsTwo[0]) && $bannerAdsTwo[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_two[]" value="<?php echo isset($bannerAdsTwo[1]) ? $bannerAdsTwo[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($bannerAdsTwo[2]) && $bannerAdsTwo[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsTwo[2]) && $bannerAdsTwo[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($bannerAdsTwo[3]) && $bannerAdsTwo[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsTwo[3]) && $bannerAdsTwo[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($bannerAdsTwo[4]) && $bannerAdsTwo[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($bannerAdsTwo[4]) && $bannerAdsTwo[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_two[]" value="<?php echo isset($bannerAdsTwo[5]) ? $bannerAdsTwo[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($bannerAdsTwo[6]) && $bannerAdsTwo[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsTwo[6]) && $bannerAdsTwo[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($bannerAdsTwo[7]) && $bannerAdsTwo[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsTwo[7]) && $bannerAdsTwo[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Banner Ads Three Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $bannerThree = $androidAdsData['banner_ads_three'];
                                                    $bannerAdsThree = preg_split('/(\s|#|@)/',$bannerThree);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($bannerAdsThree[0]) && $bannerAdsThree[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($bannerAdsThree[0]) && $bannerAdsThree[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_three[]" value="<?php echo isset($bannerAdsThree[1]) ? $bannerAdsThree[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($bannerAdsThree[2]) && $bannerAdsThree[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsThree[2]) && $bannerAdsThree[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($bannerAdsThree[3]) && $bannerAdsThree[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsThree[3]) && $bannerAdsThree[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($bannerAdsThree[4]) && $bannerAdsThree[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($bannerAdsThree[4]) && $bannerAdsThree[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_three[]" value="<?php echo isset($bannerAdsThree[5]) ? $bannerAdsThree[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($bannerAdsThree[6]) && $bannerAdsThree[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsThree[6]) && $bannerAdsThree[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($bannerAdsThree[7]) && $bannerAdsThree[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsThree[7]) && $bannerAdsThree[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Banner Ads Four Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $bannerFour = $androidAdsData['banner_ads_four'];
                                                    $bannerAdsFour = preg_split('/(\s|#|@)/',$bannerFour);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($bannerAdsFour[0]) && $bannerAdsFour[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($bannerAdsFour[0]) && $bannerAdsFour[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_four[]" value="<?php echo isset($bannerAdsFour[1]) ? $bannerAdsFour[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($bannerAdsFour[2]) && $bannerAdsFour[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsFour[2]) && $bannerAdsFour[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($bannerAdsFour[3]) && $bannerAdsFour[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsFour[3]) && $bannerAdsFour[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($bannerAdsFour[4]) && $bannerAdsFour[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($bannerAdsFour[4]) && $bannerAdsFour[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="banner_ads_four[]" value="<?php echo isset($bannerAdsFour[5]) ? $bannerAdsFour[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($bannerAdsFour[6]) && $bannerAdsFour[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsFour[6]) && $bannerAdsFour[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="banner_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="banner_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($bannerAdsFour[7]) && $bannerAdsFour[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($bannerAdsFour[7]) && $bannerAdsFour[7] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                <?php
                                                    $nativeOne = $androidAdsData['native_ads_one'];
                                                    $nativeAdsOne = preg_split('/(\s|#|@)/',$nativeOne);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($nativeAdsOne[0]) && $nativeAdsOne[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($nativeAdsOne[0]) && $nativeAdsOne[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_one[]" value="<?php echo isset($nativeAdsOne[1]) ? $nativeAdsOne[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($nativeAdsOne[2]) && $nativeAdsOne[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsOne[2]) && $nativeAdsOne[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($nativeAdsOne[3]) && $nativeAdsOne[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsOne[3]) && $nativeAdsOne[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($nativeAdsOne[4]) && $nativeAdsOne[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($nativeAdsOne[4]) && $nativeAdsOne[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_one[]" value="<?php echo isset($nativeAdsOne[5]) ? $nativeAdsOne[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($nativeAdsOne[6]) && $nativeAdsOne[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsOne[6]) && $nativeAdsOne[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($nativeAdsOne[7]) && $nativeAdsOne[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsOne[7]) && $nativeAdsOne[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Native Ads Two Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $nativeTwo = $androidAdsData['native_ads_two'];
                                                    $nativeAdsTwo = preg_split('/(\s|#|@)/',$nativeTwo);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($nativeAdsTwo[0]) && $nativeAdsTwo[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($nativeAdsTwo[0]) && $nativeAdsTwo[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_two[]" value="<?php echo isset($nativeAdsTwo[1]) ? $nativeAdsTwo[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($nativeAdsTwo[2]) && $nativeAdsTwo[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsTwo[2]) && $nativeAdsTwo[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($nativeAdsTwo[3]) && $nativeAdsTwo[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsTwo[3]) && $nativeAdsTwo[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($nativeAdsTwo[4]) && $nativeAdsTwo[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($nativeAdsTwo[4]) && $nativeAdsTwo[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_two[]" value="<?php echo isset($nativeAdsTwo[5]) ? $nativeAdsTwo[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($nativeAdsTwo[6]) && $nativeAdsTwo[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsTwo[6]) && $nativeAdsTwo[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($nativeAdsTwo[7]) && $nativeAdsTwo[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsTwo[7]) && $nativeAdsTwo[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Native Ads Three Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $nativeThree = $androidAdsData['native_ads_three'];
                                                    $nativeAdsThree = preg_split('/(\s|#|@)/',$nativeThree);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($nativeAdsThree[0]) && $nativeAdsThree[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($nativeAdsThree[0]) && $nativeAdsThree[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_three[]" value="<?php echo isset($nativeAdsThree[1]) ? $nativeAdsThree[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($nativeAdsThree[2]) && $nativeAdsThree[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsThree[2]) && $nativeAdsThree[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($nativeAdsThree[3]) && $nativeAdsThree[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsThree[3]) && $nativeAdsThree[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($nativeAdsThree[4]) && $nativeAdsThree[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($nativeAdsThree[4]) && $nativeAdsThree[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_three[]" value="<?php echo isset($nativeAdsThree[5]) ? $nativeAdsThree[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($nativeAdsThree[6]) && $nativeAdsThree[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsThree[6]) && $nativeAdsThree[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($nativeAdsThree[7]) && $nativeAdsThree[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsThree[7]) && $nativeAdsThree[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Native Ads Four Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $nativeFour = $androidAdsData['native_ads_four'];
                                                    $nativeAdsFour = preg_split('/(\s|#|@)/',$nativeFour);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($nativeAdsFour[0]) && $nativeAdsFour[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($nativeAdsFour[0]) && $nativeAdsFour[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_four[]" value="<?php echo isset($nativeAdsFour[1]) ? $nativeAdsFour[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($nativeAdsFour[2]) && $nativeAdsFour[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsFour[2]) && $nativeAdsFour[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($nativeAdsFour[3]) && $nativeAdsFour[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsFour[3]) && $nativeAdsFour[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($nativeAdsFour[4]) && $nativeAdsFour[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($nativeAdsFour[4]) && $nativeAdsFour[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="native_ads_four[]" value="<?php echo isset($nativeAdsFour[5]) ? $nativeAdsFour[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($nativeAdsFour[6]) && $nativeAdsFour[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsFour[6]) && $nativeAdsFour[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="native_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="native_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($nativeAdsFour[7]) && $nativeAdsFour[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($nativeAdsFour[7]) && $nativeAdsFour[7] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                <?php
                                                    $interstitialOne = $androidAdsData['interstitial_ads_one'];
                                                    $interstitialAdsOne = preg_split('/(\s|#|@)/',$interstitialOne);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($interstitialAdsOne[0]) && $interstitialAdsOne[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($interstitialAdsOne[0]) && $interstitialAdsOne[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_one[]" value="<?php echo isset($interstitialAdsOne[1]) ? $interstitialAdsOne[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($interstitialAdsOne[2]) && $interstitialAdsOne[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsOne[2]) && $interstitialAdsOne[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($interstitialAdsOne[3]) && $interstitialAdsOne[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsOne[3]) && $interstitialAdsOne[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($interstitialAdsOne[4]) && $interstitialAdsOne[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($interstitialAdsOne[4]) && $interstitialAdsOne[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_one[]" value="<?php echo isset($interstitialAdsOne[5]) ? $interstitialAdsOne[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($interstitialAdsOne[6]) && $interstitialAdsOne[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsOne[6]) && $interstitialAdsOne[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($interstitialAdsOne[7]) && $interstitialAdsOne[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsOne[7]) && $interstitialAdsOne[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Interstitial Ads Two Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $interstitialTwo = $androidAdsData['interstitial_ads_two'];
                                                    $interstitialAdsTwo = preg_split('/(\s|#|@)/',$interstitialTwo);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($interstitialAdsTwo[0]) && $interstitialAdsTwo[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($interstitialAdsTwo[0]) && $interstitialAdsTwo[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_two[]" value="<?php echo isset($interstitialAdsTwo[1]) ? $interstitialAdsTwo[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($interstitialAdsTwo[2]) && $interstitialAdsTwo[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsTwo[2]) && $interstitialAdsTwo[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($interstitialAdsTwo[3]) && $interstitialAdsTwo[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsTwo[3]) && $interstitialAdsTwo[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($interstitialAdsTwo[4]) && $interstitialAdsTwo[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($interstitialAdsTwo[4]) && $interstitialAdsTwo[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_two[]" value="<?php echo isset($interstitialAdsTwo[5]) ? $interstitialAdsTwo[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($interstitialAdsTwo[6]) && $interstitialAdsTwo[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsTwo[6]) && $interstitialAdsTwo[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($interstitialAdsTwo[7]) && $interstitialAdsTwo[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsTwo[7]) && $interstitialAdsTwo[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Interstitial Ads Three Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $interstitialThree = $androidAdsData['interstitial_ads_three'];
                                                    $interstitialAdsThree = preg_split('/(\s|#|@)/',$interstitialThree);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($interstitialAdsThree[0]) && $interstitialAdsThree[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($interstitialAdsThree[0]) && $interstitialAdsThree[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_three[]" value="<?php echo isset($interstitialAdsThree[1]) ? $interstitialAdsThree[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($interstitialAdsThree[2]) && $interstitialAdsThree[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsThree[2]) && $interstitialAdsThree[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($interstitialAdsThree[3]) && $interstitialAdsThree[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsThree[3]) && $interstitialAdsThree[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($interstitialAdsThree[4]) && $interstitialAdsThree[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($interstitialAdsThree[4]) && $interstitialAdsThree[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_three[]" value="<?php echo isset($interstitialAdsThree[5]) ? $interstitialAdsThree[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($interstitialAdsThree[6]) && $interstitialAdsThree[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsThree[6]) && $interstitialAdsThree[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_three[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_three[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($interstitialAdsThree[7]) && $interstitialAdsThree[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsThree[7]) && $interstitialAdsThree[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Interstitial Ads Four Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $interstitialFour = $androidAdsData['interstitial_ads_four'];
                                                    $interstitialAdsFour = preg_split('/(\s|#|@)/',$interstitialFour);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($interstitialAdsFour[0]) && $interstitialAdsFour[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($interstitialAdsFour[0]) && $interstitialAdsFour[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_four[]" value="<?php echo isset($interstitialAdsFour[1]) ? $interstitialAdsFour[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($interstitialAdsFour[2]) && $interstitialAdsFour[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsFour[2]) && $interstitialAdsFour[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($interstitialAdsFour[3]) && $interstitialAdsFour[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsFour[3]) && $interstitialAdsFour[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($interstitialAdsFour[4]) && $interstitialAdsFour[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($interstitialAdsFour[4]) && $interstitialAdsFour[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="interstitial_ads_four[]" value="<?php echo isset($interstitialAdsFour[5]) ? $interstitialAdsFour[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($interstitialAdsFour[6]) && $interstitialAdsFour[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsFour[6]) && $interstitialAdsFour[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="interstitial_ads_four[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="interstitial_ads_four[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($interstitialAdsFour[7]) && $interstitialAdsFour[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($interstitialAdsFour[7]) && $interstitialAdsFour[7] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                <?php
                                                    $openOne = $androidAdsData['open_ads_one'];
                                                    $openAdsOne = preg_split('/(\s|#|@)/',$openOne);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($openAdsOne[0]) && $openAdsOne[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($openAdsOne[0]) && $openAdsOne[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="open_ads_one[]" value="<?php echo isset($openAdsOne[1]) ? $openAdsOne[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($openAdsOne[2]) && $openAdsOne[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($openAdsOne[2]) && $openAdsOne[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($openAdsOne[3]) && $openAdsOne[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($openAdsOne[3]) && $openAdsOne[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($openAdsOne[4]) && $openAdsOne[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($openAdsOne[4]) && $openAdsOne[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="open_ads_one[]" value="<?php echo isset($openAdsOne[5]) ? $openAdsOne[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($openAdsOne[6]) && $openAdsOne[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($openAdsOne[6]) && $openAdsOne[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($openAdsOne[7]) && $openAdsOne[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($openAdsOne[7]) && $openAdsOne[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Open Ads Two Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $openTwo = $androidAdsData['open_ads_two'];
                                                    $openAdsTwo = preg_split('/(\s|#|@)/',$openTwo);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($openAdsTwo[0]) && $openAdsTwo[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($openAdsTwo[0]) && $openAdsTwo[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="open_ads_two[]" value="<?php echo isset($openAdsTwo[1]) ? $openAdsTwo[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($openAdsTwo[2]) && $openAdsTwo[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($openAdsTwo[2]) && $openAdsTwo[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($openAdsTwo[3]) && $openAdsTwo[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($openAdsTwo[3]) && $openAdsTwo[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($openAdsTwo[4]) && $openAdsTwo[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($openAdsTwo[4]) && $openAdsTwo[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="open_ads_two[]" value="<?php echo isset($openAdsTwo[5]) ? $openAdsTwo[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($openAdsTwo[5]) && $openAdsTwo[5] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($openAdsTwo[5]) && $openAdsTwo[5] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="open_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="open_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($openAdsTwo[6]) && $openAdsTwo[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($openAdsTwo[6]) && $openAdsTwo[6] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                <?php
                                                    $rewardsOne = $androidAdsData['rewards_ads_one'];
                                                    $rewardsAdsOne = preg_split('/(\s|#|@)/',$rewardsOne);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($rewardsAdsOne[0]) && $rewardsAdsOne[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($rewardsAdsOne[0]) && $rewardsAdsOne[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="rewards_ads_one[]" value="<?php echo isset($rewardsAdsOne[1]) ? $rewardsAdsOne[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($rewardsAdsOne[2]) && $rewardsAdsOne[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($rewardsAdsOne[2]) && $rewardsAdsOne[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($rewardsAdsOne[3]) && $rewardsAdsOne[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($rewardsAdsOne[3]) && $rewardsAdsOne[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($rewardsAdsOne[4]) && $rewardsAdsOne[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($rewardsAdsOne[4]) && $rewardsAdsOne[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="rewards_ads_one[]" value="<?php echo isset($rewardsAdsOne[5]) ? $rewardsAdsOne[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($rewardsAdsOne[6]) && $rewardsAdsOne[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($rewardsAdsOne[6]) && $rewardsAdsOne[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_one[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_one[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($rewardsAdsOne[7]) && $rewardsAdsOne[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($rewardsAdsOne[7]) && $rewardsAdsOne[7] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <h6 class="overline-title title">Rewards Ads Two Primary</h6>  
                                            <div class="row g-gs">
                                                <?php
                                                    $rewardsTwo = $androidAdsData['rewards_ads_two'];
                                                    $rewardsAdsTwo = preg_split('/(\s|#|@)/',$rewardsTwo);
                                                ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Priority</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a priority">
                                                                <option value="google"<?php echo (isset($rewardsAdsTwo[0]) && $rewardsAdsTwo[0] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($rewardsAdsTwo[0]) && $rewardsAdsTwo[0] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="rewards_ads_two[]" value="<?php echo isset($rewardsAdsTwo[1]) ? $rewardsAdsTwo[1] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($rewardsAdsTwo[2]) && $rewardsAdsTwo[2] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($rewardsAdsTwo[2]) && $rewardsAdsTwo[2] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($rewardsAdsTwo[3]) && $rewardsAdsTwo[3] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($rewardsAdsTwo[3]) && $rewardsAdsTwo[3] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                                                <option value="google"<?php echo (isset($rewardsAdsTwo[4]) && $rewardsAdsTwo[4] == 'google') ? ' selected' : ''; ?>>Google</option>
                                                                <option value="facebook"<?php echo (isset($rewardsAdsTwo[4]) && $rewardsAdsTwo[4] == 'facebook') ? ' selected' : ''; ?>>Facebook</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Code</label> 
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="rewards_ads_two[]" value="<?php echo isset($rewardsAdsTwo[5]) ? $rewardsAdsTwo[5] : ''; ?>" placeholder="Enter ads code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Status</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a status">
                                                                <option value="true"<?php echo (isset($rewardsAdsTwo[6]) && $rewardsAdsTwo[6] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($rewardsAdsTwo[6]) && $rewardsAdsTwo[6] == 'false') ? ' selected' : ''; ?>>False</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="rewards_ads_two[]">Ads Clickable</label>
                                                        <div class="form-control-wrap ">
                                                            <select class="form-control form-select" name="rewards_ads_two[]" data-placeholder="Select a clickable">
                                                                <option value="true"<?php echo (isset($rewardsAdsTwo[7]) && $rewardsAdsTwo[7] == 'true') ? ' selected' : ''; ?>>True</option>
                                                                <option value="false"<?php echo (isset($rewardsAdsTwo[7]) && $rewardsAdsTwo[7] == 'false') ? ' selected' : ''; ?>>False</option>
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
                                    <button type="submit" class="btn btn-md btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	setTimeout(function() {
	    $('.text-danger').fadeOut('fast');
	}, 2000); 
</script>