<html>

<head>
    <title>MyMovieBooking</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>

<body>
        <?php
			include 'header.php';
		?>
    <div class="body-content">

        <form id="register-form" action="#" method="POST">
            <h4 class="form-head">New user?</a></h4>
            <input type="text" class="login-input" id="name" name="name" placeholder="Name" required />
            <input type="number" class="login-input" id="age" name="age" placeholder="Age" required />
            <div id="radio-btn" name="gender">
                <!-- <p style="color:black;">Gender :</p> -->
                <input type="radio"  id="male" name="gender" value="male"> <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female"> <label for="female">Female</label>
            </div>
            <input type="text" class="login-input" id="email-register" name="email" placeholder="E-mail" required />
            <input type="number" class="login-input" id="mobile" name="mobile" placeholder="Mobile" required />
            <input type="password" class="login-input" id="password-register" name="password" placeholder="password"
                required />
                <input type="password" class="login-input" id="confirm-register" name="confirm" placeholder="confirm password"
                required />
            <button type="submit" class="login-input" name="register" id="submit-btn">Register</button>
        </form>

        <?php
						if(isset($_POST['register'])){
							include 'includes/config.php';
							$name = $_POST['name'];
							$age = $_POST['age'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$mobile = $_POST['mobile'];
							$password = $_POST['password'];
                            $confirm = $_POST['confirm'];
                            if($password == $confirm){
                                $qry = "INSERT INTO users (fname,age,gender,email,mobile,pass)
                                VALUES('$name','$age','$gender','$email','$mobile','$password')";

                                $result = $conn->query($qry);

                                if($result == TRUE){                               
                                        echo "<script type = \"text/javascript\">
                                                alert(\"Successfully Registered. Please login to continue\");
                                                window.location = (\"profile.php\")
                                                </script>";
                                } else{
                                    echo "<script type = \"text/javascript\">
                                                alert(\"Registration Failed. Try Again\");
                                                window.location = (\"register.php\")
                                                </script>";
                                }
                            }
                            else{
                                echo "<script type = \"text/javascript\">
                                        alert(\"Passwords Mismatch\");
                                        </script> ";
                            }
						}
						
					  ?>
    </div>
</body>

</html>
