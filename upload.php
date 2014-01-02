<?php
/**
 * Created by Webonise Lab.
 * User: Hrishikesh <hrishikesh@weboniselab.com>
 * Date: 2/1/14 6:10 PM
 */

include_once "ImportXls/Lib/ReadXls.php";

if(isset($_FILES['xlFile']['name']) && !empty($_FILES['xlFile']['name'])) {
    $filePath = '/home/webonise/projects/php/apps2013/testing_web/uploads/testUpload.csv';

   if($response = move_uploaded_file($_FILES['xlFile']['tmp_name'], $filePath)){
       //print_r($response);
   }


}