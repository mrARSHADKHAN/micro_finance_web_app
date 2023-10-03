<?php
    echo "<p>{$row['id']} - {$row['name']} - <form method='post' action='delete.php'><input type='hidden' name='id' value='{$row['id']}'><button type='submit' name='delete'>Delete</button></form></p>";
?>