<?php
require_once 'includes/header.php';
?>
    <!-- Navigation -->
<?php
require_once 'includes/navigation.php';
?>

<?php
    if(isset($_GET['post_id']))
    {
        $post_id = $_GET['post_id'];

        $sql = "SELECT * FROM posts WHERE post_id = {$post_id}";
        $post_query = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($post_query))
        {
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];
        }

    }
?>

<!-- Cover Image -->
<div class="coverImage" style="background-image: url(img/blog_post_cover.png); height: 50vh;">
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="post-wrapper">

                <h1 class=""><?php echo $post_title ?></h1>
                <hr>

                <div class="post-image" style="background-image: url(img/<?php echo $post_image ?>); ">
                </div>

                <hr>

                <!-- Date/Time -->
                <p class=""><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
                <!-- Author -->
                <p class="">
                    <a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $post_author ?></a>
                </p>

                <hr>

                <div class="post-content">
                    <?php echo $post_content ?>
                </div>

                <hr>
            </div>

            <!-- Comment Section -->
            <?php
                if(isset($_POST['create_comment']))
                {
                    $comment_author = $_POST['comment_author'];
                    $comment_email = $_POST['comment_email'];
                    $comment_content = mysqli_real_escape_string($conn, $_POST['comment_content']);

                    $sql = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
                    $sql .= "WHERE post_id = $post_id";
                    $comment_count_query = mysqli_query($conn, $sql);

                    if(!$comment_count_query)
                    {
                      die("Query Failed: ".mysqli_error($conn));
                    }

                    $sql = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_date) VALUES";
                    $sql .= " ($post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}', now())";

                    $comment_query = mysqli_query($conn, $sql);
                    header("Location: post.php?post_id=$post_id");

                    if(!$comment_query)
                    {
                       die("Query failed: ".mysqli_error($conn));
                    }
                }
            ?>

            <!-- Comment Form -->
            <div class="well">
                <h4>Leave a Comment:</h4>
                <form action="" role="form" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="comment_author" placeholder="Your Full Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="comment_email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Your Comment" name="comment_content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="create_comment">Submit</button>
                </form>
            </div>

            <!-- Comment -->
            <?php
              $sql = "SELECT * FROM comments WHERE comment_post_id = {$post_id} ";
              $sql .= "AND comment_status = 'Approved' ORDER BY comment_id DESC";

              $comment_query = mysqli_query($conn, $sql);

              if(!$comment_query)
              {
                die("Query Failed: ".mysqli_error($conn));
              }

              while($row = mysqli_fetch_assoc($comment_query))
              {
                $comment_author = $row['comment_author'];
                $comment_date = $row['comment_date'];
                $comment_content = $row['comment_content'];
              ?>
              <div class="media">
                  <a class="pull-left" href="#">
                      <img class="media-object" src="http://placehold.it/64x64" alt="">
                  </a>
                  <div class="media-body">
                      <h4 class="media-heading"><?php echo $comment_author ?>
                        <small class="text-muted"><?php echo $comment_date ?></small>
                      </h4>
                      <p>
                        <?php echo $comment_content ?>
                      </p>
                  </div>
              </div>
            <?php
              }
            ?>
        </div>

        <div class="col-md-4">
            <div class="sidebar">
                <h3>Categories</h3>
                <hr>
                <ul class="list-unstyled">
                    <?php
                        $sql = "SELECT * FROM categories";
                        $query = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($query))
                        {
                            $cat_title = $row['cat_title'];
                            echo "<li><a href='search.php?search={$cat_title}&submit=done'><i class='fas fa-caret-right'></i> {$cat_title}</a></li><hr>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
