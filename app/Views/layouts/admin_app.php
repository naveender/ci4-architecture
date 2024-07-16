<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>VitalTrendsUsa</title>
    <link rel="apple-touch-icon" href="/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- INCLUDE TOP -->
    <?= $this->include('components/include_top') ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

    <!-- HEADER -->
    <?= $this->include('components/header') ?>

    <!-- SIDEBAR -->
     <?php if(auth()->user()->role_id==1){ ?>
    <?= $this->include('components/sidebar') ?>
     <?php }else{ ?>
     <?= $this->include('components/dealer_sidebar') ?>
     <?php } ?>
     
    <!-- CONTENT -->
    <?= $this->renderSection('content') ?>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- FOOTER -->
    <?= $this->include('components/footer') ?>

    <!-- INCLUDE BOTTOM -->
    <?= $this->include('components/include_bottom') ?>

</body>
<!-- END: Body-->

</html>