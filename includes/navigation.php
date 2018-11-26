<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">YoloLife</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="active" href="#">Trending</a>
                    </li>
                    <li>
                        <a href="#">Newsletters</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                        <?php
                           $sql = "SELECT * FROM categories";
                           $query = mysqli_query($conn, $sql);

                           while ($row = mysqli_fetch_assoc($query))
                           {
                               $cat_title = $row['cat_title'];
                               echo "<li><a href='#'>{$cat_title}</a></li>";
                           }
                        ?>


                          <!-- 
                          <li><a href="#">Sports</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Gaming</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Technology</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Productivity</a></li> -->

                        </ul>
                    </li>

                    <li>
                        <a href="#"><button class="btn btn-danger">Log in <span class="glyphicon glyphicon-log-in"></span></button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>