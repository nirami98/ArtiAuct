<?php
    require 'dbconnect.php';
    var_dump($_POST);

    $target_dir ="uploads/";
    $target_file =$target_dir.basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));  


    /*if (!isset($_POST['submit']))
    {
        header("location:registration.php");
        exit();
    }*/


    if(isset($_POST["submit"]))
    {
        if($_FILES["fileToUpload"]["name"] == "")
        {
            echo "<br> No file selected <br>";
            //$target_file_i = "";
            $uploadOk = 0;
        }

        if(file_exists($target_file))
        {
            echo "<br> File already exists <br>";
            $uploadOk = 0;
        }

        if($_FILES["fileToUpload"]["size"] > 1000000)
        {
            echo "<br> File too large <br>";
            $uploadOk = 0;
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
        {
            echo "<br> Not of defined type <br>";
            $uploadOk = 0;
        }
    }

    if($uploadOk == 0)
    {
        $target_file = "";
        echo "<br> File couldnt be uploaded <br>";
    }
    else
    {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
        {
            echo "<br> The file " . basename($_FILES['fileToUpload']["name"]) . "has been uploaded. <br>";
        }

        else
        {
            echo "<br> Sorry, there was an error uploading your file. <br>";
        }
    }

echo "<br>"."target_dir = $target_dir"."<br>";
echo "target_file = $target_file"."<br>";
echo "imageFileType = $imageFileType"."<br>"."<br>";

/*$target_file = basename($_FILES['fileToUpload']["name"]);*/

    $fn = $_POST['firstname'];
    $ln = $_POST['lastname'];
    $un = $_POST['username'];
    $pp = $target_file;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $mn = $_POST['mobilenumber'];
    $gender = $_POST['gender'];
    $isactive = 1;
    $usertype = 2;
    $id = $_SESSION['uid'];

    if($password!=$cpassword)
    {
        header("location:editprofile.php");
        exit();
    }

    //echo $fn . $ln . $email . $password . $gender . $mn

    /*$qry = "INSERT INTO user_tbl(firstname, lastname, username, profile_pic, email, password, mobilenum, gender, isactive, doi, dou, usertype) VALUES ('".$fn."', '".$ln."', '".$un."', '".$pp."', '".$email."', '".$password."', '".$mn."', '".$gender."', $isactive, NOW(), NOW(), $usertype)";*/


    $qry = "UPDATE user_tbl set firstname=" .$firstname. ", lastname=" .$lastname. ", username=" .$username. ", profile_pic=" .$pp. ", email=" .$email. ", password=" .$password. ", mobilenum=" .$mn. "where id=" .$id;


    $rs = mysqli_query($conn, $qry);
    if($rs)
    {
        $_SESSION['first']=$row['firstname'];
        header("location:logout.php");
    }
    else
    {
        header("location:editprofile.php");
    }
?>