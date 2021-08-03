<?php
    session_start();
    $title = 'Login';
    require 'config.php';
    include 'header.php';
    // include('hearder.php');
    require_once 'functions.php';

    if (is_user_authenticated()) {
       redirect('admin.php');
       die();
    }
    
        // if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //     // echo $_POST['email'];
        //     output($_POST); 
        // }
        if(isset($_POST['login'])){
            // output($_POST);
            $email =  filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = $_POST['password'];

            if($email == false){
                $status = '이메일 형식에 맞게 입력해 주세요.';
            }
            if (authenticate_user($email,$password)){
                $_SESSION['email'] = $email;
                redirect('admin.php');
                die();
            }else{
                $status = '비번이 맞지 않습니다.';
            }
        }
    ?>

    <form action="" method="post">
    <p>
        <label for="email">Email:</label><input type="text" id="email" name="email">
    </p>
    <p>
        <label for="password">Password:</label><input type="password" id="password" name="password">
    </p>
    <p>
        <input type="submit" name="login" value="Login">
    </p>
    </form>
    <div class="error">
        <p>
            <?php
            if(isset($status)){
                echo $status;
            }
            ?>
        </p>
    </div>

    <?php
    include 'footer.php';
    ?>