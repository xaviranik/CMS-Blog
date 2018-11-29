<?php require_once "includes/admin_header.php";?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require_once "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fas fa-th"></i> Manage Categories</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                    
                    <!-- Adding Category -->
                    <?php
                        add_category();
                    ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <Label for="cat_title">Add Category</Label>
                                <input class="form-control" type="text" name="cat_title" placeholder="Category Title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>

                    <!-- Checking if update button is pressed -->
                    <?php
                        if(isset($_GET['update_cat']))
                        {
                            include_once "update_categories.php";
                        }
                    ?>

                    </div>

                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="info">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Category Title</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">

                                    <!-- Showing Category Table -->
                                    <?php
                                        show_category_table();
                                    ?>
                                    <!-- Delete Category -->
                                    <?php
                                        delete_category();
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

<?php require_once "includes/admin_footer.php"; ?>


