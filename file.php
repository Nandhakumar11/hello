<?php 
$localhost = "localhost"; 
$dbusername = "root"; 
$dbpassword = "";  
$dbname = "CodeFlix";  
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
     
    
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    
    $tname = $_FILES["file"]["tmp_name"];
   
     
$uploads_dir = 'images';
    
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    
    $sql = "INSERT into fileup(title,image) VALUES('$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
?>