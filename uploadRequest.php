<html lang="ja">
<head>
<meta charset="UTF-8">
<title>POST test No.2</title>
</head>
<body>

<h1>Post file to Storage</h1>

<?php
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;
//$option = [ 'gs_bucket_name' => $def_bucket ];
$uploadUrl = CloudStorageTools::createUploadUrl('/postTarget', []);
?>
  
<div>
<form method="POST" action=<?php echo $uploadUrl?> enctype="multipart/form-data">
  <input type="file" name="upload_file">
  <input type="submit" name="btn" value="送信">
</form>
</div>

</body>
</html>

