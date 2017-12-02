<?php
include ($_SERVER["DOCUMENT_ROOT"] . '/php/session2.php');
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <?php include ($_SERVER["DOCUMENT_ROOT"] . '/php/head_lte.php');?>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>

    </head>
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