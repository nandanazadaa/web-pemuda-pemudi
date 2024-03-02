<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/') ?>img/logo.png" type="image/png">
    <title>Prima Menayu Kulon</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/styles.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: white;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="<?= base_url('assets/') ?>img/logo.png" style="width: 70%; height:70%;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="accomodation.html">Accomodation</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                        <li class="nav-item submenu dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            
                        </li>
                        <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================ Header Area =================-->

    <!--================ Jumbotron Area =================-->
    <section class="banner_area" id="home">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h4> <?= $text_header['font_top'] ?></h4>
                    <h2><?= $text_header['font_center'] ?></h2>
                    <p><?= $text_header['font_bottom'] ?></p>
                    <a href="https://www.instagram.com/primamenayu/" class="btn theme_btn button_hover">About US</a>
                </div>
            </div>
        </div>

    </section>
    <!--================ Jumbotron Area =================-->

    <!--================ Acara PRIMA  =================-->
    <section class="accomodation_area section_gap" id="home">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color"><?= $update_acara['title_acara'] ?></h2>
                <p><?= $update_acara['sub_acara'] ?> </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <a href=""><img src="<?= base_url('assets/') ?>image/room1.jpg" alt=""></a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Tahun Baru</h4>
                        </a>
                        <h5>$250<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center"> 
                        <div class="hotel_img">
                            <a href=""><img src="<?= base_url('assets/') ?>image/room2.jpg" alt=""></a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">17 Agustus</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <a href=""><img src="<?= base_url('assets/') ?>image/room3.jpg" alt=""></a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Jalan Sehat</h4>
                        </a>
                        <h5>$750<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <a href=""><img src="<?= base_url('assets/') ?>image/room4.jpg" alt=""></a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4"></h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Acara PRIMA  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w"><?= $update_banefit['title_banefit'] ?> </h2>
                <p class="text-light"><?= $update_banefit['sub_banefit'] ?></p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-users"></i>Hubungan Pertemanan</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color"><?= $update_about['about_title'] ?></h2>
                        <p><?= $update_about['about_subtitle'] ?></p>
                        <a href="#" class="button_hover theme_btn_two">Request Custom Price</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <video width="460" height="240" controls autoplay>
                        <source src="<?= base_url('assets/')?>video/cinematic.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->

    <!--================ Latest Blog Area  =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">latest posts from blog</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="<?= base_url('assets/') ?>image/blog/blog-1.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Travel</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">Low Cost Advertising</h4>
                            </a>
                            <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.</p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="<?= base_url('assets/') ?>image/blog/blog-2.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Travel</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">Creative Outdoor Ads</h4>
                            </a>
                            <p>Self-doubt and fear interfere with our ability to achieve or set goals. Self-doubt and fear are</p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="<?= base_url('assets/') ?>image/blog/blog-3.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Travel</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">It S Classified How To Utilize Free</h4>
                            </a>
                            <p>Why do you want to motivate yourself? Actually, just answering that question fully can </p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Recent Area  =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About Agency</h6>
                        <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Navigation Links</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Feature</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Newsletter</h6>
                        <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">

                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">InstaFeed</h6>
                        <ul class="list_style instafeed d-flex flex-wrap">
                            <li><img src="<?= base_url('assets/') ?>img/insta1.png" style="width: 40px; height: 40px;" alt=""></li>
                            <li><img src="<?= base_url('assets/') ?>img/insta2.png" style="width: 40px; height: 40px;" alt=""></li>
                            <li><img src="<?= base_url('assets/') ?>img/insta3.png" style="width: 40px; height: 40px;" alt=""></li>
                            <li><img src="<?= base_url('assets/') ?>img/insta4.png" style="width: 40px; height: 40px;" alt=""></li>
                            <li><img src="<?= base_url('assets/') ?>img/insta5.png" style="width: 40px; height: 40px;" alt=""></li>
                            <li><img src="<?= base_url('assets/') ?>img/insta6.png" style="width: 40px; height: 40px;" alt=""></li>
                            <li><img src="<?= base_url('assets/') ?>img/insta7.png" style="width: 40px; height: 40px;" alt=""></li>
                            <li><img src="<?= base_url('assets/') ?>img/insta8.png" style="width: 40px; height: 40px;" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.instagram.com/primamenayu/" target="_blank">Prima Menayu </a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="https://www.instagram.com/primamenayu/"><i class="fa fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/') ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/mail-script.js"></script>
    <script src="<?= base_url('assets/') ?>vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="<?= base_url('assets/') ?>js/mail-script.js"></script>
    <script src="<?= base_url('assets/') ?>js/stellar.js"></script>
    <script src="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/custom.js"></script>
</body>

</html>