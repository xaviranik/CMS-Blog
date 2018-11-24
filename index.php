<?php
    require_once 'includes/header.php';
?>

    <!-- Cover Image -->
    <div class="coverImage">
        <!-- Search Bar -->
        <div class="search-bar">
            <h1>Simple, Plain, Elegant!</h1>
            <div class="col-md-12">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search blogs...">
                  <span class="input-group-btn">
                    <button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
                </div>
              </div>
        </div>
    </div>
    
    
    <!-- Navigation -->
<?php
    require_once 'includes/navigation.php';
?>   

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-4">
                <!-- First Blog Post -->
                <div class="card">
                  <div class="blogHeaderImage">
                      <img src="img/tech_1.png" alt="Avatar" style="width:100%">
                      <div class="ctg-text">Technology</div>
                  </div>

                  <div class="blog-content">
                    <h3><b>MacBook Pro (2018) review: Phenomenal computational power...</b></h3> 
                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora </p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>
                  </div>
                </div>
            </div>

            <div class="col-md-4">
                <!-- Second Blog Post -->
                <div class="card">
                  <div class="blogHeaderImage">
                      <img src="img/productivity_1.png" alt="Avatar" style="width:100%">
                      <div class="ctg-text">Productivity</div>
                  </div>

                  <div class="blog-content">
                    <h3><b>16 Ways to Playfully Attract Abundance</b></h3> 
                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora </p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>
                  </div>
                </div>
            </div>

            <div class="col-md-4">
            <!-- Image Blog Post -->
                <div class="sideImage card">
                    <div class="ctg-text">Gaming</div>
                    <div class="sidebar-text">GET READY FOR THE 2019 SEASON OF PUBG ESPORTS</div>
                    <a class="btn btn-primary bottom-left" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>

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
