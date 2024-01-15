<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>HealthTracks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- Space untuk navbar -->
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 50px;">
            <!-- Navbar disini -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <span class="font-weight-bold" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:#4CAF4F">HealthTracks.</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
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
    <div class="container-fluid">
        <div class="container">
            <!-- Konten halaman di sini -->
            <div class="row">
                <div class="col-md-6" style='padding-top: 30px'>
                    <h2>HealthTracks ready to help</h2>
                    <p>Bergabunglah dengan jutaan individu yang telah memilih HealthTracks sebagai mitra kesehatan mereka. Dengan pelacakan yang canggih, analisis mendalam, dan dukungan komunitas yang tiada henti, HealthTracks membuka jalan bagi Anda untuk menelusuri setiap sudut dan tikungan perjalanan kesehatan Anda dengan keyakinan dan tekad yang tak tergoyahkan. Bersama-sama, kita akan mencapai kesehatan optimal yang kita semua impikan, membentuk dan menciptakan sejarah kesehatan pribadi yang tak terlupakan dan luar biasa.</p>
                    <a href="#" class="btn btn-outline-success">Get Started</a>
                </div>
                <div class="col-md-6" style='padding-left: 150px;'>
                    <img src="https://img.freepik.com/free-vector/hand-drawn-patient-taking-medical-examination_23-2148843031.jpg?w=740&t=st=1705123844~exp=1705124444~hmac=f78465eb9b42635798880e62836fdcfaab8174ebc48a95f47467a85db9323917" alt="Image Content" class="img-fluid" style="width: 20rem;">
                </div>
            </div>
            <!-- Content Service  -->
            <div class="container text-center" style="padding-top: 50px">
                <div class="text-center">
                    <h3>Our Service</h3>
                    <p>Kami memberikan kepada Anda pilihan terbaik untuk Anda. Sesuaikan dengan kebutuhan kesehatan Anda dan pastikan Anda menjalani pengobatan dengan dokter kami yang berkualifikasi tinggi. Anda dapat berkonsultasi dengan kami jenis layanan apa yang cocok untuk kesehatan Anda</p>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4" style="padding-top:20px; margin-bottom:20px">
                    <div class="col">
                        <div class="card" style="width: 22rem;">
                            <img src="https://img.freepik.com/free-vector/doctor-examining-patient-clinic-illustrated_23-2148856559.jpg?w=826&t=st=1705124295~exp=1705124895~hmac=41e05139695602021fb3eab681aab48cc160eafabbb8131a1df530f619066a01" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">HealthTracks tidak hanya memfokuskan pada aspek fisik, tetapi juga memantau stres dan kesejahteraan emosional. Dengan menangkap data terkait tingkat stres, aplikasi ini membantu pengguna mengelola kesehatan mental mereka dan mencapai keseimbangan holistik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 22rem;">
                            <img src="https://img.freepik.com/free-vector/health-professional-collection_52683-37009.jpg?w=826&t=st=1705124658~exp=1705125258~hmac=aec291b34e5d2b63a244535e9aecbff8badd42df3ce6a542f718480be3cb4529" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">HealthTracks juga menawarkan layanan konsultasi kesehatan virtual, memungkinkan pengguna untuk terhubung dengan para profesional kesehatan melalui platform aplikasi. Dengan layanan ini, pengguna dapat mendiskusikan tujuan kesehatan pribadi, mendapatkan saran ahli.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card" style="width: 22rem;">
                        <img src="https://img.freepik.com/free-vector/doctor-examining-patient-clinic-illustrated_23-2148856560.jpg?w=826&t=st=1705124795~exp=1705125395~hmac=08e30510e955029462a6d92b7308a769a9adf4bf1e623ef42356512b748870fb" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Berdasarkan data yang dikumpulkan, HealthTracks memberikan rekomendasi kesehatan yang terpersonalisasi. Ini mencakup saran untuk perubahan gaya hidup, rutinitas olahraga, dan rekomendasi nutrisi yang sesuai dengan kebutuhan unik setiap pengguna.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Content Product -->
            <div class="container" style="padding-top:20px; margin-bottom:20px">
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://img.freepik.com/free-vector/insurance-concept-illustration_114360-2223.jpg?w=740&t=st=1705125936~exp=1705126536~hmac=ccbc18b9acb66267b16ed12f9d800d52cb7912ba7409d0b587b2c2fa953e13d0" alt="" style="width:25rem; padding-left:50px; margin-left:20px">
                    </div>
                    <div class="col-md-6" style="padding-top:30px; padding-right: 50px">
                        <h2>Leading healthcare providers</h2>
                        <p>Dalam HealthTracks, kesehatan bukanlah perjalanan individu. Kami menghadirkan pengalaman sosial yang memungkinkan Anda tidak hanya melacak pencapaian pribadi Anda tetapi juga berbagi, menginspirasi, dan mendapat dukungan dari komunitas kesehatan yang dinamis. Forum diskusi, tantangan bersama, dan dukungan tim kami membentuk jaringan solidaritas, menjadikan setiap langkah dalam perjalanan kesehatan Anda sebagai kontribusi berharga untuk kesehatan bersama.</p>
                        <a href="#" class="btn btn-outline-success">Learn more</a>
                    </div>
                </div>
            </div>
            <!-- Content Activity -->
            <div class="container text-center" style="margin-bottom: 20px">
                <div class="text-center" style="padding-top: 30px">
                    <h3>Our Activity</h3>
                    <p>Kami sebelumnya telah memberikan solusi kesehatan yang disesuaikan, membimbing individu untuk membuat pilihan optimal yang selaras dengan kebutuhan kesehatan mereka. Dokter kami yang berpengalaman siap sedia untuk berkonsultasi, membantu Anda mengidentifikasi layanan yang paling sesuai untuk kesejahteraan Anda.</p>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4" style="padding-top:20px; margin-bottom:20px">
                    <div class="col">
                        <div class="card" style="width: 22rem;">
                            <img src="https://img.freepik.com/free-photo/medium-shot-nurses-wearing-face-masks_23-2149484039.jpg?w=826&t=st=1705129015~exp=1705129615~hmac=cf54c23267ce3f7c99075ace8986f8eb9241c000e29dcf6137dcde7f3b11c06d" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card Title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-success">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 22rem;">
                            <img src="https://img.freepik.com/free-photo/mother-daughter-playing-doctor-with-stethoscope_1150-17767.jpg?w=826&t=st=1705128759~exp=1705129359~hmac=a142261f905ef67cb064e0048e11f2ea141fc1f6bd8efa61cd184cf94bdcf4dc" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card Title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-success">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 22rem;">
                            <img src="https://img.freepik.com/free-photo/medium-shot-doctor-checking-blood-pressure-female-patient_1098-19334.jpg?w=826&t=st=1705128840~exp=1705129440~hmac=4f42578b10c926bd55df41d6f7d6968a5b81f14c9bb050a6d5cc621b2dc5f402" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card Title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-outline-success">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Download -->
            <div class="container" style="margin-bottom:50px">
                <div class="row">
                    <div class="col-md-5" style="padding-top:30px; margin-left:80px; padding-right: 30px">
                        <h2>Leading healthcare providers</h2>
                        <p>HealthTracks bukan hanya sekedar aplikasi pelacak kesehatan, melainkan mitra setia yang hadir dalam setiap langkah perjalanan panjang kesehatan Anda. Kami yakin bahwa setiap langkah kecil membawa Anda mendekati versi terbaik dari diri Anda, dan bersama HealthTracks, kami membantu memetakan dan memahami perjalanan kesehatan Anda dengan penuh kepedulian.</p>
                        <a href="#" class="btn btn-outline-success">Learn more</a>
                    </div>
                    <div class="col-md-6">
                        <img src="https://img.freepik.com/free-vector/doctor-home-concept-illustration_114360-7060.jpg?w=826&t=st=1705131228~exp=1705131828~hmac=e88e765cb43134a77ef563828727434ce47fd82cd0bceb26e15158d80d0f4839" alt="" style="width:25rem; padding-left:50px; margin-left: 30px; padding-top:50px">
                    </div>
                </div>
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
</body>
</html>