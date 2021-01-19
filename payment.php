<?php
session_start();
$price = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
<?php
for ($i=0;$i<count($_SESSION['cartdata']);$i++) {
    
   $price+=$price+ ($_SESSION['cartdata'][$i][2]);
}  
?>
<input type="hidden" id="rupee" value="<?php echo $price ?>">
</form>
    
<div id="pay">

</div>
<script src="https://www.paypal.com/sdk/js?client-id=AYpIp_jxv9MeuP42ECvnNZcn0XrcWwnbKLUhPQzKQPnbQhhXPuvCk8QxMpkwEcwvKnYjB_Sd73mFUr3I&currency=INR"></script>
<script>
var rupee = document.getElementById("rupee").value;
paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value:rupee
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            // window.location.replace("http://localhost:63342/tutorial/paypal/success.php")
        })
    },
    onCancel: function (data) {
        // window.location.replace("http://localhost:63342/tutorial/paypal/Oncancel.php")
    }
}).render('#pay');

</script>
</body>
</html>