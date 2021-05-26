<?php
include_once("../include/GoogleMap.php");
include_once("../include/JSMin.php");

$MAP_OBJECT = new GoogleMapAPI(); $MAP_OBJECT->_minify_js = isset($_REQUEST["min"])?FALSE:TRUE;
$MAP_OBJECT->setDSN("mysql://user:password@localhost/db_name");
$MAP_OBJECT->addMarkerByAddress("Denver, CO","Marker Title", "Marker Description");
$MAP_OBJECT->enableStreetViewControls();
?>
<html>
<head>
<?=$MAP_OBJECT->getHeaderJS();?>
<?=$MAP_OBJECT->getMapJS();?>
</head>
<body>
<?=$MAP_OBJECT->printOnLoad();?>
<?=$MAP_OBJECT->printMap();?>
<?=$MAP_OBJECT->printSidebar();?>
</body>
</html>