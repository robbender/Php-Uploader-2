<?php
// $newfile = $_FILES['userfile']['name'].date('m-d-Y_H:i:s');
if (isset($_FILES['userfile'])){
  // pre_r($_FILES);

  $phpFileUploadErrors = array(
    0 => 'There is no error, the file uploaded with success',
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.',
);

  $ext_error = false;
  // List of extensions allowed to be uploaded
  $extensions = array('jpg', 'jpeg', 'gif', 'png');
  $file_ext = explode('.',$_FILES['userfile']['name']);
  $file_ext = end($file_ext);
  // Check the ext of the uploaded file
  // pre_r($file_ext);
  $failure = '<div class="alert alert-danger" role="alert">Invalid file type. Please submit only jpg, jpeg, png or gifs. Thanks!</div>';
  $success = '<div class="alert alert-success role="alert"">Success! Image had been uploaded</div>';

  if (!in_array($file_ext, $extensions)) {
    $ext_error = true;
  }

// If the error of the upload is not equal to 0
  if ($_FILES['userfile']['error']){
     $phpFileUploadErrors[$_FILES['userfile']['error']];

  } elseif ($ext_error) {
      echo $failure;

  } else {
      echo $success;
  }

  move_uploaded_file($_FILES['userfile']['tmp_name'], 'images/'.
  // Changes file name
      $_FILES['userfile']['name'].date('m-d-Y_H:i:s'));
};

// Format Response
function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
};

 ?>
