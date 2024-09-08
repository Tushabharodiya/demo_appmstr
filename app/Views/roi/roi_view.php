<?php
    $uri = service('uri');
    $dataID = $uri->getSegment(2);
    
    $sessionAndroidRoi = session()->get('session_android_roi');
    $sessionAndroidRoiStatus = session()->get('session_android_roi_status');
    $sessionAndroidRoiStartDate = session()->get('session_android_roi_start_date');
    $sessionAndroidRoiEndDate = session()->get('session_android_roi_end_date');
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
                                    <h3 class="nk-block-title page-title">App Roi</h3>
                                    <div class="nk-block-des text-soft">
                                        <p><?php echo "You have total $roiCount app rois."; ?></p>
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
                                                    <input type="text" class="form-control" name="search_android_roi" value="<?php if(!empty($sessionAndroidRoi)){ echo $sessionAndroidRoi; } ?>" placeholder="Search by" autocomplete="off">
                                                </div>
                                                <input type="submit" class="btn btn-sm btn-info d-none" name="submit_search" value="Filter">
                                                <input type="submit" class="btn btn-sm btn-secondary d-none" name="reset_search" value="Reset">
                                            </form>
                                        </li>
                                        <li>
                                            <select class="form-control" id="search-status" name="search_android_roi_status" data-id="<?php echo $dataID;?>" data-placeholder="Select a status">
                                                <?php $str='';
                                                    if(!empty($sessionAndroidRoiStatus == 'all')){
                                                        $str.='selected';
                                                } ?> <option value="all"<?php echo $str; ?>>All</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidRoiStatus == 'true')){
                                                        $str.='selected';
                                                } ?> <option value="true"<?php echo $str; ?>>True</option>
                                                <?php $str='';
                                                    if(!empty($sessionAndroidRoiStatus == 'false')){
                                                        $str.='selected';
                                                } ?> <option value="false"<?php echo $str; ?>>False</option>
                                            </select>   
                                        </li>
                                        <li>
                                            <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                                <div class="dropdown">
                                                    <a href="<?= !empty(session()->get('session_android_roi_view_previous_url')) ? session()->get('session_android_roi_view_previous_url') : base_url('view-roi/'.$dataID); ?>" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown">
                                                        <em class="icon ni ni-filter-alt"></em>
                                                    </a>
                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                                        <div class="dropdown-head">
                                                            <span class="sub-title dropdown-title">Filter Roi</span>
                                                        </div>
                                                        <div class="dropdown-body dropdown-body-rg">
                                                            <div class="row gx-6 gy-3">
                                                                <div class="col-6"> 
                                                                    <div class="form-group">
                                                                        <label class="overline-title overline-title-alt">Start Date *</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control date-picker" name="search_android_roi_start_date" value="<?php if(!empty($sessionAndroidRoiStartDate)){ echo $sessionAndroidRoiStartDate; } ?>"placeholder="Enter start date" autocomplete="off" data-date-format="yyyy-mm-dd" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="overline-title overline-title-alt">End Date *</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control date-picker" name="search_android_roi_end_date" value="<?php if(!empty($sessionAndroidRoiEndDate)){ echo $sessionAndroidRoiEndDate; } ?>"placeholder="Enter end date" autocomplete="off" data-date-format="yyyy-mm-dd" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <input type="submit" class="btn btn-sm btn-info" name="submit_filter" value="Filter">
                                                                        <input type="submit" class="btn btn-sm btn-secondary" name="reset_filter" value="Reset">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </li>
                                        <li class="nk-block-tools-opt"><a href="<?php echo base_url('more-roi/'.urlEncodes($appID));?>" class="btn btn-white btn-dim btn-outline-light"><em class="icon ni ni-eye"></em><span>More Roi</span></a></li>
                                        <li class="nk-block-tools-opt"><a href="<?php echo base_url('new-roi/'.urlEncodes($appID));?>" class="btn btn-primary"><em class="icon ni ni-plus"></em></a></li>
                                        <li>
                                            <a href="<?= !empty(session()->get('session_android_application_previous_url')) ? session()->get('session_android_application_previous_url') : base_url('info-app/'.urlEncodes($appID)); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered card-preview">
                            <table class="table table-tranx">
                                <thead>
                                    <tr class="tb-tnx-head">
                                        <th class="nk-tb-col" width="10%"><span>ID</span></th>
                                        <th class="nk-tb-col" width="20%"><span>Date</span></th>
                                        <th class="nk-tb-col" width="16%"><span>Invest (<?php echo $totalIn;?>)</span></th>
                                        <th class="nk-tb-col" width="16%"><span>Income (<?php echo $totalOut;?>)</span></th>
                                        <th class="nk-tb-col" width="16%"><span>Margin (<?php echo $totalProfit;?>)</span></th>
                                        <th class="nk-tb-col" width="16%"><span>ROI (<?php echo $totalRoi . '%';?>)</span></th>
                                        <th class="nk-tb-col" width="6%"><span>Action</span></th>
                                    </tr>
                                </thead>
                                <?php if(!empty($viewRoi)){ ?>
                                    <tbody>
                                        <?php foreach($viewRoi as $data){ ?>
                                            <tr class="tb-tnx-item">
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['data_id']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['app_date']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['app_in']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['app_out']; ?></span></td>
                                                <td class="nk-tb-col"><span class="sub-text"><?php echo $data['app_margin']; ?></span></td>
                                                <td class="nk-tb-col"><?php if($data['app_roi'] > 40){ ?>
                                                        <span class="sub-text text-success"><?php echo $data['app_roi'];?></span>
                                                    <?php } else { ?>
                                                        <span class="sub-text text-danger"><?php echo $data['app_roi'];?></span>
                                                    <?php } ?>
                                                </td>
                                                <td class="tb-tnx-action">
                                                    <div class="dropdown">
                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                            <ul class="link-list-plain">
                                                                <li><a href="<?php echo base_url('edit-roi/'.urlEncodes($data['data_id']));?>">Edit</a></li>
                                                                <li><a data-toggle="modal" data-target="#deleteModal<?php echo urlEncodes($data['data_id']);?>">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <div class="modal fade" tabindex="-1" id="deleteModal<?php echo urlEncodes($data['data_id']);?>">
                                                <div class="modal-dialog modal-dialog-top" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Roi</h5>
                                                            <a href="<?= !empty(session()->get('session_android_roi_view_previous_url')) ? session()->get('session_android_roi_view_previous_url') : base_url('view-roi/'.$dataID); ?>" class="close" data-dismiss="modal" aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this roi?</p>
                                                        </div>
                                                        <div class="modal-footer bg-light">
                                                            <span class="sub-text"><a href="<?php echo base_url('delete-roi/'.urlEncodes($data['data_id']));?>" class="btn btn-sm btn-danger">Delete</a></span>
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
        var dataID = $(this).data('id');
        $.ajax({
            url: '<?= base_url('view-roi'); ?>/' + dataID,
            type: 'POST',
            data: { search_android_roi_status: selectedStatus },
            success: function() {
                location.reload();
            }
        });
    });
</script>