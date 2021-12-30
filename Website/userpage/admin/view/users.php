<!DOCTYPE html>
<html>
    <head>
        <?php include('Layout/Header.php'); ?>
    </head>
    <body>

        <!-- Title Bar -->
        <?php include('Layout/TitleBar.php'); ?>


        <!-- Menu -->
        <?php include('Layout/Menu.php'); ?>


        <div class="mobile-menu-overlay"></div>

        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <?php
                    $userID = array("U000001", "U000002", "U000003", "U000004", "U000005", "U000006");
                    $userUsername = array("User1", "User2", "User3", "User4", "User5", "User6");
                    $userSex = array("Nam", "Nam", "Nữ", "Nam", "Nữ", "Nữ");
                    $userPass = array("123", "123", "123", "123", "123", "123");
                    $userPhone = array("0101010101", "0202020202", "0303030303", "0404040404", "0505050505", "0606060606");
                    $userEmail = array("User1@gmail.com", "User2@gmail.com", "User3@gmail.com", "User4@gmail.com", "User5@gmail.com", "User6@gmail.com");
                    ?>
                    <!-- Simple Datatable start -->
                    <div class="card-box mb-30">
                        <div class="pd-20">
                            <h4 class="text-blue h4 text-center">Tài khoản người dùng</h4>
                            <!-- Thêm người dùng mới -->
                            <div>
                                <a href="#" class="btn" data-toggle="modal" data-target="#adduser" type="button">
                                    <button type="button" class="btn btn-primary">Thêm mới</button>
                                </a>
                            </div>
                        </div>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">ID</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Giới tính</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th class="datatable-nosort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- loop load data -->
                                    <?php for ($i = 0; $i < count($userID); $i++) { ?>
                                        <tr>
                                            <td class="table-plus"><?php echo $userID[$i] ?></td>
                                            <td id="username<?php echo $i; ?>"><?php echo $userUsername[$i] ?></td>
                                            <td id="password<?php echo $i; ?>"><?php echo $userPass[$i] ?> </td>
                                            <td id="sex<?php echo $i; ?>"><?php echo $userSex[$i] ?> </td>
                                            <td id="phone<?php echo $i; ?>"><?php echo $userPhone[$i] ?></td>
                                            <td id="email<?php echo $i; ?>"><?php echo $userEmail[$i] ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                        <i class="dw dw-more"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                        <a class="dropdown-item" id="edit<?php echo $i; ?>" href="#"><i class="dw dw-edit2"></i> Chỉnh sửa</a>
                                                        <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Xóa</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- click chỉnh sửa -->
        <?php include('AddandEditUser.php'); ?>

        <!-- js -->
        <?php include('Layout/js/tablejs.php'); ?>

        <?php for ($i = 0; $i < count($userID); $i++) { ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $(document).on('click', '#edit<?php echo $i; ?>', function () {
                    var name = $('#username<?php echo $i; ?>').text();// get username
                    var pass = $('#password<?php echo $i; ?>').text();// get password
                    var sex = $('#sex<?php echo $i; ?>').text();// get sex
                    var phone = $('#phone<?php echo $i; ?>').text();// get phone
                    var mail = $('#email<?php echo $i; ?>').text();// get email
                    $('#edit').modal('show');//load modal
                    $('#eusername').val(name);
                    $('#epassword').val(pass);
                    $('#ephone').val(phone);
                    $('#eemail').val(mail);
                    if (sex.trim() === "Nam") {
                        $('#rdbMale').attr('checked', true);
                    } else {
                        $('#rdbFemale').attr('checked', true);
                    }
                });
            });
        </script>
    <?php } ?>
</html>