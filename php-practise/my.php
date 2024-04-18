
    <?php
        $fName = $_POST['fName'];

        //connection

        $con = new mysqli('localhost', 'root', '','practice1');
        if($con->connect_error){
            die('connection failed:'.$conn->connect_error);
        }else{
            $stmt = $conn->prepare("insert into registration(fName)values(?)");
            $stmt->bind_param("s");
            $stmt->execute();
            echo "successful"
            $stmt->close();
            $conn->close();
        }
    ?>
