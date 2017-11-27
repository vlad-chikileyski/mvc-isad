<?php
require_once ('../models/FormMobile.php');
require_once('../security/filter/CategoryFilterMobile.php');
if (isset($_POST['formtype']) && isset($_POST['formmain'])) {
    $subCategory = $_POST['formtype'];
    $main = $_POST['formmain'];
    $categoryParam = str_replace('_','-',$main);
    $categoryPar = str_replace('_','-',$subCategory);
    $FORM_PAGE_HTML = FormMobile::getFormByCategoryName($categoryParam,$categoryPar);
} else {
    header("HTTP/1.0 404 Not Found");
}

?>