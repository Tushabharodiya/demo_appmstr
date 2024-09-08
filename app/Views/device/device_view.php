<?php
    $sessionAndroidDevice = session()->get('session_android_device');
    $sessionAndroidDeviceStatus = session()->get('session_android_device_status');
?>
                                        
<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Device</h3>
                                    <div class="nk-block-des text-soft">
                                        <p><?php echo "You have total $deviceCount devices."; ?></p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-search"></em>
                                                    </div>
                                                    <input type="text" class="form-control" name="search_android_device" value="<?php if(!empty($sessionAndroidDevice)){ echo $sessionAndroidDevice; } ?>" placeholder="Search by" autocomplete="off">
                                                </div>
                                                <input type="submit" class="btn btn-sm btn-info d-none" name="submit_search" value="Filter">
                                                <input type="submit" class="btn btn-sm btn-secondary d-none" name="reset_search" value="Reset">
                                            </form>
                                        </li>
                                        <li>
                                            <select class="form-control" id="search-status" name="search_android_device_status" data-placeholder="Select a status">
                                                <?php $str='';
                                                    if(!empty($sessionAndroidDeviceStatus == 'all')){
                                                        $str.='selected';
                                                } ?> <option value="all"<?php echo $str; ?>>All</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidDeviceStatus == 'publish')){
                                                        $str.='selected';
                                                } ?> <option value="publish"<?php echo $str; ?>>Publish</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidDeviceStatus == 'unpublish')){
                                                        $str.='selected';
                                                } ?> <option value="unpublish"<?php echo $str; ?>>Unpublish</option>
                                            </select>   
                                        </li>
                                        <li class="nk-block-tools-opt"><a href="<?php echo base_url('new-device');?>" class="btn btn-primary"><em class="icon ni ni-plus"></em></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <table class="table table-tranx">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="nk-tb-col" width="10%"><span>ID</span></th>
                                        <th class="nk-tb-col" width="30%"><span>Code</span></th>
                                        <th class="nk-tb-col" width="35%"><span>Name</span></th>
                                        <th class="nk-tb-col" width="10%"><span>Status</span></th>
                                        <th class="nk-tb-col" width="5%"><span>Action</span></th>
                                    </tr>
                                </thead>
                                <?php if(!empty($viewDevice)){ ?>
                                    <tbody>
                                        <?php foreach($viewDevice as $data){ ?>
                                            <tr class="tb-tnx-item">
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['device_id']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['device_code']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['device_name']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php 
                                                    $deviceStatus = '';
                                                    if($data['device_status'] == 'publish'){
                                                        $deviceStatus.= '<span class="badge badge-dot badge-success">Publish</span>';
                                                    } else if($data['device_status'] == 'unpublish'){
                                                        $deviceStatus.= '<span class="badge badge-dot badge-danger">Unpublish</span>';
                                                    } 
                                                    echo $deviceStatus; 
                                                ?></span></td>
                                                <td class="tb-tnx-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a href="<?php echo base_url('edit-device/'.urlEncodes($data['device_id']));?>">Edit</a></li>
                                                                <li><a data-toggle="modal" data-target="#deleteModal<?php echo urlEncodes($data['device_id']);?>">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <div class="modal fade" tabindex="-1" id="deleteModal<?php echo urlEncodes($data['device_id']);?>">
                                                <div class="modal-dialog modal-dialog-top" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Device</h5>
                                                            <a href="<?= !empty(session()->get('session_android_device_view_previous_url')) ? session()->get('session_android_device_view_previous_url') : base_url('view-device'); ?>" class="close" data-dismiss="modal" aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete <?php echo $data['device_name']; ?>?</p>
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                            <span class="sub-text"><a href="<?php echo base_url('delete-device/'.urlEncodes($data['device_id']));?>" class="btn btn-sm btn-danger">Delete</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </tbody>
                                <?php } else { ?>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                <div class="nk-block-content text-center p-3">
                                                    <span class="sub-text">No data available in table</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <ul class="pagination justify-content-center mt-3">
                        <?= $pager->links() ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('search-status').addEventListener('change', function() {
        var selectedStatus = this.value;
        $.ajax({
            url: '<?= base_url('view-device'); ?>',
            type: 'POST',
            data: { search_android_device_status: selectedStatus },
            success: function() {
                location.reload();
            }
        });
    });
</script>