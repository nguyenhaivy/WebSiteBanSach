<?php
    include '../utils/ValidateData.php';
    include '../utils/MySQLUtils.php';
    include '../model/User.php';
    if(!isset($_SESSION)) session_start();

    class UserController{
        public function insertUser($user){
            $user->insertUser();
        }

        public function getUserByEmail($user){
            return $user->getUserByEmail();
        }

        public function deleteUser($user){
            $user->deleteUser();
        }

        public function updateUser($user){
            $user->updateUser();
        }
    }

    if($_POST > 0){
        $grp_user_controller = $_POST['grp_user_controller'];
        $userControl = new UserController();
        switch ($grp_user_controller) {
            case 'user_login':
                $email = trim($_POST["email"]);
                $password = md5(trim($_POST["password"]));

                if(checkEmail($email)){
                    $loginUser = new User("", $email, $password, 0, 0);
                    $user = $userControl->getUserByEmail($loginUser);

                    if(sizeof($user) == 0){
                         //header("Location: ../view/login.php");
                         echo '<script>
                                alert("Sai email!!");
                                window.history.back();
                            </script>';
                    }else{
                        if($user[0]['password'] == $password){
                            $_SESSION["username"] = $user[0]['username'];
                            header("Location: ../view/index.php");
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

            case 'user_register':
                $txtUsername = trim($_POST['txtUsername']);
                $txtEmail = trim($_POST['txtEmail']);
                $txtPassword = trim($_POST['txtPassword']);
                $radGender = $_POST['radGender'];

                if(empty($txtUsername)){
                    echo '<script>
                            alert("Bạn chưa nhập username");
                            window.history.back();
                        </script>';
                }else if(empty($txtEmail)){
                    echo '<script>
                            alert("Bạn chưa nhập email");
                            window.history.back();
                        </script>';
                } else if(empty($txtPassword)){
                    echo '<script>
                            alert("Bạn chưa nhập password");
                            window.history.back();
                        </script>';
                }else{
                    if(checkEmail($txtEmail)){
                        $md5Password = md5($txtPassword);
                        $sex = $radGender == "Nam" ? true : false;
                        $newUser = new User($txtUsername, $txtEmail, $md5Password, $sex);
                        $data = $userControl->getUserByEmail($newUser);

                        if($data == null){
                            if(checkLengthPw($txtPassword)){
                                $userControl->insertUser($newUser);

                                echo '<script>
                                        alert("Đăng ký thành công!");
                                        window.history.back();
                                    </script>';
                            }else{
                                echo '<script>
                                        alert("Mật khẩu phải có ít nhất 8 ký tự!!");
                                        window.history.back();
                                    </script>';
                            }
                        }
                        else{
                            echo '<script>
                                    alert("Email này đã được sử dụng");
                                    window.history.back();
                                </script>';
                            
                        }
                    }else {
                        echo '<script>
                            alert("Bạn nhập không phải email");
                            window.history.back();
                        </script>';
                    }
                }

                break;
            default:
                # code...
                break;
        }
    }
?>