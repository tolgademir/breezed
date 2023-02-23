<?php require_once 'header.php';

include "islemler/db.php";

?>

<head>
    <title>Navbar | <?php echo $panel_ayarlar['panel_aciklama'] ?></title>
</head>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">

            <!-- Veri Güncelleme Açılır Menü -->
            <br>
            <div class="card shadow mb-4">
                <a href="#collapseCardExample5" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample5">
                <h5 class="m-0 font-weight-bold text-primary">Navbar | Veri Güncelleme</h5></a>
                <div class="collapse show" id="collapseCardExample5">
                    
                    <div class="card-body">

                        <!-- Form  -->
                        <form action="islemler/islemler.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Navbar Arka Plan Renk:&nbsp</label>
                                    <input type="color" id="colorpicker" name="navbar_arka_plan_renk" value="<?php echo $navbar['navbar_arka_plan_renk'] ?>">
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Navbar Telefon Numarası</label>
                                    <input type="text" class="form-control" name="navbar_telefon_numarasi" value="<?php echo $navbar['navbar_telefon_numarasi'] ?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Navbar Çalışma Saatleri</label>
                                    <input type="text" class="form-control" name="navbar_calisma_saatleri" value="<?php echo $navbar['navbar_calisma_saatleri'] ?>">
                                </div>
                            </div>
    
                            <br>
                            <div class="card-header">
                                <h5 class="font-weight-bold text-primary">Navbar Sosyal Medya<h5>
                            </div>
                            <br>
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Facebook</label>
                                    <br>
                                    <label>Navbar Sosyal Medya 1</label>
                                    <input type="text" class="form-control" name="navbar_sosyal_medya_1" value="<?php echo $navbar['navbar_sosyal_medya_1'] ?>">
                                </div>
    
                                <div class="col-md-6 form-group">
                                    <label>Instagram</label>
                                    <br>
                                    <label>Navbar Sosyal Medya 2</label>
                                    <input type="text" class="form-control" name="navbar_sosyal_medya_2" value="<?php echo $navbar['navbar_sosyal_medya_2'] ?>">
                                </div>
    
                                <div class="col-md-6 form-group">
                                    <label>Twitter</label>
                                    <br>
                                    <label>Navbar Sosyal Medya 3</label>
                                    <input type="text" class="form-control" name="navbar_sosyal_medya_3" value="<?php echo $navbar['navbar_sosyal_medya_3'] ?>">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" name="navbarveriguncelle">Veri Güncelle</button>
                            </div>
    
                        </form>
                        <!-- Form  -->
    
                    </div>

                </div>
                
            </div>
            <br>
            <!-- Veri Güncelleme Açılır Menü -->

            <!-- Veri Ekleme Açılır Menü -->
            <br>
            <div class="card shadow mb-4">
                <a href="#collapseCardExample6" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample6">
                <h5 class="m-0 font-weight-bold text-primary">Navbar | Veri Ekleme</h5></a>
                <div class="collapse" id="collapseCardExample6">
                    
                    <div class="card-body">

                        <!-- Form  -->
                        <form action="islemler/islemler.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Navbar Arka Plan Renk:&nbsp</label>
                                    <input type="color" id="colorpicker" name="navbar_arka_plan_renk">
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Navbar Telefon Numarası</label>
                                    <input type="text" class="form-control" name="navbar_telefon_numarasi">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Navbar Çalışma Saatleri</label>
                                    <input type="text" class="form-control" name="navbar_calisma_saatleri">
                                </div>
                            </div>
    
                            <br>
                            <div class="card-header">
                                <h5 class="font-weight-bold text-primary">Navbar Sosyal Medya<h5>
                            </div>
                            <br>
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Facebook</label>
                                    <br>
                                    <label>Navbar Sosyal Medya 1</label>
                                    <input type="text" class="form-control" name="navbar_sosyal_medya_1">
                                </div>
    
                                <div class="col-md-6 form-group">
                                    <label>Instagram</label>
                                    <br>
                                    <label>Navbar Sosyal Medya 2</label>
                                    <input type="text" class="form-control" name="navbar_sosyal_medya_2">
                                </div>
    
                                <div class="col-md-6 form-group">
                                    <label>Twitter</label>
                                    <br>
                                    <label>Navbar Sosyal Medya 3</label>
                                    <input type="text" class="form-control" name="navbar_sosyal_medya_3">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" name="navbarveriekle">Veri Ekle</button>
                            </div>
    
                        </form>
                        <!-- Form  -->
    
                    </div>

                </div>
                
            </div>
            <br>
            <!-- Veri Ekleme Açılır Menü -->

        </div>

    </div>

</div>

<?php require_once "footer.php"; ?>