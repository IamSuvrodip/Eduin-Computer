 <?php
 if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = new mysqli("localhost","root","","eduinenglish");
    if ($con->connect_error) {
        die("Field to connect :".$con->connect_error);
    }else{
        $stmt = $con->prepare("select * from addmin where username = ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['Pass'] === $password){
                header('Location:\eduinenglish\all files\addlog52-7\register form\index.html');
                    ?>
                    <script>
                        alert('Loin successfully');
                    </script>
                    <?php
            }else{
                ?>
                    <script>
                        alert('Invalid username or password');
                    </script>
                    <?php
            }
        }
    }
}

?>

        