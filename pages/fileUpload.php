<?php
    if (isset($_FILES['myFile'])) {
        $uploadDir = dirname(__DIR__) . '/uploads/';
        $fileName = $_FILES['myFile']['name'];

        // get the last inserted id from db
        // $fileName = $result->last_id . '.png';

        if (move_uploaded_file(
            $_FILES['myFile']['tmp_name'], 
            $uploadDir.$fileName
        )) {
            echo '<div class="alert alert-success" role="alert">
            File successfully uploaded!
            </div>';
        } else {
            echo 'Failed upload!';
        }
    }
?>

<?php include('./layout/header.php'); ?>

    <h1>File Upload Demo</h1>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="myFile">Upload File Here</label>
            <input type="file" name="myFile" class="form-control" />
        </div><br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="UPLOAD" />
        </div>
    </form>

<?php include('./layout/footer.php'); ?>