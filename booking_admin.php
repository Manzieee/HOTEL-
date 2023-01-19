<?PHP
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../db.php');

# arahan SQL mencari maklumat tempahan homestay
$arahan_sql_cari="SELECT* FROM tempahan,penyewa,jenis_rumah,homestay
WHERE
tempahan.nokp_penyewa=penyewa.nokp_penyewa AND
tempahan.no_rumah=homestay.no_rumah AND
homestay.id_jenis=jenis_rumah.id_jenis";

# arahan SQL mencari tempahan homestay
$laksana_sql_cari=mysqli_query($con,$arahan_sql_cari);
?>
<!-- menyediakan header bagi jadual -->
<h4>Reservation List</h4>
<table id='saiz' border='1'>
    <tr>
        <td>Num</td>
        <td>Customer Name</td>
        <td>Customer IC Number</td>
        <td>Customer Phone Number</td>
        <td>House Number</td>
        <td>Address</td>
        <td>Type</td>
        <td>Price</td>
        <td>Check-in</td>
        <td>Check-out</td>
        <td>Total Payment</td>
    </tr>
    <?PHP 
    $bil=0;
    # pemboleh ubah $rekod mengambail semua data yang ditemui oleh $laksana_sql_cari
    while ($rekod=mysqli_fetch_array($laksana_sql_cari))
    {
        # sistem akan memaparkan data $rekod baris demi baris sehingga habis
        echo "
        <tr>
            <td>".++$bil."</td>
            <td>".$rekod['nama_penyewa']."</td>
            <td>".$rekod['nokp_penyewa']."</td>
            <td>".$rekod['notel_penyewa']."</td>
            <td>".$rekod['no_rumah']."</td>
            <td>".$rekod['alamat']."</td>
            <td>".$rekod['jenis']."</td>
            <td>".$rekod['harga']."</td>
            <td>".$rekod['tarikh_masuk']."</td>
            <td>".$rekod['tarikh_keluar']."</td>
            <td>".$rekod['jumlah_bayaran']."</td>
           
        </tr>";
    }
    ?>
</table>

<button onClick="window.print()">Print this page</button>