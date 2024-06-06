<?php 
require '../function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/LogoV.png" />
    <title>Edit Profile</title>
    <link href="../assets/css/style.css" rel="stylesheet" />
</head>

<body class="m-0 font-sans text-base antialiased font-normal bg leading-default bg-gray-50 text-slate-500">
    <div class="p-3 py-8">
        <a href="./userProfile.php" class="flex items-center text-black">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <p class="mb-0 font-semibold md:text-xl lg:text-2xl xl:text-3xl">Profile</p>
        </a>
        <div class="px-5 sm:px-16 md:w-[740px] md:mx-auto">
            <div class="md:flex md:justify-between">
                <h3 class="py-5">Edit Profile</h3>
                <div class="flex md:block justify-center mb-10 md:pt-6">
                    <div class="flex items-center justify-center w-20 h-20">
                        <div class="flex justify-center mb-10">
                            <div class="relative inline-block">
                                <img src="../assets/img/profile.png" alt="profile" id="photo"
                                    class="w-20 h-20 rounded-full">
                                <input type="file" name="image" id="file" class="hidden">
                                <label for="file" id="uploadbtn"
                                    class="absolute bottom-0 right-0 p-1 bg-gray-500 rounded-full cursor-pointer">
                                    <i class="flex justify-center items-center text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                        </svg>
                                    </i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" method="post">
                <div class="flex flex-wrap justify-between">
                    <div class="mb-4 sm:mr-5 w-full sm:w-auto ">
                        <p class="font-semibold mb-0 mr-3">Nama Depan</p>
                        <input type="text" name="nama_depan" class="border rounded-1 pl-2 w-full">
                    </div>
                    <div class="mb-4 w-full sm:w-auto">
                        <p class="font-semibold mb-0 mr-3">Nama Belakang</p>
                        <input type="text" name="nama_belakang" class="border rounded-1 pl-2 w-full">
                    </div>
                </div>
                <div class="mb-4 w-full sm:w-auto ">
                    <p class="font-semibold mb-0 mr-3">Email</p>
                    <input type="text" name="email" class="border rounded-1 pl-2 w-full">
                </div>
                <div class="mb-4 w-full sm:w-auto">
                    <p class="font-semibold mb-0 mr-3">Nomor Telepon</p>
                    <input type="text" name="tlp" class="border rounded-1 pl-2 w-full">
                </div>
                <div class="mb-4 w-full sm:w-auto">
                    <p class="font-semibold mb-0 mr-3">Alamat</p>
                    <input type="text" name="alamat" class="border rounded-1 pl-2 w-full">
                </div>
                <div class="flex flex-wrap justify-between">
                    <div class="mb-4 sm:mr-8 w-full sm:w-auto">
                        <p class="font-semibold mb-0 mr-3">Kecamatan</p>
                        <input type="text" name="kecamatan" class="border rounded-1 pl-2 w-full">
                    </div>
                    <div class="mb-4 w-full sm:w-auto">
                        <p class="font-semibold mb-0 mr-3">Kota / Kabupaten</p>
                        <input type="text" name="kota" class="border rounded-1 pl-2 w-full">
                    </div>
                </div>
                <div class="">
                    <a href="./userProfile.php"
                        class="bg-red-400 hover:bg-red-500 px-6 py-1.25 text-white rounded-1">Batal</a>
                    <button type="submit" name="editprofile" id="openModalButton"
                        class="bg-green-400 hover:bg-green-500 px-6 py-1 text-white rounded-1">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
<!-- ganti profile script -->
<script>
const file = document.querySelector('#file');
const img = document.querySelector('#photo');

file.addEventListener('change', function() {
    const chosenFile = this.files[0];
    if (chosenFile) {
        const reader = new FileReader();
        reader.addEventListener('load', function() {
            img.setAttribute('src', this.result);
        });
        reader.readAsDataURL(chosenFile);
    }
});
</script>
<script src="../assets/js/modals.js"></script>

</html>