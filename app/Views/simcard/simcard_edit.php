<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Simcard</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Edit Simcard</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?= !empty(session()->get('session_android_simcard_view_previous_url')) ? session()->get('session_android_simcard_view_previous_url') : base_url('view-simcard'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>

                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="sim_owner">Sim Owner *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="sim_owner" value="<?php echo $simcardData['sim_owner'];?>" placeholder="Enter sim owner" required>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="sim_operator">Sim Operator *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="sim_operator" value="<?php echo $simcardData['sim_operator'];?>" placeholder="Enter sim operator" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="sim_number">Sim Number *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="sim_number" value="<?php echo $simcardData['sim_number'];?>" placeholder="Enter sim number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="sim_imei">Sim Imei *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="sim_imei" value="<?php echo $simcardData['sim_imei'];?>" placeholder="Enter sim imei" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="sim_type">Sim Type *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="sim_type" data-placeholder="Select a type" required>
                                                        <option value="prepaid"<?php echo ($simcardData['sim_type'] == 'prepaid') ? 'selected' : '' ?>>Prepaid</option>
                                                        <option value="postpaid"<?php echo ($simcardData['sim_type'] == 'postpaid') ? 'selected' : '' ?>>Postpaid</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="sim_note">Sim Note *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="sim_note" value="<?php echo $simcardData['sim_note'];?>" placeholder="Enter sim note" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="sim_status">Sim Status *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="sim_status" data-placeholder="Select a status" required>
                                                        <option value="active"<?php echo ($simcardData['sim_status'] == 'active') ? 'selected' : '' ?>>Active</option>
                                                        <option value="deactivate"<?php echo ($simcardData['sim_status'] == 'deactivate') ? 'selected' : '' ?>>Deactivate</option>
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