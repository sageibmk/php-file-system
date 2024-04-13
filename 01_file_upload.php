<?php 
   if(isset($_POST['submit'])){
     $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

     if(!empty($_FILES['upload']['name'])){
       // print_r ($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $upload_dir = "upload/$file_name";

        
     //get file ext
     $file_ext = explode('.', $file_name);
     $file_ext = strtolower(end($file_ext));

     //validate file ext
     if(in_array($file_ext, $allowed_ext)){
            if($file_size <= 1000000){
                move_uploaded_file($file_tmp, $upload_dir);

                $message = '<p style="color: green;">uploaded successfully</p>';
        
            }else{
                $message = '<p style="color: red;">file is too large</p>';
            }
        
     }else{ 
        $message = '<p style="color: red;">invalid file type</p>';
     }



     }else{
        $message = '<p style="color: red;">please choose a file</p>';
     }


   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <?php echo $message ?? null;?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
    select image to upload: 
    <input type="file" name="upload">
    <input type="submit" value="submit" name="submit"></input>
    </form>
</body>
</html>