 <?php
    $filename = './testresults/test_results.trx';
    $file = fopen($filename, 'rb');

    $content = fread($file, filesize($filename));
    echo $content;

    fclose($file);
?>