<?php 

//if(!isset($_SESSION)){
//    header('Location:login.php');
//}

include 'baglan.php';
include 'header.php';
include 'sidebar.php'; 

?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        
                        <h1 class="page-head-line">Hoşgeldiniz.. <?php 
                        if(isset($_SESSION['kullanici_kadi'])){ echo $_SESSION['kullanici_kadi'] ;  }
                        if(isset($_SESSION['admin_kadi'])){ echo $_SESSION['admin_kadi'] ;  }?></h1>
                        <h1 class="page-subhead-line">Sitenizi yönetmek için sol taraftaki menüyü kullanınız.. </h1>

                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->


<?php include 'footer.php'; 

//var_dump($_SESSION);?>