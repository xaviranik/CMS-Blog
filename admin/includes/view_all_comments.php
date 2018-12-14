<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="info">
            <th class="text-center">ID</th>
            <th class="text-center">Author</th>
            <th class="text-center">Email</th>
            <th class="text-center">Date</th>
            <th class="text-center">Comment</th>
            <th class="text-center">Status</th>
            <th class="text-center">Post</th>
            <th class="text-center">Approve</th>
            <th class="text-center">Unapprove</th>
            <th class="text-center">Delete</th>
        </tr>
    </thead>

    <tbody>
        <?php
          $sql = "SELECT * FROM comments";
          $comment_query = mysqli_query($conn, $sql);

          while ($row = mysqli_fetch_assoc($comment_query))
          {
              $comment_id = $row['comment_id'];
              $comment_post_id = $row['comment_post_id'];
              $comment_author = $row['comment_author'];
              $comment_email = $row['comment_email'];
              $comment_date = $row['comment_date'];
              $comment_status = $row['comment_status'];
              $comment_content = $row['comment_content'];

              echo "<tr>";
              echo "<td>{$comment_id}</td>";
              echo "<td>{$comment_author}</td>";
              echo "<td>{$comment_email}</td>";
              echo "<td>{$comment_date}</td>";
              echo "<td>{$comment_content}</td>";
              echo "<td>{$comment_status}</td>";

              // Getting the post title
              $sql = "SELECT * FROM posts WHERE post_id = $comment_post_id";
              $comment_post_query = mysqli_query($conn, $sql);

              if(!$comment_post_query)
              {
                die("Query Failed: ".mysqli_error($conn));
              }

              while($row = mysqli_fetch_assoc($comment_post_query))
              {
                $post_title = substr($row['post_title'], 0 , 45)."...";
                $post_id = $row['post_id'];
              }

              echo "<td><a class='text-info' href='../post.php?post_id=$post_id'>{$post_title}</a></td>";

              //Checking the comment status and setting the links
              if(!empty($comment_status))
              {
                if($comment_status == "Approved")
                {
                  echo "<td class='disable text-center'><a href='#'><i class='fas fa-check'></i></a>";
                  echo "<td class='text-center'><a class='text-danger' href='comments.php?unappove_comment_id=$comment_id'><i class='fas fa-times-circle'></i></a>";
                }
                else if($comment_status == "Unapproved")
                {
                  echo "<td class='text-center'><a href='comments.php?appove_comment_id=$comment_id'><i class='fas fa-check'></i></a>";
                  echo "<td class='disable text-center'><a href='#'><i class='fas fa-times-circle'></i></a>";
                }
              }

              echo "<td class='text-center'><a class='text-info' href='comments.php?delete_comment_id=$comment_id'><i class='fas fa-trash-alt'></i></a>";
              echo "</tr>";
          }
        ?>
    </tbody>
</table>

<!-- Setting Comment Status -->
<?php
  if(isset($_GET['unappove_comment_id']))
    {
        $unapprove_comment_id = $_GET['unappove_comment_id'];

        $sql = "UPDATE comments SET comment_status = 'Unapproved' WHERE comment_id = $unapprove_comment_id";

        $unapprove_comment_query = mysqli_query($conn, $sql);

        if($unapprove_comment_query)
        {
          header("Location: comments.php");
        }
        else
        {
          echo "<div class='alert alert-danger'>Comment deletion failed!</div>";
        }
    }

    if(isset($_GET['appove_comment_id']))
    {
        $approve_comment_id = $_GET['appove_comment_id'];

        $sql = "UPDATE comments SET comment_status = 'Approved' WHERE comment_id = $approve_comment_id";

        $approve_comment_query = mysqli_query($conn, $sql);

        if($approve_comment_query)
        {
          header("Location: comments.php");
        }
        else
        {
          echo "<div class='alert alert-danger'>Comment deletion failed!</div>";
        }
    }
?>

<!-- Delete Comment -->
<?php
  if(isset($_GET['delete_comment_id']))
  {
      $delete_comment_id = $_GET['delete_comment_id'];

      // Upadating the post comment count
      $sql = "UPDATE posts SET post_comment_count = post_comment_count - 1 WHERE post_id = $post_id";
      $update_comment_count = mysqli_query($conn, $sql);

      $sql = "DELETE FROM comments WHERE comment_id = $delete_comment_id";

      $delete_comment_query = mysqli_query($conn, $sql);

      if($delete_comment_query)
      {
        header("Location: comments.php");
      }
      else
      {
        echo "<div class='alert alert-danger'>Comment deletion failed!</div>";
      }
  }

?>
