<body class="page-login">
    <main class="page-content">
        <div class="page-inner">
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-3 center">
                        <div class="login-box">
                            <a href="index.html" class="logo-name text-lg text-center"><img src="<?php echo base_url(DIR_FRONTEND_IMG) . "/page/logo.png" ?>" width="150px"></a>
                            <p class="text-center m-t-md"><?php echo lang("index_insession_text1") ?></p>

                            <?php
                            $attributes = array('class' => 'form-horizontal', 'id' => 'frmin');
                            echo form_open('exec-in', $attributes);
                            ?>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="email" name="_e" id="_e" class="form-control" placeholder="<?php echo lang("index_insession_text2") ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="password" name="_p" id="_p" class="form-control" placeholder="<?php echo lang("index_insession_text3") ?>" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-rounded btn-block"><?php echo lang("index_insession_text4") ?></button>
                            <a href="javascript: void(0)" data-toggle="modal" data-target=".bs-example-modal-sm" class="display-block text-center m-t-md text-sm"><?php echo lang("index_insession_text5") ?></a>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="<?php echo base_url('getrefer') ?>" id="b" class="btn btn-default btn-addon btn-rounded btn-block m-t-md"><i class="fa fa-user-plus"></i> <?php echo lang("index_insession_text7") ?></a>
                                </div>
                                <div class="col-sm-12">
                                    <a href="<?php echo base_url('mayday-email') ?>" id="b" class="btn btn-default btn-addon btn-rounded btn-block m-t-md"><i class="fa fa-envelope"></i> <?php echo lang("index_insession_text8") ?></a>
                                </div>
                            </div>
                            </form>
                            <p class="text-center m-t-xs text-sm"><?php echo date("Y") ?> &copy; <?php echo META_AUTHOR ?>.</p>
                        </div>
                        <div id="m"></div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->

            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="md-forgot">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="mySmallModalLabel"><i class="fa fa-lock"></i> <?php echo lang("index_modal_forgot_pass_title") ?></h4>
                        </div>
                        <div class="modal-body">
                            <?php echo lang("index_modal_forgot_pass_text") ?>
                        </div>
                        <div class="modal-body">
                            <?php
                            $attributes = array('class' => 'form-horizontal', 'id' => 'frmp');
                            echo form_open('exec-forgot-p', $attributes);
                            ?>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="_idn" id="_idn" class="form-control text-right" placeholder="<?php echo lang("index_modal_forgot_pass_input_text") ?>" required>
                                </div>
                            </div>
                            <div class="ms"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="b-close"><?php echo lang("index_modal_forgot_pass_button_close") ?></button>
                            <button type="submit" class="btn btn-success"><?php echo lang("index_modal_forgot_pass_button_send") ?></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- Page Inner -->
    </main><!-- Page Content -->


    <script>
        $(function () {
  
            $("#md-forgot").modal({
                backdrop: 'static',
                show: false
            });

            $("#b-close").click(function () {
                $("#_idn").empty().val("");
            });

            var frmin = $("#frmin");
            var frmp = $("#frmp");

            frmin.validate({
                rules: {
                    _e: {
                        required: true,
                        email: true
                    },
                    _p: {
                        required: true
                    }
                },
                messages: {
                    _e: {
                        required: "<?php echo lang("index_msg_validation_input_1") ?>",
                        email: "<?php echo lang("index_msg_validation_input_2") ?>"
                    },
                    _p: {
                        required: "<?php echo lang("index_msg_validation_input_1") ?>"
                    }
                }
                , submitHandler: function () {
                    $.ajax({type: frmin.attr('method'), url: frmin.attr('action'), data: frmin.serialize(),
                        beforeSend: function ()
                        {
                            $("#m").empty().append("<div class='text-center'><img src='<?php echo base_url(DIR_FRONTEND_IMG) ?>/page/373.gif' width='40px'></div>");
                        },
                        statusCode: {
                            404: function () {
                                $("#m").empty().append('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <?php echo lang("index_error_404_500") ?></div></div>');
                                setTimeout(function () {
                                    $("#m").empty();
                                }, 4000);
                            },
                            500: function () {
                                $("#m").empty().append('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <?php echo lang("index_error_404_500") ?></div></div>');
                                setTimeout(function () {
                                    $("#m").empty();
                                }, 4000);
                            }
                        },
                        success: function (datos) {
                            if (datos == 'done') {
                            }
                            else {
                            }
                        }});
                }
            });

            $(".ms").empty();

            frmp.validate({
                rules: {
                    _idn: {
                        required: true
                    }
                },
                messages: {
                    _idn: {
                        required: "<?php echo lang("index_msg_validation_input_1") ?>"
                    }
                }
                , submitHandler: function () {
                    $.ajax({
                        type: frmp.attr('method'),
                        url: frmp.attr('action'),
                        data: frmp.serialize(),
                        beforeSend: function ()
                        {
                            $(".ms").empty().append("<div class='text-center'><img src='<?php echo base_url(DIR_FRONTEND_IMG) ?>/page/373.gif' width='40px'></div>");
                        },
                        statusCode: {
                            404: function () {
                                $(".ms").empty().append('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <?php echo lang("index_error_404_500") ?></div></div>');
                                setTimeout(function () {
                                    $(".ms").empty();
                                }, 4000);
                            },
                            500: function () {
                                $(".ms").empty().append('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <?php echo lang("index_error_404_500") ?></div></div>');
                                setTimeout(function () {
                                    $(".ms").empty();
                                }, 4000);
                            }
                        },
                        success: function (res) {
                            if (res === 'done') {
                                $("#_idn").empty().val('');
                                $(".ms").empty().append('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <?php echo lang("index_modal_forgot_pass_text_email_send") ?> </p> <p> <button type="button" class="btn btn-danger btn-addon m-b-sm btn-rounded btn-sm"><i class="fa fa-life-saver"></i> <?php echo lang("index_modal_forgot_pass_button_email") ?></button></p> </div>');
                            }
                            else if (res === 'resend') {
                                $("#_idn").empty().val('');
                                $(".ms").empty().append('<div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <?php echo lang("index_modal_forgot_pass_resend") ?> </p> <p> <button type="button" class="btn btn-danger btn-addon m-b-sm btn-rounded btn-sm"><i class="fa fa-life-saver"></i> <?php echo lang("index_modal_forgot_pass_button_email") ?></button></p> </div>');
                            }
                            else {
                                $("#_idn").empty().val('');
                                $(".ms").empty().append('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + res + '</div></div>');
                            }
                        }});
                }
            });
        });
    </script>