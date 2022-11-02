
<?php
$conn = mysqli_connect("localhost", "root", "", "tkjsmkn1kayanhilir");
  function postalumni ($data){
    global $conn;
        $namaalumni = htmlspecialchars($data["namaalumni"]);
        $tahunmasuk = date($data["tahunmasuk"]);
        $nisalumni = date($data["nis_alumni"]);
        $tahunkeluar = date($data["tahunkeluar"]);
        $hallaporan = htmlspecialchars($data["hasillaporanalumni"]);
        $statussiswa = htmlspecialchars($data["statusalumni"]);
        
        //memasukkan File ke database
        $query = "INSERT INTO tbl_rekam_alumni VALUES 
            ('','$namaalumni','$nisalumni','$tahunmasuk','$tahunkeluar','$hallaporan','$statussiswa')";
        mysqli_query($conn, $query);
        //Identifikasi_Field
        $identification = ($namaalumni && $nisalumni && $tahunmasuk && $tahunkeluar && $hallaporan && $statussiswa);
        if ($identification == 0){
            echo"<script>
                    alert('Pastikan Semua Field Terisi!');
            </script>";
            return false;
        }
        return mysqli_affected_rows($conn);
}
?>