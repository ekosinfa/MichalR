<?php

$komiksy = array(
	"1"=>array(
		'tytul'=>'SuperMaxxx',
		'egzemplarze_sprzedane'=>'3975',
		'cena'=>'23.49',
		'gatunek'=>'bohaterowie'),
	"2"=>array(
		'tytul'=>'Chan zdobywca',
		'egzemplarze_sprzedane'=>'279',
		'cena'=>'13.56',
		'gatunek'=>'anime'),
	"3"=>array(
		'tytul'=>'Miasto cienia VI',
		'egzemplarze_sprzedane'=>'10760',
		'cena'=>'5.55',
		'gatunek'=>'bohaterowie'),
	"4"=>array(
		'tytul'=>'Jak poznałem Alexa',
		'egzemplarze_sprzedane'=>'2891',
		'cena'=>'12.44',
		'gatunek'=>'inne')
	);

foreach($komiksy as $komiks){
	if($komiks['gatunek'] == 'bohaterowie'){
		$bohVAT += $komiks['egzemplarze_sprzedane']*$komiks['cena'];
	}
	if($komiks['gatunek'] == 'anime'){
		$aniVAT += $komiks['egzemplarze_sprzedane']*$komiks['cena'];
	}
	if($komiks['gatunek'] == 'inne'){
		$innVAT += $komiks['egzemplarze_sprzedane']*$komiks['cena'];
	}
}
$bohVAT = $bohVAT * 0.11;
$aniVAT = $aniVAT * 0.08;
$innVAT = $innVAT * 0.06;
$podatki = $bohVAT+$aniVAT+$innVAT;

print 'Podatki do zapłacenia '.$podatki.'zł';

?>
