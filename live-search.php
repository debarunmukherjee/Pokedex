
<?php
include 'connection.php';
if(isset($_POST['search'])){
    
    $key = $_POST['search'];
    $query = "SELECT * FROM pokemon WHERE Name LIKE '%{$key}%' LIMIT 4";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($res))
    { ?>
        
        <div  class="row" style="width: 50%;
    background-color: #ebebeb;
    margin: 0 auto;
    text-decoration: none;
    color: white;
    font-size: 22px;
    padding: 15px 25px;
    border-radius: 15px;
    margin-bottom: 10px;"><a href="<?php echo $row['url'] ?>" target="_blank"> <?php echo $row['Name'] ?> </a></div>
        
    <?php }
}


 ?>