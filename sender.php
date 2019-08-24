<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>


    <div class="container">

    	<center><h2>JustSend</h2></center>
      <form action="codeg.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">

          <div class="input">
            <label for="fname"> Name</label>
            <input type="text" id="name" name="name" placeholder="your name">
                    <br><br>
          </div>

          <div class="input">
            <label for="email"> Email or mobile number</label>
            <input type="text" id="email" name="email" placeholder="email or phone"><br>
          </div>

          <div class="input">
            <label for="subject">Subject</label>
            <textarea  id="subject" name="subject"></textarea><br>
          </div>

          <div class="input">
            <label for="message"> Message</label>
            <textarea  id="msg" name="msg"></textarea>
                <br><br>
          </div>

          <div class="input">
            <label for="profile">Profile</label>
            <input type="file" name="image" id="image">
          </div>           
                        <br>
                        <br>
           <div class="input">             
              <label for="profile"> file</label>
              <input type="file" name="file" id="image">
           </div>   
       
             <input type="submit" name="submit" value="submit" class="btn">
      </div>
    </form>
	<script type="text/javascript">
    function validate(){
      var name=document.getElementById('name').value;
      var email=document.getElementById('email').value;

       if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
      }else if (email==null || email==""){  
          alert("Contact field can't be blank");  
          return false;
      }
       return true;
    }
  </script>
  </body>
	</html>