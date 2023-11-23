 <?php
    $file = fopen("./testresults/test_results.trx", 'r');

    $bytesToRead = 16384;

    $content = fread($file, $bytesToRead);
    echo '<pre>'
    echo $content;

    fclose($file);
    echo '</pre>';
?>