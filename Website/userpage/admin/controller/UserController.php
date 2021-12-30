<?php

use UserController as GlobalUserController;

include '../utils/ValidateData.php';
    include '../utils/MySQLUtils.php';
    include '../model/User.php';
    if(!isset($_SESSION)) session_start();
    class UserController{
        public function getUserByEmail($user){
            return $user->getUserByEmail();
        }
    }

    $action = "";
    if(count($_POST) > 0){
        $action = $_POST['btn_user_action'];
    }

    $user_controller = new UserController();
    switch($action){
        case 'login':
            $email = $_POST["email"];
            $password = md5($_POST["password"]);

            if(checkEmail($email)){
                $loginUser = new User("", $email, $password, 0);
                $user = $user_controller->getUserByEmail($loginUser);

                if(sizeof($user) == 0){
                    //header("Location: ../view/login.php");
                    echo '<script>
                            alert("Sai email!!");
                            window.history.back();
                        </script>';
                }else{
                    if($user[0]['password'] == $password){
                        if($user[0]['role'] == 1){
                            $_SESSION["username"] = $user[0]['username'];
                            header("Location: ../view/users.php");
                        }else{
                            echo '<script>
                                alert("Không phải admin");
                                window.history.back();
                            </script>';
                        }
                    }else{
                        // header("Location: ../view/login.php");
                        echo '<script>
                                alert("Sai mật khẩu");
                                window.history.back();
                            </script>';
                    }
                }
            }else{
                //header("Location: ../view/login.php");
                echo '<script>
                        alert("Bạn nhập không phải email");
                        window.history.back();
                    </script>';
            }
            break;
    }
?>