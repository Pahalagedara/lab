<html>
    <head>
        <title>admin</title>
    </head>

    <body>
        <form action="_admin.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required><br>
            <label for="price">price</label>
            <input type="text" id="price" name="price" required><br>
            <label for="image">image</label>
            <input type="file" name="image" required><br>
            <input type="submit" name="submit" value="add" >
        </form>


        <?php

        if(isset($_REQUEST['message'])){
            include "db.php";
            $sql = "SELECT * FROM images";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $count=$stmt->rowCount();
            $result=$stmt->fetchAll();
            echo "$count";
    
    
            if ($count> 0) {
                // output data of each row
                foreach($result as $row) {
                   // echo "<div class='caption'><h3><img src='http://placehold.it/150x150' alt=''><center>" . $row['id'] . "</h3></div>";
                    echo '<img style="width: 300px;hight:150px;" src="data:'.$row['contenttype'].';base64,'.base64_encode( $row['imagedata'] ).'"/>';
                }
            } else {
                echo "No players to show";
            }
        }
        ?>
    </body>
</html>