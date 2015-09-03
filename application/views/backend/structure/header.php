<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title><?php echo NAME_SITE_BK ?></title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url(DIR_BACKEND_CSS) ?>/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(DIR_BACKEND_FONTAWESOME) ?>/4.2.0/css/font-awesome.min.css" />
        <!-- page specific plugin styles -->
        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url(DIR_BACKEND_FONT) ?>/fonts.googleapis.com.css" />
        <script src="<?php echo base_url(DIR_BACKEND_JS) ?>/jquery.2.1.1.min.js"></script>
        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url(DIR_BACKEND_CSS) ?>/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <!--[if lte IE 9]>
                <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->
        <script type="text/javascript">
	    if ('ontouchstart' in document.documentElement)
		document.write("<script src='<?php echo base_url(DIR_BACKEND_JS) ?>/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>

        <script src="<?php echo base_url(DIR_BACKEND_JS) ?>/bootstrap.min.js"></script>
        <script src="<?php echo base_url(DIR_BACKEND_JS) ?>/fuelux.wizard.min.js"></script>
        <script src="<?php echo base_url(DIR_BACKEND_JS) ?>/jquery.validate.min.js"></script>
        <script src="<?php echo base_url(DIR_BACKEND_JS) ?>/additional-methods.min.js"></script>
        <script src="<?php echo base_url(DIR_BACKEND_JS) ?>/bootbox.min.js"></script>

        <script src="<?php echo base_url(DIR_BACKEND_JS) ?>/ace-elements.min.js"></script>
        <script src="<?php echo base_url(DIR_BACKEND_JS) ?>/ace.min.js"></script>
        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo base_url(DIR_BACKEND_JS) ?>/ace-extra.min.js"></script>
        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">