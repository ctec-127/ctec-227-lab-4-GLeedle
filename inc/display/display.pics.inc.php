<div class="concert-bg"><img class="concert-bg" src="../../img/concert.jpg" alt="Concert"></div>
    <br>
    <h1>Welcome <?php echo $_SESSION['first_name']; ?>!</h1>
    <div class="main-text">
        <p class="uploader-text text-center">This is your personal area to store and show off photos that you've taken of artists at our concerts.</p>
    </div>
    <div class="container full-page">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label class="control-label text-center">Upload Your concert photos</label> -->
                            <div class="preview-zone hidden">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <!-- <div><b>Preview</b></div> -->
                                    </div>
                                    <div class="box-body"></div>
                                </div>
                            </div>
                            <div class="dropzone-wrapper">
                                <div class="dropzone-desc">
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                    <p>Click Here to upload image or drag image here.</p>
                                </div>
                                <input type="file" name="file_upload" class="dropzone">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-warning pull-right">Upload</button>
                        <!-- <div class="box-tools pull-right">
                            <button type="button" class="btn btn-danger btn-xs remove-preview">
                                <i class="fa fa-times"></i>Reset Form</button>
                        </div> -->
                        <?php
                        if (!empty($message)) {
                            echo "<p id=\"alert\" class=\"alert alert-primary mt-4 text-center\">{$message}</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </form>

        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap flex-row align-items-center justify-content-between">
                    <?php display_images(); ?>
                </div>
            </div>
        </div>
    </div>