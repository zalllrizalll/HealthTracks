<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- Space untuk navbar -->
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 20px;">
            <!-- Navbar disini -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo base_url('Dashboard/index') ?>">
                    <span class="font-weight-bold" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:#4CAF4F">HealthTracks.</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('Dashboard/index') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Upload/index') ?>">Documents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Records</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" style='padding-right: 13px;'>
                            <a class="nav-link" href="<?php echo base_url('Auth/login') ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('Auth/register') ?>" class="btn btn-outline-success">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Form Register -->
    <?php if($this->session->flashdata('message')): ?>
        <?= $this->session->flashdata('message'); ?>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="container" style="margin-bottom: 50px; padding-bottom: 10px">
            <div class="row col-md-6 offset-md-3 d-flex justify-content-center align-items-center" style="width:50%;">
                <form action="<?php echo base_url('Auth/login'); ?>" method="post" class="border border-dark w-100 p-3 mx-auto " style="border-radius: 5px; margin-top: 50px;">
                    <div class="mb-3">
                        <label for="username" class="form-label font-weight-bold text-success">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label font-weight-bold text-success">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label font-weight-bold text-success">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirm" class="form-label font-weight-bold text-success">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-outline-success offset-md-5">Submit</button>
                    <span>
                        <p class="text-center" style="margin-top: 10px">Already have an account ? <a href="<?php echo base_url('Auth/login') ?>" class="text-success" style="text-decoration:none">Login</a></p>
                    </span>
                </form>
            </div>
        </div>
    </div>


    <!-- <form action="<?= base_url('Auth/register'); ?>" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?= set_value('username'); ?>">
        <?= form_error('username', '<small>', '</small>'); ?>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?= set_value('email'); ?>">
        <?= form_error('email', '<small>', '</small>'); ?>

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <?= form_error('password', '<small>', '</small>'); ?>

        <label for="password_confirm">Confirm Password</label>
        <input type="password" id="password_confirm" name="password_confirm">
        <?= form_error('password_confirm', '<small>', '</small>'); ?>

        <button type="submit">Register</button>
    </form> -->
    <!-- Footer -->
    <footer class="bg-secondary text-white pt-5 pb-4">
        <div class="container text-left text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">University</h5>
                    <p>Universitas Dian Nuswantoro</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">About us</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Blog</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Contact us</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Privacy Policy</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Support</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Help Center</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Terms of Service</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Legal</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Status</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i>207 Imam Bonjol Street
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>sekretariat@dinus.ac.id
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>(024) 3517261
                    </p>
                    <p>
                        <i class="fas fa-fax mr-3"></i>+01 335 633 77
                    </p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p> Copyright &copy; All rights reserved by
                        <a href="https://portal.dinus.ac.id/" style="text-decoration:none">
                            <strong class="text-warning">Universitas Dian Nuswantoro</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/univ.dian.nuswantoro/" class="btn-floating btn-sm text-white" style="font-size:23px"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/udinusofficial" class="btn-floating btn-sm text-white" style="font-size:23px"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/udinusofficial/" class="btn-floating btn-sm text-white" style="font-size:23px"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/school/universitas-dian-nuswantoro/?originalSubdomain=id" class="btn-floating btn-sm text-white" style="font-size:23px"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/@tvkuch49udinus" class="btn-floating btn-sm text-white" style="font-size:23px"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

     <!-- Add Bootstrap JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-58x5W3VXt9VdFGXrM0LdGYG1TkVqkGYGdJvTcLnMVX00WZZ96PJG3yQZj9hGtYA70hBcVLpqsYH/dTGWfvIoFkNbGUmPZrVeFqwYM+VQ1rWwEgIbAkDlTqAOI29j0Lq8P9RWWgmZvZcFd/AJmO0aLFwJUOYmWVw==" crossorigin="anonymous"></script>
</body>
</html>