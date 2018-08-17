<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href=".<?php echo base_url('assets/img/favicon.png') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png') ?>">
  <title>
    Warehouse-Inventori | PT. PLN Persero
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/css/material-dashboard.css'); ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('assets/demo/demo.css'); ?>" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo base_url('assets/img/sidebar-1.jpg'); ?>">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Inventory
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item <?php echo ($this->uri->segment(1) == 'Beranda') ? 'active':''; ?>">
          <a class="nav-link" href="<?php echo site_url('Beranda') ?>">
            <i class="material-icons">dashboard</i>
            <p>Beranda</p>
          </a>
        </li>
        <li class="nav-item <?php echo ($this->uri->segment(1) == 'Barang') ? 'active':''; ?> ">
          <a class="nav-link" href="<?php echo site_url('Barang')?>">
            <i class="material-icons">inventory</i>
            <p>Barang</p>
          </a>
        </li>
        <li class="nav-item <?php echo ($this->uri->segment(1) == 'Kendaraan') ? 'active':''; ?> ">
          <a class="nav-link" href="<?php echo site_url('Kendaraan')?>">
            <i class="material-icons">local_shipping</i>
            <p>Kendaraan</p>
          </a>
        </li>
        <li class="nav-item <?php echo ($this->uri->segment(1) == 'Property') ? 'active':''; ?> ">
          <a class="nav-link" href="<?php echo site_url('Property')?>">
            <i class="material-icons">home</i>
            <p>Property</p>
          </a>
        </li>
        <li class="nav-item <?php echo ($this->uri->segment(1) == 'User') ? 'active':''; ?> ">
          <a class="nav-link" href="<?php echo site_url('User')?>">
            <i class="material-icons">person</i>
            <p>User</p>
          </a>
        </li>
  </ul>
</div>
</div>
<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form">
          <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
            </button>
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">person</i>
              <p class="d-lg-none d-md-block">
                Profil
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Profil</a>
              <a class="dropdown-item" href="<?php echo base_url('Login/logout')?>">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>