<!--================ Home Banner Area =================-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100" src="images/slide/1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="images/slide/2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="images/slide/3.jpeg" alt="Third slide">
      </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
   </a>
</div>
<!--================ End Home Banner Area =================-->

<!--================ Choice Area =================-->
<section class="choice_area mt-4">
   <div class="container">
      <div class="main_title2">
         <h2>PILIHAN</h2>
      </div>
      <div class="row choice_inner">
         <?php foreach ($choice as $c) : ?>
            <div class="col-lg-3">
               <div class="choice_item">
                  <img class="img-fluid choice" src="<?= base_url("images/posting/$c->photo") ?>" alt="">
                  <div class="choice_text">
                     <div class="date">
                        <a class="gad_btn" href="<?= base_url("blog/category/$c->slug") ?>"><?= $c->category_name ?></a>
                        <a href="<?= base_url("blog/read/$c->seo_title") ?>" class="float-right">
                           <i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($c->date) ?>
                        </a>
                     </div>
                     <a href="<?= base_url("blog/read/$c->seo_title") ?>">
                        <h4><?= $c->title ?></h4>
                     </a>
                     <p><?= character_limiter($c->content, 70) ?></p>
                  </div>
               </div>
            </div>
         <?php endforeach ?>
      </div>
   </div>
</section>
<!--================End Choice Area =================-->

<!--================News Area =================-->
<section class="news_area mt-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">

            <!-- Last News -->
            <div class="main_title2">
               <h2>BERITA</h2>
            </div>
            <div class="latest_news">
               <?php foreach ($lastNews as $ln) : ?>
                  <div class="media">
                     <div class="d-flex">
                        <img class="img-fluid" src="<?= base_url("images/posting/$ln->photo") ?>" alt="">
                     </div>
                     <div class="media-body">
                        <div class="choice_text">
                           <div class="date">
                              <a class="gad_btn" href="<?= base_url("blog/category/$ln->slug") ?>"><?= $ln->category_name ?></a>
                              <a href="<?= base_url("blog/read/$ln->seo_title") ?>" class="float-right"><i class="fa fa-calendar" aria-hidden="true">
                                 </i><?= mediumdate_indo($ln->date) ?>
                              </a>
                           </div>
                           <a href="<?= base_url("blog/read/$ln->seo_title") ?>">
                              <h4><?= $ln->title ?></h4>
                           </a>
                           <p><?= character_limiter($ln->content, 100) ?></p>
                        </div>
                     </div>
                  </div>
               <?php endforeach ?>
            </div>
            <!-- End of Last News -->

            <div class="tavel_food mt-5">
               <div class="main_title2">
                  <h2> </h2>
               </div>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="row choice_small_inner">
                        <?php $no = 0; ?>
                        <?php foreach ($video_game as $vg) : ?>
                           <?php
                           $no++;
                           if ($no < 5) : ?>
                              <div class="col-lg-6 col-sm-6">
                                 <div class="choice_item small">
                                    <img class="img-fluid" src="<?= base_url("images/posting/$vg->photo") ?>" alt="">
                                    <div class="choice_text">
                                       <a href="<?= base_url("blog/read/$vg->seo_title") ?>">
                                          <h4><?= $vg->title ?></h4>
                                       </a>
                                       <div class="date">
                                          <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($vg->date) ?></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           <?php endif ?>
                        <?php endforeach ?>
                     </div>
                  </div>

                  <div class="col-lg-6">
                     <?php $no = 0; ?>
                     <?php foreach ($video_game as $vg) : ?>
                        <?php
                        $no++;
                        if ($no == 5) : ?>
                           <div class="choice_item">
                              <img class="img-fluid" src="<?= base_url("images/posting/$vg->photo") ?>" alt="">
                              <div class="choice_text">
                                 <div class="date">
                                    <a class="gad_btn" href="<?= base_url("blog/category/$vg->slug") ?>"><?= $vg->category_name ?></a>
                                    <a href="#" class="float-right"><i class="fa fa-calendar" aria-hidden="true"></i><?= mediumdate_indo($vg->date) ?></a>
                                 </div>
                                 <a href="<?= base_url("blog/read/$vg->seo_title") ?>">
                                    <h4><?= $vg->title ?></h4>
                                 </a>
                                 <p><?= character_limiter($vg->content, 150) ?></p>
                              </div>
                           </div>
                        <?php endif ?>
                     <?php endforeach ?>
                  </div>
               </div>
            </div>

            <div class="row mt-5">
               <div class="col text-center">
                  <a href="<?= base_url('blog') ?>" class="genric-btn danger-border circle arrow">More View<span class="lnr lnr-arrow-right"></span></a>
               </div>
            </div>

         </div>

         <!-- ================Sidebar================== -->
         <?php $this->load->view('front/layouts/_sidebar', $trending) ?>
         <!-- ================End of Sidebar================== -->

      </div>
   </div>
</section>
<!--================End News Area =================-->