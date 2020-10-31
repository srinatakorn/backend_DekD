<style>
div {text-align: center;}
</style>
<div>
<?php
$body = $_POST["body"];
echo "<font size='14'>";
echo $_POST["title"];
echo "</font>";

echo "<br>";
echo strval($body); 
?>
