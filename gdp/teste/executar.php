<?php 

class executa
{
var $tabela;
var $lista;

function executa()
{
	$this->con = new conexao();
}



function principal()
{
		$sql = "
				SELECT 
				aut.id_automovel codigo, aut.preco preco,
				f.email email, aut.img img, aut.pago pago,
				f.prim_nome dono, aut.id_fisica cod_dono,
				ma.nome marca, aut.id_marca cod_marca,
				mo.nome modelo, aut.id_modelo cod_modelo,
				a.ano ano, aut.id_ano cod_ano,
				am. anomodelo, aut.id_anomodelo cod_anomodelo,
				c.nome cidade, aut.id_cidade cod_cidade,
				e.sigla estado, aut.id_estado cod_estado
				
				 
				FROM automovel aut, marca ma, modelo mo,
				 ano a, cidade c, estado e, 
				 fisica f, juridica j,
				 anomodelo am
				WHERE ma.id_marca = aut.id_marca
				AND mo.id_modelo = aut.id_modelo
				AND a.id_ano = aut.id_ano
				AND am.id_anomodelo = aut.id_anomodelo
				AND c.id_cidade = aut.id_cidade
				AND e.id_estado = aut.id_estado
				AND f.id_fisica = aut.id_fisica
				AND am.id_anomodelo = aut.id_anomodelo
				 
				GROUP BY codigo;";
				$this->tabela = $this->con->banco->Execute($sql);
}

function imgmove($nome, $tipo, $erro, $tamanho, $local)
{
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $nome);
$extension = end($temp);
if ((($tipo == "image/gif")
|| ($tipo == "image/jpeg")
|| ($tipo == "image/jpg")
|| ($tipo == "image/pjpeg")
|| ($tipo == "image/x-png")
|| ($tipo == "image/png"))
&& ($tamanho > 5)
&& in_array($extension, $allowedExts))
  {
  if ($erro > 0)
    {
    }
  else
    {

    if (file_exists("img/". $nome))
      {
      }
    else
      {
      move_uploaded_file($local,'img/'.$nome);
      }
    }
  }
else
  {
  }
}

function alteraauto($cidade, $codcidade, $marca, $codmarca, $modelo, $codmodelo)
{
$sql = "
update cidade set nome = '".$cidade."'
where id_cidade = ".$codcidade."
";
$this->con->banco->Execute($sql);
$sql = "
update marca set nome = '".$marca."'
where id_marca = ".$codmarca."
";
$this->con->banco->Execute($sql);
$sql = "
update modelo set nome = '".$modelo."'
where id_modelo = ".$codmodelo."
";
$this->con->banco->Execute($sql);

}



function inseredado($tab, $dado)
{

$sql = "INSERT INTO ".$tab." (nome) VALUES ('".$dado."');";
$this->con->banco->Execute($sql);



}

function imgauto()
{

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
}

function automovel($dado)
{
//insere dados não cadastrados

$this->inseredado('marca',$dado[1]);
$this->inseredado('modelo',$dado[2]);
$this->inseredado('cidade',$dado[3]);





//pega dados


$marca = $this->pegadadomarca('marca', $dado[1]);
$modelo = $this->pegadadomodelo('modelo', $dado[2]);
$cidade = $this->pegadadocidade('cidade', $dado[3]);






//insere automovel
$sql = "INSERT INTO automovel (
id_marca, id_modelo, id_cidade,
id_estado, id_anomodelo, id_ano,
id_fisica, preco, img
) VALUES (
".$marca.",".$modelo.",".$cidade.",
".$dado[4].",".$dado[5].",".$dado[6].",
".$dado[7].",'".$dado[13]."','".$dado[8]."')";
$this->tabela = $this->con->banco->Execute($sql);



}

function pegadadocidade($tab, $dado)
{

$sql = "
SELECT
m.id_".$tab.", m.nome
FROM 
".$tab." m
WHERE m.nome = '".$dado."'";
$this->tabela = $this->con->banco->Execute($sql);
$lista = $this->tabela->FetchNextObject(); 
$daddo = $lista->ID_CIDADE;
return $daddo;
}
function pegadadomarca($tab, $dado)
{

$sql = "
SELECT
m.id_".$tab.", m.nome
FROM 
".$tab." m
WHERE m.nome = '".$dado."'";
$this->tabela = $this->con->banco->Execute($sql);
$lista = $this->tabela->FetchNextObject(); 
$daddo = $lista->ID_MARCA;
return $daddo;
}
function pegadadomodelo($tab, $dado)
{

$sql = "
SELECT
m.id_".$tab.", m.nome
FROM 
".$tab." m
WHERE m.nome = '".$dado."'";
$this->tabela = $this->con->banco->Execute($sql);
$lista = $this->tabela->FetchNextObject(); 
$daddo = $lista->ID_MODELO;
return $daddo;
}

function usuario($tabela,$dado)
{
	if($tabela == 'fisica')
	{
		$sql = "
		insert into fisica
		(
		login, senha, cpf, 
		email, cad_data, alt_data, 
		cad_hora, alt_hora, sessao, 
		alt_sessao, id_usu, usu_tipo, 
		alt_num, usu_f_j, alt_id_usu, 
		alt_usu_tipo, alt_f_j, id_usuario, prim_nome
		) 
		values 
		(
		'".$dado[1]."', '".$dado[2]."', '".$dado[3]."', 
		'".$dado[4]."', '".$dado[5]."', '".$dado[6]."' ,
		'".$dado[7]."', '".$dado[8]."', '".$dado[9]."', 
		'".$dado[10]."', ".$dado[11].", ".$dado[12].", 
		".$dado[13].", '".$dado[14]."', ".$dado[15].", 
		".$dado[16].", '".$dado[17]."', ".$dado[18].", '".$dado[1]."'
		)";
	}
	elseif($tabela == 'juridica')
	{
		$sql = "
		insert into juridica
		(
		login, senha, cnpj, 
		email, cad_data, alt_data, 
		cad_hora, alt_hora, sessao, 
		alt_sessao,	id_usu, usu_tipo, 
		alt_num, usu_f_j, alt_id_usu, 
		alt_usu_tipo, alt_f_j, id_usuario
		) 
		values 
		(
		'".$dado[1]."', '".$dado[2]."', '".$dado[3]."', 
		'".$dado[4]."', '".$dado[5]."', '".$dado[6]."' ,
		'".$dado[7]."', '".$dado[8]."', '".$dado[9]."', 
		'".$dado[10]."', ".$dado[11].", ".$dado[12].", 
		".$dado[13].", '".$dado[14]."', ".$dado[15].", 
		".$dado[16].", '".$dado[17]."', ".$dado[18]."
		)";
	}
	else
		$sql = "não funciona";
	$this->con->banco->Execute($sql);
	
}

function prepara_value($dddd)
{
	$conta = count($dddd);
	$i = 1;
	while ($i <= $conta)
	{
		if(gettype($dddd[$i]) == 'integer')
		{
			$dddd[$i] = $dddd[$i];
		}
		else
		{
			$dddd[$i] = "'".$dddd[$i]."'";
		}
		$i++;
	}
	
	$i = 1;
	
	while($i <= $conta)
	{
		if($i == 1)
		{
			$dd = $dddd[$i];
		}
		else
		{
			$dd = $dd.", ".$dddd[$i];
		}
		$i++;
	}
return $dd;
}

function select($tabela,$idd)
{
	if($idd == "")
	$select = "select * from ".$tabela;
	else
	$select = "select * from ".$tabela." where id_".$tabela." = ".$idd;
    $resultado = $this->con->banco->Execute($select); 
	return $resultado;
}

function lista($ttt,$iid,$usu,$idusu)
{
	if($ttt == 'usuario' || $ttt == 'fisica' || $ttt == 'juridica')
	{
		if($ttt == 'fisica' || $ttt == 'juridica')
		{
			if($ttt == 'fisica')
				{$zz = 'cpf';}
			else
				{$zz = 'cnpj';}
		$sql = "
				SELECT f.id_".$ttt." codigo, 
				f.login login, 'f' tipo,
				f.email email, f.".$zz." zzzz, 
				u.nome nome, u.id_usuario id               
				FROM ".$ttt." f, usuario u
				WHERE f.id_usuario = u.id_usuario
				AND f.id_".$ttt." = ".$iid;
		$this->tabela = $this->con->banco->Execute($sql);
		}
		else
		{
		$sql = "
				SELECT f.id_fisica codigo, 
				f.login login, 'f' tipo,
				f.email email, f.cpf zzzz, f.prim_nome nome, 
				u.nome nome               
				FROM fisica f, usuario u
				WHERE f.id_usuario = u.id_usuario
				UNION ALL                   
				SELECT j.id_juridica codigo, 
				j.login login,'j' tipo, 
				j.email email, j.cnpj zzzz, j.razao_social nome,
				u.nome nome
				FROM juridica j , usuario u
				WHERE j.id_usuario = u.id_usuario;";
		$this->tabela = $this->con->banco->Execute($sql);
		}
	}
	elseif($ttt == 'automovel')
	{
		if($iid == "")
		{
			if($usu == "")
			{
		$sql = "
				SELECT 
				aut.id_automovel codigo, aut.preco preco, aut.pago pago,
				f.prim_nome dono, aut.id_fisica cod_dono, aut.img img,
				ma.nome marca, aut.id_marca cod_marca,
				mo.nome modelo, aut.id_modelo cod_modelo,
				a.ano ano, aut.id_ano cod_ano,
				am. anomodelo, aut.id_anomodelo cod_anomodelo,
				c.nome cidade, aut.id_cidade cod_cidade,
				e.sigla estado, aut.id_estado cod_estado
				
				 
				FROM automovel aut, marca ma, modelo mo,
				 ano a, cidade c, estado e, 
				 fisica f, juridica j,
				 anomodelo am
				WHERE ma.id_marca = aut.id_marca
				AND mo.id_modelo = aut.id_modelo
				AND a.id_ano = aut.id_ano
				AND am.id_anomodelo = aut.id_anomodelo
				AND c.id_cidade = aut.id_cidade
				AND e.id_estado = aut.id_estado
				AND f.id_fisica = aut.id_fisica
				AND am.id_anomodelo = aut.id_anomodelo
				GROUP BY codigo;";
				$this->tabela = $this->con->banco->Execute($sql);	
			}
			else
			{
		$sql = "
				SELECT 
				aut.id_automovel codigo, aut.preco preco, aut.img img,
				f.prim_nome dono, aut.id_fisica cod_dono, aut.pago pago,
				ma.nome marca, aut.id_marca cod_marca,
				mo.nome modelo, aut.id_modelo cod_modelo,
				a.ano ano, aut.id_ano cod_ano,
				am. anomodelo, aut.id_anomodelo cod_anomodelo,
				c.nome cidade, aut.id_cidade cod_cidade,
				e.sigla estado, aut.id_estado cod_estado
				
				 
				FROM automovel aut, marca ma, modelo mo,
				 ano a, cidade c, estado e, 
				 fisica f, juridica j,
				 anomodelo am
				WHERE ma.id_marca = aut.id_marca
				AND mo.id_modelo = aut.id_modelo
				AND a.id_ano = aut.id_ano
				AND am.id_anomodelo = aut.id_anomodelo
				AND c.id_cidade = aut.id_cidade
				AND e.id_estado = aut.id_estado
				AND f.id_fisica = aut.id_fisica
				AND am.id_anomodelo = aut.id_anomodelo
				AND aut.id_fisica = ".$idusu."
				GROUP BY codigo;";
				$this->tabela = $this->con->banco->Execute($sql);	
			}			
			
			
			
		}
		else
		{
			if($usu == 7)
			{
		$sql = "
				SELECT 
				aut.id_automovel codigo, aut.preco preco,
				f.email email, aut.img img, aut.pago pago,
				f.prim_nome dono, aut.id_fisica cod_dono,
				ma.nome marca, aut.id_marca cod_marca,
				mo.nome modelo, aut.id_modelo cod_modelo,
				a.ano ano, aut.id_ano cod_ano,
				am. anomodelo, aut.id_anomodelo cod_anomodelo,
				c.nome cidade, aut.id_cidade cod_cidade,
				e.sigla estado, aut.id_estado cod_estado
				
				 
				FROM automovel aut, marca ma, modelo mo,
				 ano a, cidade c, estado e, 
				 fisica f, juridica j,
				 anomodelo am
				WHERE ma.id_marca = aut.id_marca
				AND mo.id_modelo = aut.id_modelo
				AND a.id_ano = aut.id_ano
				AND am.id_anomodelo = aut.id_anomodelo
				AND c.id_cidade = aut.id_cidade
				AND e.id_estado = aut.id_estado
				AND f.id_fisica = aut.id_fisica
				AND am.id_anomodelo = aut.id_anomodelo
				and aut.id_automovel = ".$iid."
				GROUP BY codigo;";
				$this->tabela = $this->con->banco->Execute($sql);	
			}
			else
			{
		$sql = "
				SELECT 
				aut.id_automovel codigo, aut.preco preco, aut.pago pago,
				f.prim_nome dono, aut.id_fisica cod_dono, aut.img img,
				ma.nome marca, aut.id_marca cod_marca,
				mo.nome modelo, aut.id_modelo cod_modelo,
				a.ano ano, aut.id_ano cod_ano, aut.pago pago,
				am. anomodelo, aut.id_anomodelo cod_anomodelo,
				c.nome cidade, aut.id_cidade cod_cidade,
				e.sigla estado, aut.id_estado cod_estado
				
				 
				FROM automovel aut, marca ma, modelo mo,
				 ano a, cidade c, estado e, 
				 fisica f, juridica j,
				 anomodelo am
				WHERE ma.id_marca = aut.id_marca
				AND mo.id_modelo = aut.id_modelo
				AND a.id_ano = aut.id_ano
				AND am.id_anomodelo = aut.id_anomodelo
				AND c.id_cidade = aut.id_cidade
				AND e.id_estado = aut.id_estado
				AND f.id_fisica = aut.id_fisica
				AND am.id_anomodelo = aut.id_anomodelo
				AND aut.id_automovel = ".$iid."
				GROUP BY codigo;";
				$this->tabela = $this->con->banco->Execute($sql);
				}	
		}

	}
	else
	{
		$this->tabela = $this->select($ttt,$iid);
	}
}



function nomecampo($tab,$iddd)
{
	$selc = $this->select($tab,$iddd);
	$vetorcampo = $selc->fields;
	$campom = $vetorcampo;
	$campos = array_keys($campom);
	return $campos;

}


function psql($nc)
{
$unc = $nc;
$cunc = count($nc);
$u = 3;
$testee = "";
	while($u < $cunc)
	{
		if($testee == "")
		{
			$testee = $unc[$u];
		}
		else
		{
			$testee = $testee.", ".$unc[$u];
		}
		$u = $u + 2;
	}
return $testee;
}



function inserir($tt,$cc,$value,$iddddd)
{
$nome = $this->nomecampo($tt,$iddddd);
$sql = "insert into ".$tt." (".$cc.") values (".$value.")";
return $sql;

}


function alterar_estado($ta,$id)
{

return $sql;
}


function alterar($ta,$id)
{
if($ta == 'estado')
{
$n_altera = $_POST['n_alteracao'] + 1;
$sql = "
update ".$ta." set 
sigla = '".$_POST['sigla']."', 
nome = '".$_POST['nome']."',



alt_data = '".date('Y-m-d')."',
alt_hora = '".date('h:i:s')."',
alt_sessao = '".session_id()."',
alt_num = ".$n_altera.",
alt_id_usu = ".$_SESSION['sessao_codigo_usuario'].",
alt_usu_tipo = ".$_SESSION['sessao_nivel_usuario'].",
alt_f_j = '".$_SESSION['sessao_tipo_usuario']."'
where id_".$ta." = ".$id;
}
elseif($ta == 'ano')
{
$n_altera = $_POST['n_alteracao'] + 1;
$sql = "
update ".$ta." set 
ano = '".$_POST['ano']."',



alt_data = '".date('Y-m-d')."',
alt_hora = '".date('h:i:s')."',
alt_sessao = '".session_id()."',
alt_num = ".$n_altera.",
alt_id_usu = ".$_SESSION['sessao_codigo_usuario'].",
alt_usu_tipo = ".$_SESSION['sessao_nivel_usuario'].",
alt_f_j = '".$_SESSION['sessao_tipo_usuario']."'
where id_".$ta." = ".$id;
}
elseif($ta == 'anomodelo')
{
$n_altera = $_POST['n_alteracao'] + 1;
$sql = "
update ".$ta." set 
anomodelo = '".$_POST['anomodelo']."',



alt_data = '".date('Y-m-d')."',
alt_hora = '".date('h:i:s')."',
alt_sessao = '".session_id()."',
alt_num = ".$n_altera.",
alt_id_usu = ".$_SESSION['sessao_codigo_usuario'].",
alt_usu_tipo = ".$_SESSION['sessao_nivel_usuario'].",
alt_f_j = '".$_SESSION['sessao_tipo_usuario']."'
where id_".$ta." = ".$id;
}
elseif($ta == 'automovel')
{
	if($_FILES["file"]["name"] == '')			//id_marca
		{$dadoo = $_POST['img'];}			//id_marca
	else
		{$dadoo = $_FILES["file"]["name"];}
$sql = "
update ".$ta." set 



id_estado = ".$_POST['estado_codigo'].",
preco = ".$_POST['preco'].",
pago = '".$_POST['pago']."',

id_anomodelo = ".$_POST['anomodelo_codigo'].",
id_ano = ".$_POST['ano_codigo'].",
img = '".$dadoo."'
where id_".$ta." = ".$id;
}

elseif($ta == 'cidade')
{
$n_altera = $_POST['n_alteracao'] + 1;
$sql = "
update ".$ta." set 
nome = '".$_POST['cidade']."',
id_estado = '".$_POST['estado_codigo']."',



alt_data = '".date('Y-m-d')."',
alt_hora = '".date('h:i:s')."',
alt_sessao = '".session_id()."',
alt_num = ".$n_altera.",
alt_id_usu = ".$_SESSION['sessao_codigo_usuario'].",
alt_usu_tipo = ".$_SESSION['sessao_nivel_usuario'].",
alt_f_j = '".$_SESSION['sessao_tipo_usuario']."'
where id_".$ta." = ".$id;
}
elseif($ta == 'bairro')
{
$n_altera = $_POST['n_alteracao'] + 1;
$sql = "
update ".$ta." set 
nome = '".$_POST['bairro']."',
id_cidade = '".$_POST['cidade_codigo']."',



alt_data = '".date('Y-m-d')."',
alt_hora = '".date('h:i:s')."',
alt_sessao = '".session_id()."',
alt_num = ".$n_altera.",
alt_id_usu = ".$_SESSION['sessao_codigo_usuario'].",
alt_usu_tipo = ".$_SESSION['sessao_nivel_usuario'].",
alt_f_j = '".$_SESSION['sessao_tipo_usuario']."'
where id_".$ta." = ".$id;
}
elseif($ta == 'logradouro')
{
$n_altera = $_POST['n_alteracao'] + 1;
$sql = "
update ".$ta." set 
nome = '".$_POST['rua']."',
id_bairro = '".$_POST['bairro_codigo']."',



alt_data = '".date('Y-m-d')."',
alt_hora = '".date('h:i:s')."',
alt_sessao = '".session_id()."',
alt_num = ".$n_altera.",
alt_id_usu = ".$_SESSION['sessao_codigo_usuario'].",
alt_usu_tipo = ".$_SESSION['sessao_nivel_usuario'].",
alt_f_j = '".$_SESSION['sessao_tipo_usuario']."'
where id_".$ta." = ".$id;
}
elseif($ta == 'marca')
{
$n_altera = $_POST['n_alteracao'] + 1;
$sql = "
update ".$ta." set 
nome = '".$_POST['marca']."',


alt_data = '".date('Y-m-d')."',
alt_hora = '".date('h:i:s')."',
alt_sessao = '".session_id()."',
alt_num = ".$n_altera.",
alt_id_usu = ".$_SESSION['sessao_codigo_usuario'].",
alt_usu_tipo = ".$_SESSION['sessao_nivel_usuario'].",
alt_f_j = '".$_SESSION['sessao_tipo_usuario']."'
where id_".$ta." = ".$id;
}
elseif($ta == 'fisica')
{
$n_altera = $_POST['n_alteracao'] + 1;
$sql = "
update ".$ta." set 
login = '".$_POST['usuario']."',
senha = '".$_POST['senha']."', 
cpf = '".$_POST['documento']."', 
email = '".$_POST['email']."', 
id_usuario = '".$_POST['usuario_codigo']."',




alt_data = '".date('Y-m-d')."',
alt_hora = '".date('h:i:s')."',
alt_sessao = '".session_id()."',
alt_num = ".$n_altera.",
alt_id_usu = ".$_SESSION['sessao_codigo_usuario'].",
alt_usu_tipo = ".$_SESSION['sessao_nivel_usuario'].",
alt_f_j = '".$_SESSION['sessao_tipo_usuario']."'
where id_".$ta." = ".$id;
}
elseif($ta == 'juridica')
{
$n_altera = $_POST['n_alteracao'] + 1;
$sql = "
update ".$ta." set 
login = '".$_POST['usuario']."',
senha = '".$_POST['senha']."', 
cnpj = '".$_POST['documento']."', 
email = '".$_POST['email']."', 
id_usuario = '".$_POST['usuario_codigo']."',


alt_data = '".date('Y-m-d')."',
alt_hora = '".date('h:i:s')."',
alt_sessao = '".session_id()."',
alt_num = ".$n_altera.",
alt_id_usu = ".$_SESSION['sessao_codigo_usuario'].",
alt_usu_tipo = ".$_SESSION['sessao_nivel_usuario'].",
alt_f_j = '".$_SESSION['sessao_tipo_usuario']."'
where id_".$ta." = ".$id;
}


return @$sql;
}


function deletar($ta,$id)
{
	$sql = "
	delete 
	from 
	".$ta." 
	where id_".$ta." = ".$id;
	return $sql;
}

function opt()
{
		      $retorna = '';   
			  $sql = "select * from estado where id_estado != 1";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcat = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if($this->lista->ID_ESTADO == $regcat->ID_ESTADO)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna.'<option value="'.$regcat->ID_ESTADO.'"'.$selecionado.'>'.$regcat->SIGLA.'</option>'; 
			  
			  }
			  return $retorna;
}
function optano()
{
		      $retorna = '';   
			  $sql = "select * from ano where id_ano != 1";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcat = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if($this->lista->ID_ANO == $regcat->ID_ANO)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna.'<option value="'.$regcat->ID_ANO.'"'.$selecionado.'>'.$regcat->ANO.'</option>'; 
			  
			  }
			  return $retorna;
}
function optestauto()
{
		      $retorna = '';   
			  $sql = "select * from estado where id_estado != 1";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcat = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if($this->lista->COD_ESTADO == $regcat->ID_ESTADO)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna.'<option value="'.$regcat->ID_ESTADO.'"'.$selecionado.'>'.$regcat->SIGLA.'</option>'; 
			  
			  }
			  return $retorna;
}
function optanoauto()
{
		      $retorna = '';   
			  $sql = "select * from ano where id_ano != 1";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcat = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if($this->lista->COD_ANO == $regcat->ID_ANO)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna.'<option value="'.$regcat->ID_ANO.'"'.$selecionado.'>'.$regcat->ANO.'</option>'; 
			  
			  }
			  return $retorna;
}
function optanomodeloauto()
{
		      $retorna = '';   
			  $sql = "select * from ano where id_ano != 1";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcat = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if($this->lista->COD_ANOMODELO == $regcat->ID_ANO)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna.'<option value="'.$regcat->ID_ANO.'"'.$selecionado.'>'.$regcat->ANO.'</option>'; 
			  
			  }
			  return $retorna;
}

function optcidade()
{
		      $retorna = '';   
			  $sql = "select * from cidade where id_cidade != 1";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcat = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if($this->lista->ID_CIDADE == $regcat->ID_CIDADE)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna.'<option value="'.$regcat->ID_CIDADE.'"'.$selecionado.'>'.$regcat->NOME.'</option>'; 
			  
			  }
			  return $retorna;
}

function optbar()
{
		      $retorna = '';   
			  $sql = "select * from bairro where id_bairro != 1";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcat = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if($this->lista->ID_BAIRRO == $regcat->ID_BAIRRO)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna.'<option value="'.$regcat->ID_BAIRRO.'"'.$selecionado.'>'.$regcat->NOME.'</option>'; 
			  
			  }
			  return $retorna;
}

function optmar()
{
		      $retorna = '';   
			  $sql = "select * from marca where id_marca != 1";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcat = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if($this->lista->ID_MARCA == $regcat->ID_MARCA)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna.'<option value="'.$regcat->ID_MARCA.'"'.$selecionado.'>'.$regcat->NOME.'</option>'; 
			  
			  }
			  return $retorna;
}
function optusu($ck)
{
		      $retorna = '';   
			  $sql = "select * from usuario";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcat = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if($this->lista->ID_USUARIO == $ck)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna.'<option value="'.$regcat->ID_USUARIO.'"'.$selecionado.'>'.$regcat->NOME.'</option>'; 
			  
			  }
			  return $retorna;
}

function est($id)
{
	$sql = "select * from estado where id_estado = ".$id;
	$exe = $this->con->banco->Execute($sql);
	$exee = $exe->FetchNextObject();
	$ret = $exee->SIGLA; 
	return $ret;
}

function cid($id)
{
	$sql = "select * from cidade where id_cidade = ".$id;
	$exe = $this->con->banco->Execute($sql);
	$exee = $exe->FetchNextObject();
	$ret = $exee->NOME; 
	return $ret;
}

function bar($id)
{
	$sql = "select * from bairro where id_bairro = ".$id;
	$exe = $this->con->banco->Execute($sql);
	$exee = $exe->FetchNextObject();
	$ret = $exee->NOME; 
	return $ret;
}
function mar($id)
{
	$sql = "select * from marca where id_marca = ".$id;
	$exe = $this->con->banco->Execute($sql);
	$exee = $exe->FetchNextObject();
	$ret = $exee->NOME; 
	return $ret;
}
function usu($id)
{
	$sql = "select * from usuario where id_usuario = ".$id;
	$exe = $this->con->banco->Execute($sql);
	$exee = $exe->FetchNextObject();
	$ret = $exee->NOME; 
	return $ret;
}



}

/*
$con->banco->Execute(sql($t));
require('estado.php');
*/

?>
