

<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
    
    
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  <?php
        $db = mysqli_connect("localhost", "root", "", "photos");
        $sql = "SELECT * FROM images";
        $result = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_array($result)){
          echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['text']."</p>";
      echo "</div>";
        }
  ?>
 
 
  
</div>

      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>