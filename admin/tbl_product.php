<?php
require_once "Dbcon.php";

class tbl_product extends Dbcon
{
    public $conn;
    
    public function __construct()
    {
        $dbcon=new Dbcon();
        $this->conn=$dbcon->createConnection();
    }
    
    public function getMainCategory()
    {
        $sql="SELECT * FROM `tbl_product` WHERE `id`='1' AND `prod_parent_id`='0'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0) {
            $arr=array();
            while ($row=$data->fetch_assoc()) {
                $arr[]=$row;
            }
            return $arr;
        }
        return false;
    }
    
    public function insertProductBYCategory($productname,$link) 
    {
        $sql="INSERT INTO `tbl_product` (`prod_parent_id`,`prod_name`,`link`,`prod_available`,`prod_launch_date`) 
        VALUES ('1','$productname','$link','1',NOW())";
        $data=$this->conn->query($sql);
        if ($data) {
            return $data;
        }
        return false;
    }

    public function showProductBYCategory() 
    {
        $sql="SELECT * FROM `tbl_product` WHERE `prod_parent_id`='1'";
        $data=$this->conn->query($sql);
        $arr['data']=array();
        while ($row=$data->fetch_assoc()) {
            if ($row['prod_available']=='1') {
                $available="available";
            } else {
                $available="unavailable";
            }
            $prod_parent_id=$row['prod_parent_id'];
            $sql="SELECT * FROM `tbl_product` WHERE `id`='$prod_parent_id'";
            $roww=$this->conn->query($sql);
            $data1=$roww->fetch_assoc();
            $arr['data'][]=array($data1['prod_name'],$row['prod_name'],$row['link'],$available,$row['prod_launch_date'],"
            <a  class='btn btn-dark' data-id='".$row['id']."' id='edit-product-by-category' data-toggle='modal' data-target='#exampleModalSignUp'>Edit</a> 
            <a  class='btn btn-dark' data-id='".$row['id']."' id='delete-product-by-category'>Delete</a>");
        }
        return $arr;
    }
    public function updateProductByCategory($productname, $link, $availability, $id) 
    {
        $sql="UPDATE `tbl_product` SET `prod_name`='$productname', `link`='$link',`prod_available`='$availability' WHERE `id` = '$id'";
        $data=$this->conn->query($sql);
        if ($data) {
            return true;
        }
        return false;
    }
   
    public function duplicateCategoryCheck($catvalue) {
        $sql="SELECT * FROM `tbl_product` WHERE `prod_parent_id`='1' AND `prod_name` LIKE '$catvalue'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0) {
            return true;
        } 
        return false;
    }
// ********************************* product   ***********************************
public function getSubCategoryNav() 
    {
        $sql="SELECT * FROM `tbl_product` WHERE `prod_parent_id`='1' AND `prod_available`='1'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0) {
            $arr=array();
            while ($row=$data->fetch_assoc()) {
                $arr[]=$row;
            }
            return $arr;
        }
        return false;
    }
   
public function productDescriptionAddition($productcategory, $productname, $pageurl, $monthlyprice, $annualprice, $sku, $webspace, $bandwidth,  $freedomain, $languagetechnology, $mailbox) 
    {
        $sql="INSERT INTO `tbl_product` (`prod_parent_id`,`prod_name`,`link`,`prod_available`,`prod_launch_date`) 
        VALUES ('$productcategory','$productname','$pageurl','1',NOW())";
        if ($this->conn->query($sql)===true) {
            $last_id = $this->conn->insert_id;
            $description=array(
                "webspace"=>$webspace,
                "bandwidth"=>$bandwidth,
                "freedomain"=>$freedomain,
                "languagetechnology"=>$languagetechnology,
                "mailbox"=>$mailbox
            );
            $description=json_encode($description);
            $sql="INSERT INTO `tbl_product_description`(`prod_id`, `description`, `mon_price`, `annual_price`, `sku`) 
            VALUES ('$last_id','$description','$monthlyprice','$annualprice','$sku')";
            if ($this->conn->query($sql)===true) {
                return true;
            }
            return false;
        }
        return false;
    }

public function showProductsBYCategory() 
    {
        $sql="SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`";
        $data=$this->conn->query($sql);
        $arr['data']=array();
        while ($row=$data->fetch_assoc()) {
            if ($row['prod_available']=='1') {
                $available="available";
            } else {
                $available="unavailable";
            }
            $decoded_description=json_decode($row['description']);
            $webspace=$decoded_description->{'webspace'};
            $bandwidth=$decoded_description->{'bandwidth'};
            $freedomain=$decoded_description->{'freedomain'};
            $languagetechnology=$decoded_description->{'languagetechnology'};
            $mailbox=$decoded_description->{'mailbox'};
            $prod_parent_id=$row['prod_parent_id'];
            $sql="SELECT * FROM `tbl_product` WHERE `id`='$prod_parent_id'";
            $roww=$this->conn->query($sql);
            $data1=$roww->fetch_assoc();
            $arr['data'][]=array($data1['prod_name'],$row['prod_name'],$row['link'],$available,$row['prod_launch_date'],$row['mon_price'],$row['annual_price'],$row['sku'],$webspace,$bandwidth,$freedomain,$languagetechnology,$mailbox,"
            <a href='javascript:void(0)' class='btn btn-dark' data-id='".$row['prod_id']."' id='edit-product-by-category' data-toggle='modal' data-target='#exampleModalSignUp'>Edit</a>
            <a href='javascript:void(0)' class='btn btn-dark' data-id='".$row['prod_id']."' id='delete-product-by-category'>Delete</a>");
        }
        return json_encode($arr);
    
    }

 
}
   
?>