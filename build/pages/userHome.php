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
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/LogoV.png" />
    <title>Home Page</title>
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

    <div class="mx-0 sm:mx-6 xl:mx-10 mt-11 shadow-lg">
        <div class="flex justify-between items-center py-4 bg-white px-6">
            <h6 class="mb-0">Barang yang Tersedia</h6>
            <form action="" method="get">
                <input type="search" name="search" value="<?php if(isset($_GET['search'])) { echo $_GET['search']; } ?>"
                    id="search" placeholder="Search...." class="border rounded-2 pl-2 w-25 sm:w-30 md:w-48">
            </form>
        </div>
        <div class="relative overflow-x-auto ">
            <table class="w-full text-sm text-left bg-slate-300 text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase  ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Kode Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stock
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Deskripsi
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
                            $idb = $data['idbarang'];

                            //cek ada gambar atau tidak
                            $gambar = $data['image']; //ambil gambar
                            if($gambar==null){
                                //jika tidak ada gambar
                                $img = 'No Photo';
                            } else {
                                //jika ada gambar
                                $img = '<img src="images/'.$gambar.'">';
                            }
                        ?>

                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?=$kode;?>
                        </th>
                        <td class="px-6 py-4">
                            <?=$namabarang;?>
                        </td>
                        <td class="px-6 py-4">
                            <?=$stock;?>
                        </td>
                        <td class="px-6 py-4 flex items-center justify-center">
                            <a href="./userDetailBarang.php?id=<?=$idb;?>"
                                class="bg-blue-400 px-3 md:px-4 py-1  rounded-full text-white hover:bg-blue-600">
                                Detail
                            </a>
                        </td>
                    </tr>
                    <?php 
                        };        
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end content -->


    <script src="../assets/js/dropdownProfile.js"></script>

</body>

</html>