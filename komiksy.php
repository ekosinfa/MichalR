
	<?php
$licznikpodatku = 0;
$komiksy        = array(
    "1" => array(
        'tytul' => 'SuperMaxxx',
        'egzemplarze_sprzedane' => '3975',
        'cena' => '23.49',
        'gatunek' => 'bohaterowie'
    ),
    "2" => array(
        'tytul' => 'Chan zdobywca',
        'egzemplarze_sprzedane' => '279',
        'cena' => '13.56',
        'gatunek' => 'anime'
    ),
    "3" => array(
        'tytul' => 'Miasto cienia VI',
        'egzemplarze_sprzedane' => '10760',
        'cena' => '5.55',
        'gatunek' => 'bohaterowie'
    ),
    "4" => array(
        'tytul' => 'Jak poznałem Alexa',
        'egzemplarze_sprzedane' => '2891',
        'cena' => '12.44',
        'gatunek' => 'inne'
    )
);
foreach ($komiksy as $komiks)
  {
    $tax = 0;
    if ($komiks['gatunek'] = "bohaterowie")
      {
        $tax = 11;
      }
    if ($komiks['gatunek'] = "anime")
      {
        $tax = 8;
      }
    if ($komiks['gatunek'] = "inne")
      {
        $tax = 6;
      }
    $tax             = $tax / 100;
    $podatekzakomiks = $tax * $komiks['cena'];
    $licznikpodatku += $podatekzakomiks * $komiks['egzemplarze_sprzedane'];
    print $licznikpodatku . "\n";
  }
