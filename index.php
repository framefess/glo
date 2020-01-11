<?php
include "src/header/header.php";
?>

<body class="bg-info">
  <div class="mt-3 container" style="width: 900px; height: 600px;">
  <div id="section1"></div>
    <section class="row no-gutter align-items-center">
      <div class="col-lg-12 text-center p-0 d-flex align-items-center">
        <img class="img-fluid position-relative mx-auto" src="http://via.placeholder.com/900x600" width="900px" height="600px" />
        <h1 class="w-100 position-absolute my-auto text-right fixed-top "><button type="button" class="btn" style="width: 10%"><img src="assets/system.svg" /></button></h1>
        <h3 class="w-100 position-absolute my-auto text-right fixed-bottom ">
          <button type="button" id="bdesc" class="btn btn-info btn-lg float-right" data-toggle="collapse" data-target="#description" aria-expanded="false" aria-controls="description">รายละเอียด</button>
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
                <li class="list-group-item list-group-item-info">email : <a href="mailto:some@email.com" target="_blank">email@email.com</a></li>
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

  <script>
    $("p:eq(1)").text("test")

    $("#bdesc").on("click", function() {
      if ($("#description").hasClass("show") == false) {
        $('html,body').animate({
          scrollTop: $("#section2").offset().top
        }, '2000');
        
      }else{
        $('html,body').animate({
          scrollTop: $("#section1").offset().top
        }, 'slow');
      }
    })
  </script>
</body>

</html>