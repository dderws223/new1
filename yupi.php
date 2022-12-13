<?php 
$fn = "yupi.txt"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 

if($_POST['update']) fwrite($file, $_POST['update']); 

//$text = fread($file, $size); 
fclose($file); 
?> 
<form action="<?=$PHP_SELF?>" method="post"> 
<textarea Name="update" cols="30" rows="1" required ><?=$text?></textarea><br/> 
<br/> 
<input type="submit" value="Update"/> 

</form>