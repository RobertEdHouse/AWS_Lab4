 <?php
    $file_path = './testresults/test_results.html';

    $text= file_get_contents($file_path);
    echo $text;

?>