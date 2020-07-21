<html>
    
    <form action="" method="post">
        <label>Name:<br><input type="text" name="name"><br></label>
        <label>Message:<br><textarea cols="35" rows="5" name="mes"></textarea></label><br>
        <input type="submit" name="post" value="post">
        
    </form>

</html>

<?php
$post = "";

if(isset($_POST["name"])){
$name = $_POST["name"];
$text = $_POST["mes"];
$post = $_POST["post"];
}
if($post)
{
    $write =  fopen("com.txt","a+");
    fwrite($write,"<u><b>$name</b></u><br></br>$text<br></br>");
    fclose($write);
     $read = fopen("com.txt","r+t");
    echo "All Comments:<br>";
    
    while(!feof($read))
    {
        echo fread($read,1024);
        
    }
    fclose($read);
    
   
}

else
{
     $read = fopen("com.txt","r+t");
    echo "All Comments:<br>";
    
    while(!feof($read))
    {
        echo fread($read,1024);
        
    }
    fclose($read);
}

?>
