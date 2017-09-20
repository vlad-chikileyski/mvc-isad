<!doctype>
<html>
<head>
</head>
<body>
<?php

// POST method ini START

$setting = $_POST;

if (isset($setting['do_import']))
	{
	if (isset($setting['checkbox-im-cat']) && $setting['checkbox-im-cat'] == 'yes')
		{
		echo "ok";

		// func get category

		set_time_limit(0);
		require_once "Classes/PHPExcel.php";

		include ("include/db_connect.php");

		$tmpfname = "price4me.xlsx";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
		$category_main = "";
		for ($row = 7; $row <= $lastRow; $row++)
			{

			// function set category name

			echo "ok";
			if ($worksheet->getCell('A' . $row)->getValue() != "" && $worksheet->getCell('B' . $row)->getValue() == "" && $worksheet->getCell('C' . $row)->getValue() == "")
				{
				$test_value = $worksheet->getCell('A' . $row)->getValue();
				$category_main = $test_value;
				$resultLimit = mysql_query("SELECT name FROM category_price WHERE name = '$test_value' LIMIT 1", $link);
				$row1 = mysql_fetch_array($resultLimit);
				if ($row1 == "")
					{
					$result = mysql_query("INSERT INTO category_price (name , from_name) VALUES ('$test_value', '1')", $link);

					// echo "инсертуем".$test_value . "<br />"; //Влад, тут категории ещё нету, так что он её инсертует)) -->
					// хз

					echo "!INSERT";
					}
				  else
					{

					// echo "В базе есть что-то...". "<br />"; //Влад, тут категория уже существует))

					}

				//  echo $row1["name"];

				}
			}
		}
	  else
		{
		set_time_limit(0);
		require_once "Classes/PHPExcel.php";

		include ("include/db_connect.php");

		$tmpfname = "price4me.xlsx";
		$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
		$excelObj = $excelReader->load($tmpfname);
		$worksheet = $excelObj->getSheet(0);
		$lastRow = $worksheet->getHighestRow();
		$category_main = "";
		for ($row = 7; $row <= $lastRow; $row++)
			{

			// function set category name

			if ($worksheet->getCell('A' . $row)->getValue() != "" && $worksheet->getCell('B' . $row)->getValue() == "" && $worksheet->getCell('C' . $row)->getValue() == "")
				{
				$test_value = $worksheet->getCell('A' . $row)->getValue();
				$category_main = $test_value;
				$resultLimit = mysql_query("SELECT name FROM category_price WHERE name = '$test_value' LIMIT 1", $link);
				$row1 = mysql_fetch_array($resultLimit);
				if ($row1 == "")
					{
					$result = mysql_query("INSERT INTO category_price (name , from_name) VALUES ('$test_value', '1')", $link);

					// echo "инсертуем".$test_value . "<br />"; //Влад, тут категории ещё нету, так что он её инсертует)) -->
					// хз

					}
				  else
					{

					// echo "В базе есть что-то...". "<br />"; //Влад, тут категория уже существует))

					}

				//  echo $row1["name"];

				}
			  else
				{
				if ($worksheet->getCell('A' . $row)->getValue() != "" && $worksheet->getCell('B' . $row)->getValue() != "" && $worksheet->getCell('C' . $row)->getValue() != "")
					{
					echo "<br />" . $category_main . $worksheet->getCell('B' . $row)->getValue();
					echo "<br />";
					$articul_x = $worksheet->getCell('B' . $row)->getValue();
					$name_x = $worksheet->getCell('A' . $row)->getValue();
					$price_x = $worksheet->getCell('C' . $row)->getValue();
					$instance_manager = mysql_query("SELECT name FROM product WHERE name = '$name_x' LIMIT 1", $link);
					$instance_row = mysql_fetch_array($instance_manager);
					if ($instance_row == "")
						{
						$insert_result = mysql_query("INSERT INTO product (name , articul, price, category) VALUES ('$name_x', '$articul_x','$price_x','$category_main')", $link);
						echo "инсертуем" . $name_x . "<br />"; //Влад, тут категории ещё нету, так что он её инсертует)) -->

						// хз

						}
					  else
						{
						echo "В базе есть " . $name_x . "<br />"; //Влад, тут категория уже существует))
						}
					}
				}
			}
		}

?>

</body>
</html>