    <!-- <?php
    global $id_barang;
    global $jeniskeripik;
    global $rasakeripik;
    global $harga;
   
if($_SERVER['REQUEST_METHOD']=='POST'){
    //MEndapatkan Nilai Dari Variable
    $id_barang = $_POST['$id_barang'];
    $jeniskeripik = $_POST['$jeniskeripik'];
    $rasakeripik = $_POST['$rasakeripik'];
    $harga = $_POST['harga'];
}

    //import file koneksi database
    require_once('../koneksi.php');

    //Membuat SQL Query
    $sql = "UPDATE siswa SET 
        id_barang = '$id_barang',
        jeniskeripik = '$jeniskeripik',
        harga= '$harga' 
        WHERE id_$id_barang = '$id_barang';";

    //Meng-update Database
    if(mysqli_query($con,$sql)){
    echo 'Berhasil Update Data Keripik';
    }else{
    echo 'Gagal Update Data Keripik';
    }
    mysqli_close($con);
    
    ?> -->
