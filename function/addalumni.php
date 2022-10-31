
<?php
$conn = mysqli_connect("localhost", "root", "", "tkjsmkn1kayanhilir");
  function postsiswa ($data){
    global $conn;
        $namasiswa = htmlspecialchars($data["namasiswa"]);
        $tahunmasuk = date($data["tahunmasuk"]);
        $tahunkeluar = date($data["tahunkeluar"]);
        $hallaporan = htmlspecialchars($data["hallaporan"]);
        $statussiswa = htmlspecialchars($data["statussiswa"]);
        
        //memasukkan File ke database
        $query = "INSERT INTO tbl_siswa VALUES 
            ('','$namasiswa','$tahunmasuk','$tahunkeluar','$hallaporan','$statussiswa')";
        mysqli_query($conn, $query);
        //Identifikasi_Field
        $identification = ($namasiswa && $tahunmasuk && $tahunkeluar && $hallaporan && $statussiswa);
        if ($identification == 0){
            echo"<script>
                    alert('Pastikan Semua Field Terisi!');
            </script>";
            return false;
        }
        return mysqli_affected_rows($conn);
}
?>