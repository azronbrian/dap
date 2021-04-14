<?php 

  include('db/config.php');

  $sql = "SELECT img FROM partners";

  $results = mysqli_query($conn, $sql);

  $partners = [];
  while($partner = $results->fetch_assoc()){
    $partners[] = $partner;
  }

  include('header.php'); 

?>


  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/dap-1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/dap-2.jpg" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <br><br>
    <h1 class="my-4 text-center">Digital Apprenticeship Program</h1>
    <p class="text-center" id="tagline">Developing Digital Skills through Apprenticeships</p>

    <h4 class="text-center">This is a program implemented by EldoHub in partnership with Thunderbird School of Global Management (Arizona State University) supported by the UK-Kenya Tech Hub that places junior tech professionals in host businesses to work on specific digital projects for three months while receiving 1:1 mentorship from experienced professionals in the tech industry.</h4>

    <br><br>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
          <img src="img/work.png" class="component-img card-img-top mx-auto" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Digital Project</h5>
            <p class="card-text">Gain practical working experience on a specific digital project.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
          <img src="img/training.png" class="component-img card-img-top mx-auto" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Training</h5>
            <p class="card-text">Acquire soft skills from a #1 ranked global institution.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
          <img src="img/mentorship.png" class="component-img card-img-top mx-auto" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Mentorship</h5>
            <p class="card-text">Get a 1:1 mentorship from experienced tech professionals.</p>
          </div>
        </div>
      </div>      
    </div>

    <br>

    <h2 class="my-4 text-center">Meet Cohort 1 JTPs</h2>
    <div class="row d-flex align-items-center">
      <div class="col">
        <p class="text-center" id="video-text">
          The 40 JTPs were placed in 40 host businesses and matched with 40 mentors. 
        </p>
      </div>
      <div class="col">
        <embed src="https://youtube.com/embed/QqYtlgvmyfk" type="" id="jtp-video">
      </div>      
    </div>
  </div>
  <!-- /.container -->

  <div class="bg-light mt-4 mb-4 p-4">
    <h2 class="my-4 text-center">Corporate Partners</h2>

    <div class="container">
      <div class="row owl-carousel">

        <?php foreach ($partners as $partner) : ?>

          <div style="height: 180px; width: 180px;">
            <?php 
              $img = 'https://res.cloudinary.com/dlbuuppr8/image/upload/v1618306568/partners/' . $partner['img'];
            ?>
            <img src="<?php echo $img; ?>" alt="" style="height: 100%; width: 100%; object-fit: contain">
          </div>

        <?php endforeach; ?>
        
      </div>      
    </div>


  </div>

  <div class="container">
    <br>
    <h2 class="my-4 text-center">Powered by</h2>
    <div class="row mb-3">
      <img id="support-logos" class="mx-auto" src="img/logo.png" alt="">
    </div>
  </div>

<?php include('footer.php'); ?>

