<!doctype>
<html>
<head>
</head>
<body>
<?php
set_time_limit(0);
require_once "Classes/PHPExcel.php";
include("include/db_connect.php");
include('html_p/simple_html_dom.php');
		$tmpfname = "price4me.xlsx";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
		
		
		for ($row = 7; $row <= $lastRow; $row++) {

		if($worksheet->getCell('A'.$row)->getValue()!="" && $worksheet->getCell('B'.$row)->getValue()!="" && $worksheet->getCell('C'.$row)->getValue()!="" && $worksheet->getCell('D'.$row)->getValue()!="")
		{
		   $articul = $worksheet->getCell('A'.$row)->getValue();
				//вывожу картинки в базу, я получил все артикулы
				echo $articul . "<br>";
				//$indexItem = '48487';
				// get DOM from URL or file
				$html = file_get_html('http://www.nix.ru/2id.php?i='. $articul);
				
				// find all link
				foreach($html->find('#goods_photo') as $e) 
				    //echo $e->href;
			if(true){
					$result = mysql_query("INSERT INTO category_price (name , from_name) VALUES ('$articul', ".$e->href.")",$link);
             		echo "инсертуем"; //Влад, тут категории ещё нету, так что он её инсертует)) -->
             // хз
			}
			else{
				echo "ERROR";
			}

		}
		else{
		} 
		 
		}
		
?>

</body>
</html>