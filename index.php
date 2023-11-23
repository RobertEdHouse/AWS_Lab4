 <?php
    $xmlData = simplexml_load_file("./testresults/test_report.xml") 
        or die("Unable to load the xml.");
    echo '<pre>';
    print_r($xmlData);
    echo '</pre>';
?>