<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <title>HealthTracks</title>
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Dropzone.js -->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<script>
  // Note that the name "myDropzone" is the camelized
  // id of the form.
  Dropzone.options.fileUpload = {
    // Configuration options go here
    acceptedFiles : 'image/*',
    maxFilesize : 1
  };
    // Progress upload
  $(document).ready(function() {
        // Handle file upload
        $('#file').change(function() {
            var file = this.files[0];

            // Get the file size
            var size = file.size;

            // Get the file name
            var name = file.name;

            // Calculate the progress
            var progress = (size / 1000000) * 100;

            // Update the progress bar
            $('.progress-bar').css('width', progress + '%');
            $('.progress-bar').text(progress + '%');

            // Show the success alert
            if (progress === 100) {
                $('.alert-success').show();
            }
        });
    });
</script>
<style>
    body {
        background: #f7f7f7;
    }

    .dropzone{
        background: #fff;
        border: 2px dashed #ddd;
        border-radius: 5px;
    }

    .dz-message {
        color: #999;
        font-family: 'Montserrat', sans-serif;
    }

    .dz-message:hover {
        color: #464646;
    }

    .dz-message h3 {
        font-size: 200%;
        margin-bottom: 15px;
    }

    .progress {
    margin: 10px 0;
    }

    .progress-bar {
        width: 100%;
        height: 20px;
        background-color: #007bff;
        color: #fff;
    }

    .progress-bar::-webkit-progress-value {
        background-color: #fff;
    }

    .progress-bar::-webkit-progress-bar {
        background-color: #007bff;
    }

    .full-width-button {
        display: block;
        width: 100%;
        margin-top: 10px; /* adjust as needed */
        margin-bottom: 10px; /* adjust as needed */
        padding: 10px; /* adjust as needed */
        box-sizing: border-box;
        text-align: center; /* if you want the text to be left-aligned */
        background-color: #fff; /* Green button color */
        border: 1px solid #4CAF4F;
        border-radius: 5px;
        color: #4CAF4F;
        text-decoration: none;
        font-size: 16px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        cursor: pointer;
    }

    .full-width-button:hover {
        background-color: #4CAF4F; /* memberi warna ketika cursor diatas button */
        color: #fff;
        font-weight: 500;
        font-family: 'Montserrat', sans-serif;
    }
</style>
<body>
    <!-- Space untuk navbar -->
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 50px;">
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
                            <a class="nav-link" href="#">Documents</a>
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
    <!-- Konten Halaman -->
    <div class="container-fluid" style="margin-bottom: 50px">
        <div class="container">
            <form action="<?php echo base_url('Upload/proses_upload') ?>" class="dropzone" id="fileUpload">
                <div class="dz-message">
                    <h3>Drop files here</h3> or <strong>click</strong> to upload
                    <p style="margin-top:10px">Supported formates: JPEG, PNG, GIF, MP4, PDF, PSD, AI, Word, PPT</p>
                </div>
            </form>
            <div>
                <p class="text-secondary font-weight-bold" style="margin-top: 20px">Uploading</p>
                <input class="form-control" type="text" value="your-file-here.pdf" aria-label="readonly input example" readonly>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <p style="padding-top:10px">0%</p>
                </div>
            </div>
            <div class="alert alert-success" role="alert" style="display: none;">
                File berhasil diupload.
            </div>
            <div>
                <p class="text-secondary font-weight-bold" style="margin-top: 20px">Uploaded</p>
                <input class="form-control" type="text" value="document-name.pdf" aria-label="readonly input example" readonly>
            </div>
            <div style="padding-top:20px">
                <button type="button" class="full-width-button">UPLOAD FILES</button>
            </div>
        </div>
    </div>
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
                        <a href="#" class="text-white" style="text-decoration: none;">Documents</a>
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