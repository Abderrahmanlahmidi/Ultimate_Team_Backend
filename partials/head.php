<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./public/css/input.css" rel="stylesheet">
  <link href="./public/css/output.css" rel="stylesheet">
  <title>Ultimate Team</title>
</head>
<style>
   #main_background{
      background-image: linear-gradient(rgb(0, 0, 0, 0.6), rgb(0, 0, 0, 0.6)), 
      url(<?php echo $background_url ?>);
      background-repeat: no-repeat;
    	background-size: cover;
   }
   .zone{
      background-image: url(<?php echo $placeholder ?>);
      background-repeat: no-repeat;
      background-size: cover;
      cursor: pointer;
    }
</style>