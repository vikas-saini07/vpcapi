<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<form id="queryform" method="post">
    <div>
        url:
        <input type="text" name="url" id="url" value="https://migs-mtf.mastercard.com.au/vpcdps"/>
        vpc_Command:
        <input type="text" name="command" id="command" value="queryDR"/>
        vpc_Merchant:
        <input type="text" name="merchant" id="merchant" value="TESTVIKAS"/>
        vpc_AccessCode:
        <input type="text" name="access" id="access" value="75A0ED3D"/>
        vpc_SecureHash:
        <input type="text" name="shash" id="shash" value="5C7D98994ACE314AEDCFA9879D2FAB81"/>
        vpc_User:
        <input type="text" name="user" id="user" value="amavpcm"/>
        vpc_Password:
        <input type="password" name="password" id="password" value="CheeseCake123@"/>
        vpc_MerchTxnRef:
        <input type="text" name="ref" id="ref" value="sales_12345"/>
        vpc_Version:
        <input type="text" name="ver" id="ver" value="1"/>
        <input type="submit" name="loginBtn" id="loginBtn" value="Login" />
    </div>
</form>
<div id="div1"><h2>RESULT HERE</h2></div>
<button>Submit</button>
<script type="text/javascript">
//$(document).ready(function(){
  $("button").click(function(e){
        var Version = document.getElementById("ver").value;
        var cmd = document.getElementById("command").value;
        var accesscode = document.getElementById("access").value;
        var merchant = document.getElementById("merchant").value;
        var txnref = document.getElementById("ref").value;
        var User = document.getElementById("user").value;
        var pwd = document.getElementById("password").value;
        var sechash = document.getElementById("shash").value;
        var vpc_ReturnURL = "https://vpcm-vikas-test.herokuapp.com/";
        var SecureHashType = "SHA256";
        e.preventDefault();

        url =  "https://migs-mtf.mastercard.com.au/vpcdps";
        data = { vpc_Version: Version, vpc_Command: cmd, vpc_AccessCode: accesscode, vpc_Merchant: merchant, vpc_MerchTxnRef: txnref, vpc_User: User, vpc_Password: pwd, vpc_SecureHash: sechash, vpc_SecureHashType: SecureHashType, vpc_ReturnURL: vpc_ReturnURL };
    $.ajax({
         headers: { 'Content-Type': 'application/x-www-form-urlencoded'},
//       headers : { Accept : "text/plain",  "Content-Type" : "application/json" },
        dataType: "json",
        contentType: "application/json; charset=utf-8",
//      contentType: "application/json; charset=utf-8",
        url : url,
        crossDomain: true,
        type: 'POST',
        data: data,
        success : function(data) {
                    alert(JSON.stringify(data));
                },
                error: function(e) {
                    alert("failed" + JSON.stringify(e))
    }
/*      $.post( 'qresponse.php', data, function (response, status) {
//                      var response = $.parseJSON(response);
                        console.log(response);
                        //var check = JSON.stringify(test, null, '\n');
                        $('#div1').html(response);
                });*/

})
});
</script>
</body>
</html>
