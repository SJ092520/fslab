<?php
function datediff($dt1,$dt2){
	$d1=new DateTime($dt1);
	$d2=new DateTime($dt2);
	$dif=$d1->diff($d2)->format('%YY-%mM-%dD %HH:%iM:%sS');
	return $dif;
}
echo datediff('12-10-2020','17-11-2021'),' is the difference';
?>