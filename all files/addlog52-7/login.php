 <?php
 if (isset($_POST['submit'])) {
    
    $con = new mysqli("localhost","root","","eduinenglish");
    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string($_POST['password']);

    $sql = $con->query(query:"SELECT Username, Password FROM loginregister WHERE Username = '$username'");
    if ($sql->num_rows > 0) {
        $data = $sql->fetch_array();
        if (password_verify($password,$data['Password'])) {
            header('Location:\eduinenglish\all files\edul0g\index.html');
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

?>