<!DOCTYPE html>
	<html>
	<head>
		<title>code generation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="">
		</head>
	<body>
		<?php
		require 'config.php';
	
    error_reporting(E_ALL);
    require 'config.php';

      $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
      $code=substr(str_shuffle($str_result), 0, 4); 
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$contact=$_POST['email'];
			$subject=$_POST['subject'];
			$msg=$_POST['msg'];
      
      $imgpath=$_FILES['image']['tmp_name'];
      $filepath=$_FILES['file']['tmp_name'];
          	if($imgpath){
                    $img_binary = fread(fopen($imgpath, "r"), filesize($imgpath));
                    $picture = base64_encode($img_binary);

                    $insert=mysqli_query($conn,"INSERT INTO message(name,contact,subject,msg,image,codeg) VALUES ('$name','$contact','$subject','$msg','$picture','$code')");
                        if($insert){
                          $yourcode="yourcode message is:".$code;

                      }
                        else{
                          echo $conn->error;
                        }       
            }
          
            if($filepath){
            //	mkdir($code, 0777);
                 $target_dir = $code."/";
    			$target_file = $target_dir . basename($_FILES["file"]["name"]);
    			$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	            			$yourfile = $code."/".$_FILES["file"]["name"];
	            			//if (move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)) {
	       						//echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
	       						
							//\
            }     
}
	?>
		 <div class="container">
  
            <h5 class="card-title text-center"><img src = "just.png" height="30%" width="30%" ></h5>
           
            <hr class="my-4">
               <p>
                <?php  echo "$yourcode"; ?> 
              </p>
              <a href = "receiver.php"><button class="btn btn-lg btn-primary btn-block text-uppercase">SEND MESSAGE</button></a>
              <a href = "index.php"><button class="btn btn-lg btn-success btn-block text-uppercase">HOME</button></a><BR>
    </body>
  <p id = "result"></p>
</html>