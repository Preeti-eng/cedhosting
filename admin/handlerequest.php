<?php
session_start();
require_once "tbl_product.php";
$tbl=new tbl_product();
if (isset($_POST['productadd'])) {
    $productname=$_POST['productname'];
    $link=$_POST['link'];
    $duplicatecheck=$tbl->duplicateCategoryCheck($productname);
    if ($duplicatecheck) {
        echo "Duplicate Category Name is Not Allowed";
    } else {
        $data=$tbl->insertProductBYCategory($productname, $link);
        echo true;
    }

}
if (isset($_GET['showproduct'])) {
    $data=$tbl->showProductBYCategory();
    print_r(json_encode($data));
}
if (isset($_GET['showproducts'])) {
    $data=$tbl->showProductsBYCategory();
    print_r($data);
  

}
if (isset($_POST['manageproductbycategory'])) {
    $id=$_POST['id'];
    $action=$_POST['action'];
    $data=$tbl->manageProductBYCategory($id, $action);
    if ($data=="true") {
        echo json_encode("true");
    } elseif ($data=="false") {
        echo json_encode("false");
    } elseif ($data!="true" && $data!="false") {
        print_r(json_encode($data));
    }
}
if (isset($_POST['updatecategory'])) {
    $id=$_POST['id'];
    $productname=$_POST['productname'];
    $link=$_POST['link'];
    $availability=$_POST['availability'];
    $data=$tbl->updateProductByCategory($productname, $link, $availability, $id);
    if ($data) {
        echo true;
    } else {
        echo false;
    }
}
if (isset($_POST['productadd'])) {
    $productname=$_POST['productname'];
    $link=$_POST['link'];
    $duplicatecheck=$tbl->duplicateCategoryCheck($productname);
    if ($duplicatecheck) {
        echo "Duplicate Category Name is Not Allowed";
    } else {
        $data=$tbl->insertProductBYCategory($productname, $link);
        echo true;
    }

}


?>