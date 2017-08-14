<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="ferr/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="ferr/bootstrap.min.js"></script>






<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="ferr/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="ferr/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->


</head>

<body>
<form action="valida_login.php" method="post">
<table width="200" border="0" align="center">
  <tr>
    <td colspan="2"><center><img src="img/logo.jpg"></center>
</td>
  </tr>
  <tr>
    <td align=right>
			<label>Login: </label>
			</td>
    <td>
      <input type="text" name="login" class="form-control" placeholder="Preenchimento Obrigatório" />    </td>
  </tr>
  <tr>
    <td align=right>
			<label>Senha: </label>
			</td>
    <td>
      <input type="password" name="senha" class="form-control" placeholder="Preenchimento Obrigatório" />    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Entrar" class="btn btn-default" /></td>
  </tr>
</table>
</form>
</body>
</html>
