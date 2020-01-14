<style>
  body {
    /* background: rgb(34, 186, 195);
    background: linear-gradient(0deg, rgba(34, 186, 195, 1) 0%, rgba(2, 12, 255, 1) 100%) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; */
    background: rgb(0, 136, 207);
    background: -moz-linear-gradient(0deg, rgba(0, 136, 207, 1) 51%, rgba(2, 12, 255, 1) 100%);
    background: -webkit-linear-gradient(0deg, rgba(0, 136, 207, 1) 51%, rgba(2, 12, 255, 1) 100%);
    background: linear-gradient(0deg, rgba(0, 136, 207, 1) 51%, rgba(2, 12, 255, 1) 100%) no-repeat center center fixed;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0088cf", endColorstr="#020cff", GradientType=1);
  }
</style>

<body class="">
  <div class="mt-3 container" style="width: 900px; height: 600px;">
    <div id="section1"></div>
    <section class="row no-gutter align-items-center">
      <div class="col-lg-12 text-center p-0 d-flex align-items-center">
        <img class="img-fluid position-relative mx-auto" src="assets/poster/poster.jpg" width="900px" height="600px" />
        <h1 class="w-100 position-absolute my-auto text-right fixed-top ">
          <div class="btn-group">
            <button type="button" class="btn" onclick="location.href='index.php?home'"><i class="fas fa-home text-primary" style="width: 44px;height: 44px;"></i></button>
            <button type="button" class="btn" style="width: 77px" onclick="location.href='login.php'"><img src="assets/system.svg" /></button>
          </div>
          <!-- <button type="button" class="btn" style="width: 10%" onclick="location.href='login.php'"><img src="assets/system.svg" /></button> -->
        </h1>
        <h3 class="w-100 position-absolute my-auto text-right fixed-bottom ">
          <button type="button" id="bdesc" class="btn btn-info btn-lg float-right" data-toggle="collapse" data-target="#description" aria-expanded="false" aria-controls="description">เงื่อนไข</button>
        </h3>
      </div>
    </section>
    <div id="section2"></div>
    <div class="collapse bg-info" id="description">
      <div class="row bg-info">
        <div class="col card card-body text-left bg-info">
          <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-info">คุณสมบัติ
              <ul class="">
                <li class="">-</li>
                <li class="">-</li>
                <li class="">-</li>
              </ul>
            </li>
            <li class="list-group-item list-group-item-info">กติกา
              <ul class="">
                <li class="">-</li>
                <li class="">-</li>
                <li class="">-</li>
              </ul>
            </li>
            <li class="list-group-item list-group-item-info">ช่องทางสมัคร
              <ul class="list-group">
                <li class="list-group-item list-group-item-info">email : <a href="mailto:glonextchapter2020@gmail.com" target="_blank">glonextchapter2020@gmail.com</a></li>
              </ul>
              <ul class="list-group">
                <li class="list-group-item list-group-item-info">ใบสมัคร : <a href='downloadfile.php?file=<?php echo urlencode("เงื่อนไขรับสมัคร 14 Jan.pdf");?>'>ดาวโหลด</a></li>
                <!-- <li class="list-group-item list-group-item-info">ใบสมัคร : <a href='assets/file/เงื่อนไขรับสมัคร 14 Jan.pdf'>ดาวโหลด</a></li> -->
              </ul>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php
  include "src/module/module.php";
  ?>

  <script src="src/signup/signup.js"></script>

</body>

</html>