<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Developer</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Edit Developer</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?= !empty(session()->get('session_android_developer_view_previous_url')) ? session()->get('session_android_developer_view_previous_url') : base_url('view-developer'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_name">Developer Name *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="developer_name" value="<?php echo $developerData['developer_name'];?>" placeholder="Enter developer name" required>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="developer_email">Developer Email *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="email" class="form-control" name="developer_email" value="<?php echo $developerData['developer_email'];?>" placeholder="Enter developer email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="developer_create_date">Developer Create Date *</label> 
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-calendar-alt"></em>
                                                    </div>
                                                    <input type="text" class="form-control date-picker" name="developer_create_date" value="<?php echo $developerData['developer_create_date'];?>" placeholder="Enter developer create date" autocomplete="off" data-date-format="dd-mm-yyyy" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_device">Developer Device *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="developer_device" value="<?php echo $developerData['developer_device'];?>" placeholder="Enter developer device" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_mac">Developer Mac *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="developer_mac" value="<?php echo $developerData['developer_mac'];?>" placeholder="Enter developer mac" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_mobile_number">Developer Mobile Number *</label>
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" name="developer_mobile_number" value="<?php echo $developerData['developer_mobile_number'];?>" placeholder="Enter developer mobile number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_identity_name">Developer Identity Name *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="developer_identity_name" value="<?php echo $developerData['developer_identity_name'];?>" placeholder="Enter developer identity name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_identity_type">Developer Identity Type *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="developer_identity_type" value="<?php echo $developerData['developer_identity_type'];?>" placeholder="Enter developer identity type" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_identity_front_file">Developer Identity Front File *</label>
                                                <div class="form-control-wrap">
                                                    <div class="custom-file">
                                                        <input type="file" class="form-control custom-file-input" name="developer_identity_front_file" value="<?php echo $developerData['developer_identity_front_file'];?>">
                                                        <label class="custom-file-label" for="developer_identity_front_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_identity_back_file">Developer Identity Back File *</label>
                                                <div class="form-control-wrap">
                                                    <div class="custom-file">
                                                        <input type="file" class="form-control custom-file-input" name="developer_identity_back_file" value="<?php echo $developerData['developer_identity_back_file'];?>">
                                                        <label class="custom-file-label" for="developer_identity_back_file">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_payee_name">Developer Payee Name *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="developer_payee_name" value="<?php echo $developerData['developer_payee_name'];?>" placeholder="Enter developer payee name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_payee_bank">Developer Payee Bank *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="developer_payee_bank" value="<?php echo $developerData['developer_payee_bank'];?>" placeholder="Enter developer payee bank" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_payee_card">Developer Payee Card *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="developer_payee_card" value="<?php echo $developerData['developer_payee_card'];?>" placeholder="Enter developer payee card" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_payee_type">Developer Payee Type *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="developer_payee_type" data-placeholder="Select a type" required>
                                                        <option value="credit"<?php echo ($developerData['developer_payee_type'] == 'credit') ? 'selected' : '' ?>>Credit</option>
                                                        <option value="debit"<?php echo ($developerData['developer_payee_type'] == 'debit') ? 'selected' : '' ?>>Debit</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="developer_status">Developer Status *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="developer_status" data-placeholder="Select a status" required>
                                                        <option value="publish"<?php echo ($developerData['developer_status'] == 'publish') ? 'selected' : '' ?>>Publish</option>
                                                        <option value="unpublish"<?php echo ($developerData['developer_status'] == 'unpublish') ? 'selected' : '' ?>>Unpublish</option>
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