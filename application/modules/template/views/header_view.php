<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- about this site -->
<meta name="description" content="A web platform that helps to expose the touring experiences.">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="author" content="Adverntsafaris">
<meta name="Resource-type" content="Document">
<!-- Attaching the aadverntsafaris Icon logo -->
<link rel="shortcut icon" type="img/x-icon" href="<?php echo base_url() .'assets/icons/x-icon.png'?>"/>
<!-- dynamic files includes all the .js .css plugins-->
 	<?php      	
		$this->load->view('utils/dynamic_files');//..............this is to autoload the dynamic css and js files
	?>
<!-- Here is the title of Each page Module -->
<title>AdverntSafaris | <?php echo $title; ?></title>

</head>

<body>

<!-- Start of the Page Contents -->

<div class="hero"> 
