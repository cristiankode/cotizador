<?php
include ($_SERVER["DOCUMENT_ROOT"] . '/php/session2.php');
error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/head_lte.php'); ?>
        <link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME']?>/plugins/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="https://<?php echo $_SERVER['SERVER_NAME']?>/plugins/fullcalendar/fullcalendar.print.css" media="print">
        <link rel="stylesheet" type="text/css" href="./public/css/styles.css">
        <link rel="stylesheet" type="text/css" href="./public/css/bootstrap.min.css">
           <link rel="stylesheet" type="text/css" href="./public/css/fileinput.min.css">
        <link rel="stylesheet" type="text/css" href="./public/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" type="text/css" href="./public/css/jquery-ui.css"/>

    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="skin-blue sidebar-mini sidebar-collapse fixed">

        <div class="wrapper">
            <!-- Main Header -->
            <?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/header_lte.php'); ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/lateral_lte.php'); ?>
            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- 									Antes de esto no borrar 				-->