<form id="update-cat-form" action="" method="post">
    <hr>
    <div class="form-group">
        <Label for="update_cat_title">Update Category</Label>

        <?php //Setting current category to UI
                if(isset($_GET['update_cat']))
                {
                    $update_cat_id = $_GET['update_cat'];

                    $sql = "SELECT * FROM categories WHERE cat_id = {$update_cat_id}";
                    $cat_query = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($cat_query))
                    {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];

        ?>        
                        <input value="<?php if(isset($cat_title)){ echo $cat_title; } ?>" class="form-control" type="text" name="update_cat_title" placeholder="Category Title">
            <?php
                    }
                    
                }
            ?>

        <?php //Updating Category
            if(isset($_POST['update_cat']))
            {
                $update_cat_title = $_POST['update_cat_title'];

                if(empty($update_cat_title) || $update_cat_title == "")
                {
                    echo "<p class='alert-danger'>This field can not be empty!</p>";
                }
                else
                {
                    $sql = "UPDATE categories SET cat_title = '{$update_cat_title}' WHERE cat_id = {$update_cat_id}";
                    $update_query = mysqli_query($conn, $sql);

                    if(!$update_query)
                    {
                        die("Query Failed: ". mysqli_error($conn));
                    }
                    else
                    {
                        echo "<p class='alert-success'>Category updated successfully!</p>";
                        header("Location: categories.php");
                        exit;
                    }
                }

                
            }
        ?>
        
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_cat" value="Update Category">
    </div>
</form>