<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ $title }}</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= pathAssets() ?>assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= pathAssets() ?>assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= pathAssets() ?>assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= pathAssets() ?>assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?= pathAssets() ?>assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?= pathAssets() ?>assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?= pathAssets() ?>assets/css/theme.css" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-danger py-2 d-none d-sm-block">

            <div class="container"><img src="<?= pathAssets() ?>assets/img/banner/sales.png" height="51" alt="" />
                <div class="row align-items-center">
                    <div class="col-auto d-none d-lg-block">
                        <p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3 text-white"></i><span
                                class="text-white">12 Hoang Mai - Ha Noi </span></p>
                    </div>
                    <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-facebook-f text-900 text-white"></i></a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-pinterest text-900 text-white"></i></a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-twitter text-900 text-white"></i></a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-instagram text-900 text-white"> </i></a></li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <p class="my-2 fs--1"><i class="fas fa-envelope me-3 text-white"></i><a
                                class="text-white text-900" href="">contact-henry@gmail.com </a>
                        </p>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="<?= route('') ?>"><img src="<?= pathAssets() ?>assets/img/gallery/logo-n.png"
                        height="45" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                        <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="<?= route('') ?>">Trang
                                chủ</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="<?= route('giaKH') ?>">Giá</a>
                        </li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page"
                                href="<?= route('ptWebsite') ?>">Phát triển website</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page"
                                href="<?= route('nghienCuu') ?>">Nghiên cứu</a></li>
                    </ul><a class="btn btn-primary order-1 order-lg-0" href="#!">Đăng kí</a>
                    <form class="d-flex my-3 d-block d-lg-none">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                    <div class="dropdown d-none d-lg-block">
                        <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit"
                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="fas fa-search text-800"></i></button>
                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1"
                            style="top:55px">
                            <form>
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 mb-5"><img src="<?= pathAssets() ?>assets/img/gallery/cta.png" width="280" alt="cta" />
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <h5 class="text-primary font-sans-serif fw-bold">Đăng kí ngay</h5>
                        <h1 class="mb-5">Nhận ngay<br />Mỗi bản cập nhập</h1>
                        <form class="row g-0 align-items-center">
                            <div class="col">
                                <div class="input-group-icon">
                                    <input class="form-control form-little-squirrel-control" type="email"
                                        placeholder="Nhập email" aria-label="email" /><i
                                        class="fas fa-envelope input-box-icon"></i>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary rounded-0" type="submit">Đăng kí ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-footer">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none"
                            href="#"><img src="<?= pathAssets() ?>assets/img/gallery/footer-logo.png" height="100" alt="" /></a>
                        <p class="text-light my-4"> <i class="fas fa-map-marker-alt me-3"></i><span
                                class="text-light">12 Hoàng Mai - Hà Nội &nbsp;</span><a class="text-light"
                                href="tel:+8483213123">+84983213123</a><br />Edumail, CA 94110</p>
                        <p class="text-light"> <i class="fas fa-envelope me-3"> </i><a class="text-light"
                                href="">contact-henry@gmail.com </a></p>
                        <p class="text-light"> <i class="fas fa-phone-alt me-3"></i><a class="text-light"
                                href="tel:1-800-800-2299">1-800-800-2299 (Support)</a></p>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
                        <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Cộng đồng </h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200" href="#!">Người học</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Đối tác</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Lập trình viên</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Người kiểm thử</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Phiên dịch viên</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Blog</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Blog công nghệ</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Trung tâm dạy học</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Thông tin</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200" href="#!">Thông tin về chúng tôi</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Giá</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Blog</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Nghề nghiệp</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Hơn nữa</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200" href="#!">Nhà đầu tư</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Khóa học</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Riêng tư</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Hỗ trợ</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Khả năng tiếp cận</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Liên hệ</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Bài viết</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Danh mục</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Chi nhánh</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section class="py-0" style="margin-top: -5.8rem;">
            <div class="container bg-danger">
                <div class="row justify-content-md-between justify-content-evenly py-4">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                        <p class="fs--1 my-2 fw-bold text-white">Bản quyền của &copy; Henry Company, 2021</p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6">
                        <p class="fs--1 my-2 text-center text-md-end text-white"> Made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="#EB6453" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                </path>
                            </svg>&nbsp;by&nbsp;<a class="fw-bold text-900 text-white">Henry </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?= pathAssets() ?>vendors/@popperjs/popper.min.js"></script>
    <script src="<?= pathAssets() ?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?= pathAssets() ?>vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?= pathAssets() ?>vendors/fontawesome/all.min.js"></script>
    <script src="<?= pathAssets() ?>assets/js/theme.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
</body>

</html>