
<!-- Carousel wrapper -->
<div  id="carouselMultiItemExample2" class="carousel slide" data-bs-ride="carousel" >
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <button class="carousel-control-prev position-relative" type="button" data-mdb-target="#carouselMultiItemExample2" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next position-relative" type="button" data-mdb-target="#carouselMultiItemExample2" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
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

