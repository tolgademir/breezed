<?php 

require "db.php";

require "fonksiyonlar.php";

// Panel

if (isset($_POST['panel_veri_guncelle'])) {
	$sorgu=$db->prepare("UPDATE panel_ayarlar SET 
		panel_aciklama=:panel_aciklama,
		panel_footer_yazi=:panel_footer_yazi
		");

	$sonuc=$sorgu->execute(array(
		'panel_aciklama' => $_POST['panel_aciklama'],
		'panel_footer_yazi' => $_POST['panel_footer_yazi'],
	));

	if ($_FILES['panel_logo']['error']=="0") {
		$gecici_isim=$_FILES['panel_logo']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['panel_logo']['name'];
		move_uploaded_file($gecici_isim,"../resimler/favicon/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE panel_ayarlar SET 
			panel_logo=:panel_logo
			");
	
		$sonuc=$sorgu->execute(array(
			'panel_logo' => $dosya_ismi,
		));
	}

	if ($sonuc) {
		header("location:../ayarlar.php?durum=panel-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../ayarlar.php?durum=panel-veri-guncelleme-islemi-basarisiz");
	}
	exit;
}

if (isset($_POST['panel_veri_ekle'])) {
	if ($_FILES['panel_logo']['error']=="0") {
		$gecici_isim=$_FILES['panel_logo']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['panel_logo']['name'];
		move_uploaded_file($gecici_isim,"../resimler/favicon/$dosya_ismi"); 
	}

	$sorgu=$db->prepare("INSERT INTO panel_ayarlar SET 
		panel_aciklama=:panel_aciklama,
		panel_footer_yazi=:panel_footer_yazi,
		panel_logo=:panel_logo
		");

	$sonuc=$sorgu->execute(array(
		'panel_aciklama' => $_POST['panel_aciklama'],
		'panel_footer_yazi' => $_POST['panel_footer_yazi'],
		'panel_logo' => $dosya_ismi
	));

	if ($sonuc) {
		header("location:../ayarlar.php?durum=panel-veri-ekleme-islemi-basarili");
	} else {
		header("location:../ayarlar.php?durum=panel-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// Panel

// Oturum Açma

if (isset($_POST['oturumacma'])) {
	$sorgu=$db->prepare("SELECT * FROM kullanici WHERE kul_mail=:kul_mail AND kul_sifre=:kul_sifre");
	$sorgu->execute(array(
		'kul_mail' => $_POST['kul_mail'],
		'kul_sifre' => md5($_POST['kul_sifre'])
	));
	$sonuc=$sorgu->rowcount();
	$kullanici=$sorgu->fetch(PDO::FETCH_ASSOC);

	if ($sonuc==0) {
		header("location:../404.php?durum=giris-basarisiz");
	} else {
		$_SESSION['kul_isim'] = $kullanici['kul_isim'];
		$_SESSION['kul_mail'] = $kullanici['kul_mail'];
		$_SESSION['kul_id'] = $kullanici['kul_id'];
		
		header("location:../index.php?durum=giris-basarili");
	}
	exit;
}

// Oturum Açma

// Profil Güncelleme

if (isset($_POST['profilkaydet'])) {
	$sorgu=$db->prepare("UPDATE kullanici SET 
		kul_isim=:kul_isim,
		kul_mail=:kul_mail,
		kul_telefon=:kul_telefon WHERE kul_id=:kul_id
		");

	$sonuc=$sorgu->execute(array(
		'kul_isim' => $_POST['kul_isim'],
		'kul_mail' => $_POST['kul_mail'],
		'kul_telefon' => $_POST['kul_telefon'],
		'kul_id' => $_SESSION['kul_id']
	));

	if (strlen($_POST['kul_sifre'])>0) {
		$sorgu=$db->prepare("UPDATE kullanici SET 
			kul_sifre=:kul_sifre WHERE kul_id=:kul_id
			");

		$sonuc=$sorgu->execute(array(
			'kul_sifre' => md5($_POST['kul_sifre']),
			'kul_id' => $_SESSION['kul_id']
		));
	}

	if ($sonuc) {
		header("location:../profil.php?durum=profil-guncelleme-basarili");
	} else {
		header("location:../profil.php?durum=profil-guncelleme-basarisiz");
	}

}

// Profil Güncelleme

// Seo

if (isset($_POST['seoveriguncelle'])) {
	$sorgu=$db->prepare("UPDATE seo SET 
		seo_baslik=:seo_baslik,
		seo_aciklama=:seo_aciklama,
		seo_keyword_1=:seo_keyword_1,
		seo_keyword_2=:seo_keyword_2,
		seo_keyword_3=:seo_keyword_3,
		seo_site_logo_yazi=:seo_site_logo_yazi
		");

	$sonuc=$sorgu->execute(array(
		'seo_baslik' => $_POST['seo_baslik'],
		'seo_aciklama' => $_POST['seo_aciklama'],
		'seo_keyword_1' => $_POST['seo_keyword_1'],
		'seo_keyword_2' => $_POST['seo_keyword_2'],
		'seo_keyword_3' => $_POST['seo_keyword_3'],
		'seo_site_logo_yazi' => $_POST['seo_site_logo_yazi'],
	));

	if ($_FILES['seo_favicon']['error']=="0") {
		$gecici_isim=$_FILES['seo_favicon']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['seo_favicon']['name'];
		move_uploaded_file($gecici_isim,"../resimler/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE seo SET 
			seo_favicon=:seo_favicon
			");
	
		$sonuc=$sorgu->execute(array(
			'seo_favicon' => $dosya_ismi,
		));
	}

	if ($sonuc) {
		header("location:../seo.php?durum=seo-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../seo.php?durum=seo-veri-guncelleme-islemi-basarisiz");
	}
	exit;
}

if (isset($_POST['seoveriekle'])) {
	if ($_FILES['seo_favicon']['error']=="0") {
		$gecici_isim=$_FILES['seo_favicon']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['seo_favicon']['name'];
		move_uploaded_file($gecici_isim,"../resimler/$dosya_ismi"); 
	}

	$sorgu=$db->prepare("INSERT INTO seo SET 
		seo_baslik=:seo_baslik,
		seo_aciklama=:seo_aciklama,
		seo_keyword_1=:seo_keyword_1,
		seo_keyword_2=:seo_keyword_2,
		seo_keyword_3=:seo_keyword_3,
		seo_site_logo_yazi=:seo_site_logo_yazi,
		seo_favicon=:seo_favicon
		");

	$sonuc=$sorgu->execute(array(
		'seo_baslik' => $_POST['seo_baslik'],
		'seo_aciklama' => $_POST['seo_aciklama'],
		'seo_keyword_1' => $_POST['seo_keyword_1'],
		'seo_keyword_2' => $_POST['seo_keyword_2'],
		'seo_keyword_3' => $_POST['seo_keyword_3'],
		'seo_site_logo_yazi' => $_POST['seo_site_logo_yazi'],
		'seo_favicon' => $dosya_ismi
	));

	if ($sonuc) {
		header("location:../seo.php?durum=seo-veri-ekleme-islemi-basarili");
	} else {
		header("location:../seo.php?durum=seo-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// Seo

// Navbar

if (isset($_POST['navbarveriguncelle'])) {
	$sorgu=$db->prepare("UPDATE navbar SET 
		navbar_calisma_saatleri=:navbar_calisma_saatleri,
		navbar_telefon_numarasi=:navbar_telefon_numarasi,
		navbar_arka_plan_renk=:navbar_arka_plan_renk,
		navbar_sosyal_medya_1=:navbar_sosyal_medya_1,
		navbar_sosyal_medya_2=:navbar_sosyal_medya_2,
		navbar_sosyal_medya_3=:navbar_sosyal_medya_3
		");

	$sonuc=$sorgu->execute(array(
		'navbar_calisma_saatleri' => $_POST['navbar_calisma_saatleri'],
		'navbar_telefon_numarasi' => $_POST['navbar_telefon_numarasi'],
		'navbar_arka_plan_renk' => $_POST['navbar_arka_plan_renk'],
		'navbar_sosyal_medya_1' => $_POST['navbar_sosyal_medya_1'],
		'navbar_sosyal_medya_2' => $_POST['navbar_sosyal_medya_2'],
		'navbar_sosyal_medya_3' => $_POST['navbar_sosyal_medya_3'],
	));

	if ($sonuc) {
		header("location:../navbar.php?durum=navbar-veri-guncelleme-basarili");
	} else {
		header("location:../navbar.php?durum=navbar-veri-guncelleme-basarisiz");
	}
	exit;

}

if (isset($_POST['navbarveriekle'])) {
	$sorgu=$db->prepare("INSERT INTO navbar SET
		navbar_calisma_saatleri=:navbar_calisma_saatleri,
		navbar_telefon_numarasi=:navbar_telefon_numarasi,
		navbar_arka_plan_renk=:navbar_arka_plan_renk,
		navbar_sosyal_medya_1=:navbar_sosyal_medya_1,
		navbar_sosyal_medya_2=:navbar_sosyal_medya_2,
		navbar_sosyal_medya_3=:navbar_sosyal_medya_3
		");

	$sonuc=$sorgu->execute(array(
		'navbar_calisma_saatleri' => $_POST['navbar_calisma_saatleri'],
		'navbar_telefon_numarasi' => $_POST['navbar_telefon_numarasi'],
		'navbar_arka_plan_renk' => $_POST['navbar_arka_plan_renk'],
		'navbar_sosyal_medya_1' => $_POST['navbar_sosyal_medya_1'],
		'navbar_sosyal_medya_2' => $_POST['navbar_sosyal_medya_2'],
		'navbar_sosyal_medya_3' => $_POST['navbar_sosyal_medya_3'],
	));
	
	if ($sonuc) {
		header("location:../navbar.php?durum=navbar-veri-ekleme-basarili");
	} else {
		header("location:../navbar.php?durum=navbar-veri-ekleme-basarisiz");
	}
	exit;
	
}

// Navbar

// Slider 

// Slider

// Banner

if (isset($_POST['bannerveriguncelle'])) {
	$sorgu=$db->prepare("UPDATE banner SET 
		banner_arka_plan_renk=:banner_arka_plan_renk,
		banner_baslik=:banner_baslik,
		banner_aciklama=:banner_aciklama,
		banner_buton_metni=:banner_buton_metni,
		banner_buton_link=:banner_buton_link
		");

	$sonuc=$sorgu->execute(array(
		'banner_arka_plan_renk' => $_POST['banner_arka_plan_renk'],
		'banner_baslik' => $_POST['banner_baslik'],
		'banner_aciklama' => $_POST['banner_aciklama'],
		'banner_buton_metni' => $_POST['banner_buton_metni'],
		'banner_buton_link' => $_POST['banner_buton_link'],
	));

	if ($sonuc) {
		header("location:../banner.php?durum=banner-veri-guncelleme-basarili");
	} else {
		header("location:../banner.php?durum=banner-veri-guncelleme-basarisiz");
	}
	exit;

}

if (isset($_POST['bannerveriekle'])) {
	$sorgu=$db->prepare("INSERT INTO banner SET
		banner_arka_plan_renk=:banner_arka_plan_renk,
		banner_baslik=:banner_baslik,
		banner_aciklama=:banner_aciklama,
		banner_buton_metni=:banner_buton_metni,
		banner_buton_link=:banner_buton_link
		");

	$sonuc=$sorgu->execute(array(
		'banner_arka_plan_renk' => $_POST['banner_arka_plan_renk'],
		'banner_baslik' => $_POST['banner_baslik'],
		'banner_aciklama' => $_POST['banner_aciklama'],
		'banner_buton_metni' => $_POST['banner_buton_metni'],
		'banner_buton_link' => $_POST['banner_buton_link'],
	));
	
	if ($sonuc) {
		header("location:../banner.php?durum=banner-veri-ekleme-basarili");
	} else {
		header("location:../banner.php?durum=banner-veri-ekleme-basarisiz");
	}
	exit;
	
}

// Banner

?>