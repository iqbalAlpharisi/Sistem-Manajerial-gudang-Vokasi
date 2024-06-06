<?php 
require '../function.php';

//ambil data total
$get1 = mysqli_query($conn, "select * from peminjaman");
$count1 = mysqli_num_rows($get1); //mengitung seluruh kolom

//ambil data peminjaman yg statusnya dipinjam
$get2 = mysqli_query($conn, "select * from peminjaman where status='Dipinjam'");
$count2 = mysqli_num_rows($get2); //mengitung seluruh kolom yg statusnya dipinjam

//ambil data peminjaman yg statusnya kembali
$get3 = mysqli_query($conn, "select * from peminjaman where status='Kembali'");
$count3 = mysqli_num_rows($get3); //mengitung seluruh kolom yg statusnya kembali

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/LogoV.png" />
    <title>Form Peminjaman</title>
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body class="m-0 font-sans text-base antialiased font-normal bg leading-default bg-gray-50 text-slate-500">
    <!-- navbar -->
    <nav class="bg-white border-gray-200 md:px-8 shadow">
        <div class=" flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="./userHome.php" class="flex items-center">
                <img src="../assets/img/LogoV.png" class="h-10 md:h-14" alt=" Logo" />
                <span class="self-center md:text-2xl font-semibold whitespace-nowrap">Gudang Vokasi</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <div>
                    <button type="button"
                        class="flex items-center text-sm rounded-full md:me-0 hover:bg-black/20 px-2 py-1"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <img class="w-8 h-8 md:w-12 md:h-12 rounded-full" src="../assets/img/profile.png"
                            alt="user photo">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor" class="w-4 h-4 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </div>


                <!-- Dropdown menu -->
                <div class="z-50 absolute right-4 top-14 md:right-12 md:top-16 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li class="">
                            <a href="./userProfile.php"
                                class="flex items-center justify-between px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Profile</a>
                        </li>
                        <li>
                            <a href="./userLogin.php"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                </svg>
                                Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- Content -->
    <form action="" method="post">
        <div class="mx-10 xl:mx-20 my-11 ">
            <h2>Form Peminjaman</h2>
            <div class="md:mx-4">
                <div class="flex flex-wrap w-full between px-2 xl:px-7 mb-5">
                    <p class="font-semibold md:w-1/4 mr-4 mb-2 xl:text-xl">Nama Barang</p>
                    <input type="text" placeholder="<?=$namabarang;?>"
                        class="flex border bg-black/30 h-8 w-full md:w-[500px] pl-2 rounded-2 placeholder-black cursor-not-allowed"
                        disabled>
                </div>
                <div class="flex flex-wrap w-full px-2 xl:px-7 mb-5">
                    <p class="font-semibold md:w-1/4 mr-4 mb-2 xl:text-xl">Jumlah</p>
                    <div class="flex w-full md:w-[500px]">
                        <input type="text" min="1" max="5" id="quantity-input" data-input-counter
                            aria-describedby="helper-text-explanation"
                            class="flex border pl-2 h-8 w-full rounded-l-2 border-r-0" placeholder="1" required>
                        <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                            class=" flex justify-center items-center bg-red-500 h-8 hover:bg-red-400 border-y-1 p-3 "
                            onclick="decrementValue()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                        </button>
                        <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                            class="flex justify-center items-center bg-green-500 h-8 hover:bg-green-400 border-y-1 p-3 rounded-r-2 "
                            onclick="incrementValue()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-wrap w-full px-2 xl:px-7 mb-5">
                    <p class="font-semibold md:w-1/4 mr-4 mb-2 xl:text-xl">Tanggal Peminjaman</p>
                    <input type="date" id="datepicker" name="datepicker"
                        class="flex border h-8 w-full md:w-[500px] pl-2 rounded-2 mt-1 p-2 border-gray-300 focus:outline-none focus:ring focus:border-blue-500" />
                </div>
                <div class="flex flex-wrap w-full px-2 xl:px-7 mb-5">
                    <p class="font-semibold md:w-1/4 mr-4 mb-2 xl:text-xl">Tanggal Pengembalian</p>
                    <input type="date" id="datepicker" name="datepicker"
                        class="flex border h-8 w-full md:w-[500px] pl-2 rounded-2 mt-1 p-2 border-gray-300 focus:outline-none focus:ring focus:border-blue-500" />
                </div>
                <button id="openModalButton"
                    class="mx-2 bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-1 px-5 rounded-2 lg:py-2 lg:px-7">
                    Pinjam
                </button>

                <?php         
                    $ambilsemuadatastock = mysqli_query($conn,"select * from peminjaman p, stock s where s.idbarang = p.idbarang");
                    while($data=mysqli_fetch_array($ambilsemuadatastock)){
                    $idk = $data['idpeminjaman'];
                    $idb = $data['idbarang'];
                    $peminjam = $data['peminjam'];
                    $kode = $data['kode'];
                    $namabarang = $data['namabarang'];
                    $qty = $data['qty'];                                                                                        
                    $tglpem = $data['tanggal_peminjaman'];
                    $tglpen = $data['tanggal_pengembalian'];
                ?>

                <!-- Modal Container -->
                <div id="myModal"
                    class="modal p-5 hidden fixed inset-0 z-50 w-full h-full overflow-auto bg-gray-800 bg-opacity-75 flex items-center justify-center sm:p-10 md:p-20 xl:p-48">
                    <!-- Modal Content -->
                    <div class="bg-white w-full py-4 px-7 rounded">
                        <!-- Modal Body -->
                        <div class="flex flex-col justify-center items-center mx-auto my-auto text-center">
                            <h1 class="text-2xl font-bold mb-2 mt-4 text-center">Permintaan Terkirim</h1>
                            <p class="text-center">Klik button untuk kembali ke halaman home</p>
                            <a href="./userHome.php"
                                class="flex justify-center items-center bg-black hover:bg-black/75 text-white w-40 h-10 rounded-1">Kembali
                                ke Home</a>
                        </div>
                    </div>
                </div>
                <?php 
                    };        
                ?>
            </div>
            <!-- end content -->
        </div>
    </form>

    <!-- modal pinjam -->
    <script>
    // JavaScript to handle modal functionality
    const modal = document.getElementById('myModal');
    const openModalButton = document.getElementById('openModalButton');

    // Open modal
    openModalButton.addEventListener('click', function() {
        modal.classList.remove('hidden');
    });
    </script>

    <!-- script tombol tambah dan kurang -->
    <script>
    function incrementValue() {
        var inputElement = document.getElementById("quantity-input");
        var currentValue = parseInt(inputElement.value);

        if (!isNaN(currentValue)) {
            inputElement.value = currentValue + 1;
        } else {
            inputElement.value = 1;
        }
    }

    function decrementValue() {
        var inputElement = document.getElementById("quantity-input");
        var currentValue = parseInt(inputElement.value);

        if (!isNaN(currentValue) && currentValue > parseInt(inputElement.min)) {
            inputElement.value = currentValue - 1;
        } else {
            inputElement.value = parseInt(inputElement.min);
        }
    }
    </script>

    <script src="../assets/js/dropdownProfile.js"></script>
</body>

</html>