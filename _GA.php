<?php 

$sqlstr = "SELECT * FROM `web_config`";
$Data   = $g_db->getRow($sqlstr);

echo $Data['contents'];

?>