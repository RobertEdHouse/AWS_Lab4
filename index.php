 <?php
    $content = file_get_contents("./testresults/*.trx");
    $xmlData = simplexml_load_file($content) 
        or die("Unable to load the report.");
    echo '<pre>';
    print_r($xmlData);
    echo '</pre>';
?>