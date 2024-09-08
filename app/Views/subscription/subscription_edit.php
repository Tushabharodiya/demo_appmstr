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
                                        <p>Edit Subscription</p>
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
                                                <label class="form-label" for="subscription_code">Subscription Code *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="subscription_code" value="<?php echo $subscriptionData['subscription_code'];?>" placeholder="Enter subscription code" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="subscription_title_one">Subscription Title One *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="subscription_title_one" value="<?php echo $subscriptionData['subscription_title_one'];?>" placeholder="Enter subscription title one" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="subscription_title_two">Subscription Title Two *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="subscription_title_two" value="<?php echo $subscriptionData['subscription_title_two'];?>" placeholder="Enter subscription title two" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="subscription_title_three">Subscription Title Three *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="subscription_title_three" value="<?php echo $subscriptionData['subscription_title_three'];?>" placeholder="Enter subscription title three" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="subscription_title_four">Subscription Title Four *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="subscription_title_four" value="<?php echo $subscriptionData['subscription_title_four'];?>" placeholder="Enter subscription title four" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="subscription_offer">Subscription Offer *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="subscription_offer" value="<?php echo $subscriptionData['subscription_offer'];?>" placeholder="Enter subscription offer" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="subscription_primary">Subscription Primary *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="subscription_primary" data-placeholder="Select a primary" required>
                                                        <option value="true"<?php echo ($subscriptionData['subscription_primary'] == 'true') ? 'selected' : '' ?>>True</option>
                                                        <option value="false"<?php echo ($subscriptionData['subscription_primary'] == 'false') ? 'selected' : '' ?>>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="subscription_status">Subscription Status *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="subscription_status" data-placeholder="Select a status" required>
                                                        <option value="publish"<?php echo ($subscriptionData['subscription_status'] == 'publish') ? 'selected' : '' ?>>Publish</option>
                                                        <option value="unpublish"<?php echo ($subscriptionData['subscription_status'] == 'unpublish') ? 'selected' : '' ?>>Unpublish</option>
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