<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xxl wide-xxl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="row gy-gs">
                        <div class="col-md-4 col-lg-3">
                            <div class="nk-wg-card card card-bordered h-100">
                                <div class="card-inner h-100">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Current Week</h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount ui-v2 fs-0"><?php echo isset($current_week_time) ? $current_week_time : 0; ?></div>
                                            <ul class="nk-iv-wg2-list">
                                                <li>
                                                    <span class="item-label">Invest</span>
                                                    <span class="item-value"><?php echo isset($current_week_in) ? $current_week_in : 0; ?></span>
                                                </li>
                                                <li>
                                                    <span class="item-label">Income</span>
                                                    <span class="item-value"><?php echo isset($current_week_out) ? $current_week_out : 0; ?></span>
                                                </li>
                                                <li>
                                                    <span class="item-label">Profit</span>
                                                    <span class="item-value"><?php echo isset($current_week_profit) ? $current_week_profit : 0; ?></span>
                                                </li>
                                                <li class="total">
                                                    <span class="item-label">Average</span>
                                                    <span class="item-value"><?php echo isset($current_week_roi) ? $current_week_roi . '%' : '0%'; ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="nk-wg-card card card-bordered h-100">
                                <div class="card-inner h-100">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Last Week</h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount ui-v2 fs-0"><?php echo isset($last_week_time) ? $last_week_time : 0; ?></div>
                                            <ul class="nk-iv-wg2-list">
                                                <li>
                                                    <span class="item-label">Invest</span>
                                                    <span class="item-value"><?php echo isset($last_week_in) ? $last_week_in : 0; ?></span>
                                                </li>
                                                <li>
                                                    <span class="item-label">Income</span>
                                                    <span class="item-value"><?php echo isset($last_week_out) ? $last_week_out : 0; ?></span>
                                                </li>
                                                <li>
                                                    <span class="item-label">Profit</span>
                                                    <span class="item-value"><?php echo isset($last_week_profit) ? $last_week_profit : 0; ?></span>
                                                </li>
                                                <li class="total">
                                                    <span class="item-label">Average</span>
                                                    <span class="item-value"><?php echo isset($last_week_roi) ? $last_week_roi . '%' : '0%'; ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="nk-wg-card card card-bordered h-100">
                                <div class="card-inner h-100">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Current Month</h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount ui-v2 fs-0"><?php echo isset($current_month_time) ? $current_month_time : 0; ?></div>
                                            <ul class="nk-iv-wg2-list">
                                                <li>
                                                    <span class="item-label">Invest</span>
                                                    <span class="item-value"><?php echo isset($current_month_in) ? $current_month_in : 0; ?></span>
                                                </li>
                                                <li>
                                                    <span class="item-label">Income</span>
                                                    <span class="item-value"><?php echo isset($current_month_out) ? $current_month_out : 0; ?></span>
                                                </li>
                                                <li>
                                                    <span class="item-label">Profit</span>
                                                    <span class="item-value"><?php echo isset($current_month_profit) ? $current_month_profit : 0; ?></span>
                                                </li>
                                                <li class="total">
                                                    <span class="item-label">Average</span>
                                                    <span class="item-value"><?php echo isset($current_month_roi) ? $current_month_roi . '%' : '0%'; ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="nk-wg-card card card-bordered h-100">
                                <div class="card-inner h-100">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Last Month</h6>
                                        </div>
                                        <div class="nk-iv-wg2-text">
                                            <div class="nk-iv-wg2-amount ui-v2 fs-0"><?php echo isset($last_month_time) ? $last_month_time : 0; ?></div>
                                            <ul class="nk-iv-wg2-list">
                                                <li>
                                                    <span class="item-label">Invest</span>
                                                    <span class="item-value"><?php echo isset($last_month_in) ? $last_month_in : 0; ?></span>
                                                </li>
                                                <li>
                                                    <span class="item-label">Income</span>
                                                    <span class="item-value"><?php echo isset($last_month_out) ? $last_month_out : 0; ?></span>
                                                </li>
                                                <li>
                                                    <span class="item-label">Profit</span>
                                                    <span class="item-value"><?php echo isset($last_month_profit) ? $last_month_profit : 0; ?></span>
                                                </li>
                                                <li class="total">
                                                    <span class="item-label">Average</span>
                                                    <span class="item-value"><?php echo isset($last_month_roi) ? $last_month_roi . '%' : '0%'; ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="row gy-gs">
                        <div class="col-md-12 col-lg-4">
                            <div class="nk-wg-card card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Applications</h6>
                                        </div>
                                        <ul class="nk-iv-wg2-list">
                                            <li class="total">
                                                <span class="item-label"><?php if($developmentAppCount != null){ echo $developmentAppCount ?> <?php } else { ?> 0 <?php } ?> - Development / <?php if($publishAppCount != null){ echo $publishAppCount ?> <?php } else { ?> 0 <?php } ?> - Published</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="nk-wg-card card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Versions</h6>
                                        </div>
                                        <ul class="nk-iv-wg2-list">
                                            <li class="total">
                                                <span class="item-label"><?php if($versionCount != null){ echo $versionCount ?> <?php } else { ?> 0 <?php } ?> - Versions</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="nk-wg-card card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Banners</h6>
                                        </div>
                                        <ul class="nk-iv-wg2-list">
                                            <li class="total">
                                                <span class="item-label"><?php if($bannerCount != null){ echo $bannerCount ?> <?php } else { ?> 0 <?php } ?> - Banners</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="nk-wg-card card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Developers</h6>
                                        </div>
                                        <ul class="nk-iv-wg2-list">
                                            <li class="total">
                                                <span class="item-label"><?php if($liveDeveloperCount != null){ echo $liveDeveloperCount ?> <?php } else { ?> 0 <?php } ?> - Live / <?php if($suspendedDeveloperCount != null){ echo $suspendedDeveloperCount ?> <?php } else { ?> 0 <?php } ?> - Suspended</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="nk-wg-card card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Gmails</h6>
                                        </div>
                                        <ul class="nk-iv-wg2-list">
                                            <li class="total">
                                                <span class="item-label"><?php if($gmailStatusCount != null){ echo $gmailStatusCount ?> <?php } else { ?> 0 <?php } ?> - Gmails</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="nk-wg-card card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-iv-wg2">
                                        <div class="nk-iv-wg2-title">
                                            <h6 class="title">Facebooks</h6>
                                        </div>
                                        <ul class="nk-iv-wg2-list">
                                            <li class="total">
                                                <span class="item-label"><?php if($facebookStatusCount != null){ echo $facebookStatusCount ?> <?php } else { ?> 0 <?php } ?> - Facebooks</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-12">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title"><span class="mr-2">Lifetime Profitable</span> <a role="link" aria-disabled="true" class="link d-none d-sm-inline tb-sub text-primary">Top Profitable android application</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner p-0 border-top">
                                    <div class="nk-tb-list nk-tb-orders">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>#</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Code</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span>Package</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Expense</span></div>
                                            <div class="nk-tb-col"><span>Income</span></div>
                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">ROI</span></div>
                                            <div class="nk-tb-col"><span>&nbsp;</span></div>
                                        </div>
                                        <?php if(!empty($viewAllTopApps)){ ?>
                                            <?php foreach($viewAllTopApps as $data){ ?>
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <span class="tb-lead"><a href="<?php echo base_url('info-app/'.urlEncodes($data->app_id));?>"><?php echo $data->app_id;?></a></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <div class="user-card">
                                                            <div class="user-name">
                                                                <span class="tb-lead"><?php echo $data->app_code;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-sub"><?php echo $data->app_package;?></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span class="tb-sub text-primary"><?php echo $data->total_in;?></span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-sub tb-amount"><span><?php echo $data->total_out;?></span></span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-sub tb-amount"><span><?php echo round($data->total_roi);?></span></span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-action">
                                                        <div class="dropdown">
                                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                <ul class="link-list-plain">
                                                                    <li><a href="<?php echo base_url('info-app/'.urlEncodes($data->app_id));?>">Info App</a></li>
                                                                    <li><a href="<?php echo base_url('view-roi/'.urlEncodes($data->app_id));?>">View Roi</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-12">
                            <div class="card card-bordered card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title"><span class="mr-2">Lifetime Losses</span> <a role="link" aria-disabled="true" class="link d-none d-sm-inline tb-sub text-primary">Top Losses android application</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner p-0 border-top">
                                    <div class="nk-tb-list nk-tb-orders">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>#</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span>Code</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Package</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span>Expense</span></div>
                                            <div class="nk-tb-col"><span>Income</span></div>
                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">ROI</span></div>
                                            <div class="nk-tb-col"><span>&nbsp;</span></div>
                                        </div>
                                        <?php if(!empty($viewAllDownApps)){ ?>
                                            <?php foreach($viewAllDownApps as $data){ ?>
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col">
                                                        <span class="tb-lead"><a href="<?php echo base_url('info-app/'.urlEncodes($data->app_id));?>"><?php echo $data->app_id;?></a></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <div class="user-card">
                                                            <div class="user-name">
                                                                <span class="tb-lead"><?php echo $data->app_code;?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-sub"><?php echo $data->app_package;?></span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span class="tb-sub text-primary"><?php echo $data->total_in;?></span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-sub tb-amount"><span><?php echo $data->total_out;?></span></span>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <span class="tb-sub tb-amount"><span><?php echo round($data->total_roi);?></span></span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-action">
                                                        <div class="dropdown">
                                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                <ul class="link-list-plain">
                                                                    <li><a href="<?php echo base_url('info-app/'.urlEncodes($data->app_id));?>">Info App</a></li>
                                                                    <li><a href="<?php echo base_url('view-roi/'.urlEncodes($data->app_id));?>">View Roi</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-12">
                            <div class="card card-bordered h-100">
                                <div class="card-inner" style="height:500px;">
                                    <div class="card-title-group align-start mb-3">
                                        <div class="card-title">
                                            <h6 class="title">Android Roi & Margin Chart</h6>
                                            <p id="day_count_display"></p>
                                        </div>
                                        <div class="card-tools mt-n1 mr-n1">
                                            <div class="drodown">
                                                <a href="<?php echo base_url('dashboard'); ?>" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                    <div class="dropdown-body dropdown-body-rg">
                                                        <div class="row gx-6 gy-3">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="overline-title overline-title-alt">Start Date</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">
                                                                            <em class="icon ni ni-calendar-alt"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control date-picker" id="start_date" name="start_date" placeholder="Enter start date" data-date-format="yyyy-mm-dd" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="overline-title overline-title-alt">End Date</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">
                                                                            <em class="icon ni ni-calendar-alt"></em>
                                                                        </div>
                                                                        <input type="text" class="form-control date-picker" id="end_date" name="end_date" placeholder="Enter end date" data-date-format="yyyy-mm-dd" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-order-ovwg">
                                        <div class="row g-4 align-end">
                                            <div class="col-xxl-12">
                                                <div class="nk-order-ovwg-ck">
                                                    <div id="chart_area"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script type="text/javascript">

    google.charts.load('current', {packages:['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawMonthwiseChart);

    function load_monthwise_data(start_date, end_date, title){
        var temp_title = start_date + ' ' + title  + ' ' + end_date;
        $.ajax({
            url:"<?php echo base_url('dynamic-chart'); ?>",
            method:"POST",
            data:{start_date:start_date,end_date:end_date},
            dataType:"JSON",
            success:function(data)
            {
                drawMonthwiseChart(data, temp_title);
                
                var dayCount = calculateDayCount(data); 
                document.getElementById('day_count_display').innerHTML = 'In ' + dayCount + ' days roi and margin overview.';
            }
        })
    }
    
    function calculateDayCount(data) {
        var dayCount = 0;
        for (var i = 0; i < data.length; i++) {
            dayCount = parseFloat(data[i].day_count);
        }
        return dayCount;
    }
    
    function drawMonthwiseChart(chart_data, chart_main_title){
        var jsonData = chart_data;
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'App Id');
        data.addColumn('number', 'App Roi');
        data.addColumn('number', 'App Margin');
    
        $.each(jsonData, function(i, jsonData){
            var app_id = jsonData.app_id;
            var app_margin = parseFloat($.trim(jsonData.app_margin));
            var app_roi = parseFloat($.trim(jsonData.app_roi));
            data.addRows([[app_id,app_roi,app_margin]]);
        });
        
        var options = {
            title: chart_main_title,
            titleTextStyle: {
                color: '#8094ae',  // Set your desired color for the title here
                fontSize: 13,
                fontName: 'Roboto, sans-serif',
                italic: false,
                bold: true
            },
            colors: ['#8feac5', '#9cabff'],
            fontSize: 13,
            fontName: 'Roboto, sans-serif',
            animation: {
                startup: true,
                duration: 1000,
                easing: "inAndOut"
            },
            hAxis: {
                title: "App Code",
                titleTextStyle: {
                    fontName: 'Roboto, sans-serif',
                    fontSize: 13,
                    italic: false,
                    bold: false,
                    color: '#8094ae'
                },
                textStyle: {
                    color: '#8094ae', // x-axis text color
                    fontName: 'Roboto, sans-serif',
                    fontSize: 11
                }
            },
            vAxis: {
                textStyle: {
                    color: '#8094ae', // y-axis text color
                    fontName: 'Roboto, sans-serif',
                    fontSize: 11
                }
            },
            legend: {
                position: 'bottom',
                textStyle: {
                    fontSize: 13,
                    fontName: 'Roboto, sans-serif',
                    italic: false,
                    bold: false,
                    color: '#8094ae'
                }
            },
            chartArea: { width: '100%', height: '100%', left: 40, top: 30, right: 20, bottom: 100 }
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
        chart.draw(data, options);  
    }

    $(document).ready(function(){
        $('#start_date,#end_date').change(function(){
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val();
            if(start_date != '' && end_date != ''){
                load_monthwise_data(start_date,end_date,'To');
            }
        });
    });
</script>