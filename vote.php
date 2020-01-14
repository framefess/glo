<?php include "src/header/header.php"; ?>
<link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="src/vote/vote.css">

<body class="bg-gradient-light">
    <div class="container my-2">
        <div class="row">
            <div class="col text-center">
                <h1 class="">Vote</h1>
                <h1 class="w-100 position-absolute my-auto text-right fixed-top ">
                    <div class="btn-group">
                        <button type="button" class="btn" onclick="location.href='index.php'"><i class="fas fa-home text-primary" style="width: 44px;height: 44px;"></i></button>
                        <button type="button" class="btn" style="width: 70px" onclick="location.href='login.php'"><img src="assets/system.svg" /></button>
                    </div>
                </h1>
            </div>
        </div>
        <div class="card o-hidden border-0 shadow-lg my-2">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col d-lg-block border-right border-success">
                        <div class="text-center p-5">
                            <h1 class="h4 text-gray-900 mb-4">ทีมที่เลือก</h1>
                            <h1 class="h4 text-gray-900 mb-4">ชื่อทีม</h1>
                            <img class="" src="assets/avatar/1.jpg" style="height: 250px;object-fit:scale-down;"/>
                            <!-- <div class="centered text-dark">255*180</div> -->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">ข้อมูลผู้โหวต</h1>
                            </div>
                            <form>
                                <div class="form-group row">
                                    <label for="info" class="col-sm-12 col-form-label"></label>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 col-form-label">ชื่อ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="ชื่อ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 col-form-label">นามสกุล</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" placeholder="นามสกุล">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tel" class="col-sm-3 col-form-label">เบอร์โทรศัพท์</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tel" placeholder="เบอร์โทรศัพท์">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">รหัสผ่าน</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        <small class="text-muted">
                                            - ตั้งรหัสผ่านในการโหวตครั้งแรก
                                        </small>
                                        </br>
                                        <small class="text-muted">
                                            - ครั้งต่อ ๆ ไปใช้รหัสผ่านเดียวกันกับที่ตั้งในครั้งแรก
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-danger">โหวต</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include "src/module/module.php"; ?>
    <script src="src/vote/vote.js"></script>
</body>

</html>