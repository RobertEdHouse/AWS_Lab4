 <?php
    $file_path = './testresults/test_results.trx';

    $xml_content = file_get_contents($file_path);

    $xml = simplexml_load_string($xml_content);

    $result_summary = $xml->xpath('//ResultSummary');

    print_r($result_summary);

?>