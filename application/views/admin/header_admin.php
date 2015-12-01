<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>css/main_admin.css">
        <script src="<?= base_url() ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= site_url("admin/dashboard"); ?>">Dashboard <span class="sr-only">(current)</span></a></li>
                        <li><a href="<?= site_url("admin/edit_twitter_settings"); ?>">Twitter settings</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= site_url("admin/add_album"); ?>">Add News</a></li>
                                <li><a href="<?= site_url("admin/view_album"); ?>">View News</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= site_url("admin/add_image"); ?>">Add Image</a></li>
                        
                    </ul>
                    <a type="button" href="<?= site_url("admin/logout"); ?>" class="btn btn-danger navbar-btn pull-right">Logout</a>
                    
                    <!--<a class="bt btn-sm btn-danger pull-right" href="">Logout </a>-->
                    <!--</ul>-->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">