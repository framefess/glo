<?php include "src/header/headeradmin.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "src/admin/adminmenu.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">การโหวต</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ทีม</h6>
                        </div>
                        <div class="card-body">
                            <h4 class="small font-weight-bold">ชื่อที่มที 1<span class="float-right">100 คะแนน</span> </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small font-weight-bold">ชื่อที่มที 2<span class="float-right">100 คะแนน</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small font-weight-bold">ชื่อที่มที 3<span class="float-right">100 คะแนน</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small font-weight-bold">ชื่อที่มที 4<span class="float-right">100 คะแนน</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small font-weight-bold">ชื่อที่มที 5<span class="float-right">100 คะแนน</span></h4>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Bar Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ทีม</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="myBarChart"></canvas>
                            </div>
                            <hr>
                            <!-- Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file. -->
                        </div>
                    </div>

                    <!-- card view -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">รายละเอียดการโหวตให้แต่ละทีม
                                <select class="col-6 custom-select">
                                    <option selected>เลือกทีม</option>
                                    <option value="1">ชื่อที่มที 1</option>
                                    <option value="2">ชื่อที่มที 2</option>
                                    <option value="3">ชื่อที่มที 3</option>
                                    <option value="4">ชื่อที่มที 4</option>
                                    <option value="5">ชื่อที่มที 5</option>
                                </select>
                            </h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">ชื่อ นามสกุล</th>
                                                <th scope="col">จำนวนที่โหวตให้</th>
                                                <th scope="col">วันที่โหวตล่าสุด</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>ชื่อที่ 1</td>
                                                <td>100</td>
                                                <td>01/01/2020</td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <?php include "src/module/moduleadmin.php"; ?>

    <!-- Page level plugins -->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/chart-area-demo.js"></script>
    <script src="admin/js/demo/chart-pie-demo.js"></script>
    <script src="src\admin\adminmvote.js"></script>
</body>

</html>