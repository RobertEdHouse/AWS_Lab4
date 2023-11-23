 <?php
    $content = file_get_contents("./testresults/test_results.trx");
    print_r(file_exists("./testresults/test_results.trx"));
    $xmlData = simplexml_load_file($content) 
        or die("Unable to load the report.");
    echo '<pre>';
    print_r($xmlData);
    echo '</pre>';
?>