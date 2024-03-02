<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
    <!-- BREADCRUMB-->
    <section class="au-breadcrumb2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="<?= base_url('Admin')?>">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                        <form class="au-form-icon--sm" action="" method="post">
                            <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                            <button class="au-btn--submit2" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->

    <!-- WELCOME-->
    <section class="welcome p-t-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-4">Welcome back
                        <span><?= $user['username']; ?> !</span>
                    </h1>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->

    <!-- EDIT TEXT -->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <?= $this->session->flashdata('text_update') ?>
                        <div class="card">
                            <div class="card-header">
                                <strong>Change</strong> Text Header Title Content
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('/Admin/text_header_edit') ?>" method="post">
                                    <div class="form-group">
                                        <label for="ig">Change Header Top Text</label>
                                        <input class="form form-control" type="text" name="font_top" id="ig" value="<?= $text_header['font_top']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="ig">Change Header Center Text</label>
                                        <input class="form form-control" type="text" name="font_center" id="ig" value="<?= $text_header['font_center']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="ig">Change Header Bottom Text</label>
                                        <input class="form form-control" type="text" name="font_bottom" id="ig" value="<?= $text_header['font_bottom']?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary"> Update</button>
                                </form>
                            </div>
                        </div> 

                        <!-- END EDIT TEXT -->
                        
                        <!-- UPDATE TEXT ACARA -->
                        <?= $this->session->flashdata('update_acara') ?>
                        <div class="card">
                            <div class="card-header">
                                <strong>Change</strong> Text Acara Content
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('/Admin/text_acara_edit') ?>" method="post">
                                    <div class="form-group">
                                        <label for="ig">Change Title Acara</label>
                                        <input class="form form-control" type="text" name="title_acara" id="ig" value="<?= $update_acara['title_acara']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="ig">Change Sub Acara</label>
                                        <input class="form form-control" type="text" name="sub_acara" id="ig" value="<?= $update_acara['sub_acara']?>" >
                                    </div>
                                    <button type="submit" class="btn btn-primary"> Update</button>
                                </form>
                            </div>
                        </div>  
                        <!-- END UPDATE TEXT ACARA -->

                        <!-- UPDATE TEXT ACARA -->
                        <?= $this->session->flashdata('update_banefit') ?>
                        <div class="card">
                            <div class="card-header">
                                <strong>Change</strong> Text Acara
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('/Admin/text_banefit_edit') ?>" method="post">
                                    <div class="form-group">
                                        <label for="ig">Change Title Banefit Content</label>
                                        <input class="form form-control" type="text" name="title_banefit" id="ig" value="<?= $update_banefit['title_banefit']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="ig">Change Sub Banefit</label>
                                        <input class="form form-control" type="text" name="sub_banefit" id="ig" value="<?= $update_banefit['sub_banefit']?>" >
                                    </div>
                                    <button type="submit" class="btn btn-primary"> Update</button>
                                </form>
                            </div>
                        </div>  
                        <!-- END UPDATE TEXT ACARA -->

                        <!-- UPDATE TEXT ACARA -->
                        <?= $this->session->flashdata('update_about') ?>
                        <div class="card">
                            <div class="card-header">
                                <strong>Change</strong> Text About Content
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('/Admin/about_content') ?>" method="post" >
                                    <div class="form-group">
                                        <label for="ig">Change Title Banefit</label>
                                        <input class="form form-control" type="text" name="title_about" id="ig" value="<?= $update_about['about_title']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="ig">Change Sub Banefit</label>
                                        <input class="form form-control" type="text" name="sub_about" id="ig" value="<?= $update_about['about_subtitle']?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary"> Update</button>
                                </form>
                            </div>
                        </div>  
                        <!-- END UPDATE TEXT ACARA -->


                    </div>
                </div>
            </div>
        </div>
    </div>
 
    


