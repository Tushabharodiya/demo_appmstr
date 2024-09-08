<?php
    $sessionAndroidSimcard = session()->get('session_android_simcard');
    $sessionAndroidSimcardType = session()->get('session_android_simcard_type');
    $sessionAndroidSimcardStatus = session()->get('session_android_simcard_status');
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
                                    <h3 class="nk-block-title page-title">Simcard</h3>
                                    <div class="nk-block-des text-soft">
                                        <p><?php echo "You have total $simcardCount simcards."; ?></p>
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
                                                    <input type="text" class="form-control" name="search_android_simcard" value="<?php if(!empty($sessionAndroidSimcard)){ echo $sessionAndroidSimcard; } ?>" placeholder="Search by" autocomplete="off">
                                                </div>
                                                <input type="submit" class="btn btn-sm btn-info d-none" name="submit_search" value="Filter">
                                                <input type="submit" class="btn btn-sm btn-secondary d-none" name="reset_search" value="Reset">
                                            </form>
                                        </li>
                                        <li>
                                            <select class="form-control" id="search-type" name="search_android_simcard_type" data-placeholder="Select a type">
                                                <?php $str='';
                                                    if(!empty($sessionAndroidSimcardType == 'all')){
                                                        $str.='selected';
                                                } ?> <option value="all"<?php echo $str; ?>>All</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidSimcardType == 'prepaid')){
                                                        $str.='selected';
                                                } ?> <option value="prepaid"<?php echo $str; ?>>Prepaid</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidSimcardType == 'postpaid')){
                                                        $str.='selected';
                                                } ?> <option value="postpaid"<?php echo $str; ?>>Postpaid</option>
                                            </select>   
                                        </li>
                                        <li>
                                            <select class="form-control" id="search-status" name="search_android_simcard_status" data-placeholder="Select a status">
                                                <?php $str='';
                                                    if(!empty($sessionAndroidSimcardStatus == 'all')){
                                                        $str.='selected';
                                                } ?> <option value="all"<?php echo $str; ?>>All</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidSimcardStatus == 'active')){
                                                        $str.='selected';
                                                } ?> <option value="active"<?php echo $str; ?>>Active</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidSimcardStatus == 'deactivate')){
                                                        $str.='selected';
                                                } ?> <option value="deactivate"<?php echo $str; ?>>Deactivate</option>
                                            </select>   
                                        </li>
                                        <li class="nk-block-tools-opt"><a href="<?php echo base_url('new-simcard');?>" class="btn btn-primary"><em class="icon ni ni-plus"></em></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <table class="table table-tranx">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="nk-tb-col" width="10%"><span>ID</span></th>
                                        <th class="nk-tb-col" width="20%"><span>Owner</span></th>
                                        <th class="nk-tb-col" width="18%"><span>Operator</span></th>
                                        <th class="nk-tb-col" width="10%"><span>Number</span></th>
                                        <th class="nk-tb-col" width="17%"><span>Imei</span></th>
                                        <th class="nk-tb-col" width="10%"><span>Type</span></th>
                                        <th class="nk-tb-col" width="10%"><span>Status</span></th>
                                        <th class="nk-tb-col" width="5%"><span>Action</span></th>
                                    </tr>
                                </thead>
                                <?php if(!empty($viewSimcard)){ ?>
                                    <tbody>
                                        <?php foreach($viewSimcard as $data){ ?>
                                            <tr class="tb-tnx-item">
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['sim_id']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['sim_owner']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['sim_operator']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['sim_number']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['sim_imei']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php 
                                                    $simType = '';
                                                    if($data['sim_type'] == 'prepaid'){
                                                        $simType.= '<span class="badge badge-dot badge-primary">Prepaid</span>';
                                                    } else if($data['sim_type'] == 'postpaid'){
                                                        $simType.= '<span class="badge badge-dot badge-info">Postpaid</span>';
                                                    } 
                                                    echo $simType; 
                                                ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php 
                                                    $simStatus = '';
                                                    if($data['sim_status'] == 'active'){
                                                        $simStatus.= '<span class="badge badge-dot badge-success">Active</span>';
                                                    } else if($data['sim_status'] == 'deactivate'){
                                                        $simStatus.= '<span class="badge badge-dot badge-danger">Deactivate</span>';
                                                    } 
                                                    echo $simStatus; 
                                                ?></span></td>
                                                <td class="tb-tnx-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a data-toggle="modal" data-target="#modalZoom<?php echo urlEncodes($data['sim_id']);?>">Quick View</a></li>
                                                                <li><a href="<?php echo base_url('edit-simcard/'.urlEncodes($data['sim_id']));?>">Edit</a></li>
                                                                <li><a data-toggle="modal" data-target="#deleteModal<?php echo urlEncodes($data['sim_id']);?>">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <div class="modal fade zoom" tabindex="-1" id="modalZoom<?php echo urlEncodes($data['sim_id']);?>">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"><?php echo $data['sim_id'];?></h5>
                                                            <a href="<?= !empty(session()->get('session_android_simcard_view_previous_url')) ? session()->get('session_android_simcard_view_previous_url') : base_url('view-simcard'); ?>" class="close" data-dismiss="modal" aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><?php echo $data['sim_note'];?></p>
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                            <span class="sub-text"><?php echo $data['sim_status'];?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" tabindex="-1" id="deleteModal<?php echo urlEncodes($data['sim_id']);?>">
                                                <div class="modal-dialog modal-dialog-top" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Simcard</h5>
                                                            <a href="<?= !empty(session()->get('session_android_simcard_view_previous_url')) ? session()->get('session_android_simcard_view_previous_url') : base_url('view-simcard'); ?>" class="close" data-dismiss="modal" aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete <?php echo $data['sim_owner']; ?>?</p>
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                            <span class="sub-text"><a href="<?php echo base_url('delete-simcard/'.urlEncodes($data['sim_id']));?>" class="btn btn-sm btn-danger">Delete</a></span>
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
    document.getElementById('search-type').addEventListener('change', function() {
        var selectedType = this.value;
        $.ajax({
            url: '<?= base_url('view-simcard'); ?>',
            type: 'POST',
            data: { search_android_simcard_type: selectedType },
            success: function() {
                location.reload();
            }
        });
    });
</script>

<script>
    document.getElementById('search-status').addEventListener('change', function() {
        var selectedStatus = this.value;
        $.ajax({
            url: '<?= base_url('view-simcard'); ?>',
            type: 'POST',
            data: { search_android_simcard_status: selectedStatus },
            success: function() {
                location.reload();
            }
        });
    });
</script>