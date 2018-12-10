<?php
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YoloLife</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Navbar on-scroll effect -->
    <script>
        $(function () {
          $(document).scroll(function () {
            var $nav = $(".navbar-fixed-top");
            var $navlink = $(".navbar-inverse .navbar-nav>li>a");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            $navlink.toggleClass('scroll-point', $(this).scrollTop() > $nav.height());
          });
        });
    </script>

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

