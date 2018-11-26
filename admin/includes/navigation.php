

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">YoloLife Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="../index.php"><i class="far fa-eye"></i> Visit Site</a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <i class="fas fa-chevron-circle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile </a>
                        </li>

                        <li>
                            <a href="#"><i class="fas fa-cog"></i> Settings</a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#user_dropdown"><i class="fas fa-users"></i> User <i class="fas fa-chevron-circle-down"></i></a>
                        <ul id="user_dropdown" class="collapse">
                            <li>
                                <a href="#">View all posts</a>
                            </li>
                            <li>
                                <a href="#">Add new post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#post_dropdown"><i class="fa fa-fw fa-file"></i> Posts <i class="fas fa-chevron-circle-down"></i></a>
                        <ul id="post_dropdown" class="collapse">
                            <li>
                                <a href="#">View all posts</a>
                            </li>
                            <li>
                                <a href="#">Add new post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-th"></i> Categories</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-comment-dots"></i> Comments</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>