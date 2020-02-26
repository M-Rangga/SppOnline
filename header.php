<?php
session_start();
if ( !isset($_SESSION['login']) ) {
	header('location: login.php');
	
} 
?>

<!DOCTYPE html>
<html>
<head>

	
	  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HALAMAN UTAMA</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
</head>
<body>
	
	<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Aplikasi Pembayaran SPP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">Home</a></li>
            <li><a href="dataadmin.php">DATA ADMIN</a></li>
            <li><a href="dataguru.php">DATA GURU</a></li>
            <li><a href="datawali.php">DATA WALI KELAS</a></li>
            <li><a href="datasiswa.php">DATA SISWA</a></li>
            <li><a href="transaksi.php">TRANSAKSI</a></li>
            <li><a href="laporan.php">LAPORAN</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>