<?php 
include 'baglan.php';
include 'header.php';
include 'sidebar.php';


?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        
                        <h1 class="page-head-line">Değerlendirme</h1>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table table-hover" border="1" align="center" width="80%">
                                    <thead>
                                        <tr class="success">
                                        <td>Doğru</td>
                                        <td>Yanlış</td>
                                        <td>Boş</td>
                                        </tr>
                                    </thead>


                                        <tr>
                                        <td><?php $dogru ?></td>
                                        <td><?php $yanlis ?></td>
                                        <td><?php $bos ?></td>
                                        </tr>

                                </table>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->


<?php include 'footer.php';?>