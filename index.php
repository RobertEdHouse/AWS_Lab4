 <?php
    $content = file_get_contents("./testresults/test_results.trx")
        or die("Unable to load the report.");
    echo '<pre>';
    echo $content;
    print_r("��������� ��������� �����:");
    print_r($content);
    echo '</pre>';
?>