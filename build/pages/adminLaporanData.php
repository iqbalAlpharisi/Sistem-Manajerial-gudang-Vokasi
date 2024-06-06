<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/LogoV.png" />
    <title>Laporan Data Gudang</title>
    <link href="../assets/css/style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body class="m-0 font-sans text-base antialiased font-normal bg leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full min-h-75"></div>
    <!-- sidenav  -->
    <aside
        class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-0 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-2xl  max-w-64 ease-nav-brand z-50 xl:ml-0 xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <div class="h-auto">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times  text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap  text-slate-700" href="./adminDashboard.php">
                <span class="ml-1 text-[20px] font-semibold transition-all duration-200 ease-nav-brand">Gudang
                    Vokasi</span>
            </a>
        </div>
        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent " />
        <span class="text-xl font-bold ml-14">Menu</span>
        <div class=" items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7  text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 hover:bg-sky-300  hover:text-white hover:rounded-lg  "
                        href="../pages/adminDashboard.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease ">Kelola Barang</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:bg-sky-300 hover:text-white hover:rounded-lg"
                        href="./adminKelolaBarangMasuk.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Barang Masuk</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:bg-sky-300 hover:text-white hover:rounded-lg"
                        href="./adminKelolaBarangKeluar.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Barang Keluar</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 bg-sky-300 font-semibold text-white rounded-lg "
                        href="./adminLaporanData.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Laporan Data Gudang</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4  hover:bg-sky-300 hover:text-white hover:rounded-lg "
                        href="./adminKelolaPinjaman.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-app"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Mengelola Pinjaman</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="mx-4">
            <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border"
                sidenav-card>
                <div class="w-1/2 mx-auto"></div>
                <div class="flex-auto w-full p-4 pt-0 text-center">
                    <div class="transition-all duration-200 ease-nav-brand">
                        <h6 class="mb-0 text-white select-none h-28">Space</h6>
                        <p class="mb-0 text-xs font-semibold select-none text-white leading-tight">Spacing</p>
                    </div>
                </div>
            </div>
            <div
                class="inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg bg-white bg-150 select-none">
                space</div>
            <!-- pro btn  -->
            <a href="../loginAdmin.php" class="font-bold hover:">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
                Log Out
            </a>
        </div>

    </aside>

    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-64 rounded-xl">
        <!-- Navbar -->
        <nav class="relative flex bg-white flex-wrap items-center justify-start px-0 py-0 mx-0 border-b-2 transition-all ease-in shadow-none duration-250 "
            navbar-main navbar-scroll="false">
            <div class="flex items-center justify-start w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <div class="flex items-center grow sm:mt-0 sm:mr-6 md:mr-0">
                    <div class="flex items-center">
                        <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                            <span
                                class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <ul class="flex flex-row justify-start items-center pl-0 mb-0 list-none md-max:w-full ">
                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand"
                                sidenav-trigger>
                                <div class="w-4.5 overflow-hidden">
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-black transition-all"></i>
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-black transition-all"></i>
                                    <i class="ease relative block h-0.5 rounded-sm bg-black transition-all"></i>
                                </div>
                            </a>
                            <a class="text-black opacity-50" href="javascript:;">
                                <span
                                    class="ml-3 text-black text-[16px] font-bold transition-all duration-200 ease-nav-brand">Gudang
                                    Vokasi</span>
                            </a>
                        </li>
                        <li class="h-16">

                        </li>
                    </ul>
                </div>
        </nav>
        <!-- end Navbar -->
        <!-- content -->

        <div class="w-full px-6 py-6 mx-auto">
            <h4>Laporan Data Gudang</h4>
            <p>Laporan Data Statistik Gudang</p>

            <!-- graph -->
            <div class=" w-full bg-white rounded-lg shadow p-4 md:p-6">
                <div class="flex justify-between">
                    <div>
                        <h5 class="leading-none lg:text-3xl font-bold text-gray-900  pb-2">Peminjam</h5>

                    </div>
                    <select name="berdasarkan" id="berdasarkan" class="h-auto px-0 lg:px-2  bg-slate-100/40 rounded-2">
                        <option value="mingguIni">Minggu ini</option>
                        <option value="bulanIni">Bulan ini</option>
                        <option value="tahunIni">Tahun ini</option>
                    </select>
                </div>
                <p class="text-base font-normal text-gray-500 border-b-2 pb-2">Peminjam Minggu ini</p>
                <div id="area-chart"></div>
                <div
                    class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                    <div class="hidden lg:flex justify-between items-center pt-5 ">
                        <div>Senin</div>
                        <div>Selasa</div>
                        <div>Rabu</div>
                        <div>Kamis</div>
                        <div>Jumat</div>
                        <div>Sabtu</div>
                        <div>Minggu</div>
                    </div>
                </div>
            </div>

            <button id="openModalButton"
                class="mt-4 bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-1 px-5 rounded-lg lg:py-2 lg:px-7">
                Cetak
            </button>

            <!-- Modal Container -->
            <div id="myModal"
                class="modal p-5 hidden fixed inset-0 z-50 w-full h-full overflow-auto bg-gray-800 bg-opacity-75 flex items-center justify-center sm:p-10 md:p-20 xl:p-48">
                <!-- Modal Content -->
                <div class="bg-white w-full py-4 rounded">
                    <!-- Modal Body -->
                    <div class="flex flex-col justify-center items-center mx-auto my-auto text-center">
                        <h1 class="text-2xl font-bold mb-2 mt-4 text-center">Terjadi Kesalahan</h1>
                        <p class="text-center">Pesan Kesalahan</p>
                        <button id="closeModalButton"
                            class=" bg-black hover:bg-black/75 text-white w-30 h-10 rounded-1">Kembali</button>
                    </div>
                </div>
            </div>

        </div>





        <!-- end content -->
    </main>
</body>
<!-- main script file  -->
<script src="../assets/js/main.js"></script>
<!-- modals script -->
<script src="../assets/js/modals.js"></script>
<!-- chart script -->
<script src="../assets/js/chart.js"></script>

</html>