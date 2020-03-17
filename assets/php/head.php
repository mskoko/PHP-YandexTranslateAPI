<?php
header_remove("X-Powered-By");
$img_src = 'http://'.$_SERVER['HTTP_HOST'].'/assets/img/header/4.jpg';
?>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="revisit-after" content="1 days">

	<!-- Icon -->
	<link rel="icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/favicon.ico" type="image/x-icon">

	<!-- Other -->
	<meta itemprop="name" 					content="FastSend.me | Mail" />
	<meta itemprop="url" 					content="https://<?php echo $_SERVER['HTTP_HOST']; ?>" />
	<meta itemprop="description" 			content="FastSend.me | Mail" />

	<meta name="keywords" 					content="<?php include_once($_SERVER['DOCUMENT_ROOT'].'/assets/php/tags.php'); ?>" />
	
	<meta itemprop="thumbnailUrl" 			content="<?php echo $img_src; ?>" />
	<meta itemprop="image" 					content="<?php echo $img_src; ?>" />
	<link rel="image_src" 					href="<?php echo $img_src; ?>" />

	<meta name="author" 					content="Muhamed Skoko | mskoko.me@gmail.com">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="/assets/css/bs_reset.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="/assets/css/header.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="/assets/css/new.css?<?php echo time(); ?>">