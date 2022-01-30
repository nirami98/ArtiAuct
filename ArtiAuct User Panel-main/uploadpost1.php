<?php 
    require 'dbconnect.php';
    var_dump($_POST);

    $target_dir_i = "posts/";
    $target_file_i = $target_dir_i.basename($_FILES["image_upload"]["name"]);
    $uploadok_i = 1;
    $imagefiletype = strtolower(pathinfo($target_file_i, PATHINFO_EXTENSION));

    if(isset($_POST["submit"]))
    {
        if($_FILES["image_upload"]["name"] == "")
        {
            echo "<br> No file selected <br>";
            //$target_file_i = "";
            $uploadok_i = 0;
        }

        if(file_exists($target_file_i))
        {
            echo "<br> File already exists <br>";
            $uploadok_i = 0;
        }

        if($_FILES["image_upload"]["size"] > 1000000)
        {
            echo "<br> File too large <br>";
            $uploadok_i = 0;
        }

        if($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg")
        {
            echo "<br> Not of defined type <br>";
            $uploadok_i = 0;
        }
    }

    if($uploadok_i == 0)
    {
        $target_file_i = "";
        echo "<br> File couldnt be uploaded <br>";
    }
    else
    {
        if(move_uploaded_file($_FILES["image_upload"]["tmp_name"], $target_file_i))
        {
            echo "<br> The file " . basename($_FILES['image_upload']["name"]) . "has been uploaded. <br>";
        }

        else
        {
            echo "<br> Sorry, there was an error uploading your file. <br>";
        }
    }

    $target_dir_v = "posts/";
    $target_file_v = $target_dir_v.basename($_FILES["video_upload"]["name"]);
    $uploadok_v = 1;
    $videofiletype = strtolower(pathinfo($target_file_v, PATHINFO_EXTENSION));

    if(isset($_POST["submit"]))
    {
        if($_FILES["video_upload"]["name"] == "")
        {
            echo "<br> No file selected <br>";
            //$target_file_v = "";
            $uploadok_v = 0;
        }

        if(file_exists($target_file_v))
        {
            echo "<br> File already exists <br>";
            $uploadok_v = 0;
        }

        if($_FILES["video_upload"]["size"] > 1000000)
        {
            echo "<br> File too large <br>";
            $uploadok_v = 0;
        }

        if($videofiletype != "mp4")
        {
            echo "<br> Not of defined type <br>";
            $uploadok_v = 0;
        }
    }

    if($uploadok_v == 0)
    {
        $target_file_v = "";
        echo "<br> File couldnt be uploaded <br>";
    }
    else
    {
        if(move_uploaded_file($_FILES["video_upload"]["tmp_name"], $target_file_v))
        {
            echo "<br> The file " . basename($_FILES['video_upload']["name"]) . "has been uploaded. <br>";
        }

        else
        {
            echo "<br> Sorry, there was an error uploading your file. <br>";
        }
    }

    $name = $_POST['name'];
    $h1 = $_POST['h1'];
    $h2 = $_POST['h2'];
    $h3 = $_POST['h3'];
    $h4 = $_POST['h4'];
    $description = $_POST['description'];
    $cat_id = $_POST['catid'];
    $picture = $target_file_i;
    $video = $target_file_v;
    $isactive = 1;
    $price = $_POST['price'];
    $product = $_POST['isproduct'];

    if($product == 1)
    {
        $ip = 1;
    }
    else
    {
        $ip = 0;
    }


    if($uploadok_i ==1)
    {
        $qry = "INSERT INTO post_tbl(catid, postname, posthash1, posthash2, posthash3, posthash4, postdescription, postpicture, postvideo, isproduct, isactive, doi, dou) VALUES ($cat_id, '".$name."', '".$h1."', '".$h2."', '".$h3."', '".$h4."', '".$description."', '".$picture."', '".$video."', $ip, $isactive, NOW(), NOW())";

        $rs = mysqli_query($conn, $qry);

        if($rs)
        {
            //echo "Insertion Successful";
            header("location:blog.php");
            if($ip == 1)
            {
                $postid = mysqli_insert_id($conn);
                $qry2 = "SELECT * from post_tbl where id=$postid";
                $rs2 = mysqli_query($conn, $qry2);

                $qry3 = "INSERT INTO product_tbl(catid, postid, productname, productprice, isactive, doi, dou) VALUES($cat_id, $postid, '".$name."', $price, $isactive, NOW(), NOW())";
                $rs3 = mysqli_query($conn, $qry3);
            }
        }
        else
        {
            //echo "Insertion Not Successful";
            header("location:post.php");
        }
    }
    else
    {
        header("location:post.php");
    }
?>