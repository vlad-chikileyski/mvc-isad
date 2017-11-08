<?php

class TermsController
{
    public function actionIndex()
    {
        /*$query_str = parse_url($parameters, PHP_URL_QUERY);
        parse_str($query_str, $query_params);
/*        print_r($query_params);*/
      /*  echo "PARAMETERS:";
        echo $query_params["fraza"]. "<br>";
        echo "data_dodania_od ->". $query_params["data_dodania_od"]. ";<br>";
        echo "typ ->". $query_params["typ"]. ";<br>";
        echo "region ->". $query_params["region"]. ";<br>";
        echo "miejscowosc ->". $query_params["miejscowosc"]. ";<br>";
        echo "cena_od ->". $query_params["cena_od"]. ";<br>";
        echo "cena_do ->". $query_params["cena_do"]. ";<br>";
        echo "wiek ->". $query_params["wiek"]. ";<br>";
        echo "kat ->". $query_params["kat"]. ";<br>";
        echo "ls ->". $query_params["ls"]. ";<br>";
        echo "ns ->". $query_params["ns"]. ";<br>";
        echo "st ->". $query_params["st"]. ";<br>";*/

        
        
        require_once(ROOT . '/views/terms/terms.php');
        return true;
    }
}