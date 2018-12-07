<?php

    if(isset($_GET['edit_post_callback']))
    {
      $callback = $_GET['edit_post_callback'];
      if($callback == "success")
      {
        echo "<div class='alert alert-success'>Post updated successfully!</div>";
      }      
    }

    if(isset($_GET['edit_post_id']))
    {
        $edit_post_id = $_GET['edit_post_id'];

        $sql = "SELECT * FROM posts WHERE post_id = {$edit_post_id}";
        $edit_post_query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($edit_post_query))
        {
            $post_title = $row['post_title'];                                   
            $post_author = $row['post_author'];
            $post_cat_title = $row['post_cat_title'];
            $post_type = $row['post_type'];
            $post_image = $row['post_image'];
            $post_tags = $row['post_tags'];
            $post_status = $row['post_status'];
            $post_content = $row['post_content'];
        }

        //Keeping the value of post_image in order to use if the image is not changed while editing post
        $post_image_non_edited = $post_image;
    }

    //Checking if edit_order button is pressed
    if(isset($_POST['edit_post']))
    {
      $post_title = $_POST['post_title'];
      $post_author = $_POST['post_author'];
      $post_category = $_POST['post_category'];
      $post_type = $_POST['post_type'];
      $post_status = $_POST['post_status'];
      $post_tags = $_POST['post_tags'];
      $post_content = $_POST['post_content']; 
      
      $post_image = $_FILES['post_image']['name'];
      $post_image_temp = $_FILES['post_image']['tmp_name'];


      move_uploaded_file($post_image_temp, "../img/$post_image");

      if(empty($post_image))
      {
        $post_image = $post_image_non_edited;
      }

      //Update Query
      $sql = "UPDATE posts SET post_title = '{$post_title}',
      post_author = '{$post_author}',
      post_cat_title = '{$post_category}',
      post_type = '{$post_type}',
      post_status = '{$post_status}',
      post_tags = '{$post_tags}',
      post_content = '{$post_content}',
      post_date = now(),
      post_image = '{$post_image}'
      WHERE post_id = {$edit_post_id}";

      $edit_post_query = mysqli_query($conn, $sql);

      if($edit_post_query)
      {
        header("Location: posts.php?source=edit_post&edit_post_id={$edit_post_id}&edit_post_callback=success");
      }
      else
      {
          echo "<div class='alert alert-danger'>Failed to update the post!</div>";
          echo "".mysqli_error($conn);
      }
    }

        
?>


<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="post_status">Post Status</label>
    <select class="form-control" name="post_status">
    
      <option value="<?php echo $post_status ?>"><?php echo $post_status ?></option>

      <?php
        if($post_status == "Draft")
        {
          echo "<option value='Published'>Publish</option>";
        }
        else
        {
          echo "<option value='Draft'>Draft</option>";
        }
      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="post_category">Post Category</label>
    <select class="form-control" name="post_category">
    <?php
        $sql = "SELECT * FROM categories";
        $query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($query))
        {
            $cat_title = $row['cat_title'];
            echo "<option value = '{$cat_title}'>{$cat_title}</option>";
        }
    ?>
    </select>
  </div>

  <div class="form-group">
    <label for="post_type">Post Type</label>
    <select class="form-control" name="post_type">
      <option>Default</option>
      <option>Imageview</option>
    </select>
  </div>

  <div class="form-group">
    <label for="post_title">Post Title</label>
    <input value="<?php echo $post_title; ?>" type="text" class="form-control" name="post_title">
  </div>

  <div class="form-group">
    <label for="post_author">Post Author</label>
    <input value="<?php echo $post_author; ?>" type="text" class="form-control" name="post_author">
  </div>

  <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input value="<?php echo $post_tags; ?>" type="text" class="form-control" name="post_tags">
  </div>

  <div class="form-group">
    <label for="">Post Image</label>
    <br>
    <img src="../img/<?php echo $post_image; ?>" alt="Image" width="30%">
  </div>

  <div class="form-group">
    <label for="post_image">Change Post Image</label>
    <input type="file" class="form-control-file" name="post_image">
  </div>
  
  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea class="form-control" name="post_content" rows="15"><?php echo $post_content; ?></textarea>
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="edit_post" value="Edit Post">
 </div>
</form>