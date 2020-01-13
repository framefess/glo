<?php include "src/header/headeradmin.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "src/admin/adminmenu.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">ผู้โหวต</h1>
            <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>เบอร์</th>
                                    <th>จำนวนการโหวต(ครั้ง)</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>เบอร์</th>
                                    <th>จำนวนการโหวต(ครั้ง)</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ชื่อ1</td>
                                    <td>นามสกุล1</td>
                                    <td>xxx-xxxxxxx</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>ชื่อ2</td>
                                    <td>นามสกุล2</td>
                                    <td>xxx-xxxxxxx</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>ชื่อ3</td>
                                    <td>นามสกุล3</td>
                                    <td>xxx-xxxxxxx</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>ชื่อ4</td>
                                    <td>นามสกุล4</td>
                                    <td>xxx-xxxxxxx</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>ชื่อ5</td>
                                    <td>นามสกุล5</td>
                                    <td>xxx-xxxxxxx</td>
                                    <td>100</td>
                                </tr>

                            </tbody>
                        </table>
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

    <!-- Page level custom scripts -->
    <script src="src/admin/adminteam.js"></script>

</body>

</html>