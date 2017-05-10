<!doctype html>
<html>
<head>
<!-- 


/** 
Script CUrl By HocTrick.NET
 **/


-->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="//code.jquery.com/jquery.min.js"></script>
<title>
  Thiết Lập Curl Sub - Kunkey
</title> 
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link href="//cdn.shopify.com/s/files/1/0691/5403/t/123/assets/style.scss.css?13701263572696252361" rel="stylesheet" type="text/css"  media="all"  />
</head>
<body id="dashboard" class="background-dark template-product" >


  <div class="container">
    <div class="row text-centered">
      <div class="col-md-12 text-center">
<div class="panel panel-default">

<div class="panel-heading">
<h3 class="panel-title"> Token Phải Là Token Full Quyền Android Hoặc Iphone</h3>
</div>

<div class="panel-body">

<?
if(isset($_POST['submit']))
{
function save($x,$y){
   $f = fopen($x,'w');
        fwrite($f,$y);
        fclose($f);
   }

$token = $_POST['token'];
$token2 = $_POST['token2'];
$token3 = $_POST['token3'];
$token4 = $_POST['token4'];
$token5 = $_POST['token5'];


if($token == ''){
echo '<b color="red"> Không Update Token 1</b><br>';
}else{
save('token/token.txt', $token);
echo '<b color="green">Đã Update Token 1</b><br>';
}

if($token2 == ''){
echo '<b color="red"> Không Update Token 2</b><br>';
}else{
save('token/token2.txt', $token2);
echo '<b color="green">Đã Update Token 2</b><br>';
}

if($token3 == ''){
echo '<b color="red"> Không Update Token 3</b><br>';
}else{
save('token/token3.txt', $token3);
echo '<b color="green">Đã Update Token 3</b><br>';
}

if($token4 == ''){
echo '<b color="red"> Không Update Token 4</b><br>';
}else{
save('token/token4.txt', $token4);
echo '<b color="green">Đã Update Token 4</b><br>';
}

if($token5 == ''){
echo '<b color="red"> Không Update Token 5</b><br>';
}else{
save('token/token5.txt', $token5);
echo '<b color="green">Đã Update Token 5</b><br>';
}


function save($x,$y){
   $f = fopen($x,'w');
        fwrite($f,$y);
        fclose($f);
   }

}else{
?>

<form method="post" action="">


<div class="form-group">
<label>* Token 1:</label>
<input name="token" placeholder="Nhập Token 1" class="form-control"/>
</div>

<div class="form-group">
<label>* Token 2 :</label>
<input name="token2" type="text" placeholder="Nhập Token 2" class="form-control"/>
</div>

<div class="form-group">
<label>* Token 3 :</label>
<input name="token3" placeholder="Nhập Token 3" class="form-control"/>
</div>

<div class="form-group">
<label>* Token 4 :</label>
<input name="token4" type="text" placeholder="Nhập Token 4" class="form-control"/>
</div>

<div class="form-group">
<label>* Token 5 :</label>
<input name="token5" type="text" placeholder="Nhập Token 5" class="form-control"/>
</div>



<button name="submit" type="submit" class="btn btn-sm btn-primary"> Thực Hiện</button>

</form>

<?
}
?>





</div>
</div>

</div>
</div>
</div>
</body>
</html>
<?