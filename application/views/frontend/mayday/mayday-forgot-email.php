
<body class="page-login">
    <main class="page-content">
        <div class="page-inner">
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-8 center">
                        <center>
                            <i class="fa fa-support fa-5x "></i>
                        </center>
                        <h2><?php echo lang("mayday_title_page") ?></h2>
                        <h3><?php echo lang("mayday_subtitle_page") ?></h3>
                    </div>
                    <br>
                    <div class="col-md-4 center">
                        <div class="login-box">

                            <?php
                            $attributes = array('class' => 'form-horizontal', 'id' => 'frmmay');
                            echo form_open('mayday-exec', $attributes);
                            ?>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="text" name="_i" id="_i" class="form-control" placeholder="<?php echo lang("mayday_input_id") ?>" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="_a" id="_a" class="form-control" placeholder="<?php echo lang("mayday_input_nick") ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="text" name="_pn" id="_pn" class="form-control" placeholder="<?php echo lang("mayday_input_name") ?>" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="_sn" id="_sn" class="form-control" placeholder="<?php echo lang("mayday_input_lastname") ?>" required>
                                </div>
                                <div class="col-sm-12">
                                    <p class="help-block text-danger"><?php echo lang("mayday_help_block") ?></p>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-success btn-rounded btn-block"><?php echo lang("mayday_button_send") ?></button>
                            </form>
                            <p class="text-center m-t-xs text-sm"><?php echo date("Y") ?> &copy; <?php echo META_AUTHOR ?>.</p>
                        </div>
                        <div id="m"></div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->

            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="md-email">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="mySmallModalLabel"><i class="fa fa-envelope"></i> <?php echo lang("mayday_title_change_email") ?></h4>
                        </div>
                        <div class="modal-body">
                            <?php echo lang("mayday_content_change_email") ?>
                        </div>
                        <div class="modal-body">
                            <?php
                            $attributes = array('class' => 'form-horizontal', 'id' => 'frmchg');
                            echo form_open('exec-change-e', $attributes);
                            ?>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <p class="help-block"><?php echo lang("mayday_title_email_register") ?></p>
                                    <input type="text" name="_em" id="_em" class="form-control text-right"  readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="email" name="_new_em" id="_new_em" class="form-control text-right" placeholder="<?php echo lang("mayday_input_new_eamil") ?>" required>
                                </div>
                            </div>
                            <div class="ms"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="b-close"><?php echo lang("index_modal_forgot_pass_button_close") ?></button>
                            <button type="submit" class="btn btn-success bb"><?php echo lang("mayday_button_send_new_email") ?></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- Page Inner -->
    </main><!-- Page Content -->
    <script src="<?php echo base_url(DIR_FRONTEND_TERCEROS) . "/phpjs/unserialize.js" ?>" type="text/javascript"></script>
    <script type="text/javascript">
	$(function () {

	    $("#md-email").modal({
		backdrop: 'static',
		show: false
	    });

	    var frmmay = $("#frmmay");
	    var frmchg = $("#frmchg");


	    frmmay.validate({
		rules: {
		    _i: {
			required: true
		    },
		    _a: {
			required: true
		    },
		    _pn: {
			required: true
		    },
		    _sn: {
			required: true
		    }
		},
		messages: {
		    _i: {
			required: "<?php echo lang("index_msg_validation_input_1") ?>"
		    },
		    _a: {
			required: "<?php echo lang("index_msg_validation_input_1") ?>"
		    },
		    _pn: {
			required: "<?php echo lang("index_msg_validation_input_1") ?>"
		    },
		    _sn: {
			required: "<?php echo lang("index_msg_validation_input_1") ?>"
		    }
		}
		, submitHandler: function () {
		    $.ajax({type: frmmay.attr('method'), url: frmmay.attr('action'), data: frmmay.serialize(),
			beforeSend: function () {
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
			success: function (resp) {
			    var uns = unserialize(resp);
			    if (uns[1] == 1) {
				$("#m").empty();
				$("#md-email").modal('show');
				$("#_em").empty().val(uns[0]);
			    }
			    else {
				$("#m").empty().append('<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp + '</div></div>');
				setTimeout(function () {
				    $("#m").empty();
				}, 8000);
			    }
			}});
		}
	    });

	    frmchg.validate({
		rules: {
		    _em: {
			required: true
		    },
		    __new_em: {
			required: true,
			email: true
		    }
		},
		messages: {
		    _em: {
			required: "<?php echo lang("index_msg_validation_input_1") ?>"
		    },
		    _new_em: {
			required: "<?php echo lang("index_msg_validation_input_1") ?>",
			email: "<?php echo lang("index_msg_validation_input_2") ?>"
		    }
		}
		, submitHandler: function () {
		    $.ajax({type: frmchg.attr('method'), url: frmchg.attr('action'), data: frmchg.serialize(),
			beforeSend: function () {
                            $(".bb").attr("disabled","disabled");
			    $(".ms").empty().append("<div class='text-center'><img src='<?php echo base_url(DIR_FRONTEND_IMG) ?>/page/373.gif' width='40px'></div>");
			},
			statusCode: {
			    404: function () {
                                $(".bb").removeAttr("disabled");
				$(".ms").empty().append('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <?php echo lang("index_error_404_500") ?></div></div>');
				setTimeout(function () {
				    $("#m").empty();
				}, 4000);
			    },
			    500: function () {
                                $(".bb").removeAttr("disabled");
				$(".ms").empty().append('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <?php echo lang("index_error_404_500") ?></div></div>');
				setTimeout(function () {
				    $("#m").empty();
				}, 4000);
			    }
			},
			success: function (resp) {
			    
			    if (resp == "done") {
                                $(".ms").empty().append('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo lang("index_email_msg_change_email_send") ?></div></div>');
				setTimeout(function () {
				    $(".ms").empty();
                                    window.location.href="<?php echo base_url("in") ?>";
				}, 8000);
			    }
			    else {
                                $(".bb").removeAttr("disabled");
				$(".ms").empty().append('<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp + '</div></div>');
				setTimeout(function () {
				    $(".ms").empty();
				}, 8000);
			    }
			}});
		}
	    });
	});
    </script>

