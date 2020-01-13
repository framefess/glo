<?php include "src/header/headeradmin.php"; ?>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="w-100 position-absolute my-auto text-right fixed-top ">
              <div class="btn-group">
                <button type="button" class="btn" onclick="location.href='index.php'" style="width: 100px"><i class="fas fa-home text-primary" style="font-size: 3rem;"></i></button>
                <button type="button" class="btn" style="width: 70px" onclick="location.href='login.php'"><img src="assets/system.svg" style="width:100%; height:100%;" /></button>
              </div>
            </div>
            <div class="row justify-content-center">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="w-100"></div>
              <div class="col col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 ">ผู้ดูแล</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                    <a href="admin.php" class="btn btn-primary btn-user btn-block">
                      เข้าสู่ระบบ
                    </a>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php include "src/module/moduleadmin.php"; ?>
</body>

</html>