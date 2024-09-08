<div class="nk-content nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="card card-bordered">
            <div class="card-inner">
                <div class="nk-block-content nk-error-ld text-center">
                    <img src="<?php echo base_url();?>public/images/nodata.webp" alt="error" height="200" width="200">
                    <?php if($msg['data_title'] != null){ ?>
                        <h4 class="nk-error-title"><?php echo $msg['data_title'];?></h4>
                    <?php } ?>
                    <?php if($msg['data_description'] != null){ ?>
                        <p class="nk-error-text"><?php echo $msg['data_description'];?>.</p>
                    <?php } ?>
                    <?php if($msg['button_text'] != null){ ?>
                        <a href="<?php echo base_url(); ?><?php echo $msg['button_link'];?>" class="btn btn-lg btn-primary mt-2"><?php echo $msg['button_text'];?></a>
                    <?php } ?> 
                </div>
            </div>
        </div>
    </div>
</div>
   