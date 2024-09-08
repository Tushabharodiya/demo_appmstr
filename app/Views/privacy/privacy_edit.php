<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Privacy</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Edit Privacy</p>
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
                                                <label class="form-label" for="privacy_policy">Privacy Policy</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" name="privacy_policy" placeholder="Enter privacy policy" required><?php echo $androidPrivacyData['privacy_policy'];?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="privacy_terms">Privacy Terms</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" name="privacy_terms" placeholder="Enter privacy terms" required><?php echo $androidPrivacyData['privacy_terms'];?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="privacy_slug">Data Api *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="privacy_slug" value="<?php echo $androidPrivacyData['privacy_slug'];?>" placeholder="Enter privacy slug" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="privacy_status">Privacy Status *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="privacy_status" data-placeholder="Select a status" required>
                                                        <option value="Publish"<?php echo ($androidPrivacyData['privacy_status'] == 'Publish') ? 'selected' : '' ?>>Publish</option>
                                                        <option value="Unpublish"<?php echo ($androidPrivacyData['privacy_status'] == 'Unpublish') ? 'selected' : '' ?>>Unpublish</option>
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