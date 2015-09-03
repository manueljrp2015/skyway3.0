<?php

//<!-- START HEADER -->
(empty($header) OR is_null($header) OR isset($header) == NULL) ? 
: 
$this->load->view('frontend/structure/'.$header);

//<!-- START NAVBAR LANDING -->
(empty($navbar_landing) OR is_null($navbar_landing) OR isset($navbar_landing) == NULL) ? : 
$this->load->view('frontend/structure/'.$navbar_landing);

//<!-- OVERLAY LANDING-->
(empty($overlay) OR is_null($overlay) OR isset($overlay) == NULL) ? : 
$this->load->view('frontend/structure/'.$overlay);

//<!-- FEATURES LANDING -->
(empty($features) OR is_null($features) OR isset($features) == NULL) ? : 
$this->load->view('frontend/structure/'.$features);

(empty($session_1) OR is_null($session_1) OR isset($session_1) == NULL) ? : 
$this->load->view('frontend/structure/'.$session_1);

(empty($session_2) OR is_null($session_2) OR isset($session_2) == NULL) ? : 
$this->load->view('frontend/structure/'.$session_2);

(empty($session_3) OR is_null($session_3) OR isset($session_3) == NULL) ? : 
$this->load->view('frontend/structure/'.$features);

(empty($pricing) OR is_null($pricing) OR isset($pricing) == NULL) ? : 
$this->load->view('frontend/structure/'.$pricing);

(empty($contact) OR is_null($contact) OR isset($contact) == NULL) ? : 
$this->load->view('frontend/structure/'.$contact);

//<!-- START FOOTER -->
(empty($footer) OR is_null($footer) OR isset($footer) == NULL) ? : 
$this->load->view('frontend/structure/'.$footer);