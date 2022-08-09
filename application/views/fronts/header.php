
<?php $users= $this->Crud_m->view_where('user', array('username'=> $this->session->username))->row_array(); ?>
<?php if($this->session->level=='1'){ ?>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                          <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="call_support">
                        <p><i class="icon-phone-call" aria-hidden="true"></i> <span><a href="#">Chat by WhatsApp</a></span></p>

                    </div>
                    <div class="header_account">
                        <ul>
                            <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> Indonesia <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#">English</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header_top_links">
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Daftar</a></li>
                            <li><a href="#">Keranjang Belanja</a></li>
                        </ul>
                    </div>
                    <div class="search_container">
                        <form action="#">
                            <div class="search_box">
                                <input placeholder="Mau sewa apa hari ini?" type="text">
                                <button type="submit">Cari</button>
                            </div>
                        </form>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="#">Promo</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Corporate Order</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Reseller</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Cara Pemesanan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> <?php echo $identitas->email?></a></span>
                        <ul>
                            <li class="facebook"><a href="<?php echo $identitas->facebook?>"><i class="icon-facebook"></i></a></li>
                            <li class="pinterest"><a href="<?php echo $identitas->youtube?>"><i class="icon-youtube"></i></a></li>
                            <li class="twitter"><a href="<?php echo $identitas->instagram?>"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="main_header">
        <!--header top start-->
        <div class="header_top">
           <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="header_account">
                            <ul>
                                <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> Indonesia <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                        <div class="logo">
                            <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 col-sm-6 col-6">
                        <div class="header_right_box">
                            <div class="search_container">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Mau sewa apa hari ini?" type="text">
                                        <button type="submit">Cari</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--header bottom satrt-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class=" col-lg-3">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle">SEMUA PRODUK</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                  <?php  foreach ($posts_templates_category as $post_new){
                                                 $isi = character_limiter($post_new->templates_cat_desk,200);
                                                 ?>
                                    <li><a href="<?php echo base_url("product/category/$post_new->templates_cat_judul_seo ") ?>"><?php echo $post_new->templates_cat_judul?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main_menu menu_position text-left">
                            <nav>
                                <ul>
                                  <li>
                                    <a href="#">Promo</a>
                                  </li>
                                    <li>
                                      <a href="#">Corporate Order</a>
                                    </li>
                                    <li>
                                      <a href="#">Reseller</a>
                                    </li>

                                    <li>
                                      <a href="#">Cara Pemesanan</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="main_menu  text-right">
                          <nav>
                              <ul>
                                  <li><a href="#"><i class="icon-user"> <?php echo $users['username'];?></i></a>
                                      <ul class="sub_menu pages">
                                        <li><a href="#">Akun Saya</a></li>
                                        <li><a href="#">Pesanan Saya</a></li>
                                        <li><a href="<?php echo base_url()?>aspanel/logout">Logout</a></li>

                                      </ul>
                                  </li>
                                  <li>
                                    <a href="<?php echo base_url()?>cart"><i class="icon-shopping-bag2"> Keranjang Belanja</i></a>
                                  </li>
                              </ul>
                          </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </div>
</header>
<?php } ?>
<?php if($this->session->level==''){ ?>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                          <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="call_support">
                        <p><i class="icon-phone-call" aria-hidden="true"></i> <span><a href="#">Chat by WhatsApp</a></span></p>

                    </div>
                    <div class="header_account">
                        <ul>
                            <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> Indonesia <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#">English</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header_top_links">
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Daftar</a></li>
                            <li><a href="#">Keranjang Belanja</a></li>
                        </ul>
                    </div>
                    <div class="search_container">
                        <form action="#">
                            <div class="search_box">
                                <input placeholder="Mau sewa apa hari ini?" type="text">
                                <button type="submit">Cari</button>
                            </div>
                        </form>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="#">Promo</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Corporate Order</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Reseller</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Cara Pemesanan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> <?php echo $identitas->email?></a></span>
                        <ul>
                            <li class="facebook"><a href="<?php echo $identitas->facebook?>"><i class="icon-facebook"></i></a></li>
                            <li class="pinterest"><a href="<?php echo $identitas->youtube?>"><i class="icon-youtube"></i></a></li>
                            <li class="twitter"><a href="<?php echo $identitas->instagram?>"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="main_header">
        <!--header top start-->
        <div class="header_top">
           <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="header_account">
                            <ul>
                                <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> Indonesia <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                        <div class="logo">
                            <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 col-sm-6 col-6">
                        <div class="header_right_box">
                            <div class="search_container">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Mau sewa apa hari ini?" type="text">
                                        <button type="submit">Cari</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--header bottom satrt-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class=" col-lg-3">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle">SEMUA PRODUK</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                  <?php  foreach ($posts_templates_category as $post_new){
                                                 $isi = character_limiter($post_new->templates_cat_desk,200);
                                                 ?>
                                    <li><a href="<?php echo base_url("product/category/$post_new->templates_cat_judul_seo ") ?>"><?php echo $post_new->templates_cat_judul?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main_menu menu_position text-left">
                            <nav>
                                <ul>
                                  <li>
                                    <a href="#">Promo</a>
                                  </li>
                                    <li>
                                      <a href="#">Corporate Order</a>
                                    </li>
                                    <li>
                                      <a href="#">Reseller</a>
                                    </li>

                                    <li>
                                      <a href="#">Cara Pemesanan</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="call_support text-right">
                            <p><span><a href="<?php echo base_url()?>login">LOGIN</a></span> | <span><a href="<?php echo base_url()?>register">DAFTAR</a></span> | <span><a href="<?php echo base_url()?>cart">KERANJANG BELANJA</a></span></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </div>
</header>
<?php } ?>
