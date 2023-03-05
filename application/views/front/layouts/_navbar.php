<?php
$this->load->model('category_model', 'category', true);
$navbar   = $this->category->getCategory();

$category = $this->uri->segment(3);
?>

<nav class="navbar navbar-light navbar-expand-lg navbar-light bg-light fixed-top home">
   <div class="container">
      <a href="<?= base_url() ?>" class="navbar-brand d-flex w-50 mr-auto">
         <img src="<?= base_url('images/brand/bappeda.png') ?>" width="50%" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
         <ul class="navbar-nav w-100 justify-content-center">
                         
         </ul>
         <form class="form-inline my-2 my-lg-0">
      <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DAFTAR OPD
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <?php foreach ($navbar as $n): ?>
                  
                <a class="dropdown-item" href="<?= base_url("blog/category/$n->slug") ?>"><?= $n->category_name ?></a>
               <?php endforeach ?>
              </div>
            </div>
    </form>
      </div>
   </div>
</nav>