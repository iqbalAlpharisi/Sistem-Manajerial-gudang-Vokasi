<?php 
require '../function.php';

//ambil data total
$get1 = mysqli_query($conn, "select * from stock");
$count1 = mysqli_num_rows($get1); //mengitung seluruh kolom

//ambil data total
$get2 = mysqli_query($conn, "select * from masuk");
$count2 = mysqli_num_rows($get2); //mengitung seluruh kolom

//ambil data total
$get3 = mysqli_query($conn, "select * from keluar");
$count3 = mysqli_num_rows($get3); //mengitung seluruh kolom

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/LogoV.png" />
    <title>Dashboard</title>
    <link href="../assets/css/style.css" rel="stylesheet" />
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
                    <a class="py-2.7 bg-sky-300 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-white transition-colors  "
                        href="./adminDashboard.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease ">Kelola Barang</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm my-0 mx-2 flex items-center whitespace-nowrap px-4  hover:bg-sky-300 hover:text-white hover:rounded-lg"
                        href="./adminKelolaBarangMasuk.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Barang Masuk</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm my-0 mx-2 flex items-center whitespace-nowrap px-4  hover:bg-sky-300 hover:text-white hover:rounded-lg"
                        href="./adminKelolaBarangKeluar.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Barang Keluar</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4  hover:bg-sky-300 hover:text-white hover:rounded-lg"
                        href="./adminLaporanData.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Laporan Data Gudang</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:bg-sky-300 hover:text-white hover:rounded-lg "
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
            <h4>Mengelola Barang</h4>
            <p>Menambah dan mengurangi barang</p>
            <div class="flex bg-white h-14 px-3 items-center justify-between">
                <button
                    class="bg-sky-300 px-3 text-sm lg:text-[16px] text-white rounded-md h-7 lg:h-10 font-semibold hover:bg-blue-400"
                    data-modal-target="#myModal1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 lg:w-6 lg:h-6 text-white font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah
                </button>

                <!-- Modal Containers -->
                <div id="myModal1"
                    class="modal p-3 hidden fixed inset-0 z-990 overflow-auto bg-gray-800 bg-opacity-75 flex items-center justify-center md:p-5 lg:p-8 xl:p-10">
                    <!-- Modal Content -->
                    <div class="bg-white w-full h-full p-5 rounded overflow-auto">
                        <div class="flex justify-end">
                            <!-- Close Button -->
                            <button class="text-gray-600 hover:text-gray-800" data-modal-close="#myModal1">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal Body -->
                        <form method="post" enctype="multipart/form-data">
                            <h1 class="text-2xl font-bold mb-4">Menambahkan Barang</h1>
                            <div class="modal-body">
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Gambar Barang</p>
                                    <input type="file" name="file"
                                        class="flex border h-8 w-full md:w-3/4 rounded-2 file:bg-black file:text-white file:hover:bg-black/75">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Kode Barang</p>
                                    <input type="text" name="kode"
                                        class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Nama Barang</p>
                                    <input type="text" name="namabarang"
                                        class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Jumlah</p>
                                    <input type="number" name="stock"
                                        class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Kategori</p>
                                    <input type="text" name="kategori"
                                        class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Deskripsi</p>
                                    <textarea class="border h-50 w-full md:w-3/4 pl-2 pt-1 rounded-2" rows="4" cols="50"
                                        name="deskripsi"></textarea>
                                </div>
                                <div class="flex justify-end px-2 xl:px-7">
                                    <button type="submit"
                                        class="bg-sky-300 px-5 text-white rounded-lg h-9 font-semibold hover:bg-blue-400"
                                        name="tambahbarang">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-4 h-4 text-white font-bold">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                        Tambahkan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- modals end -->

                <div class="flex justify-end">
                    <p class="hidden m-0 sm:block font-semibold">Menampilkan</p>
                    <select name="menampilkan" id="menampilkan"
                        class="bg-slate-100 h-7 rounded-lg mx-3 text-sm text-black">
                        <option value="10" class="bg-white">10</option>
                        <option value="15" class="bg-white">15</option>
                        <option value="20" class="bg-white">20</option>
                        <option value="25" class="bg-white">25</option>
                    </select>
                    <form action="" method="get">
                        <input type="search" name="search"
                            value="<?php if(isset($_GET['search'])) { echo $_GET['search']; } ?>" id="search"
                            placeholder="Search...." class="border rounded-2 pl-2 w-25 sm:w-30 md:w-48">
                    </form>
                </div>
            </div>
        </div>

        <div class="card-body">

            <?php 
                $ambildatastock = mysqli_query($conn,"select * from stock where stock < 1");
                while($fetch=mysqli_fetch_array($ambildatastock)){
                $barang = $fetch['namabarang'];                          
            ?>
            <div class=" alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Perhatian!</strong> Stock Barang <?=$barang;?> Telah Habis.
            </div>
            <?php 
                }
            ?>

            <div class="relative overflow-x-auto mx-6">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Kode
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Barang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Stock
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if(isset($_GET['search'])) {
                            $pencarian = $_GET['search'];
                            $query = "select * from stock where kode like '%".$pencarian."%' or namabarang like '%".$pencarian."%' or kategori like '%".$pencarian."%' ";
                        } else {
                            $query = "select * from stock";
                        }
                        
                            $ambilsemuadatastock = mysqli_query($conn, $query);
                            $i = 1;
                            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                            $kode = $data['kode'];
                            $namabarang = $data['namabarang'];
                            $kategori = $data['kategori'];
                            $stock = $data['stock'];
                            $deskripsi = $data['deskripsi'];
                            $idb = $data['idbarang'];

                            //cek ada gambar atau tidak
                            $gambar = $data['image']; //ambil gambar
                            if($gambar==null){
                                //jika tidak ada gambar
                                $img = 'No Photo';
                            } else {
                                //jika ada gambar
                                $img = '<img src="../images/'.$gambar.'">';
                            }
                        ?>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 text-gray-900">
                                <?=$kode;?>
                            </td>
                            <td class="px-6 py-4">
                                <?=$namabarang;?>
                            </td>
                            <td class="px-6 py-4">
                                <?=$kategori;?>
                            </td>
                            <td class="px-6 py-4">
                                <?=$stock;?>
                            </td>
                            <td class="px-6 py-4 flex items-center justify-center">
                                <button class="mr-2" data-modal-target="#myModal2<?=$idb?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </button>
                                <button data-modal-target="#myModal3<?=$idb?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal Containers -->
                        <div id="myModal2<?=$idb?>"
                            class="modal p-3 hidden fixed inset-0 z-990 overflow-auto bg-gray-800 bg-opacity-75 flex items-center justify-center md:p-5 lg:p-8 xl:p-10">
                            <!-- Modal Content -->
                            <div class="bg-white w-full h-full p-5 rounded overflow-auto">
                                <div class="flex justify-end">
                                    <!-- Close Button -->
                                    <button type="button" class="text-gray-600 hover:text-gray-800"
                                        data-modal-close="#myModal2<?=$idb?>">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal Body -->
                                <form method="post" enctype="multipart/form-data">
                                    <h1 class="text-2xl font-bold mb-4">Edit Barang</h1>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="modal-body">
                                        <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                            <p class="font-semibold mr-4 mb-2 xl:text-xl">Gambar Barang</p>
                                            <input type="file" name="file"
                                                class="flex border h-8 w-full md:w-3/4 rounded-2 file:bg-black file:text-white file:hover:bg-black/75">
                                        </div>
                                        <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                            <p class="font-semibold mr-4 mb-2 xl:text-xl">Kode Barang</p>
                                            <input type="text" name="kode" value="<?=$kode;?>"
                                                class=" flex border h-8 w-full md:w-3/4 pl-2 rounded-2" required>
                                        </div>
                                        <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                            <p class="font-semibold mr-4 mb-2 xl:text-xl">Nama Barang</p>
                                            <input type="text" name="namabarang" value="<?=$namabarang;?>"
                                                class=" flex border h-8 w-full md:w-3/4 pl-2 rounded-2" required>
                                        </div>
                                        <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                            <p class="font-semibold mr-4 mb-2 xl:text-xl">Kategori</p>
                                            <input type="text" name="kategori" value="<?=$kategori;?>"
                                                class=" flex border h-8 w-full md:w-3/4 pl-2 rounded-2" required>
                                        </div>
                                        <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                            <p class="font-semibold mr-4 mb-2 xl:text-xl">Jumlah</p>
                                            <input type="number" name="stock" value="<?=$stock;?>"
                                                class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2" required>
                                        </div>
                                        <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                            <p class="font-semibold mr-4 mb-2 xl:text-xl">Deskripsi</p>
                                            <textarea name="deskripsi" value="<?=$deskripsi;?>"
                                                class=" border h-50 w-full md:w-3/4 pl-2 pt-1 rounded-2" rows="4"
                                                cols="50" required></textarea>
                                        </div>
                                        <input type="hidden" name="idb" value="<?=$idb;?>">
                                    </div>
                                    <div class="flex justify-end px-2 xl:px-7">
                                        <button type="submit" name="editbarang"
                                            class="bg-sky-300 px-5 text-white rounded-lg h-9 font-semibold hover:bg-blue-400"
                                            data-modal-close="#myModal2">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- modals end -->

                        <div id="myModal3<?=$idb?>"
                            class="modal p-3 hidden fixed inset-0 z-50 overflow-auto bg-gray-800 bg-opacity-75 flex items-center justify-center md:p-5 lg:p-15 xl:p-28">
                            <!-- Modal Content -->
                            <div class="bg-white w-full h-auto p-5 rounded">
                                <div class="flex justify-end">
                                    <!-- Close Button -->
                                    <button type="button" class="text-gray-600 hover:text-gray-800"
                                        data-modal-close="#myModal3<?=$idb?>">
                                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Modal Body -->
                                <form method="post">
                                    <div class="flex flex-col justify-center items-center mx-auto my-auto text-center">
                                        <h1 class="text-2xl font-bold mb-4">Menghapus Barang</h1>
                                        <p>Apakah Anda yakin ingin menghapus barang ini?</p>
                                        <input type="hidden" name="idb" value="<?=$idb;?>">
                                        <div class="mt-4">
                                            <button type="submit" name="hapusbarang"
                                                class="bg-green-500 mb-4 text-white w-30 h-auto rounded-1">Ya</button>
                                            <button class="bg-red-500 mb-4 text-white w-30 h-auto rounded-1"
                                                data-modal-close="#myModal3">Tidak</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php 
                            };        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- end content -->
    </main>
</body>
<!-- main script file  -->
<script src="../assets/js/main.js"></script>
<!-- modals script -->
<script src="../assets/js/multi-modals.js"></script>

</html>