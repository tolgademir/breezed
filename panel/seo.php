<?php require_once 'header.php';

include "islemler/db.php";

?>

<head>
    <title>Seo | <?php echo $panel_ayarlar['panel_aciklama'] ?></title>
</head>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">

            <!-- Veri Güncelleme Açılır Menü -->
            <br>
            <div class="card shadow mb-4">
                <a href="#collapseCardExample7" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample7">
                <h5 class="m-0 font-weight-bold text-primary">Seo | Veri Güncelleme</h5></a>
                <div class="collapse show" id="collapseCardExample7">
                    
                    <div class="card-body">

                        <!-- Form  -->
                        <form action="islemler/islemler.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Seo Favicon | <a href="resimler/<?php echo $seo['seo_favicon'] ?>" target="_blank">Resmi Görüntüle</a></label>
                                    <input type="file" class="form-control" name="seo_favicon">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Seo Başlık</label>
                                    <input type="text" class="form-control" name="seo_baslik" value="<?php echo $seo['seo_baslik'] ?>">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Seo Açıklama</label>
                                    <input type="text" class="form-control" name="seo_aciklama" value="<?php echo $seo['seo_aciklama'] ?>">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Seo Website Logo Yazısı</label>
                                    <input type="text" class="form-control" name="seo_site_logo_yazi" value="<?php echo $seo['seo_site_logo_yazi'] ?>">
                                </div>
                            </div>

                            <br>
                            <div class="card-header">
                                <h5 class="font-weight-bold text-primary">Seo Anahtar Kelimeler<h5>
                            </div>
                            <br>
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Seo Anahtar Kelime 1</label>
                                    <input type="text" class="form-control" name="seo_keyword_1" value="<?php echo $seo['seo_keyword_1'] ?>">
                                </div>
    
                                <div class="col-md-6 form-group">
                                    <label>Seo Anahtar Kelime 2</label>
                                    <input type="text" class="form-control" name="seo_keyword_2" value="<?php echo $seo['seo_keyword_2'] ?>">
                                </div>
    
                                <div class="col-md-6 form-group">
                                    <label>Seo Anahtar Kelime 3</label>
                                    <input type="text" class="form-control" name="seo_keyword_3" value="<?php echo $seo['seo_keyword_3'] ?>">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" name="seoveriguncelle">Veri Güncelle</button>
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
                <a href="#collapseCardExample8" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample8">
                <h5 class="m-0 font-weight-bold text-primary">Seo | Veri Ekleme</h5></a>
                <div class="collapse" id="collapseCardExample8">
                    
                    <div class="card-body">

                        <!-- Form  -->
                        <form action="islemler/islemler.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Seo Favicon | <a href="resimler/<?php echo $seo['seo_favicon'] ?>" target="_blank">Resmi Görüntüle</a></label>
                                    <input type="file" class="form-control" name="seo_favicon">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Seo Başlık</label>
                                    <input type="text" class="form-control" name="seo_baslik">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Seo Açıklama</label>
                                    <input type="text" class="form-control" name="seo_aciklama">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Seo Website Logo Yazısı</label>
                                    <input type="text" class="form-control" name="seo_site_logo_yazi">
                                </div>
                            </div>

                            <br>
                            <div class="card-header">
                                <h5 class="font-weight-bold text-primary">Seo Anahtar Kelimeler<h5>
                            </div>
                            <br>
    
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Seo Anahtar Kelime 1</label>
                                    <input type="text" class="form-control" name="seo_keyword_1">
                                </div>
    
                                <div class="col-md-6 form-group">
                                    <label>Seo Anahtar Kelime 2</label>
                                    <input type="text" class="form-control" name="seo_keyword_2">
                                </div>
    
                                <div class="col-md-6 form-group">
                                    <label>Seo Anahtar Kelime 3</label>
                                    <input type="text" class="form-control" name="seo_keyword_3">
                                </div>
                            </div>
    
                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" name="seoveriekle">Veri Ekle</button>
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