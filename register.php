<?php 

include 'connection.php';
$name="";
$url="";
$smsg;
$fmsg;
if(isset($_POST['name']) && isset($_POST['url']))
{
    
    $name = $_POST['name'];
    $url = $_POST['url'];
    $query = "INSERT INTO `pokemon` (Name,url) VALUES ('$name', '$url')";
    $q2 = "SELECT Name FROM pokemon WHERE Name='$name'";
    $r2 = mysqli_query($conn, $q2);
    if(mysqli_num_rows($r2)==0){
        $result = mysqli_query($conn, $query);
        if($result){
            $smsg = "Pokemon registered Successfully.";
        }else{
            $fmsg ="Pokemon Registration Failed";
        }
    }
    
    $name="";
    $url="";
}

?>

<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Pokemon</title>
	<link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
        body{
            background-image: url(imgs/reg.jpg);
        }
    </style>
</head>
<body>
   <form action="register.php" method="post">
        <div class="row" style="margin-top:10%; width:50%; margin-left:30px;">
            <input type="text" placeholder="Pokemon Name" style="font-family:'Lato';" name="name" value="<?php echo $name ?>">
        </div>
        <div class="row" style="margin-top:30px; width:50%; margin-left:30px;">
            <input type="text" placeholder="Pokemon database link" style="font-family:'Lato';" name="url" value="<?php echo $url ?>">
        </div>
        <div class="row" style="margin-top:30px; width:50%; margin-left:30px;">
            <button class="but" type="submit" style="border:none;"><span style="color: brown; text-decoration:none;z-index:-100;">Register!</span></button>
            <button class="but" type="submit" style="border:none; background-color: #bfff67; margin-left:20px;"><a href="index.php" style="color: brown; text-decoration:none;z-index:-100;">Back to search page</a></button>
        </div>
   </form>
</body>
</html>