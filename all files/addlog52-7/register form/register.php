<?php

 include 'I:\xampp\htdocs\eduinenglish\all files\connection\connection.php';

if (isset($_POST['submit'])) {
        
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    

        $query="insert into loginregister(Username,Password,Email,Phone) values('$username','$password','$email','$phone')";

        $res = mysqli_query($conn,$query);

                if ($res) {
                    header('Location:\eduinenglish\index.html');
                    ?>
                    <script>
                        alert('data inserted successfully');
                    </script>
                    <?php
                }
                else {
                    ?>
                    <script>
                        alert('data not inserted');
                    </script>
                    <?php
                }
         }

?>