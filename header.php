<?php
/*-----------------------------------------------------------------------------------*/
/* This template will be called by all other template files to begin
/* rendering the page and display the header/nav
/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#01ff2b"/>
<meta name="msapplication-navbutton-color" content="#01ff2b">
<meta name="apple-mobile-web-app-status-bar-style" content="#01ff2b">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="DELT">
<link rel="shortcut icon" href="" alt="TS Icon">
<title><?php wp_title();?></title>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">

    <!-- Resource style -->
    <!-- Resource style -->

    <title>Tsunami Waves</title>
</head>
<!--a comment-->

<body>
	<div class="fixedmenu">
		<div class="hamburger" id="hamburger-9">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</div>
	</div>
    <div class="main-menu">
        <ul>
            <li>
                <a href="/wordpress/home-page">
                home
                </a>
            </li>
            <li>
                <a href="/wordpress/mission">
                mission
                </a>
            </li>
            <li>
                <a href="/wordpress/events">
                events
                    </a>
            </li>
            <li>
                store
            </li>
            <li>
                donate
            </li>
        </ul>
    </div>

    <img class="logo " src="/wordpress/wp-content/themes/Tsunami-Waves-PHP/img/logo.png">
    <div class="fader"></div>


<?php wp_head(); ?>
</head>
<body>
