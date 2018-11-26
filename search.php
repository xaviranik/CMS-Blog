<?php
    require_once 'includes/header.php';
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
                    <button name="submit" class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Navigation -->
<?php
    require_once 'includes/navigation.php';
?>

    <!-- Search Engine Code -->
            <?php
                if(isset($_GET['submit']))
                {
                    $search_string = $_GET['search'];

                    if(!empty($search_string))
                    {
                        $search_sql = "SELECT * FROM posts WHERE post_tags LIKE '%$search_string%'";

                        $search_query = mysqli_query($conn, $search_sql);

                        if(!$search_query)
                        {
                            die("Query Failed: ". mysqli_error($conn));
                        }
                        else
                        {
                            $count = mysqli_num_rows($search_query);

                            if($count == 0)
                            {
                                
                            }
                            else
                            {
                                

            ?>   

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <!-- Blog Entries Column -->
            <?php

                while ($row = mysqli_fetch_assoc($search_query))
                {
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_cat_id = $row['post_cat_id'];
                    $post_cat_title = $row['post_cat_title'];

                    $_POST['submit'] = "";

                    if($post_cat_id == 1)
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
                    <a class="btn btn-primary bottom-left" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                  </div>
                </div>
            </div>

            <?php            
                    }
                    else if($post_cat_id == 2)
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
                    <a class="btn btn-primary bottom-left" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>

            <?php            
                    }
                }
            ?>        
     

            

        </div>
            
            <?php
                            }
                        }
                    }    
                }
            ?>
    
    


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
