 <?php
    $content = readfile("./testresults/test_results.trx")
        or die("Unable to load the report.");
    echo '<pre>';
    print_r("��������� ��������� �����:");
    print_r($content);
    echo '</pre>';
?>