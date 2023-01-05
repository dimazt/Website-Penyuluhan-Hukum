<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/chat.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Eterna - v4.9.1
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="#">Admin - Penyuluhan Hukum</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="<?= base_url() ?>/assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/admin">Dashboard</a></li>
                    <li><a href="<?= base_url() ?>/admin/pasal/view-pasal">Data Pasal</a></li>
                    <?php if (session('isLogin') == false) { ?>
                        <li><a href="<?= base_url() ?>/auth/login">Pengaduan</a></li>
                        <li><a href="<?= base_url() ?>/auth/login"><b>Login</b></a></li>
                    <?php } else { ?>
                        <li class="dropdown"><a href="#"><span>Pengaduan</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= base_url() ?>/admin/pengaduan/<?= 'menunggu-ditanggapi' ?>">Pengaduan Masuk</a></li>
                                <li><a href="<?= base_url() ?>/admin/pengaduan/<?= 'ditanggapi' ?>">Pengaduan Ditanggapi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>My Account</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Change Password</a></li>
                                <li><a href="<?= base_url() ?>/auth/logout"><b>Logout</b></a></li>
                            </ul>
                        </li>
                    <?php } ?>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main">
        <?= $this->renderSection('admin') ?>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="footer-top">
            <div class="container">
                <div class="row">


                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About Web Ini</h3>
                        <p>Jelaskan tentang web ini</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Jamil</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
                Designed by <a href="/">Jamil</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pengaduan').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {


            $('#summernote').summernote({
                placeholder: 'Jelaskan alasan anda ...',
                tabsize: 2,
                height: 200,
                toolbar: [
                    ["style", ["bold", "italic", "underline", "clear"]],
                    ["fontname", ["fontname"]],
                    ["fontsize", ["fontsize"]],
                    ["color", ["color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["height", ["height"]],
                    ["insert", ["picture", "hr"]],

                ],

                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete: function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });

            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image, image.name);
                $.ajax({
                    url: "<?php echo base_url('lampiran/upload_image') ?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(url) {
                        $('#summernote').summernote("insertImage", url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }

            function deleteImage(src) {
                $.ajax({
                    data: {
                        src: src
                    },
                    type: "POST",
                    url: "<?php echo base_url('lampiran/delete_image') ?>",
                    cache: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            }

        });
    </script>

    <script>
        $(document).ready(function() {
            $('#show_balasan').on('click', function(e) {

                data_balasan();

            })


            function data_balasan() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var id_pengaduan = $('#id_pengaduan').val();
                var nama = $('#nama').val();

                $.ajax({

                    type: 'POST',
                    url: '<?php echo base_url('/users/tanggapan') ?>',
                    data: {

                        id_pengaduan: id_pengaduan
                    },
                    dataType: 'json',
                    success: function(data) {
                        var output = '';
                        var i = 0;
                        while (i < data.length) {
                            if (data[i].admin_name == null) {
                                output += `<li>
                                    <div class="message-data">
                                        <span class="message-data-name">${nama}</span>
                                        <span class="message-data-time">${data[i].createdAt}</span>
                                    </div>
                                    <div class="message my-message">
                                    ${data[i].reply}
                                    </div>
                                </li>`
                            }
                            if (data[i].admin_name != null) {
                                output += `<li class="clearfix">
                                <div class="message-data align-right">
                                    <span class="message-data-time">${data[i].createdAt}</span>
                                    <span class="message-data-name">You</span>

                                </div>
                                <div class="message other-message float-right">${data[i].reply}
                                </div>
                            </li>`
                            }
                            // output += '<tr>' +
                            //     '<td>' + data[i].reply + '</td>' +
                            //     '</tr>';
                            i++;
                        }
                        $('#show').html(output);
                    }
                });
            }
            $('#save').on('click', function(e) {
                e.preventDefault()
                var id_pengaduan = $('#id_pengaduan').val();
                var reply = $('#reply').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('/users/tanggapan/balasan') ?>",
                    data: {

                        id_pengaduan: id_pengaduan,
                        reply: reply
                    },
                    success: function(data) {
                        $('#reply').val('');
                        data_balasan();
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('/users/tanggapan/update') ?>",
                            data: {

                                id_pengaduan: id_pengaduan
                            },
                            success: function(data) {
                                $('#reply').val('');
                                data_balasan();

                            }
                        });

                    }
                });
            });


            //fungsi tampil data


        });
    </script>
</body>

</html>