<?php
    require_once 'includes/header.php';
?>
    <!-- Navigation -->
<?php
    require_once 'includes/navigation.php';
?>

<!-- Cover Image -->
  <div class="coverImage">
        <!-- Search Bar -->
    <div class="search-bar">
        <h1>Let's talk YoloLife!</h1>
        <div class="col-md-12">
            <form action="search.php" method="get">
                <div class="input-group">
                    <input name="search" type="text" class="form-control" placeholder="Search blogs...">
                    <span class="input-group-btn">
                    <button name="submit" class="btn btn-primary" type="submit" value="done"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <!-- Blog Entries Column -->
            <?php
                $sql = "SELECT * FROM posts";
                $post_query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($post_query))
                {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_type = $row['post_type'];
                    $post_cat_title = $row['post_cat_title'];

                    if($post_type == "Default")
                    {
            ?>

            <!-- Blog Post -->
            <div class="col-md-4">
                <div class="card">
                  <div class="blogHeaderImage">
                      <img class="img-responsive" src="img/<?php echo $post_image; ?>" alt="Avatar" style="width:100%;">
                      <div class="ctg-text"><?php echo $post_cat_title?></div>
                  </div>

                  <div class="blog-content">
                    <h3><b><?php echo $post_title ?></b></h3>
                    <hr>
                    <p class="small"><span class="glyphicon glyphicon-time"></span> <?php echo "Posted on: ". $post_date; ?></p>
                    <p class="small"><span class="glyphicon glyphicon-user"></span> <?php echo " ".$post_author; ?></p>
                    <p class="article">
                    <?php
                        $length = 260;
                        if(strlen($post_content) < $length)
                        {
                            echo $post_content;
                        }
                        else
                        {
                            echo substr($post_content, 0, $length)."...";
                        }
                    ?>
                    </p>
                    <a class="btn btn-primary bottom-left" href="post.php?post_id=<?php echo $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                  </div>
                </div>
            </div>

            <?php
                    }
                    else if($post_type == "Imageview")
                    {

            ?>

            <div class="col-md-4">
            <!-- Image Blog Post -->
                <div class="imageBlogCover card" style="background-image: url(img/<?php echo $post_image ?>);">
                    <div class="ctg-text"><?php echo $post_cat_title?></div>
                    <div class="imageBlogTitle-text">
                        <?php echo $post_title ?>
                        <hr>
                        <p class="small"><span class="glyphicon glyphicon-time"></span> <?php echo "Posted on:  ". $post_date; ?></p>
                        <p class="small"><span class="glyphicon glyphicon-user"></span> <?php echo "  ".$post_author; ?></p>
                    </div>
                    <a class="btn btn-primary bottom-left" href="post.php?post_id=<?php echo $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>

            <?php
                    }
                }
            ?>




        </div>

        <!-- Pager -->
        <ul class="pager">
            <li class="previous">
                <a href="#">&larr; Older</a>
            </li>
            <li class="next">
                <a href="#">Newer &rarr;</a>
            </li>
        </ul>

        <hr>
    </div>

<?php
    require_once 'includes/footer.php';
?>
