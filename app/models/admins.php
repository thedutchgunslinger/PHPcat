<?php
    class admins extends model{

        function auth($username, $password){
          /*Make in your Database a table with"
            'id','int','11'[a.i]
            'username','varchar','255'
            'password','varchar','255'
            'fname','varchar','255'
            'lname','varchar','255'
            'dflag','tinyint','1','as defined[0]'

            place yourlogin in there
          */
            $this->model->query("SELECT * FROM `admins` WHERE `username`=? AND `password`=? AND `dFlag`=?",
                    array($username, $password, 0));
            if($row = $this->model->fetch_assoc()){
                return $row;
            }else{
                return false;
            }
        }

    }
?>
