<?php session_start(); 
    require_once 'vendor/autoload.php';
    use Traits\Router;
    use Traits\Cookie;
    
Cookie::all();
Router::config();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGT_Niwee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="public\css\style.css" type="text/css">
    <link rel="stylesheet" href="public\css\header.css" type="text/css">
    <link rel="stylesheet" href="public\css\entete.css" type="text/css">
    <link rel="stylesheet" href="public\css\articles.css" type="text/css">
    <link rel="stylesheet" href="public\css\contact.css" type="text/css">
    <link rel="stylesheet" href="public\css\banner.css" type="text/css">
    <link rel="stylesheet" href="public\css\footer.css" type="text/css">
    <link rel="stylesheet" href="public\css\admin.css" type="text/css">

</head>
<body class="bg-light">
    
    <?php Router::controller('index');?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js" integrity="sha512-Meww2sXqNHxI1+5Dyh/9KAtvI9RZSA4c1K2k5iL02oiPO/RH3Q30L3M1albtqMg50u4gRTYdV4EXOQqXEI336A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="public\js\script.js"></script>
</body>
</html>