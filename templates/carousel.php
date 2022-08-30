
<!-- Carousel wrapper -->
<div  id="carouselMultiItemExample2" class="carousel slide position-relative py-5 align-items-center" data-bs-ride="carousel" >
  <!-- Controls -->
  <div class="d-flex justify-content-between mb-4 w-100">
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMultiItemExample2" data-bs-slide="prev">
      <i class="fas fa-angle-double-left fs-1 text-dark fa-x8 "></i>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselMultiItemExample2" data-bs-slide="next">
      <i class="fas fa-angle-double-right fs-1 text-dark  "></i>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <?php
        $a = $con->query("SELECT * from images_b  order by id DESC ")->fetch_all() or die(mysqli_error($con));  
        foreach ($a as $i => $v) {
            // print_r($a);
            ?>
            <div class="carousel-item <?php echo $i == 0 ? 'active' : ''; ?>">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card">
                      <img src="<?php echo 'templates/admin/SuperAdmin/img/'.$a[$i][1] ?>" class="card-img-top" alt="Waterfall"/>
                      <!-- <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk
                          of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Button</a>
                      </div> -->
                    </div>
                  </div>
            
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="card">
                      <img src="<?php echo 'templates/admin/SuperAdmin/img/'.$a[$i+1][1] ?>" class="card-img-top" alt="Sunset Over the Sea"/>
                      <!-- <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk
                          of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Button</a>
                      </div> -->
                    </div>
                  </div>
            
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="card">
                      <img src="<?php echo 'templates/admin/SuperAdmin/img/'.$a[$i+2][1]  ?>" class="card-img-top" alt="Sunset over the Sea"/>
                      <!-- <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                          Some quick example text to build on the card title and make up the bulk
                          of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Button</a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

    <?php } ?>

  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->

