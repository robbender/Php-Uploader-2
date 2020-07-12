<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>File Uploader</title>
</head>

<body>

  <?php
  // $newfile = ($_FILES['userfile']['name'].date('m-d-Y_H:i:s'));
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
    $start = '<div class="alert alert-info" role="alert" data-dismiss="alert">Please submit only jpg, jpeg, png or gifs. Thanks!</div>';
    $failure = '<div class="alert alert-danger" role="alert" data-dismiss="alert">Invalid file type. Please submit only jpg, jpeg, png or gifs. Thanks!</div>';
    $success = '<div class="alert alert-success role="alert" data-dismiss="alert">Success! Image had been uploaded</div>';

    if (!in_array($file_ext, $extensions)) {
      $ext_error = true;
      echo $start;
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
  <div class="container">
    <div class="row align-items-center">
      <div class="col ">
        <div class="mt-5">
          <h3>Submit Your File</h3>
          <div class="">
            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
              <!-- <label for="">File Upload</label> -->
              <input id="" type="file" name="userfile" value="">
              <!-- <input type="submit" name="submit" value="Upload"> -->
              <span class="input-group-btn">
                <input class="btn btn-warning" type="submit" value="Reset" />
                <!-- <button class="btn btn-warning btn-reset" type="reset" value="Clear">Reset</button> -->
                <input class="btn btn-primary btn-primary" name="submit" type="submit" value="Submit" />
                <!-- <button type="submit" name="submit" class="btn btn-primary">Submit</button> -->
              </span>
              <!-- <img id="blah" src="#" alt="your image" /> -->
              <div id="image-holder"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://use.fontawesome.com/3e83885d26.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
