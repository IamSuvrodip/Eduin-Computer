 <?php

 include 'I:\xampp\htdocs\eduinenglish\all files\connection\connection.php';
if (isset($_POST['submit'])) {
        
    $fullname = $_POST['fullname'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$class = $_POST['class'];
	$date = $_POST['dd'];
	$month = $_POST['mm'];
	$year = $_POST['yyyy'];
	$gender = $_POST['gender'];
	$gurdian = $_POST['gurdian'];
	$phone = $_POST['phone'];
	$ocupation = $_POST['ocupation'];
	$school = $_POST['school'];
	$address = $_POST['address'];
	$subject = $_POST['subject'];
	$friend = $_POST['friend'];

        $query="insert into twotonine(Fullname,Age,Email,Class,Date,Month,Year,Gender,Gurdian,Phone,Occupation,School,Address,Subject,Friend) values('$fullname','$age','$email','$class','$date','$month','$year','$gender','$gurdian','$phone','$ocupation','$school','$address','$subject','$friend')";

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