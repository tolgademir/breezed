<?php require_once 'header.php';

include "islemler/db.php";

?>

<head>
    <title>Ayarlar | <?php echo $panel_ayarlar['panel_aciklama'] ?></title>
</head>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">

            <!-- Veri Güncelleme Açılır Menü -->
            <br>
            <div class="card shadow mb-4">
                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample2">
                <h5 class="m-0 font-weight-bold text-primary">Ayarlar | Veri Güncelleme</h5></a>
                <div class="collapse show" id="collapseCardExample2">
                    
                    <div class="card-body">

                        <!-- Form  -->
                        <form action="islemler/islemler.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Panel Logo | <a href="resimler/favicon/<?php echo $panel_ayarlar['panel_logo'] ?>" target="_blank">Resmi Görüntüle</a></label>
                                    <input type="file" class="form-control" name="panel_logo">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Panel Açıklama</label>
                                    <input type="text" class="form-control" name="panel_aciklama" value="<?php echo $panel_ayarlar['panel_aciklama'] ?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Panel Alt Kısım Yazısı</label>
                                    <input type="text" class="form-control" name="panel_footer_yazi" value="<?php echo $panel_ayarlar['panel_footer_yazi'] ?>">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" name="panel_veri_guncelle">Veri Güncelle</button>
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
                <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample1">
                <h5 class="m-0 font-weight-bold text-primary">Ayarlar | Veri Ekleme</h5></a>
                <div class="collapse" id="collapseCardExample1">
                    
                    <div class="card-body">

                        <!-- Form  -->
                        <form action="islemler/islemler.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Panel Logo | <a href="resimler/favicon/<?php echo $panel_ayarlar['panel_logo'] ?>" target="_blank">Resmi Görüntüle</a></label>
                                    <input type="file" class="form-control" name="panel_logo">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Panel Açıklama</label>
                                    <input type="text" class="form-control" name="panel_aciklama">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Panel Alt Kısım Yazısı</label>
                                    <input type="text" class="form-control" name="panel_footer_yazi">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" name="panel_veri_ekle">Veri Kaydet</button>
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