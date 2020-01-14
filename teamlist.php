<?php
include "src/header/header.php";
?>
<link rel="stylesheet" href="src/team/teamlist.css">
<style>
    .card-img-top {
        width: 255px;
        height: 180px;
        /* position: relative; */
        /* text-align: center; */
        color: white;
        background-color: gray;
        object-fit: cover;
        object-position: 0 25%;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<body class="bg-light">
    <div class="container my-2">
        <div class="row">
            <div class="col text-center">
                <h1 class="">ทีมที่เข้าร่วม</h1>
                <h1 class="w-100 position-absolute my-auto text-right fixed-top ">
                    <div class="btn-group">
                        <button type="button" class="btn" onclick="location.href='index.php'"><i class="fas fa-home text-primary" style="width: 44px;height: 44px;"></i></button>
                        <button type="button" class="btn" style="width: 70px" onclick="location.href='login.php'"><img src="assets/system.svg" /></button>
                    </div>
                </h1>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="assets/avatar/1.jpg">
                    <!-- <div class="centered">255*180</div> -->
                    <div class="card-body">
                        <h5 class="card-title">ทีมที่ 1</h5>
                        <a href="teaminfo.php" class="btn btn-primary">ข้อมูลทีม</a>
                        <a href="vote.php" class="btn btn-danger">โหวต</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="assets/avatar/2.jpg">
                    <!-- <div class="centered">255*180</div> -->
                    <div class="card-body">
                        <h5 class="card-title">ทีมที่ 2</h5>
                        <a href="teaminfo.php" class="btn btn-primary">ข้อมูลทีม</a>
                        <a href="vote.php" class="btn btn-danger">โหวต</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="assets/avatar/3.jpg">
                    <!-- <div class="centered">255*180</div> -->
                    <div class="card-body">
                        <h5 class="card-title">ทีมที่ 3</h5>
                        <a href="teaminfo.php" class="btn btn-primary">ข้อมูลทีม</a>
                        <a href="vote.php" class="btn btn-danger">โหวต</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="assets/avatar/4.jpg">
                    <!-- <div class="centered">255*180</div> -->
                    <div class="card-body">
                        <h5 class="card-title">ทีมที่ 4</h5>
                        <a href="teaminfo.php" class="btn btn-primary">ข้อมูลทีม</a>
                        <a href="vote.php" class="btn btn-danger">โหวต</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-2">

            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="assets/avatar/5.jpg">
                    <!-- <div class="centered">255*180</div> -->
                    <div class="card-body">
                        <h5 class="card-title">ทีมที่ 5</h5>
                        <a href="teaminfo.php" class="btn btn-primary">ข้อมูลทีม</a>
                        <a href="vote.php" class="btn btn-danger">โหวต</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "src/module/module.php"; ?>

</body>

</html>