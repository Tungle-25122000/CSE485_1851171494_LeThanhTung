<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
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
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- Admin styling -->
        <link rel="stylesheet" href="../assets/css/admin.css">
    
	    <title>Admin Section - Dashboard</title>
    </head>
    <body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
	    
	    <!-- Admin Page Wrapper -->
	    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

            <!-- Admin Content -->
            <div class="admin-content">
                

                <div class="contnet">

                    <h2 class="page-title">Dashboard</h2>

                    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                    <!-- -->
                   
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
	    <script src="../assets/js/scripts.js"></script>

    </body>


</html>