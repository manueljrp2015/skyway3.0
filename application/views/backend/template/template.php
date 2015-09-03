<?php

//<!-- START HEADER -->
(empty($header) OR is_null($header) OR isset($header) == NULL) ? 
: 
$this->load->view('backend/structure/'.$header);
//<!-- START NAVBAR  -->
(empty($navbar_landing) OR is_null($navbar_landing) OR isset($navbar_landing) == NULL) ? : 
$this->load->view('backend/structure/'.$navbar_landing);

//<!-- IN CONTENT-->
(empty($in) OR is_null($in) OR isset($in) == NULL) ? : 
$this->load->view('backend/structure/'.$in);

//<!-- SIDEBAR -->
(empty($sidebar) OR is_null($sidebar) OR isset($sidebar) == NULL) ? : 
$this->load->view('backend/structure/'.$sidebar);

//<!-- content -->
(empty($content) OR is_null($content) OR isset($content) == NULL) ? 
$this->load->view('backend/structure/content') : 
$this->load->view('backend/'.$folder.'/'.$content);


//<!-- START FOOTER -->
(empty($footer) OR is_null($footer) OR isset($footer) == NULL) ? : 
$this->load->view('backend/structure/'.$footer);

//<!-- END CONTENT-->
(empty($end) OR is_null($end) OR isset($end) == NULL) ? : 
$this->load->view('backend/structure/'.$end);