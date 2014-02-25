<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

$inoctet=shell_exec("snmpwalk -Os -c public -v 1 10.0.1.1 ifInOctets.8 | awk '{print $4}'"); //snmp2_get("10.0.1.1", "public", "ifInOctets.8");
$inoctet=trim($inoctet);

$outoctet=shell_exec("snmpwalk -Os -c public -v 1 10.0.1.1 ifOutOctets.8 | awk '{print $4}'"); //snmp2_get("10.0.1.1", "public", "ifOutOctets.8");
$outoctet=trim($outoctet);

print('{ "inoctet" : "'.$inoctet.'", "outoctet" : "'.$outoctet.'","time" : "'.date("Y/d/m H:i:s").'" }');
?>
