<?php
// Mendapatkan nama file yang sedang dibuka
$current_page = basename($_SERVER['PHP_SELF']);
?>


<!DOCTYPE html>
<html lang="en">

<body>
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <span style="color: var(--bs-primary)">
                        <svg width="268" height="150" viewBox="0 0 38 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                                fill="currentColor" />
                            <path
                                d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                                fill="url(#paint0_linear_2989_100980)" fill-opacity="0.4" />
                            <path
                                d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                                fill="currentColor" />
                            <path
                                d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                fill="currentColor" />
                            <path
                                d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                                fill="url(#paint1_linear_2989_100980)" fill-opacity="0.4" />
                            <path
                                d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                                fill="currentColor" />
                            <defs>
                                <linearGradient id="paint0_linear_2989_100980" x1="5.36642" y1="0.849138" x2="10.532"
                                    y2="24.104" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-opacity="1" />
                                    <stop offset="1" stop-opacity="0" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_2989_100980" x1="5.19475" y1="0.849139" x2="10.3357"
                                    y2="24.1155" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-opacity="1" />
                                    <stop offset="1" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                </span>
                <span class="app-brand-text demo menu-text fw-semibold ms-2">Materialize</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.47365 11.7183C8.11707 12.0749 8.11707 12.6531 8.47365 13.0097L12.071 16.607C12.4615 16.9975 12.4615 17.6305 12.071 18.021C11.6805 18.4115 11.0475 18.4115 10.657 18.021L5.83009 13.1941C5.37164 12.7356 5.37164 11.9924 5.83009 11.5339L10.657 6.707C11.0475 6.31653 11.6805 6.31653 12.071 6.707C12.4615 7.09747 12.4615 7.73053 12.071 8.121L8.47365 11.7183Z"
                        fill-opacity="0.9" />
                    <path
                        d="M14.3584 11.8336C14.0654 12.1266 14.0654 12.6014 14.3584 12.8944L18.071 16.607C18.4615 16.9975 18.4615 17.6305 18.071 18.021C17.6805 18.4115 17.0475 18.4115 16.657 18.021L11.6819 13.0459C11.3053 12.6693 11.3053 12.0587 11.6819 11.6821L16.657 6.707C17.0475 6.31653 17.6805 6.31653 18.071 6.707C18.4615 7.09747 18.4615 7.73053 18.071 8.121L14.3584 11.8336Z"
                        fill-opacity="0.4" />
                </svg>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Apps & Pages -->
            <li class="menu-header mt-5">
                <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
            </li>
            <li class="menu-item <?php echo ($current_page == 'V_my_shop.php') ? 'active' : ''; ?>" id="menu-my-shop">
                <a href="V_my_shop.php" class="menu-link">
                    <i class="menu-icon tf-icons ri-home-smile-line"></i>
                    <div data-i18n="My Shop">My Shop</div>
                </a>
            </li>
            <!-- Repair menu start -->
            <li class="menu-item <?php echo ($current_page == 'V_Repair_my_dashboard.php' || $current_page == 'app-Repair-alldata.php' || $current_page == 'app-Repair-penggunaan_sparepart.php' || $current_page == 'app-Repair-kas.php' || $current_page == 'app-Repair-garansi.php' || strpos($current_page, 'app-Repair-list_') !== false || strpos($current_page, 'app-Repair-') !== false) ? 'active open' : ''; ?>"
                id="menu-repair">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon ri-tools-fill"></i>
                    <div data-i18n="Repair">Repair</div>
                </a>
                <ul class="menu-sub" id="menu-repair-dashboard">
                    <li class="menu-item <?php echo ($current_page == 'V_Repair_my_dashboard.php') ? 'active' : ''; ?>">
                        <a href="V_Repair_my_dashboard.php" class="menu-link">
                            <div data-i18n="My Dashboard">My Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-Repair-alldata.php" class="menu-link">
                            <div data-i18n="All Data">All Data</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-Repair-penggunaan_sparepart.php" class="menu-link">
                            <div data-i18n="Penggunaan_Sparepart">Penggunaan_Sparepart</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-Repair-kas.php" class="menu-link">
                            <div data-i18n="Kas">Kas</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-Repair-garansi.php" class="menu-link">
                            <div data-i18n="Garansi">Garansi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="List">List</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-Repair-list_antri.php" class="menu-link">
                                    <div data-i18n="Antri">Antri</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-Repair-list_proses.php" class="menu-link">
                                    <div data-i18n="Proses">Proses</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-Repair-list_selesai.php" class="menu-link">
                                    <div data-i18n="Selesai">Selesai</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-Repair-list_batal.php" class="menu-link">
                                    <div data-i18n="Batal">Batal</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-Repair-list_diambil.php" class="menu-link">
                                    <div data-i18n="Diambil">Diambil</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-Repair-list_refund.php" class="menu-link">
                                    <div data-i18n="Refund">Refund</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Data Laporan">Data Laporan</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-Repair-daily.php" class="menu-link">
                                    <div data-i18n="Daily">Daily</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-Repair-all.php" class="menu-link">
                                    <div data-i18n="All">All</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- Repair menu end -->
            <!-- Perangkat menu start -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon ri-smartphone-line"></i>
                    <div data-i18n="Perangkat">Perangkat</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-Perangkat-mydashboard.php" class="menu-link">
                            <div data-i18n="My Dashboard">My Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-Perangkat-penjualan.php" class="menu-link">
                            <div data-i18n="Penjualan">Penjualan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-Perangkat-list.php" class="menu-link">
                            <div data-i18n="List">List</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-Perangkat-garansi.php" class="menu-link">
                            <div data-i18n="Garansi">Garansi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Data Laporan">Data Laporan</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-Perangkat-daily.php" class="menu-link">
                                    <div data-i18n="Daily">Daily</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-Perangkat-all.php" class="menu-link">
                                    <div data-i18n="All">All</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Group">Group</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-Perangkat-category.php" class="menu-link">
                                    <div data-i18n="Category">Category</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-Perangkat-sub.php" class="menu-link">
                                    <div data-i18n="Sub">Sub</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-Perangkat-grouping.php" class="menu-link">
                                    <div data-i18n="Grouping">Grouping</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- Perangkat menu end -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon ri-cpu-line"></i>
                    <div data-i18n="Acc & Sparepart">Acc & Sparepart</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-acc_sparepart-mydashboard.php" class="menu-link">
                            <div data-i18n="My Dashboard">My Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-acc_sparepart-penjualan.php" class="menu-link">
                            <div data-i18n="Penjualan">Penjualan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-acc_sparepart-list.php" class="menu-link">
                            <div data-i18n="List">List</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-acc_sparepart-garansi.php" class="menu-link">
                            <div data-i18n="Garansi">Garansi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Data Laporan">Data Laporan</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-acc_sparepart-daily.php" class="menu-link">
                                    <div data-i18n="Daily">Daily</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-acc_sparepart-all.php" class="menu-link">
                                    <div data-i18n="All">All</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-acc_sparepart_most_sales.php" class="menu-link">
                                    <div data-i18n="Most Sales">Most Sales</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon ri-file-list-3-line"></i>
                    <div data-i18n="Produk">Produk</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-produk_kategori.php" class="menu-link">
                            <div data-i18n="Kategori">Kategori</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-produk_sub_kategori.php" class="menu-link">
                            <div data-i18n="Sub Kategori">Sub Kategori</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-produk_produk.php" class="menu-link">
                            <div data-i18n="Produk">Produk</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-produk_pembelian.php" class="menu-link">
                            <div data-i18n="Pembelian">Pembelian</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-produk_pengembalian.php" class="menu-link">
                            <div data-i18n="Pengembalian">Pengembalian</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <div data-i18n="Supplier">Supplier</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="app-produk_list_supplier.php" class="menu-link">
                                    <div data-i18n="List Supplier">List Supplier</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="app-produk_invoice.php" class="menu-link">
                                    <div data-i18n="Invoice">Invoice</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon ri-folder-open-line"></i>
                    <div data-i18n="Pengeluaran">Pengeluaran</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-pengeluaran_toko.php" class="menu-link">
                            <div data-i18n="Pengeluaran Toko">Pengeluaran Toko</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="app-pengeluaran_operasional.php" class="menu-link">
                            <div data-i18n="Operasional (OpEx)">Operasional (OOpEx)</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon ri-file-chart-line"></i>
                    <div data-i18n="Data Laporan">Data Laporan</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="app-data_laporan_all_data.php" class="menu-link">
                            <div data-i18n="All Data">All Data</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="credit.php" class="menu-link">
                    <i class="menu-icon ri-secure-payment-line"></i>
                    <div data-i18n="Credit">Credits</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="customers.php" class="menu-link">
                    <i class="menu-icon ri-team-line"></i>
                    <div data-i18n="Customers">Customers</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="alat_inventaris.php" class="menu-link">
                    <i class="menu-icon ri-store-2-line"></i>
                    <div data-i18n="Alat & Inventaris (CapEx)">Alat & Inventaris (CapEx)</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon ri-equalizer-line"></i>
                    <div data-i18n="Setting">Setting</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="setting_payment.php" class="menu-link">
                            <div data-i18n="Payment">Payment</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_pegawai.php" class="menu-link">
                            <div data-i18n="Pegawai">Pegawai</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_persentase.php" class="menu-link">
                            <div data-i18n="Persentase">Persentase</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_toko.php" class="menu-link">
                            <div data-i18n="Toko">Toko</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_banner.php" class="menu-link">
                            <div data-i18n="Banner">Banner</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_template.php" class="menu-link">
                            <div data-i18n="Template">Template</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_promo.php" class="menu-link">
                            <div data-i18n="Promo">Promo</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_testimoni.php" class="menu-link">
                            <div data-i18n="Testimoni">Testimoni</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_invoice.php" class="menu-link">
                            <div data-i18n="Invoice">Invoice</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_tax.php" class="menu-link">
                            <div data-i18n="TAX">TAX</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_custom_domain.php" class="menu-link">
                            <div data-i18n="Custom Domain">Custom Domain</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_voucher.php" class="menu-link">
                            <div data-i18n="Voucher">Voucher</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_reset_dashboard.php" class="menu-link">
                            <div data-i18n="Reset Dashboard">Reset Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="setting_factory_reset_data.php" class="menu-link">
                            <div data-i18n="Factory Reset Data">Factory Reset Data</div>
                        </a>
                    </li>
                </ul>
            </li>


            <!-- Components -->
            <li class="menu-header mt-5">
                <span class="menu-header-text" data-i18n="Components">Components</span>
            </li>

        </ul>
    </aside>

</body>

</html>