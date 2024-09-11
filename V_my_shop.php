<?php
// File yang memuat sidebar, misalnya V_my_shop.php
$activePage = basename(__FILE__, ".php");
?>












<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template"
    data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - eCommerce | Materialize - Material Design HTML Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/remixicon/remixicon.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
    <!-- Form Validation -->
    <link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">


            <?php
            include 'Template/V_Sidebar.php';
            ?>


            <!-- Layout container -->
            <div class="layout-page">

                <?php
                include 'Template/V_Navbar.php';
                ?>

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row g-4 mb-4">
                            <!-- Kolom Kiri: DataTable -->
                            <div class="col-lg-8">
                                <!-- DataTable with Buttons -->
                                <div class="card">
                                    <div class="card-datatable table-responsive pt-0">
                                        <table class="datatables-basic table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Date</th>
                                                    <th>Salary</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <!--/ DataTable with Buttons -->
                            </div>

                            <!-- Kolom Kanan: Cards Ratings dan Sessions -->
                            <div class="col-lg-4">
                                <!-- Card Ratings -->
                                <div class="card mb-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <div class="card-info mb-5">
                                                    <h6 class="mb-2 text-nowrap">Ratings</h6>
                                                    <div class="badge bg-label-primary rounded-pill lh-xs">Year of 2021
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <h4 class="mb-0 me-2">8.14k</h4>
                                                    <p class="mb-0 text-success">+15.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end d-flex align-items-end">
                                            <div class="card-body pb-0 pt-7">
                                                <img src="../../assets/img/illustrations/card-ratings-illustration.png"
                                                    alt="Ratings" class="img-fluid" width="95" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Card Ratings -->

                                <!-- Card Sessions -->
                                <div class="card">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <div class="card-info mb-5">
                                                    <h6 class="mb-2 text-nowrap">Sessions</h6>
                                                    <div class="badge bg-label-success rounded-pill lh-xs">Last Month
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <h4 class="mb-0 me-2">12.2k</h4>
                                                    <p class="mb-0 text-danger">-25.5%</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end d-flex align-items-end">
                                            <div class="card-body pb-0 pt-7">
                                                <img src="../../assets/img/illustrations/card-session-illustration.png"
                                                    alt="Ratings" class="img-fluid" width="81" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Card Sessions -->
                            </div>
                        </div>

                        <!-- Modal to add new record -->
                        <div class="offcanvas offcanvas-end" id="add-new-record">
                            <div class="offcanvas-header border-bottom">
                                <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body flex-grow-1">
                                <form class="add-new-record pt-0 row g-3" id="form-add-new-record"
                                    onsubmit="return false">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-merge">
                                            <span id="basicFullname2" class="input-group-text"><i
                                                    class="ri-user-line ri-18px"></i></span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="basicFullname" class="form-control dt-full-name"
                                                    name="basicFullname" placeholder="John Doe" aria-label="John Doe"
                                                    aria-describedby="basicFullname2" />
                                                <label for="basicFullname">Full Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-merge">
                                            <span id="basicPost2" class="input-group-text"><i
                                                    class="ri-briefcase-line ri-18px"></i></span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="basicPost" name="basicPost"
                                                    class="form-control dt-post" placeholder="Web Developer"
                                                    aria-label="Web Developer" aria-describedby="basicPost2" />
                                                <label for="basicPost">Post</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="ri-mail-line ri-18px"></i></span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="basicEmail" name="basicEmail"
                                                    class="form-control dt-email" placeholder="john.doe@example.com"
                                                    aria-label="john.doe@example.com" />
                                                <label for="basicEmail">Email</label>
                                            </div>
                                        </div>
                                        <div class="form-text">You can use letters, numbers & periods</div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-merge">
                                            <span id="basicDate2" class="input-group-text"><i
                                                    class="ri-calendar-2-line ri-18px"></i></span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" class="form-control dt-date" id="basicDate"
                                                    name="basicDate" aria-describedby="basicDate2"
                                                    placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                                <label for="basicDate">Joining Date</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-merge">
                                            <span id="basicSalary2" class="input-group-text"><i
                                                    class="ri-money-dollar-circle-line ri-18px"></i></span>
                                            <div class="form-floating form-floating-outline">
                                                <input type="number" id="basicSalary" name="basicSalary"
                                                    class="form-control dt-salary" placeholder="12000"
                                                    aria-label="12000" aria-describedby="basicSalary2" />
                                                <label for="basicSalary">Salary</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit"
                                            class="btn btn-primary data-submit me-sm-4 me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary"
                                            data-bs-dismiss="offcanvas">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ Modal to add new record -->
                        <!-- <div class="row g-6 mb-6">

                        </div> -->
                    </div>



                    <!-- / Content -->

                    <!-- Footer -->
                    <?php
                    include 'Template/V_Footer.php';
                    ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <!-- Flat Picker -->
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <!-- Form Validation -->
    <script src="../../assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/tables-datatables-basic.js"></script>
</body>

</html>