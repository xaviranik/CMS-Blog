<?php

function add_category()
{
    global $conn;

    if(isset($_POST['submit']))
    {
        $add_cat_title = $_POST['cat_title'];

        if(empty($add_cat_title) || $add_cat_title == "")
        {
            echo "<p class='alert-danger'>This field can not be empty!</p>";
        }
        else
        {
            $sql = "INSERT INTO categories (cat_title) VALUE ";
            $sql .= "('{$add_cat_title}')";

            $add_cat_title_query = mysqli_query($conn, $sql);

            if(!$add_cat_title_query)
            {
                die("Query failed: ". mysqli_error($conn));
            }
            else
            {
                echo "<p class='alert-success'>Category added successfully!</p>";
                header("Location: categories.php");
                exit;
            }
        }
    }
}

function delete_category ()
{
    global $conn;
    
    if(isset($_GET['delete']))
    {
        $delete_cat_id = $_GET['delete'];

        $sql = "DELETE FROM categories WHERE cat_id = {$delete_cat_id}";
        $delete_query = mysqli_query($conn, $sql);

        if(!$delete_query)
        {
            die("Query Failed: ". mysqli_error($conn));
        }
        else
        {
            echo "<p class='alert-success'>Category deleted successfully!</p>";
            header("Location: categories.php");
            exit;
        }
    }
}

function show_category_table()
{
    global $conn;
    $sql = "SELECT * FROM categories";
    $cat_query = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_assoc($cat_query))
    {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "<tr class='text-center'>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a class='btn btn-primary btn-sm' href='categories.php?update_cat={$cat_id}'>Update</a> <a class='btn btn-danger btn-sm' href='categories.php?delete={$cat_id}'>Delete</a></td>";
        echo "</tr>";
    }
}