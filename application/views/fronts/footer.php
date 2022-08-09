<!--footer area start-->
<footer class="footer_widgets">
    <div class="footer_top">
        <div class="container">
            <div class="row">
              <div class="col-lg-1">

              </div>
              <div class="col-lg-3">
                  <div class="widgets_container">
                      <h3>CONTACT INFO</h3>
                      <div class="footer_contact">
                         <div class="footer_contact_inner">
                              <div class="contact_icone">
                                  <img src="<?php echo base_url()?>bahan/frontend/img/icon/icon-phone.png" alt="">
                              </div>
                              <div class="contact_text">
                                  <p>Hotline Free 24/24: <br> <strong><a href="tel:+<?php echo $identitas->no_telp?>"><?php echo $identitas->no_telp?></a> </strong></p>
                              </div>
                          </div>
                          <p><?php echo $identitas->meta_deskripsi?></p>
                          <p><?php echo $identitas->alamat?></p>
                          <p><?php echo $identitas->email?></p>
                          <div class="footer_social">
                             <ul>
                                 <li><a class="facebook" href="<?php echo $identitas->facebook?>"><i class="icon-facebook"></i></a></li>
                                 <li><a class="youtube" href="<?php echo $identitas->youtube?>"><i class="icon-youtube"></i></a></li>
                                 <li><a class="instagram2" href="<?php echo $identitas->instagram?>"><i class="icon-instagram2"></i></a></li>
                             </ul>
                         </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-8">
                 <div class="footer_col_container">
                      <div class="widgets_container widget_menu">
                          <h3>Layanan Pelanggan</h3>
                          <div class="footer_menu">
                              <ul>
                                  <li><a href="#">Cara Pemesanan</a></li>
                                  <li><a href="#">Konfirmasi Pembayaran</a></li>
                                  <li><a href="#">Lacak Pengiriman</a></li>

                              </ul>
                          </div>
                      </div>
                      <div class="widgets_container widget_menu">
                          <h3>Bisnis Informasi</h3>
                          <div class="footer_menu">
                              <ul>
                                  <li><a href="#">Tentang Kami</a></li>
                                  <li><a href="#">Reseller</a></li>
                                  <li><a href="#">Karir</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="widgets_container widget_menu">
                          <h3>Extras</h3>
                          <div class="footer_menu">
                              <ul>
                                  <li><a href="#">Garansi</a></li>
                                  <li><a href="#">FAQs</a></li>
                                  <li><a href="#">Artikel</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>


            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_area">
                        <p>Copyright &copy; 2022 <a href="#"><?php echo $identitas->nama_website?></a> | Development by <a href="https://www.crudbiz.com">Crudbiz</a> All Right Reserve
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="footer_payment text-right">
                        <img src="<?php echo base_url()?>bahan/frontend/img/icon/payment.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->
</div>
