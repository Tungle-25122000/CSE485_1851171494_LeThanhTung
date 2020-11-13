<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	    <!-- Font Awesome -->
	    <script src="https://kit.fontawesome.com/cd60ad9e13.js" crossorigin="anonymous"></script>
	    <!-- Google fonts -->
	    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
        <!-- Custom styling -->
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- Admin styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">
    
	    <title>Admin Section - Edit Topics</title>
    </head>
    <body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
	    
	    <!-- Admin Page Wrapper -->
	    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Topic</a>
                    <a href="index.php" class="btn btn-big">Manage Topics</a>

                </div>

                <div class="contnet">

                    <h2 class="page-title">Edit Topic</h2>
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                    
                    <form action="edit.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" >
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description" id="body"><?php echo $description; ?></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
                        </div>
                    </form>

                   
                </div>

            </div>
            <!-- // Admin Content -->
        
	    </div>
	    <!-- // Page Wrapper -->



	    <!-- JQuery -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckesitor -->
        <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

	    <!-- Custom Script -->
	    <script src="../../assets/js/scripts.js"></script>

    </body>


</html>