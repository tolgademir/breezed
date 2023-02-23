<?php require_once 'header.php';

include "islemler/db.php";

?>

<head>
    <title>Banner | <?php echo $panel_ayarlar['panel_aciklama'] ?></title>
</head>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">

            <!-- Veri Güncelleme Açılır Menü -->
            <br>
            <div class="card shadow mb-4">
                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample3">
                <h5 class="m-0 font-weight-bold text-primary">Banner | Veri Güncelleme</h5></a>
                <div class="collapse show" id="collapseCardExample3">
                    
                    <div class="card-body">

                        <!-- Form  -->
                        <form action="islemler/islemler.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Banner Arka Plan Renk:&nbsp</label>
                                    <input type="color" id="colorpicker" name="banner_arka_plan_renk" value="<?php echo $banner['banner_arka_plan_renk'] ?>">
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Banner Başlık</label>
                                    <input type="text" class="form-control" name="banner_baslik" value="<?php echo $banner['banner_baslik'] ?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Banner Açıklama</label>
                                    <input type="text" class="form-control" name="banner_aciklama" value="<?php echo $banner['banner_aciklama'] ?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Banner Buton Metni</label>
                                    <input type="text" class="form-control" name="banner_buton_metni" value="<?php echo $banner['banner_buton_metni'] ?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Banner Buton Linki</label>
                                    <input type="text" class="form-control" name="banner_buton_link" value="<?php echo $banner['banner_buton_link'] ?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" name="bannerveriguncelle">Veri Güncelle</button>
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
                <a href="#collapseCardExample4" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample4">
                <h5 class="m-0 font-weight-bold text-primary">Banner | Veri Ekleme</h5></a>
                <div class="collapse" id="collapseCardExample4">
                    
                    <div class="card-body">

                        <!-- Form  -->
                        <form action="islemler/islemler.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Banner Arka Plan Renk:&nbsp</label>
                                    <input type="color" id="colorpicker" name="banner_arka_plan_renk">
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Banner Başlık</label>
                                    <input type="text" class="form-control" name="banner_baslik">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Banner Açıklama</label>
                                    <input type="text" class="form-control" name="banner_aciklama">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Banner Buton Metni</label>
                                    <input type="text" class="form-control" name="banner_buton_metni">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Banner Buton Linki</label>
                                    <input type="text" class="form-control" name="banner_buton_link">
                                </div>
                            </div>

                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" name="bannerveriekle">Veri Ekle</button>
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