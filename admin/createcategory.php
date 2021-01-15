
<?php
include "header.php";
require_once "nav.php";

?>
  <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">CreateCategory</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="index.php">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">CreateCategory</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
         
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">

                </div>
            </div>
        </div>
        </div>
    </div>
</div>
    
    <div class="container mt--8 pb-5">
     
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"></div>
              <div class="text-center">
                Create Category
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <?php
                    include_once "tbl_product.php";
                    $product=new tbl_product();
                    $row=$product->getMainCategory();
                    if ($row!=false) {
                      echo '<input class="form-control" value="   '.$row[0]['prod_name'].'" type="text" disabled>';
                    }
                    else{
                      echo '<input class="form-control"  placeholder="Product Category" type="text">';
                    }
                    ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" type="text" id="productname" placeholder="Product Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                          <textarea  name="editor" id="link" placeholder="Link"></textarea>
                      </div>
                    </div>
                  </div>
                
                <div class="text-center">
                  <button type="button" class="btn btn-primary mt-4" id="createcategory">Create Category</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="table-responsive">
              
              <table class="table align-items-center table-flush" id="showProduct">
                <thead class="thead-light">
                    <tr>
                        <th>Category Parent Name</th>
                        <th>Category Name</th>
                        <th>Link</th>
                        <th>category Availability</th>
                        <th>Category Launch Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>

<div class="col-md-4">
    
    <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0 mb-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3">
                  <span>Update Category</span>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <form role="form">
                  <div class="form-group mb-3">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Category</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <?php
                        include_once "tbl_product.php";
                        $product=new tbl_product();
                        $row=$product->getMainCategory();
                        if ($row!=false) {
                          echo '<input class="form-control" value="   '.$row[0]['prod_name'].'" type="text" disabled>';
                        }
                        else{
                          echo '<input class="form-control"  placeholder="Product Category" type="text">';
                        }
                      ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                      </div>
                      <input class="form-control" type="hidden" id="category-id-update" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Sub Category</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="productname" type="text" id="productname-update">
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="mr-sm-2" for="inlineFormCustomSelect">Html</label>
                  <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                          <textarea id="link-update"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect">Availability</label>
                    <select class="custom-select mr-sm-2" id="availability-update">
                      <option value="Choose...">Choose...</option>
                      <option value="1">Available</option>
                      <option value="0">Unavailable</option>
                    </select>
                  </div>
                  <div class="text-center">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary my-4" id="updatecategory">Update Category</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <script>
  $('#createcategory').click(function(){
      var productname=($('#productname').val()).trim();
      var link=($('#link').val()).trim();
      var regproductname=/^(?![0-9]*$)([a-zA-Z]+\s?)*([0-9]+\.?)*$/;
      if (productname=="" || !(productname.match(regproductname))) {
        alert("please enter valid product name");
      }
      else {
        $.ajax({
          url:'handlerequest.php',
          method: 'post',
          data:{
            productname: productname,
            link:link,
            productadd:true
          },
          success:function(msg){
            if (msg=="Duplicate Category Name") {
              alert("Duplicate Category Name");
            } else {
              alert("Subcategory Added successfully");
              location.reload();
            }
          },
          error:function(){
            alert("error");
          }
          
        });
      }
    });
    $('#updatecategory').click(function(){
    var productname=($('#productname-update').val()).trim();
    var link=($('#link-update').val()).trim();
    var availability=$('#availability-update').val();
    var categoryid=$('#category-id-update').val();
    var regproductname=/^(?![0-9]*$)([a-zA-Z]+\s?)*([0-9]+\.?)*$/;
    if (availability=="Choose..." || productname=="") {
      alert('please fill product name and availibility');
    }
    else if (!(productname.match(regproductname))) {
      alert("please enter valid product name");
    }
    else if(!isNaN(productname)){
      alert('product name can not be all numbers');
    }
    else {
      $.ajax({
        url: "handlerequest.php",
        method: "post",
        data: {
          productname: productname,
          link: link,
          availability: availability,
          id: categoryid,
          updatecategory: true
        },
        success: function(msg){
          if (msg){
            alert("Category Successfully Updated");
            location.reload();
          }
          else {
            alert("failed updation");
          }
         
        },
        error: function(){
          alert('Update Failed');
        }
      });
    }
  });
    $(document).ready(function() {
      showProduct();
    });
    function showProduct(){
          $('#showProduct').DataTable( {
              "ajax": "handlerequest.php?showproduct=1"
          } ); 
    }
    $('#showProduct').on('click','#edit-product-by-category',function(){
      var id=$(this).data('id');
      var action="edit";
      manageproductbycategory(action,id);
      
    });
    $('#showProduct').on('click','#delete-product-by-category',function(){
      var id=$(this).data('id');
      var action="delete";
      var r=confirm("are you sure you want to delete subcategory?");
      if (r){
        manageproductbycategory(action,id);
      }
      
    });
    function manageproductbycategory(action,id){
      $.ajax({
        url: 'handlerequest.php',
        method: 'post',
        data: {
          id: id,
          action: action,
          manageproductbycategory: true
        },
        dataType:'json',
        success: function(msg){
          if (msg=="true"){
            alert('subcategory deleted successfully');
            location.reload();
          }
          else if (msg=="false") {
            alert("edit failed");
          }
          else {
            var productname=msg['prod_name'];
            $('#productname-update').val(productname);
            var link=msg['link'];
            $('#link-update').val(link);
            var categoryid=msg['id'];
            $('#category-id-update').val(categoryid);
            var availability=msg['prod_available'];
            $('#availability-update').val(availability).attr('selected','selected');

          }
        },
        error: function(){
          alert("error in deletion");
        }
      });
    }
  </script>
<?php
include "footer.php";
?>
