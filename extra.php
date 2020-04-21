<?php include 'lib/bootstrap.php'; ?>
<?php include 'lib/header.php'; ?>

<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Academic Memberships
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Using basic PHP and MySQL database
        <br>
        <br>
        <a class="btn btn-info" href="http://baiusthall.byethost13.com/" target="_blank">Live Demo</a>
        <a class="btn btn-info" href="https://github.com/Arik096/baiusthall" target="_blank">GitHub</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Volunteer Acitvities
        </button>
      </h5>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Using basic PHP and MySQL database
        <br>
        <br>
        <a class="btn btn-info" href="http://baiusthall.byethost13.com/" target="_blank">Live Demo</a>
        <a class="btn btn-info" href="https://github.com/Arik096/personal_blog" target="_blank">GitHub</a>
      </div>
    </div>
  </div>
</div>
<?php include 'lib/footer.php'; ?>
