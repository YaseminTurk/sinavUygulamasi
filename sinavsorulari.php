<?php 
include 'baglan.php';
include 'header.php';
include 'sidebar.php';
?>
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<div>
                    <h1 class="page-head-line">Sınav Soruları</h1> <br><br>
                </div>

                <div class="panel-body">

                    <?php

                    $dogru=0;
                    $yanlis=0;
                    $bos=0;
                            
                    $sorusorgu=mysqli_query($baglan,"SELECT * from sinav "); 

                    mysqli_set_charset($baglan, "utf8");
                    while($sorucek=mysqli_fetch_array($sorusorgu)) //sorgudan dönen verileri diziye atarken kullanılır.
                    {
                        echo $sorucek['soru'] ; ?>

                        <form id="list">
                                
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" value="<?php $sorucek['A'] ?>"><?php echo $sorucek['A'] ?>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" value="<?php $sorucek['B'] ?>"><?php echo $sorucek['B'] ?>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" value="<?php $sorucek['C'] ?>"><?php echo $sorucek['C'] ?>
                                        </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" value="<?php $sorucek['D'] ?>"><?php echo $sorucek['D'] ?>
                                    </label>
                                </div>

                                <br>
                            </div>

                        </form>

                        <!--<button type="submit" name="kaydet" class="btn btn-primary">Onayla</button> <br><br><br> -->

                        <?php

                        if(isset($_POST['kaydet']))
                        {

                            $deger=$_POST['optionsRadios'];

                            if($deger==$sorucek['dogru_cevap'])
                            {
                                $dogru++;
                            }
                            else if($deger==null)
                            {
                                $bos++;
                            }
                            else
                            {
                                $yanlis++;
                            }
                        }
    
                    }
                    ?>

                    <br>
                    <a href="sonuc.php"><button style="width: 100%" type="submit" name="sonuc" class="btn btn-primary">Sonuç</button></a><br><br>

               </div>     
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->


<?php 
include 'footer.php';
?>