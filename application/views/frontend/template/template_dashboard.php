<?php

//<!-- START HEADER -->
(empty($header) OR is_null($header) OR isset($header) == NULL) ? : 
$this->load->view('frontend/structure-dashboard/'.$header);

//<!-- START CONTENT -->
(empty($folder) OR is_null($folder) OR isset($folder) == NULL) ? : 
$this->load->view('frontend/'.$folder.'/'.$content);

//<!-- START FOOTER -->
(empty($footer) OR is_null($footer) OR isset($footer) == NULL) ? : 
$this->load->view('frontend/structure-dashboard/'.$footer);