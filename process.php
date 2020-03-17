<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *   file                 :  process.php
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *   author               :  Muhamed Skoko - mskoko.me@gmail.com
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

include_once($_SERVER['DOCUMENT_ROOT'].'/includes.php');


////////////////////////////////////////////////////////

if (isset($GET['translate'])) {
	$YandexKey 	= yandex_key;
	if (isset($YandexKey) && empty($YandexKey)) {
		die('Key is empty!');
	}
	// Uzmi podatke;
	$textZaPrevod 	= urlencode($Secure->SecureTxt($POST['text']));
	// Jezik;
	$tSa 			= $Secure->SecureTxt($POST['tSa']); 
	$tNa 			= $Secure->SecureTxt($POST['tNa']);
	// Yandex razume | rs-en
	$Lang 			= strtolower($tSa.'-'.$tNa);

	$tTranslate = file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?key='.$YandexKey.'&text='.$textZaPrevod.'&lang='.$Lang.'&format=plain'); 
	$tTranslate = json_decode($tTranslate, true);

	$cArr = ['success', $Secure->htmlToPlainText($tTranslate['text'][0])];
	
	$SendResponse 	= json_encode($cArr);
	die($SendResponse);
}