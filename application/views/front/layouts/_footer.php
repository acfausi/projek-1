<!--================ start footer Area  =================-->
<footer class="footer-area mt-5">
   <div class="container">
      <div class="row f_widgets_inner">
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget ab_widgets">
               <div class="f_title">
                  <h3>BAPPEDA SUMENEP</h3>
               </div>
               <p>Portal Informasi BAPPEDA KAB. SUMENEP</p>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
               <div class="f_title">
                  <h3>LINK</h3>
               </div>
               <div class="row">
                  <div class="col-6">
                     <h5 style="color: white">KATEGORI</h5>
                     <ul class="list mt-3">
                        <?php foreach ($category as $c) : ?>
                           <li><a href="<?= base_url("blog/category/$c->slug") ?>"><?= $c->category_name ?></a></li>
                        <?php endforeach ?>
                     </ul>
                  </div>
                  <div class="col-6">
                     <h5 style="color: white">INFO</h5>
                     <ul class="list">
                        <li><a href="<?= base_url('contact') ?>">TENTANG</a></li>
                        <li><a href="#">KONTAK</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <div class="row footer-bottom d-flex justify-content-between align-items-center">
         <div class="col-lg-12">
            <div class="f_boder"></div>
         </div>
         <p class="col-lg-8 col-md-8 footer-text">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
               document.write(new Date().getFullYear());
            </script> All rights reserved | made with <i aria-hidden="true"></i> by <a href="https://instinctechnology.com" target="_blank">INSTINC.ID</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
         </p>
      </div>
   </div>
</footer>
<!--================ End footer Area  =================-->