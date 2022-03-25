<?php 
include 'baglan.php';
include 'header.php';
include 'sidebar.php';
?>

<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Soru Ekle</h1> <br><br>

				<a href="index.php"><button type="button" name="geri" class="btn btn-primary">Geri</button></a> <br><br>


				<form action="" method="POST" role="form">

					<div class="form-group">
						<label>Soru</label>
						<input class="form-control" type="text" name="soru" value="">
					</div>

					<div class="form-group">
						<label>A)</label>
						<input class="form-control" type="text" name="soru_a" value="">
					</div>

					<div class="form-group">
						<label>B)</label>
						<input class="form-control" type="text" name="soru_b" value="">
					</div>

					<div class="form-group">
						<label>C)</label>
						<input class="form-control" type="text" name="soru_c" value="">
					</div>
					<div class="form-group">
						<label>D)</label>
						<input class="form-control" type="text" name="soru_d" value="">
					</div>

					<div class="form-group">
						<label>Doğru Cevap</label>
						<input class="form-control" type="text" name="soru_dogru_cevap" value="">
					</div>

            <center>
            	<button style="width: 100%" type="submit" name="soru_ekle" class="btn btn-primary">Ekle</button>
            </center>  

            <br>

        </form>


    </div>
</div>
<!-- /. ROW  -->


</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<?php
if(isset($_POST['soru_ekle']))
{
	$soru=$_POST['soru'];
	$soru_a=$_POST['soru_a'];
	$soru_b=$_POST['soru_b'];
	$soru_c=$_POST['soru_c'];
	$soru_d=$_POST['soru_d'];
	$soru_dogru_cevap=$_POST['soru_dogru_cevap'];
	
	
	$soru_ekle= mysqli_query($baglan,"INSERT into sinav(soru,A,B,C,D,dogru_cevap) values('".$soru."','".$soru_a."','".$soru_b."','".$soru_c."','".$soru_d."','".$soru_dogru_cevap."')");
	
    if ($soru_ekle) //kayıt başarılıysa
    {
    	header('Location:index.php');
    }
    else
    {
    	echo '<script type="text/javascript">alert("Ekleme İşlemi Başarısız. Tekrar Deneyiniz.");</script> <meta http-equiv="refresh" content="0;URL=soru.php" />';
    }

}

?>

<?php include 'footer.php'; ?>
