<?php
if(isset($_POST['create_post']))
{
    //Getting values from the form
    $post_title = $_POST['post_title'];
    $post_author = $_POST['post_author'];
    $post_category = $_POST['post_category'];
    $post_type = $_POST['post_type'];
    $post_status = $_POST['post_status'];
    $post_tags = $_POST['post_tags'];
    $post_content = mysqli_real_escape_string($conn,$_POST['post_content']);

    $post_date = date('d-m-y');
    $post_comment_count = 4;
    
    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];
    
    //Checking the uploaded file and moving the uploaded image to 'img' folder
    if(!empty($post_image))
    {
      $check = getimagesize($post_image_temp);

      if($check !== false)
      {
        move_uploaded_file($post_image_temp, "../img/$post_image");
        //SQL for inserting data into the DB
        $sql = "INSERT INTO posts (post_title, post_author, post_cat_title, post_type, post_status, post_tags, post_content, post_date, post_comment_count, post_image) VALUES";

        $sql .= "('{$post_title}', '{$post_author}', '{$post_category}', '{$post_type}', '{$post_status}', '{$post_tags}', '{$post_content}', now() , '{$post_comment_count}', '{$post_image}')";

        $add_post_query = mysqli_query($conn, $sql);

        if($add_post_query)
        {
          echo "<div class='alert alert-success'>Post Added successfully!</div>";
        }
        else
        {
          echo "<div class='alert alert-danger'>Failed to add the post!</div>";
          // echo "".mysqli_error($conn);
        }
      }
      else
      {
        echo "<div class='alert alert-danger'>Image Upload Failed!</div>";
      }

    }
    else
    {
      echo "<div class='alert alert-danger'>Post Image can't be blank!</div>";
    }
    

}

?>

<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="post_status">Post Status</label>
    <select class="form-control" name="post_status">
      <option>Draft</option>
      <option>Published</option>
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
            echo "<option>{$cat_title}</option>";
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
    <input type="text" class="form-control" name="post_title">
  </div>

  <div class="form-group">
    <label for="post_author">Post Author</label>
    <input type="text" class="form-control" name="post_author">
  </div>

  <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input type="text" class="form-control" name="post_tags">
  </div>

  <div class="form-group">
    <label for="post_image">Post Image</label>
    <input type="file" class="form-control-file" name="post_image">
  </div>
  
  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea class="form-control" name="post_content" rows="15"></textarea>
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_post" value="Add Post">
 </div>
</form>