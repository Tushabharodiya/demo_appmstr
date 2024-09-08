<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-between g-3">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Banner</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>New Banner</p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <a href="<?= !empty(session()->get('session_android_banner_view_previous_url')) ? session()->get('session_android_banner_view_previous_url') : base_url('view-banner'); ?>" class="btn btn-outline-light bg-white d-block d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form action="" method="post" class="form-validate is-alter" enctype="multipart/form-data">
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="banner_title">Banner Title *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="banner_title" placeholder="Enter banner title" required>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label class="form-label" for="banner_description">Banner Description *</label> 
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="banner_description" placeholder="Enter banner description" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="form-label" for="banner_image">Banner Image *</label>
                                                <div class="form-control-wrap">
                                                    <div class="custom-file">
                                                        <input type="file" class="form-control custom-file-input" id="file-uploader" name="banner_image" required>
                                                        <label class="custom-file-label" for="banner_image">Choose file</label>
                                                        <div id="feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="banner_url">Banner Url *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="banner_url" placeholder="Enter banner url" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="banner_button">Banner Button *</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="banner_button" placeholder="Enter banner button" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="banner_type">Banner Type *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="banner_type" data-placeholder="Select a type" required>
                                                        <option value="image">Image</option>
                                                        <option value="text">Text</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="banner_status">Banner Status *</label>
                                                <div class="form-control-wrap ">
                                                    <select class="form-control form-select" name="banner_status" data-placeholder="Select a status" required>
                                                        <option value="true">True</option>
                                                        <option value="false">False</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md btn-primary" id="submit-button" >Save Informations</button>
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

<script>
    const fileUploader = document.getElementById('file-uploader');
    const feedback = document.getElementById('feedback');
    const submitButton = document.getElementById('submit-button');

    fileUploader.addEventListener('change', (event) => {
        const file = event.target.files[0];
    
        if (file) {
            const img = new Image();
            img.src = URL.createObjectURL(file);
    
            img.onload = function () {
                const width = this.width;
                const height = this.height;
    
                let msg = '';
    
                if (width === 720 && height === 280) {
                    msg = `<span style="color:green;">The image size is 720x280. </span>`;
                    submitButton.style.display = 'block'; 
                } else {
                    msg = `<span style="color:red;">The image size should be 720x280. Actual size is ${width}x${height}. </span>`;
                    submitButton.style.display = 'none'; 
                }
    
                feedback.innerHTML = msg;
            };
        }
    });
</script>