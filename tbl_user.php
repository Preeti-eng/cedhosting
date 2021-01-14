<?php

require_once "admin/Dbcon.php";

class tbl_user extends Dbcon
{
    public $conn;
    public $email;
    public $password;
    
    public function __construct()
    {
        $dbcon=new Dbcon();
        $this->conn=$dbcon->createConnection();
    }
    
    public function login($email, $password)
    {
        $sql="SELECT * FROM `tbl_user` WHERE `email`='$email' AND `password`='$password'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0) {
            $arr =array();
            while ($row=$data->fetch_assoc()) {
                $arr = $row;
            }
            return $arr;
        }
        return 0;
    }
    
}
?>