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
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" style="display: inline-block; height: 50px;">
                    <span style="display: inline-block; color: #f8c312">YoloLife</span>
                </a>
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

                        while ($row = mysqli_fetch_assoc($query)) {
                            $cat_title = $row['cat_title'];
                            echo "<li><a href='category.php?category={$cat_title}&submit=done'>{$cat_title}</a></li>";
                        }
                        ?>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><button class="btn btn-primary">Log in <span class="glyphicon glyphicon-log-in"></span></button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
