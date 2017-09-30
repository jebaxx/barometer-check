<?php
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;
//$option = [ 'gs_bucket_name' => $def_bucket ];
$uploadUrl = CloudStorageTools::createUploadUrl('/postTarget', []);
echo $uploadUrl;
?>
