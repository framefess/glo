<?php
include "src/header/header.php";
?>
<link rel="stylesheet" href="src/team/teaminfo.css">
<style>

</style>

<body class="bg-light">
    <div class="container my-2">
        <div class="row">
            <div class="col text-center">
                <h1 class="">ชื่อทีม</h1>
                <h1 class="w-100 position-absolute my-auto text-right fixed-top ">
                    <div class="btn-group">
                        <button type="button" class="btn" onclick="location.href='index.php'"><i class="fas fa-home text-primary" style="width: 44px;height: 44px;"></i></button>
                        <button type="button" class="btn" style="width: 70px" onclick="location.href='login.php'"><img src="assets/system.svg" /></button>
                    </div>
                </h1>
            </div>
        </div>
        <div class="row py-2">
            <div class="col py-2">
                <button type="button" class="btn btn-danger btn-lg btn-block" onclick="location.href='vote.php'">โหวตทีมนี้</button>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/N0FKgZXqyZk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/N0FKgZXqyZk"></iframe>
                </div>
            </div>
        </div>
        <div class="row py-2">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        <h2>รายละเอียด</h2>
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title">Special title treatment</h5> -->
                        <p class="card-text text-left">รายละเอียด</p>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                    <!-- <div class="card-footer text-muted">
                        2 days ago
                    </div> -->
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        <h2>PDF preview</h2>
                    </div>
                    <div class="card-body">
                        <!-- <object data="src/pdf/resume.pdf" type="application/pdf" width="100%" height="800px">
                            <p>It appears you don't have a PDF plugin for this browser.
                                No biggie... you can <a href="resume.pdf">click here to
                                    download the PDF file.</a></p>
                        </object> -->
                        <object data="src/pdf/resume.pdf" type="application/pdf" width="100%" height="800px">
                            <iframe src="https://docs.google.com/viewer?url=src/pdf/resume.pdf&embedded=true"></iframe>
                        </object>
                        <p class="card-text text-left"></p>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        <h2>รูปประกอบ</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <a href="assets/img/1.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                <img src="assets/img/1.jpg" class="img-fluid rounded">
                            </a>
                            <a href="assets/img/2.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                <img src="assets/img/2.jpg" class="img-fluid rounded">
                            </a>
                            <a href="assets/img/3.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                <img src="assets/img/3.jpg" class="img-fluid rounded">
                            </a>
                        </div>
                        <div class="row py-2">
                            <a href="assets/img/4.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                <img src="assets/img/4.jpg" class="img-fluid rounded">
                            </a>
                            <a href="assets/img/5.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                <img src="assets/img/5.jpg" class="img-fluid rounded">
                            </a>
                            <!-- <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded">
                            </a> -->
                        </div>
                        <p class="card-text text-left"></p>
                    </div>
                    <div class="card-footer text-muted">
                        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="location.href='vote.php'">โหวตทีมนี้</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "src/module/module.php"; ?>
    <script src="src/team/teaminfo.js"></script>

</body>

</html>