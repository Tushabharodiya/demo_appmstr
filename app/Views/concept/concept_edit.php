<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Concept</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Edit Concept</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?= !empty(session()->get('session_android_concept_view_previous_url')) ? session()->get('session_android_concept_view_previous_url') : base_url('view-concept'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="concept_name">Concept Name *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="concept_name" value="<?php echo $conceptData['concept_name'];?>" placeholder="Enter concept name" required>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="concept_status">Concept Status *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="concept_status" data-placeholder="Select a status" required>
                                                        <option value="publish"<?php echo ($conceptData['concept_status'] == 'publish') ? 'selected' : '' ?>>Publish</option>
                                                        <option value="unpublish"<?php echo ($conceptData['concept_status'] == 'unpublish') ? 'selected' : '' ?>>Unpublish</option>
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