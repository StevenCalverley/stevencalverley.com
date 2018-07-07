<?php
  if (!isset($title)) {
    $title = 'Steven Calverley';
  } else {
    $title = $title . ' | Steven Calverley';
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="<? PUBLIC_PATH ?>/css/styles.css" >

    <title><?= $title ?></title>
  </head>
  <body>
