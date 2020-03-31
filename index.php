<html>
<head>
<script src="js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<div class="container">
<form action="index.php" method="post" style="width:30%; margin:auto; margin-top:15%; height:60%;" class="Shadow" enctype="multipart/form-data" >
<legend class="bg-success text-light text-center" style="font-family:Helvetica-Neue;">SIGN UP</legend><br>
<div style="width:90%; margin:auto;">
<div class="form-group" >
<input type="text" name="Name" class="form-control" placeholder="Name" class="i form-control">
</div>
<div class="form-group" >
<input type="text" name="Mail" class="form-control" placeholder="E-Mail" class="i form-control">
</div>
<div class="form-group" >
<input type="text" name="Number" class="form-control" placeholder="Contact Number" class="i form-control">
</div>
<div class="form-group">
<input type="password" name="Pass" class="form-control"  placeholder="Password" class="i form-control" >
</div>
<div class="form-group">
<input type="file" placeholder="Browse" name="fileToUpload">
</div>
<div class="form-group">
<input type="submit" class="btn btn-success" name="Submit" value="Sign Up" id="submit">
</div>
</form>
<a href="login.php">Already a Member? Sign In</a>
</div>
</body>
</html>
<?php
if(isset($_POST["Submit"]) && count($_FILES)>0){ 
$servername="localhost";
$username="reshabh";
$password="Reshabhs49@";
try{
$conn=new PDO("mysql:host=$servername",$username,$password);
$query="Create database if not exists musicx";
$conn->exec($query);
$conn=null;
$conn=new PDO("mysql:host=$servername;dbname=musicx",$username,$password);
$conn->exec("Create table if not exists user (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Name varchar(20),Mobile int(10),Mail varchar(20),Password varchar(20),Image varchar(50))");
$stmt=$conn->prepare("Insert into user (Name,Mobile,Mail,Password,Image) values (:Name,:Mobile,:Mail,:Password,:Image)");
$stmt->bindParam(':Name',$_POST['Name']);
$stmt->bindParam(':Mobile',$_POST['Number']);
$stmt->bindParam(':Mail',$_POST['Mail']);
$stmt->bindParam(':Password',$_POST['Pass']);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$stmt->bindParam(':Image',$target_file);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




$stmt->execute();
echo "YOU HAVE BEEN REGISTERED SUCCESSFULLY!";
}catch(PDOException $e){
echo "Error!".$e->getMessage();
}
}
?>

