<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Roi</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>New Roi</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?= !empty(session()->get('session_android_roi_previous_url')) ? session()->get('session_android_roi_previous_url') : base_url('view-roi/'.urlEncodes($data['app_id'])); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>
                        </div>
                        
                        <?php if(!empty(session('session_android_roi_new_application'))){ ?>
                            <div class="alert alert-danger alert-icon mb-2">
                                <em class="icon ni ni-alert-circle"></em>
                                <?php echo session('session_android_roi_new_application');?> <a href="<?php echo base_url('new-app');?>" class="alert-link">Application</a> <?php echo session()->remove('session_android_roi_new_application');?>
                            </div>
                        <?php } ?>
                        
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                    <div class="row g-gs">
                                        <input type="hidden" name="app_id" value="<?php echo $data['app_id'];?>">
                                        <input type="hidden" name="app_code" value="<?php echo $data['app_code'];?>">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="app_in">App In *</label>
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" name="app_in" placeholder="Enter app in" required>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="app_out">App Out *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="number" class="form-control" name="app_out" placeholder="Enter app out" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="app_date">App Date *</label> 
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-calendar-alt"></em>
                                                    </div>
                                                    <input type="text" class="form-control date-picker" name="app_date" placeholder="Enter app date" autocomplete="off" data-date-format="yyyy-mm-dd" required>
                                                    <span class="text-danger"><?php if(!empty(session('session_android_roi_new_app_date'))){ ?> <?php echo session('session_android_roi_new_app_date');?> <?php echo session()->remove('session_android_roi_new_app_date');?> <?php } ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="data_status">Data Status *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="data_status" data-placeholder="Select a status" required>
                                                        <option value="true">True</option>
                                                        <option value="false">False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md btn-primary">Save Informations</button>
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