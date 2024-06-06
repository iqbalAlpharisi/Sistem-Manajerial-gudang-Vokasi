<?php 
require '../function.php';

//get informasi barang berdasarkan database
$get = mysqli_query($conn,"select * from login_user");
$fetch = mysqli_fetch_assoc($get);
//set variable
$iduser = $fetch['iduser'];
$namadepan = $fetch['nama_depan'];
$namabelakang = $fetch['nama_belakang'];
$email = $fetch['email'];
$password = $fetch['password'];
$tlp = $fetch['tlp'];
$alamat = $fetch['alamat'];
$kota = $fetch['kota'];
$kecamatan = $fetch['kecamatan'];

//cek ada gambar atau tidak
$gambar = isset($fetch['image']) ? $fetch['image'] : null; //ambil gambar
if($gambar==null){
    //jika tidak ada gambar
    $img = 'No Photo';
} else {
    //jika ada gambar
    $img = '<img src="../images/'.$gambar.'">';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/LogoV.png" />
    <title>Profile User</title>
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
    <div>
        <a href="./userHome.php" class="flex items-center text-black">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <p class="mb-0 font-semibold md:text-xl lg:text-2xl xl:text-3xl">Home</p>
        </a>
    </div>
    <div class="mx-3 md:mx-10 xl:mx-20 mt-11 ">
        <h3 class="hidden lg:block">Profile</h3>
        <div class="bg-blue-400 w-full h-40 rounded-t-2"></div>
        <div class="flex justify-center lg:justify-start lg:pl-7 -mt-16">
            <img src="../assets/img/profile.png" alt="profile"
                class=" w-30 h-30 lg:w-40 lg:h-40 rounded-full border-8 border-white">
        </div>
        <div
            class="flex items-center justify-between px-4 bg-white pt-10 md:pt-0 -mt-14 lg:-mt-24 w-full h-40 md:h-30 rounded-b-2">
            <div class="max-w-1/2 lg:max-w-full lg:pl-46 text-black">
                <p class="font-bold mb-0">Nama</p>
                <p class="mb-0"><?=$namadepan;?> <?=$namabelakang;?></p>
            </div>
            <a href="./userProfileEdit.php"
                class="w-30 bg-blue-300 text-center py-1 rounded-2 text-white font-bold hover:bg-blue-500">Edit</a>
        </div>
        <div class="block lg:flex mb-11">
            <div class="h-auto lg:w-[372px] my-3  bg-white rounded-2">
                <p class="border-b-2 p-3 mb-0 font-semibold">Info</p>
                <div class="px-6 py-6 lg:py-16">
                    <div class="flex mb-11">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <div>
                            <p class="mb-0 font-bold">Email</p>
                            <p class="mb-0"><?=$email;?></p>
                        </div>
                    </div>
                    <div class="flex mb-11">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>

                        <div>
                            <p class="mb-0 font-bold">Phone</p>
                            <p class="mb-0"><?=$tlp;?></p>
                        </div>
                    </div>
                    <div class="flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <div>
                            <p class="mb-0 font-bold">Alamat</p>
                            <p class="mb-0 h-auto"><?=$alamat;?>, <?=$kecamatan;?>, <?=$kota;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->


    <script src="../assets/js/dropdownProfile.js"></script>

</body>

</html>