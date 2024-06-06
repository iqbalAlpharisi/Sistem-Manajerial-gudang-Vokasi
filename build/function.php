<?php 
$conn = mysqli_connect("localhost","root","","gudangub");

//Menambah barang baru
if(isset($_POST['tambahbarang'])){
    $kode = $_POST['kode'];
    $namabarang = $_POST['namabarang']; 
    $kategori = $_POST['kategori'];
    $stock = $_POST['stock'];
    $deskripsi = $_POST['deskripsi'];

    //soal gambar
    $nama = $_FILES['file']['name'];//mengambil nama gambar
    $dot = explode('.',$nama);
    $ekstensi = strtolower(end($dot)); //mengambil ekstensinya
    $ukuran = $_FILES['file']['size']; //mengambil size filenya
    $file_tmp = $_FILES['file']['tmp_name']; //mengambil lokasi filenya

    //penamaan file -> enkripsi
    $image = md5(uniqid($nama,true) . time()) .'.'. $ekstensi; //menggabungkan nama file yg dienkripsi dg ekstensinya

    //proses upload gambar
    
        //validasi ukuran filenya
        if($ukuran < 15000000){
        move_uploaded_file($file_tmp, '../images/'.$image);
        $addtotable = mysqli_query($conn,"insert into stock (kode, namabarang, kategori, stock, deskripsi, image) values('$kode','$namabarang','$kategori','$stock','$deskripsi','$image')");
        if($addtotable){
            header('location:adminDashboard.php');
        } else {
            echo 'Gagal';
            header('location:adminDashboard.php');
        }
            } else{
            //kalau filenya lebih dari 15mb
            echo '
            <script>
            alert("Ukuran terlalu besar");
            window.location.href="index.php";
            </script>
            ';
            }
};

//Edit barang
if(isset($_POST['editbarang'])){
    $idb = $_POST['idb'];
    $kode = $_POST['kode'];
    $namabarang = $_POST['namabarang'];
    $kategori = $_POST['kategori'];
    $stock = $_POST['stock'];
    $deskripsi = $_POST['deskripsi'];
    
    //soal gambar
    $nama = $_FILES['file']['name'];//mengambil nama gambar
    $dot = explode('.', $nama);
    $ekstensi = strtolower(end($dot)); //mengambil ekstensinya
    $ukuran = $_FILES['file']['size']; //mengambil size filenya
    $file_tmp = $_FILES['file']['tmp_name']; //mengambil lokasi filenya

    //penamaan file -> enkripsi
    $image = md5(uniqid($nama,true) . time()) .'.'. $ekstensi; //menggabungkan nama file yg dienkripsi gd ekstensinya

    if($ukuran==0){
        //jika tidak ingin upload
        $update = mysqli_query($conn,"update stock set kode='$kode', namabarang='$namabarang', kategori='$kategori', stock='$stock', deskripsi='$deskripsi' where idbarang='$idb'");
        if($update){
            header('location:adminDashboard.php');
        } else {
            echo 'Gagal';
            header('location:adminDashboard.php');
        }
    } else {
        //jika ingin
        move_uploaded_file($file_tmp, '../images/'.$image);
        $update = mysqli_query($conn,"update stock set kode='$kode', namabarang='$namabarang', kategori='$kategori', stock='$stock', deskripsi='$deskripsi', image='$image' where idbarang='$idb'");
        if($update){
            header('location:adminDashboard.php');
        } else {
            echo 'Gagal';
            header('location:adminDashboard.php');
        }
    }
}

//Menghapus barang dari stock
if(isset($_POST['hapusbarang'])){
    $idb = $_POST['idb'];

    $gambar = mysqli_query($conn,"select * from stock where idbarang='$idb'");
    $get = mysqli_fetch_array($gambar);
    $img = '../images/'.$get['image'];
    unlink($img);

    $hapus = mysqli_query($conn,"delete from stock where idbarang='$idb'");
    if($hapus){
        header('location:adminDashboard.php');
    } else {
        echo 'Gagal';
        header('location:adminDashboard.php');
    }
};

//Menambah barang masuk
if(isset($_POST['tambahbarangmasuk'])){
    $kode = $_POST['kode'];
    $barangnya = $_POST['barangnya'];
    $jumlah = $_POST['jumlah'];
    $tanggalmasuk = $_POST['tanggal_masuk'];

    $cekstocksekarang = mysqli_query($conn,"select * from stock where idbarang='$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildatanya['stock'];
    $tambahkanstocksekarangdenganquantity = $stocksekarang+$jumlah;

    $addtomasuk = mysqli_query($conn,"insert into masuk (idbarang, jumlah, tanggal_masuk) values('$barangnya','$jumlah','$tanggalmasuk')");
    $updatestockmasuk = mysqli_query($conn,"update stock set stock='$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'");
    if($addtomasuk&&$updatestockmasuk){
        header('location:adminKelolaBarangMasuk.php');
    } else {
        echo 'Gagal';
        header('location:adminKelolaBarangMasuk.php');
    }
}

//Edit data barang masuk
if(isset($_POST['editbarangmasuk'])){
    $idb = $_POST['idb'];
    $idm = $_POST['idm'];
    $jumlah = $_POST['jumlah'];
    $tanggalmasuk = $_POST['tanggal_masuk'];
    
     $lihatstock = mysqli_query($conn,"select * from stock where idbarang='$idb'");
     $stocknya = mysqli_fetch_array($lihatstock);
     $stockskrg = $stocknya['stock'];
 
     $qtyskrg = mysqli_query($conn,"select * from masuk where idmasuk='$idm'");
     $qtynya = mysqli_fetch_array($qtyskrg);
     $qtyskrg = $qtynya['jumlah'];
 
     if($jumlah>$qtyskrg){
         $selisih = $jumlah-$qtyskrg;
         $kurangin = $stockskrg + $selisih;
         $kurangistocknya = mysqli_query($conn,"update stock set stock='$kurangin' where idbarang='$idb'");
         $updatenya = mysqli_query($conn,"update masuk set jumlah='$jumlah', tanggal_masuk='$tanggalmasuk' where idmasuk='$idm'");
         if($kurangistocknya&&$updatenya){
             header('location:adminKelolaBarangMasuk.php');
         } else {
             echo 'Gagal';
             header('location:adminKelolaBarangMasuk.php');
         }
     } else {
         $selisih = $qtyskrg-$jumlah;
         $kurangin = $stockskrg - $selisih;
         $kurangistocknya = mysqli_query($conn,"update stock set stock='$kurangin' where idbarang='$idb'");
         $updatenya = mysqli_query($conn,"update masuk set jumlah='$jumlah', tanggal_masuk='$tanggalmasuk' where idmasuk='$idm'");
         if($kurangistocknya&&$updatenya){
             header('location:adminKelolaBarangMasuk.php');
         } else {
             echo 'Gagal';
             header('location:adminKelolaBarangMasuk.php');
         }
     }
 }

 //Menghapus barang masuk
if(isset($_POST['hapusbarangmasuk'])){
    $idb = $_POST['idb'];
    $jumlah = $_POST['jumlah'];
    $idm = $_POST['idm'];

    $getdatastock = mysqli_query($conn,"select * from stock where idbarang='$idb'");
    $data = mysqli_fetch_array($getdatastock);
    $stock = $data['stock'];

    $selisih = $stock-$jumlah;

    $update = mysqli_query($conn,"update stock set stock='$selisih' where idbarang='$idb'");
    $hapusdata = mysqli_query($conn,"delete from masuk where idmasuk='$idm'");

    if($update&&$hapusdata){
        header('location:adminKelolaBarangMasuk.php');
    } else {
        header('location:adminKelolaBarangMasuk.php');
    }
}

//Menambah barang keluar
if(isset($_POST['tambahbarangkeluar'])){
    $kode = $_POST['kode'];
    $barangnya = $_POST['barangnya'];
    $jumlah = $_POST['jumlah'];
    $tanggalkeluar = $_POST['tanggal_keluar'];

    $cekstocksekarang = mysqli_query($conn,"select * from stock where idbarang='$barangnya'");
    $ambildatanya = mysqli_fetch_array($cekstocksekarang);

    $stocksekarang = $ambildatanya['stock'];

    if($stocksekarang >= $jumlah){
        //kalau barangnya cukup
        $tambahkanstocksekarangdenganquantity = $stocksekarang-$jumlah;

        $addtokeluar = mysqli_query($conn,"insert into keluar (idbarang, jumlah, tanggal_keluar) values('$barangnya','$jumlah','$tanggalkeluar')");
        $updatestockmasuk = mysqli_query($conn,"update stock set stock='$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'");
        if($addtokeluar&&$updatestockmasuk){
            header('location:adminKelolaBarangKeluar.php');
        } else {
            echo 'Gagal';
            header('location:adminKelolaBarangKeluar.php');
        }
    } else {
        //kalau barangnya tidak cukup
        echo '
        <script>
            alert("Stock saat ini tidak mencukupi");
            window.location.href="adminKelolaBarangKeluar.php";
        </script>
        ';
    }
}

//Edit data barang keluar
if(isset($_POST['editbarangkeluar'])){
    $idb = $_POST['idb'];
    $idk = $_POST['idk'];
    $jumlah = $_POST['jumlah'];
    $tanggalkeluar = $_POST['tanggal_keluar'];
    
    //Mengambil stock barang saat ini
    $lihatstock = mysqli_query($conn,"select * from stock where idbarang='$idb'");
    $stocknya = mysqli_fetch_array($lihatstock);
    $stockskrg = $stocknya['stock'];

    //Qty barang keluar saat ini
    $qtyskrg = mysqli_query($conn,"select * from keluar where idkeluar='$idk'");
    $qtynya = mysqli_fetch_array($qtyskrg);
    $qtyskrg = $qtynya['jumlah'];
 
     if($jumlah>$qtyskrg){
         $selisih = $jumlah-$qtyskrg;
         $kurangin = $stockskrg - $selisih;

        if($selisih <= $stockskrg){
            $kurangistocknya = mysqli_query($conn,"update stock set stock='$kurangin' where idbarang='$idb'");
         $updatenya = mysqli_query($conn,"update keluar set jumlah='$jumlah', tanggal_keluar='$tanggalkeluar' where idkeluar='$idk'");
         if($kurangistocknya&&$updatenya){
             header('location:adminKelolaBarangKeluar.php');
         } else {
             echo 'Gagal';
             header('location:adminKelolaBarangKeluar.php');
         }
        } else {
            echo '
            <script>alert("Stock tidak mencukupi");
            window.location.href="adminKelolaBarangKeluar.php";
            </script>
            ';
        }

         
     } else {
         $selisih = $qtyskrg-$jumlah;
         $kurangin = $stockskrg + $selisih;
         $kurangistocknya = mysqli_query($conn,"update stock set stock='$kurangin' where idbarang='$idb'");
         $updatenya = mysqli_query($conn,"update keluar set jumlah='$jumlah', tanggal_keluar='$tanggalkeluar' where idkeluar='$idk'");
         if($kurangistocknya&&$updatenya){
             header('location:adminKelolaBarangKeluar.php');
         } else {
             echo 'Gagal';
             header('location:adminKelolaBarangKeluar.php');
         }
     }
 }

 //Menghapus barang keluar
 if(isset($_POST['hapusbarangkeluar'])){
    $idb = $_POST['idb'];
    $jumlah = $_POST['jumlah'];
    $idk = $_POST['idk'];

    $getdatastock = mysqli_query($conn,"select * from stock where idbarang='$idb'");
    $data = mysqli_fetch_array($getdatastock);
    $stock = $data['stock'];

    $selisih = $stock+$jumlah;

    $update = mysqli_query($conn,"update stock set stock='$selisih' where idbarang='$idb'");
    $hapusdata = mysqli_query($conn,"delete from keluar where idkeluar='$idk'");

    if($update&&$hapusdata){
        header('location:adminKelolaBarangKeluar.php');
    } else {
        header('location:adminKelolaBarangKeluar.php');
    }
}

//Edit profile user
if(isset($_POST['editprofile'])){
    $namadepan = $_POST['nama_depan'];
    $namabelakang = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $tlp = $_POST['tlp'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $kecamatan = $_POST['kecamatan'];

    //soal gambar
    $nama = $_FILES['file']['name'];//mengambil nama gambar
    $dot = explode('.', $nama);
    $ekstensi = strtolower(end($dot)); //mengambil ekstensinya
    $ukuran = $_FILES['file']['size']; //mengambil size filenya
    $file_tmp = $_FILES['file']['tmp_name']; //mengambil lokasi filenya

    //penamaan file -> enkripsi
    $image = md5(uniqid($nama,true) . time()) .'.'. $ekstensi; //menggabungkan nama file yg dienkripsi gd ekstensinya

    if($ukuran==0){
        //jika tidak ingin upload
        $update = mysqli_query($conn,"update login_user set nama_depan='$namadepan', nama_belakang='$namabelakang', email='$email', tlp='$tlp', alamat='$alamat', kota='$kota', kecamatan='$kecamatan'");
        if($update){
            header('location:userProfile.php');
        } else {
            echo 'Gagal';
            header('location:userProfileEdit.php');
        }
    } else {
        //jika ingin
        move_uploaded_file($file_tmp, '../images/'.$image);
        $update = mysqli_query($conn,"update login_user set nama_depan='$namadepan', nama_belakang='$namabelakang', email='$email', tlp='$tlp', alamat='$alamat', kota='$kota', kecamatan='$kecamatan', image='$image'");
        if($update){
            header('location:userProfile.php');
        } else {
            echo 'Gagal';
            header('location:userProfileEdit.php');
        }
    }
}

//meminjam barang
if(isset($_POST['tambahbarangpinjam'])){
    $namapeminjam = $_POST['namapeminjam']; 
    $kode = $_POST['kode']; 
    $idbarang = $_POST['barangnya']; 
    $qty = $_POST['qty']; 
    $tanggalpeminjaman = $_POST['tanggal_peminjaman']; 

    //ambil stock sekarang
    $stok_saat_ini = mysqli_query($conn,"select * from stock where idbarang='$idbarang'");
    $stok_nya = mysqli_fetch_array($stok_saat_ini);
    $stok = $stok_nya['stock'];

    //kurangin stocknya
    $new_stock = $stok-$qty;

    //mulai query insert
    $insertpinjam = mysqli_query($conn,"INSERT INTO peminjaman (idbarang,namapeminjam,qty,tanggal_peminjaman) values ('$idbarang','$namapeminjam','$qty','$tanggalpeminjaman')");

    //mengurangi stock di tabel stock
    $kurangistok = mysqli_query($conn,"update stock set stock='$new_stock' where idbarang='$idbarang'");

    if($insertpinjam&&$kurangistok){
        //jika berhasil
        echo'
        <script>
            alert("Berhasil");
            window.location.href="adminKelolaPinjaman.php";
        </script>
        ';
    } else {
        //jika gagal
        echo'
        <script>
            alert("Gagal");
            window.location.href="adminKelolaPinjaman.php";
        </script>
        ';
    }
 }

 //menyelesaikan pinjaman
if(isset($_POST['barangkembali'])){
    $idpinjam = $_POST['idpinjam'];
    $idbarang = $_POST['idbarang'];

    $update_status = mysqli_query($conn,"update peminjaman set status='Kembali' where idpeminjaman='$idpinjam'");
    
    //ambil stock sekarang
    $stok_saat_ini = mysqli_query($conn,"select * from stock where idbarang='$idbarang'");
    $stok_nya = mysqli_fetch_array($stok_saat_ini);
    $stok = $stok_nya['stock'];

    //ambil qty dari id pinjam
    $stok_saat_ini1 = mysqli_query($conn,"select * from peminjaman where idpeminjaman='$idpinjam'");
    $stok_nya1 = mysqli_fetch_array($stok_saat_ini1);
    $stok1 = $stok_nya1['qty'];

    //kurangin stocknya
    $new_stock = $stok1+$stok;
    
    //kembalikan stocknya
    $kembalikan_stock = mysqli_query($conn,"update stock set stock='$new_stock' where idbarang='$idbarang'");

    if($update_status&&$kembalikan_stock){
        //jika berhasil
        echo'
        <script>
            alert("Berhasil");
            window.location.href="adminKelolaPinjaman.php";
        </script>
        ';
    } else {
        //jika gagal
        echo'
        <script>
            alert("Gagal");
            window.location.href="adminKelolaPinjaman.php";
        </script>
        ';
    }
}

?>