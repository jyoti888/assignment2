<!DOCTYPE html>
<html>
      <title>form</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/all.css">

</head>
<body>
<?php
require 'config.php';
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
    //echo "hello";
  $code=$_POST['code'];
  //echo $code;
 $result=mysqli_query($conn,"SELECT * FROM message WHERE codeg='$code'");
  $rows=mysqli_num_rows($result);
  if ($rows==1) {
  $message=$result->fetch_assoc();
   // $id=$message['id'];
    $name=$message['name'];
    $contact=$message['contact'];
    $subject=$message['subject'];
    $msg=$message['msg'];
    $image=$message['image'];




  }

}
?>
  
            <h5 class="card-title text-center"><img src = "just.png" height="30%" width="30%" ></h5>
              <hr class="my-4">
              <span><p><h4 style="color: green;">subject:</h4></p></span>
              <span><p>Manage  mail  by: <?php echo $name."(".$contact.")"; ?> </p></span>
              <div class="w3-third w3-margin-bottom" style="border:1px solid black;">
                  <?php 

                  if($image){
                  echo "<img src=data:image/jpg;base64,$image width='100%'>";
                }else{
                    echo"There are not image attached to this message";
                }
                  ?> 
                
                </div>
                 <hr class="my-4">
                 <p>Message: <?php echo $msg; ?> </p>
                 <hr class="my-4">
                 <p>Download File: <?php 

                  if(file_exists($code)){

                 if ($handle = opendir($code)) { //---- open directory and read inside
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {// possible to find file 
                            $thefile = $code."/".$entry; //--- the path of the stored file
                            echo "<a href = ".$thefile.">$entry</a>";//---- echo the name offile as a link
                            echo "<br>";
                        }
                    }
                closedir($handle);
              }
            }else{
              echo "No file attached ";
            }


                 ?> </p>
                 <form action="delete.php" method="post">
                  <input type="hidden" name="code" value="<?php echo $code;?>">

                 <button class="btn btn-lg btn-success btn-block text-uppercase" name="submit"type="submit" value="submit">Delete msg</button><BR>
               </form>
              <a href = "index.php"><button class="btn btn-lg btn-success btn-block text-uppercase">HOME</button></a><BR>

      
    
  
</body>

<p id = "result"></p>




</body>
</html>
