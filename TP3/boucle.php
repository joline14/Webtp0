<?php
$vins = array(
    array('nom'=>'Meursault', 'annee'=>'2015', 'couleur'=>'Blanc', 'region'=>'Bourgogne'),
    array('nom'=>'Daumas Gassac', 'annee'=>'2010', 'couleur'=>'Rouge', 'region'=>'Languedoc'),
    array('nom'=>'Dom Perignon', 'annee'=>'2018', 'couleur'=>'Rouge', 'region'=>'Champagne'),
    array('nom'=>'Château Margaux', 'annee'=>'2016', 'couleur'=>'Rouge', 'region'=>'Bordeaux')
);
echo'
<table border="1" width="100%"> 
<tr> 
<th> Vin </th> 
<th> Année </th> 
<th> Couleur </th>
<th> region </th>
</tr>' ;
foreach($vins as $vin){
echo'<tr>';
echo'<td>'.$vin['nom'].'</td>';
echo'<td>'.$vin['annee'].'</td>';
echo'<td>'.$vin['couleur'].'</td>';
echo'<td>'.$vin['region'].'</td>';
echo'</tr>';
}
echo'</table>';