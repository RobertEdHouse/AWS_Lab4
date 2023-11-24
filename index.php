 <?php
    $filename = './testresults/test_results.trx';

    $content = simplexml_load_file($filename);
    echo '<pre>';
    echo $content;
    echo '</pre>';

?>