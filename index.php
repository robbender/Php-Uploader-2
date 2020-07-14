<?php
  include 'upload.php';
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <title>File Uploader</title>
</head>
<body>
  <div class="container">
    <div class="row align-items-center mt-5">
      <!-- <div class="col"> -->
      <div class="">
        <h3 class=" mt-1">Submit Your File</h3>
      <div class="mt-4">
        <form class="form" action="form.php" method="POST" enctype="multipart/form-data">
          <div class="custom-file">
            <div class="form-group mt-4">
              <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
              <!-- <input class="form-control-file" id="" type="file" name="userfile" value=""> -->
              <!-- <input class="custom-file-label" id="validatedCustomFile" type="file" name="userfile" value=""> -->
              <input type="file" class="custom-file-input" id="validatedCustomFile" name="userfile" required>
              <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">Please Choose a File
              </div>
            </div>
          </div>
      </div>
      <span class="input-group-btn">
        <input class="btn btn-warning" type="reset" value="Reset" />
        <!-- <button class="btn btn-warning btn-reset" type="reset" value="Clear">Clear</button> -->
        <a class="btn btn-secondary" href="#" role="button">Back</a>
        <input class="btn btn-primary btn-primary" name="submit" type="submit" value="Submit" />
      </span>
      <!-- <img id="blah" src="#" alt="your image" /> -->
      <br>
      <!-- <div class="">
                  <h5>PREVIEW</h5><br /><img src="<?php echo $imagePreview;?>" width="100" height="100" />
              </div> -->
      <!-- <div id="image-holder"></div> -->
      </form>
    </div>
  </div>
  </div>
  </div>

  <script src="https://use.fontawesome.com/3e83885d26.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="scripts.js" charset="utf-8"></script>

</body>

</html>
