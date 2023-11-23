 <?php
    $content = readfile("./testresults/test_results.trx")
        or die("Unable to load the report.");
    echo '<pre>';
    print_r("Результат виконання тестів:");
    print_r($content);
    echo '</pre>';
?>