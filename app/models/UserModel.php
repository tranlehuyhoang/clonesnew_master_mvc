<?php
class UserModel extends Database
{


    public function login($UserName, $Password)
    {


        $sql1 = "SELECT * FROM tbl_admin WHERE UserName ='$UserName' ";
        $result =  $this->select($sql1);
        if ($result) {
            //check pass
            $sql2 = "SELECT * FROM tbl_admin WHERE UserName = '$UserName' AND Password = '$Password'";
            $result =  $this->select($sql2);
            if ($result) {

                return $result->fetch_assoc();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function register($user_username, $user_email, $user_password)
    {
        $$user_password = md5($user_password);


        // Kiểm tra xem user_username đã tồn tại trong cơ sở dữ liệu chưa
        $check_query = "SELECT * FROM clone_user WHERE user_username = '$user_username'";
        $check_result = $this->select($check_query);

        if ($check_result) {
            $alert = "400";
            return $alert;
        }

        // Tiếp tục thêm mới người dùng
        $query = "INSERT INTO clone_user(user_username, user_email, user_password,	user_asset) VALUES ('$user_username', '$user_email', '$user_password' ,'0')";
        $result = $this->insert($query);

        if ($result) {
            $alert = "200";
            return $alert;
        } else {
            $alert = "404";
            return $alert;
        }
    }
}
