<?php
// example of how to use basic selector to retrieve HTML contents
include('../simple_html_dom.php');
 
 $indexItem = '48487';
// get DOM from URL or file
$html = file_get_html('http://www.nix.ru/2id.php?i='. $indexItem);

// find all link
foreach($html->find('#goods_photo') as $e) 
    //echo $e->href;

echo '<a href="..."><img src="'.$e->href.'" border="0" alt="tekst alternatywny" /></a>
';

?>