<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Absen Unla</title>
	
</head>
<body>
	<h1>Login Absensi Universitas Langlangbuana</h1>		
	<form action="" method="post">
		<div >
		<table>
			
			<tr>
				<td>ID</td>
				<td><input type="text" name="nomor"  id="uname" required></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="password" name="password" id="pass" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="login" id="log"></td>
			</tr>
		</table>
	</div>
	</form>
</body>
</html> -->
<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header py-7 py-lg-8 pt-lg-9" style="background-color:#125D98;" >
      <div class="container" >
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
			<img src="<?=base_url('')?>/assets/assets/img/brand/unla.png" width="100px">
              <h1 class="text-white">Selamat Datang</h1>
              <p class="text-lead text-white">Login Absensi Universitas Langlangbuana</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Harap Masukan Akun yang Benar!</small>
              </div>
			  <?=$this->session->flashdata('msg')?>
				<div style="color: red"><?=validation_errors()?></div>
              <form role="form" action="" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Your ID" type="text" name="nomor"  id="uname" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password" id="pass" required>
                  </div>
                </div>
                <div class="text-center">
				  <input type="submit" class="btn btn-primary my-4" style="background-color:#F5A962; border:none;" name="login" value="Sign In" id="log">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>