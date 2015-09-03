<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            <div class="page-header">
                <h1>
                    <?php echo lang("index_top_user_admin") ?>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header widget-header-blue widget-header-flat">
                            <h4 class="widget-title lighter"><?php echo lang("index_create_user_admin") ?></h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div id="fuelux-wizard-container">
                                    <div>
                                        <ul class="steps">
                                            <li data-step="1" class="active">
                                                <span class="step">1</span>
                                                <span class="title"><?php echo lang("index_create_user_admin_info") ?></span>
                                            </li>

                                            <li data-step="2">
                                                <span class="step">2</span>
                                                <span class="title"><?php echo lang("index_create_user_admin_pwd") ?></span>
                                            </li>

                                            <li data-step="3">
                                                <span class="step">3</span>
                                                <span class="title"><?php echo lang("index_create_user_admin_nv") ?></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <hr />
                                                                     <div class="step-content pos-rel">
                                        <form class="form-horizontal show" id="validation-form" method="get">
                                            <div class="step-pane active" data-step="1">

                                                <div class="form-group">

                                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email"><?php echo lang("index_create_user_admin_email") ?>:</label>
                                                    <div class="col-xs-12 col-sm-9">
                                                        <div class="clearfix">
                                                            <input type="email" name="email" id="email" class="col-xs-12 col-sm-6" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="space-2"></div>

                                                <div class="form-group">
                                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email"><?php echo lang("index_create_user_admin_user") ?>:</label>
                                                    <div class="col-xs-12 col-sm-9">
                                                        <div class="clearfix">
                                                            <input type="text" name="user" id="user" class="col-xs-12 col-sm-6" />
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </form>
                                        <form class="form-horizontal show" id="validation-form-pwd" method="get">
                                            <div class="step-pane" data-step="2">

                                                <div class="form-group">

                                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email"><?php echo lang("index_create_user_admin_pwd") ?>:</label>
                                                    <div class="col-xs-12 col-sm-9">
                                                        <div class="clearfix">
                                                            <input type="password" name="pwd" id="pwd" class="col-xs-12 col-sm-6" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="space-2"></div>

                                                <div class="form-group">
                                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email"><?php echo lang("index_create_user_admin_rpwd") ?>:</label>
                                                    <div class="col-xs-12 col-sm-9">
                                                        <div class="clearfix">
                                                            <input type="password" name="rppwd" id="rppwd" class="col-xs-12 col-sm-6" />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                        <div class="step-pane" data-step="3">
                                            <h2>fffffdsfd</h2>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="wizard-actions">
                                    <button class="btn btn-prev">
                                        <i class="ace-icon fa fa-arrow-left"></i>
                                        <?php echo lang("index_button_admin_prev") ?>
                                    </button>

                                    <button class="btn btn-success btn-next" data-last="Finish">
                                        <?php echo lang("index_button_admin_next") ?>
                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {

	var $validation = true;
	$('#fuelux-wizard-container')
		.ace_wizard({
		    //step: 2 //optional argument. wizard will jump to step "2" at first
		    //buttons: '.wizard-actions:eq(0)'
		})
		.on('actionclicked.fu.wizard', function (e, info) {
                    console.log(info);
		    if (info.step == 1 && $validation) {
			if (!$('#validation-form').valid())
			    e.preventDefault();
		    }
		    if (info.step == 2 && $validation) {
			if (!$('#validation-form-pwd').valid())
			    e.preventDefault();
		    }

		})
		.on('finished.fu.wizard', function (e) {
		    bootbox.dialog({
			message: "Thank you! Your information was successfully saved!",
			buttons: {
			    "success": {
				"label": "enviar",
				"className": "btn-sm btn-primary",
                                "id" : "send"
			    }
			},
                        callback: function () {
                            Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");
                        }
		    });
        
		}).on('stepclick.fu.wizard', function (e) {
	    //e.preventDefault();//this will prevent clicking and selecting steps
	});

        $("#send").click(function(){
           alert($('#validation-form').serialize()+$('#validation-form-pwd').serialize()) ;
        });

	$('#validation-form').validate({
	    errorElement: 'div',
	    errorClass: 'help-block',
	    focusInvalid: false,
	    ignore: "",
	    rules: {
		email: {
		    required: true,
		    email: true
		},
		user: {
		    required: true,
		}
	    },
	    messages: {
		email: {
		    required: "Campo requerido.",
		    email: "Ingrese un email valido."
		},
		user: {
		    required: "Campo requerido.",
		}
	    },
	    highlight: function (e) {
		$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
	    },
	    success: function (e) {
		$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
		$(e).remove();
	    }
	});

	$('#validation-form-pwd').validate({
	    errorElement: 'div',
	    errorClass: 'help-block',
	    focusInvalid: false,
	    ignore: "",
	    rules: {
		pwd: {
		    required: true
		},
		rppwd: {
		    required: true
		}
	    },
	    messages: {
		pwd: {
		    required: "Campo requerido."
		},
		rppwd: {
		    required: "Campo requerido.",
		}
	    },
	    highlight: function (e) {
		$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
	    },
	    success: function (e) {
		$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
		$(e).remove();
	    }
	});


	$('#modal-wizard-container').ace_wizard();
	$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
    });
</script>