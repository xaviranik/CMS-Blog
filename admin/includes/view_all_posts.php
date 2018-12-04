<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="info">
            <th class="text-center">ID</th>
            <th class="text-center">Title</th>
            <th class="text-center">Author</th>
            <th class="text-center">Category</th>
            <th class="text-center">Post Type</th>
            <th class="text-center">Date Posted</th>
            <th class="text-center">Image</th>
            <th class="text-center">Tags</th>
            <th class="text-center">Comments</th>
            <th class="text-center">Status</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php
            $sql = "SELECT * FROM posts";
            $cat_query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($cat_query))
            {
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];                                   
                $post_author = $row['post_author'];
                $post_cat_title = $row['post_cat_title'];
                $post_type = $row['post_type'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_tags = $row['post_tags'];
                $post_comment_count = $row['post_comment_count'];
                $post_status = $row['post_status'];

                echo "<tr>";
                echo "<td>{$post_id}</td>";
                echo "<td>{$post_title}</td>";                                   
                echo "<td>{$post_author}</td>";
                echo "<td>{$post_cat_title}</td>";
                echo "<td>{$post_type}</td>";
                echo "<td>{$post_date}</td>";
                echo "<td><img src='../img/{$post_image}' alt='image' height='70' width='70'></td>";
                echo "<td>{$post_tags}</td>";
                echo "<td>{$post_comment_count}</td>";
                echo "<td>{$post_status}</td>";
                echo "<td><a class='btn btn-primary' href='posts.php?source=edit_post&edit_post_id={$post_id}'>Edit <i class='fas fa-edit'></i></a> <a class='btn btn-danger' href='posts.php?delete_post={$post_id}'>Delete</a></td>";
                echo "</tr>";
            }    
        ?>
    </tbody>
</table>

<?php
    if(isset($_GET['delete_post']))
    {
        $delete_post_id = $_GET['delete_post'];

        $sql = "DELETE FROM posts WHERE post_id = {$delete_post_id}";

        $delete_post_query = mysqli_query($conn, $sql);

        if($delete_post_query)
        {
            header("Location: ./posts.php");
        }
        else
        {
            echo "<div class='alert alert-danger'>Action failed!</div>";
        }

    }

?>