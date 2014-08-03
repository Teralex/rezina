<?php
function D($var, $exit = 0)
{
    print '<div style="background-color: #ffffff; padding: 3px; z-index: 1000;"><pre style="text-align: left; font: normal 10px Courier; color: #000000;">';
    if ( is_array($var) || is_object($var) ) print_r($var);
    else var_dump($var);
    print '</pre></div>';
    if ( $exit ) exit;
}

if ( !ini_get('date.timezone') ) date_default_timezone_set('Europe/Kiev');
$DtTm  = date("Y-m-d H:i:s");

require_once "PHPExcel/PHPExcel.php";
require_once 'PHPExcel/PHPExcel/IOFactory.php';

$v = PHPExcel_IOFACTORY::load("prays_rezinafm.xls");

$db = new PDO('mysql:host=localhost;dbname=testdb','root','root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->exec("set names utf8");
$result = $db->query("SELECT CONCAT (ProductBrand,ProductModel,ProductProf,ProductWidth,ProductRad,ProductSpeed,ProductEnc) AS code,ProductID FROM `Products`")->fetchAll(PDO::FETCH_COLUMN | PDO::FETCH_UNIQUE);

foreach ($v->getWorksheetIterator() as $worksheet)
{
	$highestRow = $worksheet->getHighestRow(); 
	for ($row = 1; $row <= $highestRow; ++ $row)
	{
		$cell = $worksheet->getCellByColumnAndRow(0, $row);
		$val = $cell->getValue();

		if ( preg_match('#(\d+)/(\d+)R(\d+)\s?[XL]{0,2}\s?(1?\d{2})(\w){1,2}\s+(.*)\s+(Continental|Bridgestone|Gislaved|Kumho|Aeolus|Hankook|Kingstar|Tigar|Dunlop)#', $val, $ma) )
		{
			$sezon = substr_count($val, ' шип') && !substr_count($ma[6], ' шип') ? ' шип' : '';
			$tw = (int)$ma[1];
			$tp = (int)$ma[2];
			$td = (int)$ma[3];
			$tl = (int)$ma[4];
			$ts = $ma[5];
			$model = trim($ma[6]).$sezon;	
			$brand = mb_strtolower($ma[7],'utf8');
		}
		else if ( preg_match('#(\d+)/(\d+)R(\d+)\s?[XL]{0,2}\s+(1?\d{2})(\w){1,2}\s(\w+)\s+[XL]{0,2}(TL\s)+(.*)#', $val, $ma) )
		{ 
			$sezon = substr_count($val, ' шип') && !substr_count($ma[4], ' шип') ? ' шип' : '';
			$tw = (int)$ma[1];
			$tp = (int)$ma[2];
			$td = (int)$ma[3];
			$tl = (int)$ma[4];
			$ts = $ma[5];
			$model = trim($ma[6]).$sezon;
			$brand = mb_strtolower($ma[8],'utf8');
			
		}
		else if ( preg_match('#(\d+)/(\d+)R(\d+)\s+(.*)\s+(1?\d{2})(\w{1,2})\s+[XL]{0,2}\s?(TL\s)+(\w+)#', $val, $ma) )
		{
			
			$sezon = substr_count($val, ' шип') && !substr_count($ma[4], ' шип') ? ' шип' : '';
			$tw = (int)$ma[1];
			$tp = (int)$ma[2];
			$td = (int)$ma[3];
			$tl = (int)$ma[5];
			$ts = $ma[6];
			$model = trim($ma[4]).$sezon;
			$brand = mb_strtolower($ma[8],'utf8');
		}		
		else if ( preg_match('#(\d+)/(\d+)R(\d+)\s?[XL]{0,2}\s+(1?\d{2})(\w){1,2}\s+(\w+)\s(.*)#', $val, $ma) )
		{
			$sezon = substr_count($val, ' шип') && !substr_count($ma[4], ' шип') ? ' шип' : '';
			$tw = (int)$ma[1];
			$tp = (int)$ma[2];
			$td = (int)$ma[3];
			$tl = (int)$ma[4];
			$ts = $ma[5];
			$model = trim($ma[7]);
			$brand = mb_strtolower($ma[6],'utf8');


		}
		else if ( preg_match('#(\d+)/(\d+)R(\d+)\s?[XL]{0,2}\s+(1?\d{2})(\w){1,2}\s+(.*)\s?(TL\s)+(\w+)#', $val, $ma) )
		{
			$sezon = substr_count($val, ' шип') && !substr_count($ma[4], ' шип') ? ' шип' : '';
			$tw = (int)$ma[1];
			$tp = (int)$ma[2];
			$td = (int)$ma[3];
			$tl = (int)$ma[4];
			$ts = $ma[5];
			$model = trim($ma[6]);
			$brand = mb_strtolower($ma[8],'utf8');
		}

		else if ( preg_match('#(\d+)/(\d+)R(\d+)\s?[XL]{0,2}\s+(1?\d{2})(\w){1,2}\s+(.*)\s(БШК)#', $val, $ma) )
		{
			$sezon = substr_count($val, ' шип') && !substr_count($ma[4], ' шип') ? ' шип' : '';
			$tw = (int)$ma[1];
			$tp = (int)$ma[2];
			$td = (int)$ma[3];
			$tl = (int)$ma[4];
			$ts = $ma[5];
			$model = trim($ma[6]);
			$brand = mb_strtolower($ma[7],'utf8');;
		}
		else continue;	
		$price = (string)$worksheet->getCellByColumnAndRow(5, $row);
		$avail = !empty((string)$worksheet->getCellByColumnAndRow(6, $row)) && (int)str_replace(array('<','>','=',"/n",''), "", $worksheet->getCellByColumnAndRow(6, $row)) >= 0  ? "yes" : "no";
		if ((empty($price)) || ((int)$price <= 300))
			continue;
		if (isset($result[$brand.$model.$tp.$tw.$td.$ts.$tl]))
		{
			$db->exec("UPDATE Products SET ProductPrice='$price', ProductAvail='$avail',ProductDtMod='$DtTm' WHERE ProductID=".$result[$brand.$model.$tp.$tw.$td.$ts.$tl]);	
			continue;
		}

		$price = $db->quote($price);
		$brand = $db->quote($brand);
		$model = $db->quote($model);
		$tp    = $db->quote($tp);
		$tw    = $db->quote($tw);
		$ts    = $db->quote($ts);
		$tl    = $db->quote($tl);

		$sqlQuery .= (empty($sqlQuery) ? '' : ',')."($brand,$model,$tp,$tw,$td,$ts,$tl,$price,'$avail','$DtTm')";
	}		
}
if ( !empty($sqlQuery) )
	$db->exec("INSERT INTO Products (ProductBrand,ProductModel,ProductProf,ProductWidth,ProductRad,ProductSpeed,ProductEnc,ProductPrice,ProductAvail,ProductDtAdd) VALUES $sqlQuery");

if ($date = $db->query("SELECT ProductDtAdd,ProductID,ProductDtMod FROM `Products`")->fetchAll(PDO::FETCH_ASSOC))
{
	foreach ($date as $val)
	{
		if (($val['ProductDtAdd'] !== $DtTm) && ($val['ProductDtMod'] !== $DtTm))
		{
			 $db->exec("UPDATE Products SET  ProductAvail='no',ProductDtMod='$DtTm' WHERE ProductID=".$val['ProductID']);
		}

		}
}    
