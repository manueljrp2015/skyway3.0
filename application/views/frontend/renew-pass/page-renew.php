<body class="page-login">
    <main class="page-content">
        <div class="page-inner">
            <div id="main-wrapper">  
                <div class="row">         
                    <div class="col-md-6 center">

                        <?php
                        if ($expire === "expire")
                        {
                            ?>
                            <br>
                            <br>
                            <center>
                                <i class="fa fa-hourglass-end fa-5x "></i>
                                <h2><?php echo lang("index_page_change_pass_msg_expire") ?></h2>
                                <a href="<?php echo base_url() ?>" class="btn btn-success btn-addon m-b-sm btn-rounded btn-sm"><i class="fa fa-arrow-left"></i> <?php echo lang("index_page_change_pass_button_back") ?></a>
                            </center>

                            <?php
                        }
                        else
                        {
                            ?>
                            <h2><?php echo lang("index_page_change_pass_hi") . $data_get[2] . lang("index_page_change_pass_msg") ?></h2>
                            <div class="login-box">

                                <p class="text-center m-t-md"><?php echo lang("index_page_change_pass_title") ?></p>
                                <?php
                                $attributes = array('class' => 'form-horizontal', 'id' => 'frmrenew');
                                echo form_open('exec-renew', $attributes);
                                ?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="password" name="_p" id="_p" class="form-control" placeholder="<?php echo lang("index_page_change_pass_input_1") ?>" required>
                                        <br>
                                        <p></p>
                                        <p class="help-block"><?php echo lang("index_page_change_pass_help_text") ?><button type="button" class="btn btn-success btn-rounded btn-xs gp"><i class="fa fa-key"></i> <?php echo lang("index_page_change_pass_button_gen") ?></button> <?php echo lang("index_page_change_pass_help_text2") ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="password" name="_rp" id="_rp" class="form-control" placeholder="<?php echo lang("index_page_change_pass_input_2") ?>" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block sub"><?php echo lang("index_page_change_pass_button_send") ?></button>
                                </form>


                            </div>
                            <div class="m"></div>
                            <?php
                        }
                        ?>
                        <p class="text-center m-t-xs text-sm"><?php echo date("Y") ?> &copy; <?php echo META_AUTHOR ?>.</p>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->

        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    <script type="text/javascript">
        $(function () {

            $(".gp").bind("click", function () {
                var x = Math.floor((Math.random() * 1000000000000) + 1);
                $("#_p, #_rp").empty().val(x);
            });

            $(".m").empty();
            var frmrenew = $("#frmrenew");

            frmrenew.validate({
                rules: {
                    _p: {
                        required: true,
                        minlength: 6
                    },
                    _rp: {
                        required: true,
                        equalTo: "#_p"
                    }
                },
                messages: {
                    _p: {
                        required: "<?php echo lang("index_msg_validation_input_1") ?>",
                        minlength: "<?php echo lang("index_msg_validation_input_4") ?>"
                    },
                    _rp: {
                        required: "<?php echo lang("index_msg_validation_input_1") ?>",
                        equalTo: "<?php echo lang("index_msg_validation_input_5") ?>"
                    }
                }
                , submitHandler: function () {
                    var str = "&_e=<?php echo base64_encode($data_get[0]) ?>" + "&_idn=<?php echo base64_encode($data_get[1]) ?>";
                    $.ajax({
                        type: frmrenew.attr('method'),
                        url: frmrenew.attr('action'),
                        data: frmrenew.serialize() + str,
                        beforeSend: function ()
                        {
                            $("#_p, #_rp").attr("readonly","readonly");
                            $(".sub").attr("disabled", "disabled");
                            $(".m").empty().append("<div class='text-center'><img src='<?php echo base_url(DIR_FRONTEND_IMG) ?>/page/373.gif' width='40px'></div>");
                        },
                        success: function (datos) {
                            if (datos == 'done') {
                                $(".m").empty().append('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <?php echo lang("index_page_change_pass_text_email_send") ?> </p>  </div>');
                                setTimeout(function(){
                                    window.location.href = "<?php echo base_url("in") ?>";
                                },8000);
                            }
                            else {
                            }
                        }});
                }
            });


        });
    </script>

