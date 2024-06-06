<?php 
require '../function.php';

//Cek Login, terdaftar atau tidak
if (isset($_POST['loginUser'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Mencocokkan dengan database, cari...ada atau tidak datanya
    $cekdatabase = mysqli_query($conn,"SELECT * FROM login_user where email='$email' and password='$password'");
    //Hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    if ($hitung > 0) {
        $_SESSION['log'] = 'True';
        header('location:userHome.php');
    } else {
        header('location:userLogin.php');
    };
};

if (!isset($_SESSION['log'])) {

} else {
    header('location:userHome.php'); 
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <title>Login User</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="items-center justify-center">
    <section class="gradient-form h-full  items-center justify-center lg:mt-30">
        <div class="container h-full p-10">
            <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                <div class="w-full">
                    <div class="block bg-white shadow-lg">
                        <div class="g-0 lg:flex lg:flex-wrap">
                            <!-- Right column container with background and description-->
                            <div class="flex items-end  lg:w-6/12  bg-center bg-cover"
                                style="background-image: url(../assets/img/cover-login.jpg)">
                            </div>
                            <!-- Left column container-->
                            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 lg:w-6/12">
                                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                                    <img class="mx-auto h-28 lg:h-44 w-auto " src="../assets/img/LogoV.png"
                                        alt="Your Company">
                                    <h2
                                        class="mt-10 text-center text-5xl font-bold leading-9 tracking-tight text-gray-900">
                                        Login User</h2>
                                </div>

                                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                                    <form class="space-y-6" action="#" method="POST">
                                        <div>
                                            <label for="email"
                                                class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                            <div class="mt-2">
                                                <input id="email" placeholder="Masukkan Email" name="email"
                                                    type="email" autocomplete="email" required
                                                    class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            </div>
                                        </div>

                                        <div>
                                            <div class="flex items-center justify-between">
                                                <label for="password"
                                                    class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                            </div>
                                            <div class="mt-2 flex">
                                                <input id="password" placeholder="Masukkan Password"
                                                    name="password" type="password" autocomplete="current-password"
                                                    required
                                                    class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <span
                                                    class="toggle-password select-none cursor-pointer mt-[5px] ml-4 mr-4"
                                                    onclick="togglePasswordVisibility()">Show</span>
                                            </div>
                                        </div>
                                        <div class="flex justify-center">
                                            <button type="submit" name="loginUser"
                                                class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-slate-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var toggleBtn = document.querySelector(".toggle-password");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleBtn.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            toggleBtn.textContent = "Show";
        }
    }
    </script>
</body>

</html>