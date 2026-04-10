<?php
echo "<h1>Version 3</h1>";
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>

<br><a href="uploads/">View Uploads button </a>
<br><a href="upload/">Submit</a>
