<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ARCHFOLD </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="<?= base_url() ?>img/archfold_icon.ico" />

    <!-- Latest compiled and minified CSS -->
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600' rel='stylesheet' type='text/css'>-->
    <!--<link href="<?= base_url() ?>/css/please-wait.css" rel="stylesheet">-->
    <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>css/main.css">

</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<!--    <script type="text/javascript" src="<?= base_url() ?>/js/vendor/please-wait.min.js"></script>
    <script type="text/javascript">
        window.loading_screen = window.pleaseWait({
            logo: "<?= base_url() ?>/img/logo.png",
            backgroundColor: '#f46d3b',
            loadingHtml: "<p class='loading-message'>A good day to you fine user!</p>"
        });
    </script>-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header padding-left-10 padding-right-10 ">
                <button type="button" class="navbar-toggle collapsed" id="t_button" data-toggle="collapse" data-target="#menu-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars fa-2x margin-n-t-30"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url() ?>img/logo2.png" id="img-header" ></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse bg-grey navbar-collapse" id="menu-items" >
                <span class="navbar-text navbar-right visible-lg visible-md visible-sm" id="social-media-icons">
                    <a target="_blank" href="http://www.facebook.com/archfold"><i class="fa fa-2x fa-facebook-square navber-item"></i></a>
                    <a target="_blank" href="http://www.twitter.com/archfold"><i class="fa fa-2x fa-twitter-square navber-item"></i></a>
                    <a target="_blank" href="http://www.instagram.com/archfold"><i class="fa fa-2x fa-instagram navber-item"></i></a>
                </span>
                <ul class="nav navbar-nav text-uppercase" id="menu-itm-list">
                    <li class="menu-item"><a href="<?= site_url() ?>/home/about">About</a></li>
                    <li class="menu-item"><a href="<?= site_url() ?>/home/music">Music</a></li>
                    <li class="menu-item"><a href="<?= site_url() ?>/home/tv_film">TV/Film</a></li>
                    <li class="menu-item"><a href="<?= site_url() ?>/home/silent_labs">Interactive</a></li>
                    <li class="menu-item"><a href="<?= site_url() ?>/home/philanthrophy">Philanthropy</a></li>
                    <li class="menu-item"><a href="<?= site_url() ?>/home/news">News</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>

    <div class="container content">