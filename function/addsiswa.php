<?php
$conn = mysqli_connect("localhost", "root", "", "tkjsmkn1kayanhilir");
  function postsiswa ($data){
    global $conn;
        $namasiswa = htmlspecialchars($data["namasiswa"]);
        $tahunmasuk = date($data["tahunmasuk"]);
        $tahunkeluar = date($data["tahunkeluar"]);
        $hallaporan = htmlspecialchars($data["hallaporan"]);
        $statussiswa = htmlspecialchars($data["statussiswa"]);
        $nissiswa = htmlspecialchars($data["nis"]);
        
        //memasukkan File ke database
        $query = "INSERT INTO tbl_siswa VALUES 
            ('','$namasiswa','$tahunmasuk','$tahunkeluar','$hallaporan','$statussiswa','$nissiswa')";
        mysqli_query($conn, $query);
        //Identifikasi_Field
        $identification = ($namasiswa && $tahunmasuk && $tahunkeluar && $hallaporan && $statussiswa && $nissiswa);
        if ($identification == 0){
            echo"<script>
                    alert('Pastikan Semua Field Terisi!');
            </script>";
            return false;
        }
        return mysqli_affected_rows($conn);
}
?>