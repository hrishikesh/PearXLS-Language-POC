<?php
/**
 * Created by Webonise Lab.
 * User: Hrishikesh <hrishikesh@weboniselab.com>
 * Date: 2/1/14 6:52 PM
 */

include_once "ImportXls/Lib/ReadXls.php";
$filePath = '/home/webonise/projects/php/apps2013/testing_web/uploads/testUploadDemo.xls';

if(file_exists($filePath)) {
    $objReadXls = new ReadXls($filePath, array('headers'=>array('id','title', 'Lang-2', 'Lang-3'), 'primaryField'=>'id'));
    $data = $objReadXls->readExcelData();
    echo "<pre>"; print_r($data['succeed']); echo "</pre>";
}
