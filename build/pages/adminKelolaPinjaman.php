<?php 
require '../function.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/LogoV.png" />
    <title>Mengelola Pinjaman</title>
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
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4  hover:bg-sky-300 hover:text-white hover:rounded-lg"
                        href="./adminKelolaBarangMasuk.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Barang Masuk</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4  hover:bg-sky-300 hover:text-white hover:rounded-lg"
                        href="./adminKelolaBarangKeluar.php">
                        <div
                            class="mr-2 flex h-8 w-4 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
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
                    <a class="py-2.7 text-sm my-0 mx-2 flex items-center whitespace-nowrap px-4 bg-sky-300 font-semibold text-white rounded-lg "
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
            <h4>Mengelola Peminjaman Barang</h4>
            <div class="flex relative overflow-x-auto overflow-y-clip bg-white h-14 px-3 items-center justify-between">
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
                        <form method="post">
                            <h1 class="text-2xl font-bold mb-4">Kelola Data Peminjaman Barang</h1>
                            <div class="modal-body">
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Nama Peminjam</p>
                                    <input type="text" name="namapeminjam"
                                        class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Nama Barang</p>
                                    <select name="barangnya" class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                                        <?php 
                                            $ambilsemuadatanya = mysqli_query($conn,"select * from stock");
                                            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                                            $namabarangnya = $fetcharray['namabarang'];
                                            $idbarangnya = $fetcharray['idbarang'];
                                        ?>

                                        <option value="<?=$idbarangnya;?>"><?=$namabarangnya;?></option>

                                        <?php  
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Jumlah</p>
                                    <input type="number" name="qty"
                                        class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                                </div>
                                <div class="flex flex-wrap w-full justify-between px-2 xl:px-7 mb-5">
                                    <p class="font-semibold mr-4 mb-2 xl:text-xl">Tanggal Peminjaman</p>
                                    <input type="date" name="tanggal_peminjaman"
                                        class="flex border h-8 w-full md:w-3/4 pl-2 rounded-2">
                                </div>
                                <div class="flex justify-end px-2 xl:px-7">
                                    <button type="submit" name="tambahbarangpinjam"
                                        class="bg-sky-300 px-5 text-white rounded-lg h-9 font-semibold hover:bg-blue-400">
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
                    <div class="col">
                        <form method="post" class="form-inline">
                            <input type="date" name="tgl_mulai"
                                class="bg-slate-100 h-7 rounded-lg mx-5 text-sm text-black">
                            <input type="date" name="tgl_selesai"
                                class="bg-slate-100 h-7 rounded-lg mx-5 text-sm text-black">
                            <button type="submit" name="filter_tgl"
                                class="bg-green-500 text-white w-20 h-auto rounded-1">Cari</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto mx-6">
            <table class="w-full text-sm border text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Peminjam
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Peminjaman
                        </th>
                        <th scope="col" class="text-center px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="text-center px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    if(isset($_POST['filter_tgl'])){
                        $mulai = $_POST['tgl_mulai'];
                        $selesai = $_POST['tgl_selesai'];

                        if($mulai!=null || $selesai!=null){

                            $ambilsemuadatastock = mysqli_query($conn,"select * from peminjaman p, stock s where s.idbarang = p.idbarang and tanggal BETWEEN '$mulai' and DATE_ADD('$selesai',INTERVAL 1 DAY) order by idpeminjaman DESC");
                        } else {
                            $ambilsemuadatastock = mysqli_query($conn,"select * from peminjaman p, stock s where s.idbarang = p.idbarang order by idpeminjaman DESC");
                        }

                    } else {
                        $ambilsemuadatastock = mysqli_query($conn,"select * from peminjaman p, stock s where s.idbarang = p.idbarang order by idpeminjaman DESC");
                    }
                        
                        while($data=mysqli_fetch_array($ambilsemuadatastock)){
                        $idp = $data['idpeminjaman'];
                        $idb = $data['idbarang']; 
                        $namapeminjam = $data['namapeminjam'];
                        $kode = $data['kode'];
                        $namabarang = $data['namabarang'];
                        $qty = $data['qty'];
                        $tanggalpeminjaman = $data['tanggal_peminjaman'];
                        $status = $data['status'];

                        //cek ada gambar atau tidak
                        $gambar = $data['image']; //ambil gambar
                        if($gambar==null){
                            //jika tidak ada gambar
                            $img = 'No Photo';
                        } else {
                            //jika ada gambar
                            $img = '<img src="images/'.$gambar.'" class="zoomable">';
                        }
                    ?>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?=$namapeminjam;?>
                        </th>
                        <td class="px-6 py-4">
                            <?=$kode;?>
                        </td>
                        <td class="px-6 py-4">
                            <?=$namabarang;?>
                        </td>
                        <td class="px-6 py-4">
                            <?=$qty;?>
                        </td>
                        <td class="px-6 py-4">
                            <?=$tanggalpeminjaman;?>
                        </td>
                        <td class="px-6 py-4">
                            <?=$status;?>
                        </td>
                        <td class="px-6 py-4">
                            <?php 
                            // cek status
                                if($status=='Dipinjam'){
                                echo'<button type="button" class="bg-green-500 text-white w-20 h-auto rounded-1" data-toggle="modal"
                                data-modal-target="#myModal3'.$idp.'">
                                Selesai
                                </button>';
                                } else {
                            //jika statusnya kembali
                                }
                            ?>
                        </td>
                    </tr>

                    <!-- Modal Edit Containers -->
                    <div id="myModal3<?=$idp?>"
                        class="modal p-3 hidden fixed inset-0 z-50 overflow-auto bg-gray-800 bg-opacity-75 flex items-center justify-center md:p-5 lg:p-15 xl:p-28">
                        <!-- Modal Content -->
                        <div class="bg-white w-full h-auto p-5 rounded">
                            <div class="flex justify-end">
                                <!-- Close Button -->
                                <button type="button" class="text-gray-600 hover:text-gray-800"
                                    data-modal-close="#myModal3<?=$idp?>">
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
                                    <h1 class="text-2xl font-bold mb-4">Selesaikan Pinjaman</h1>
                                    <p>Apakah barang ini sudah selesai dipinjam?</p>
                                    <input type="hidden" name="idpinjam" value="<?=$idp;?>">
                                    <input type="hidden" name="idbarang" value="<?=$idb;?>">
                                    <div class="mt-4">
                                        <button type="submit" name="barangkembali"
                                            class="bg-green-500 mb-4 text-white w-30 h-auto rounded-1">Ya</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- modals end -->
                    <?php 
                        };        
                    ?>
                </tbody>
            </table>
            <div class="w-full px-6 py-6 mx-auto">
                <button id="openModalButton" type="button"
                    class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-1 px-5 rounded-lg lg:py-2 lg:px-7">
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
        </div>
    </main>
</body>
<!-- main script file  -->
<script src="../assets/js/main.js"></script>
<!-- modals script -->
<script src="../assets/js/modals.js"></script>
<!-- multi modals -->
<script src="../assets/js/multi-modals.js"></script>

</html>