<?php
require_once "header.php";
require_once "nav.php";
require_once 'tbl_product.php';
$product=new tbl_product();
?>
  <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">ViewProducts</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item">
                  <a href="index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="index.php">Dashboards</a></li>
                  <li class="breadcrumb-item active" 
                  aria-current="page">ViewProducts</li>
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

      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="table-responsive">
            
              <table class="table align-items-center table-flush" id="showProduct">
                <thead class="thead-light">
                    <tr>
                        <th>Product Parent Name</th>
                        <th>Product Name</th>
                        <th>Link</th>
                        <th>Product Availability</th>
                        <th>Product Launch Date</th>
                        <th>Monthly Price</th>
                        <th>Annual price</th>
                        <th>SKU</th>
                        <th>Webspace</th>
                        <th>Bandwidth</th>
                        <th>Free Domain</th>
                        <th>Language Technology</th>
                        <th>MailBox</th>
                        <th>Action</th>
                    </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>

<div class="col-md-12">
   
    <div class="modal fade" id="exampleModalSignUp" 
    tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" 
    aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0 mb-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3">
                <button type="button" class="close" 
                data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                    <h1 class="mb-0">Update Product</h1>
                    <div class="mb-0">Product Details </div>
                      <small class="important-field"> * Mandatory Fields</small>
                    </div>
                  </div>
                </div>
                <div class="pl-lg-4">
                  <div class="row pr-3">
                    <div class="form-group col-lg-6">
                      <label for="inputState">Select Product Category
                      <span class="important-field"> *</span></label>
                      <select id="inputState" class="form-control" 
                      name="productcategory">
                        <option value="Please select">Please select</option>
                        <?php
                        $data=$product->getSubCategoryNav();
                        if ($data!=false) {
                            for ($i=0;$i<count($data);$i++) {
                                echo '<option value="'.$data[$i]['id'].'">'.
                                $data[$i]['prod_name'].'</option>';
                            }
                        }
                        ?>
                      </select>
                      <div class="invalid-feedback">
                        Please Select a Product Category.
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="productname">
                        Enter Product Name<span class="important-field"> 
                        *</span></label>
                        <input type="text" id="productname" 
                        class="form-control" placeholder="product Name" n
                        ame="productname">
                        <div class="invalid-feedback">
                          Please provide a valid Product Name.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="pageurl">Page URL</label>
                        <input type="text" id="pageurl" 
                        class="form-control" placeholder="Page URL" name="pageurl">
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h1 class="mb-0">Product Description</h1>
                          <div class="mb-0">Enter Product Description Below </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pr-3">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="monthlyprice">
                        Enter Monthly Price<span class="important-field"> 
                        *</span></label>
                        <input type="text" id="monthlyprice"
                         class="form-control" placeholder="Monthly Price"
                          name="monthlyprice">
                        <small class="text-muted">This would be Monthly Plan</small>
                        <div class="invalid-feedback">
                          Please Enter valid Monthly price.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="annualprice">Enter Annual Price<span 
                        class="important-field"> *</span> </label>
                        <input type="text" id="annualprice" 
                        class="form-control" placeholder="Annual Price" 
                        name="annualprice">
                        <small class="text-muted">This would be Annual Price</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Annual Price.
                        </div>
                      </div>  
                    </div>   
                    <div class="row pr-3 pl-3">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" 
                          for="sku">SKU<span class="important-field"> 
                          *</span></label>
                          <input type="text" id="sku" 
                          class="form-control" placeholder="SKU" name="sku">
                          <div class="invalid-feedback">
                            Please Enter valid SKU.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <hr class="my-4">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h1 class="mb-0">Features</h1>
                      </div>
                    </div>
                  </div>
                  <div class="row pr-3 pl-3">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="webspace">Web Space(in GB)<span 
                        class="important-field"> *</span></label>
                        <input type="text" id="webspace" 
                        class="form-control" placeholder="Web Space" name="webspace">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter Valid Web Space.
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="bandwidth">
                        Bandwidth (in GB)
                        <span class="important-field"> *</span></label>
                        <input type="text" id="bandwidth" 
                        class="form-control" placeholder="Bandwidth" 
                        name="bandwidth">
                        <small class="text-muted">Enter 0.5 for 512 MB</small>
                        <div class="invalid-feedback">
                          Please Enter bandwidth.
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>  
                <div class="row pr-3 pl-3">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" 
                      for="freedomain">Free Domain<span 
                      class="important-field"> *</span> </label>
                      <input type="text" id="freedomain" 
                      class="form-control" placeholder="Free Domain" 
                      name="freedomain">
                      <small class="text-muted">
                      Enter 0 if no domain available in this service</small>
                      <div class="invalid-feedback">
                        Please Enter Valid Free Domain.
                      </div>
                    </div>
                  </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" 
                    for="languagetechnology">Language/ Technology Support
                    <span class="important-field"> *</span> </label>
                    <input type="text" id="languagetechnology" 
                    class="form-control" placeholder="Language or 
                    Technology Support" name="languagetechnology">
                    <small class="text-muted">Separate by (,) 
                    Ex: PHP, MySQL, MongoDB</small>
                    <div class="invalid-feedback">
                      Please Enter Valid Language or Technology Support.
                    </div>
                  </div>
                </div>
              </div>
              <div class="row pr-3 pl-3">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" 
                    for="mailbox">Mailbox
                    <span class="important-field"> *</span> </label>
                    <input type="text" id="mailbox" 
                    class="form-control" placeholder="Mailbox" name="mailbox">
                    <small class="text-muted">Enter 
                    Number of mailbox will be provided, enter 0 if none</small>
                    <div class="invalid-feedback">
                      Please Enter Valid Number of Mailbox.
                    </div>
                  </div>
                </div>
              </div>
            <div class="text-center pb-4">
            <input type="hidden" id="id" class="form-control"  name="id">
            <button type="button" 
            class="btn btn-danger mt-4" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary mt-4" 
              id="createcategory" value="Update Product" name="submit" disabled="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


  <script>
  $( document ).ready(function() {
    $("#createcategory").prop('disabled', false);
  });
  
    $('#createcategory').click(function(){
      var id=($('#id').val()).trim();
      var productcategory=($('#inputState').val()).trim();
      var productname=($('#productname').val()).trim();
      var pageurl=($('#pageurl').val()).trim();
      var monthlyprice=($('#monthlyprice').val()).trim();
      var annualprice=($('#annualprice').val()).trim();
      var sku=($('#sku').val()).trim();
      var webspace=($('#webspace').val()).trim();
      var bandwidth=($('#bandwidth').val()).trim();
      var freedomain=($('#freedomain').val()).trim();
      var languagetechnology=($('#languagetechnology').val()).trim();
      languagetechnology=languagetechnology.replace(/,+$/,'');
      var mailbox=$('#mailbox').val();
      if (productcategory=="" || productname==""  ||monthlyprice=="" 
      || annualprice=="" || sku=="" || webspace=="" || bandwidth=="" 
      || freedomain=="" || languagetechnology=="" || mailbox=="") {
        alert("please enter product name");
      }
      else if (validateAddProduct()==false) {
        alert('please add monthly price less than annual price');
      }
      else {
        $.ajax({
          url:'handlerequest.php',
          method: 'post',
          data:{
            id: id,
            productcategory: productcategory,
            productname: productname,
            pageurl: pageurl,
            monthlyprice: monthlyprice,
            annualprice: annualprice,
            sku: sku,
            webspace: webspace,
            bandwidth: bandwidth,
            freedomain: freedomain,
            languagetechnology: languagetechnology,
            mailbox: mailbox,
            pageurl: pageurl,
            productupdate:true
          },
          success:function(msg){
            alert("Subcategory Updated Successfully");
            location.reload();
          },
          error:function(){
            alert("error");
          }
          
        });
      }
    });
    $(document).ready(function() {
      showProduct();
    });
    function showProduct(){
          $('#showProduct').DataTable( {
              "ajax": "handlerequest.php?showproducts=1"
          } ); 
    }
    
    
    // --------------------------------------------------------------------------
    $( document ).ready(function() {
          $("#createcategory").prop('disabled', true);
    });
    $('#inputState').focusout(function(){
          inputState();
    });
    function inputState(){
      var value=($('#inputState').val()).trim();
      if (value=="Please select") {
        $("select").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("select").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#productname').focusout(function(){
      productName();
    });
    function productName(){
      var regproductname=/(^([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z])+$)/;
      var value=($('#productname').val()).trim();
      if (value=="" || !(value.match(regproductname))) {
        $("#productname").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      } else {
        $("#productname").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#monthlyprice').focusout(function(){
      monthlyPrice();
    });
    function monthlyPrice(){
      var regprice=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value=($('#monthlyprice').val()).trim();
      if (value=="" || !(value.match(regprice)) || value.length>15) {
        $("#monthlyprice").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#monthlyprice").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#annualprice').focusout(function(){
      annualPrice();
    });
    function annualPrice(){
      var regprice=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value=($('#annualprice').val()).trim();
      if (value=="" || !(value.match(regprice)) || value.length>15) {
        $("#annualprice").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#annualprice").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#sku').focusout(function(){
      sku();
    });
    function sku(){
      var regsku=/^(?![!@#$%^&*()_+=-`~?|]*$)[a-zA-Z0-9-#]+$/;
      var value=($('#sku').val()).trim();
      if (value=="" || !(value.match(regsku))) {
        $("#sku").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#sku").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#webspace').focusout(function(){
      webSpace();
    });
    function webSpace(){
      var regwebspace=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value=($('#webspace').val()).trim();
      if (value=="" || !(value.match(regwebspace)) || value.length>5) {
        $("#webspace").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#webspace").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#bandwidth').focusout(function(){
      bandWidth();
    });
    function bandWidth(){
      var regbandwidth=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value=($('#bandwidth').val()).trim();
      if (value=="" || !(value.match(regbandwidth)) || value.length>5) {
        $("#bandwidth").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#bandwidth").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#freedomain').focusout(function(){
      freeDomain();
    });
    function freeDomain(){
      var regfreedomain=/^([a-zA-Z]+$)|(^([0-9])+$)/;
      var value=($('#freedomain').val()).trim();
      if (value=="" || !(value.match(regfreedomain))) {
        $("#freedomain").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#freedomain").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }

    $('#languagetechnology').focusout(function(){
      languageTechnology();
    });
    function languageTechnology(){
      var reglanguagetech=/^((?![0-9]+$)[a-zA-Z0-9]+\,?\s?)+$/;
      var value=($('#languagetechnology').val()).trim();
      if (value=="" || !(value.match(reglanguagetech))) {
        $("#languagetechnology").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#languagetechnology").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    $('#mailbox').focusout(function(){
      mainBox();
    });
    function mainBox(){
      var regmailbox=/^([0-9])+$/;
      var value=($('#mailbox').val()).trim();
      if (value=="" || !(value.match(regmailbox))) {
        $("#mailbox").addClass("is-invalid");
        $("#createcategory").prop('disabled', true);
        return false;
      }
      else {
        $("#mailbox").removeClass("is-invalid");
        $("#createcategory").prop('disabled', false);
        return true;
      }
    }
    function validateAddProduct(){
      var productcategory=($('#inputState').val()).trim();
      var productname=($('#productname').val()).trim();
      var pageurl=($('#pageurl').val()).trim();
      var monthlyprice=($('#monthlyprice').val()).trim();
      var annualprice=($('#annualprice').val()).trim();
      var sku=($('#sku').val()).trim();
      var webspace=($('#webspace').val()).trim();
      var bandwidth=($('#bandwidth').val()).trim();
      if(monthlyprice>annualprice){
        alert("Please Enter monthly price less than annual price");
        return false;
      }
      else {
        return true;
      }
    }
  </script>
<?php
require_once "footer.php";
?>
