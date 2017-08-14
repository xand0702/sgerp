<?php



$servername = "localhost";
$username = "root";
$password = "";
$database = "tcc";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }








/*
    require('adodb/adodb.inc.php'); //biblioteca necessaria para trabalhar com adodb
	
	class conexao
	{
	      var $tipo_banco    = "mysql";
		  var $servidor      = "localhost";
		  var $usuario       = "root";
		  var $senha         = "";
		  var $banco;       
	    
	      function conexao() //metodo construtor
		  {
                $this->banco = NewADOConnection($this->tipo_banco);
				$this->banco->dialect = 3;
				$this->banco->debug = true;
				$this->banco->Connect($this->servidor,$this->usuario,$this->senha,"tcc");
		  }
	}

    $con = new conexao();	
	*/
	//mysql_select_db("carrinho_compras");
	
	
	//if($con)
	//  echo "conectou";
	//else
	//  echo "nao conectou";

	
?>