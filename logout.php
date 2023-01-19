<?PHP 
# memulakan fungsi session
session_start();

# menghapuskan nilai pembolehubah session
session_unset();

# menghentikan fungsi session
session_destroy();

# menyemak kewujudan data GET
if(!empty($_GET))
{
    # Jika fail logout dibuka dari bahagian admin. Kembali ke fail index.php di folder admin
	if($_GET['id']="admin");
	header("location:room_admin.php");
}
else
{
    # Jika fail logout dibuka dari folder luaran. Kembali ke fail index.php di folder luaran
	header("location:index.html");
}
?>