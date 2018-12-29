<?php require_once "includes/admin_header.php";?>

<div id="wrapper">

    <!-- Navigation -->
    <?php require_once "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fas fa-comment-dots"></i> Manage comments</h1>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12">
                    <?php
                        if(isset($_GET['source']))
                        {
                            $source = $_GET['source'];
                        }
                        else
                        {
                            $source = "";
                        }

                        switch($source)
                        {
                            default:
                            include "includes/view_all_comments.php";
                            break;
                        }
                    ?>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->

<?php require_once "includes/admin_footer.php"; ?>
