<!DOCTYPE html>
<html>
      <title>form</title>
         <head>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="">
        </head>
          <body>
             <div class="container">
               <form class="form-signin" method = "POST" action = "read.php" enctype="multipart/form-data">
            
              <input type="text" name = "code" class="form-control" placeholder="Your code here" required autofocus><br><br>
             
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name = "submit" value ="submit";>READ MESSAGE</button>
             
              </div>
            </form>

<p id = "result"></p>

</body>
</html>
