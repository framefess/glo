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
                        <button type="button" class="btn" style="width: 70px"><img src="assets/system.svg" /></button>
                    </div>
                </h1>
            </div>
        </div>
        <center>
            <div class="row py-3" style="width: 40%">
                <div class="col text-left">
                    <form>
                        
                        <div class="form-group row">
                            <label for="team" class="col-sm-3 col-form-label">โหวตทีม</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="team" placeholder="ชื่อทีม" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="info" class="col-sm-12 col-form-label">ข้อมูลผู้โหวต</label>
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
                                <input type="text" class="form-control" id="fname" placeholder="นามสกุล">
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
        </center>
    </div>
    <?php include "src/module/module.php"; ?>
    <script src="src/vote/vote.js"></script>
</body>

</html>