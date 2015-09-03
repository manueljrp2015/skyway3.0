
<body class="page-header-fixed">
    <script type="text/javascript" src="<?php echo base_url(DIR_FRONTEND_TERCEROS) . "/img-liquid/imgLiquid-min.js" ?>"></script>
    <main class="page-content">
        <div class="page-inner">
            <div id="main-wrapper">
                <?php
                foreach ($info as $inf):
                    ?>
                    <div class="col-md-6 center">
                        <div class="panel panel-white">

                            <div class="panel-body">
                                <div class="weather-widget">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="weather-top">
                                                <div class="weather-current pull-left">
                                                    <h1><?php echo $inf->nomb ?></h1>
                                                </div>
                                                <h2 class="weather-day pull-right"><?php echo $inf->login ?><br><small><b><?php echo $inf->email ?></b></small></h2>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <?php
                                            if (!$inf->img)
                                            {
                                                $img = base_url(DIR_FRONTEND_IMG) . "/page/avatar.jpg";
                                            }
                                            else
                                            {
                                                $img = base_url(DIR_FRONTEND_IMG) . "/profile/" . $inf->id . "/" . $inf->img;
                                            }
                                            ?>
                                            <center>
                                                <div class="imgLiquidFill" style="width:auto; height:300px; background-color:#E6E6E6;">
                                                    <img class="img-responsive" width="300px"  src="<?php echo $img ?>" alt="img"/>
                                                </div>
                                            </center>
                                        </div>

                                        <div class="col-md-12 ">
                                            <center>
                                                <ul class="list-unstyled weather-days row">
                                                    <li class="col-xs-4 col-sm-3"><span><?php echo lang("referrals_friends") ?></span><i class="wi wi-day-cloudy"></i><span><?php echo $inf->friends ?></span></li>
                                                    <li class="col-xs-4 col-sm-3"><span><?php echo lang("referrals_skycoins") ?></span><i class="wi wi-day-cloudy"></i><span><?php echo ($inf->coins === NULL) ? 0 : $inf->coins ?></span></li>
                                                    <li class="col-xs-4 col-sm-3"><span><?php echo lang("referrals_follower") ?></span><i class="wi wi-day-cloudy"></i><span><?php echo $inf->followers ?></span></li>
                                                    <li class="col-xs-4 col-sm-3"><span><?php echo lang("referrals_releases") ?></span><i class="wi wi-day-cloudy"></i><span><?php echo $inf->releases ?></span></li>
                                                </ul>
                                            </center>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <p></p>
                                            <p>
                                                <a href="<?php echo base_url("accept-referrals")."/?refer=".base64_encode($inf->id) ?>" class="btn btn-success btn-rounded"><?php echo lang("referrals_botton_referral_info") ?></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
                <p class="text-center m-t-xs text-sm"><?php echo date("Y") ?> &copy; <?php echo META_AUTHOR ?>.</p>
            </div>
        </div>
    </main>
    <script>
        $(function () {
            $(".imgLiquidFill").imgLiquid({fill: true, horizontalAlign: 'center', verticalAlign: 'center'});
        });
    </script>