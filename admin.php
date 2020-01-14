<?php include "src/header/headeradmin.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "src/admin/adminmenu.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">จัดการกิจกรรม</h1>
            </div>

            <!-- Content Row -->

            <div class="row">

                <!-- Area Chart -->
                <div class="col">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">
                            </h6> -->
                            <div class="row align-items-center">
                                <div class="col-2"><button type="button" class="btn-sm btn-warning"> แก้ไข </button></div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">ชื่อกิจกรรม</div>
                                <div class="col">ชื่อ</div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-2">ระยะเวลาโหวต</div>
                                <div class="col-10">
                                    <div class="input-group input-daterange">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">เริ่ม</span>
                                        </div>
                                        <input type="text" class="form-control " id="dates">
                                        <input type="text" class="form-control col-1 timepicker">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">ถึง</span>
                                        </div>
                                        <input type="text" class="form-control " id="datee">
                                        <input type="text" class="form-control col-1 timepicker">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">

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
    <!-- <script src="admin/js/demo/chart-area-demo.js"></script> -->
    <!-- <script src="admin/js/demo/chart-pie-demo.js"></script> -->
    <script src="src\admin\admin.js"></script>
</body>

</html>