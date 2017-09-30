<?php
  require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
  use google\appengine\api\cloud_storage\CloudStorageTools;
  $gs_name  = $_FILES['upload_file']['name'];
  $tmp_name = $_FILES['upload_file']['tmp_name'];
  $gs_name  = "gs://".CloudStorageTools::getDefaultGoogleStorageBucketName()."/".$gs_name;
  move_uploaded_file($tmp_name, $gs_name);
?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<title>POSTed file accepter</title>
</head>
<body>

<h1>File uploaded!</h1>

uploaded file name =
<?php echo $gs_name;?>

</body>
</html>

