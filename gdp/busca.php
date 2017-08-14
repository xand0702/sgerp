		<?php
		
		if (@$_REQUEST['bot'] == 'tes1')
			require('gdp/pessoafisica/index.php');
		elseif (@$_REQUEST['bot'] == 'tes2')
			require('gdp/pessoajuridica/index.php');
		elseif (@$_REQUEST['bot'] == 'tes3')
			require('gdp/funcionario/index.php');
		elseif (@$_REQUEST['bot'] == 'tes4')
			require('gdp/cliente/index.php');
		elseif (@$_REQUEST['bot'] == 'tes5')
			require('gdp/fornecedor/index.php');
		elseif (@$_REQUEST['bot'] == 'tes6')
			require('gdp/tercerizados/index.php');
		elseif (@$_REQUEST['bot'] == 'tes7')
			require('gdp/pais/index.php');
			
		
		
		else
			require('index.php');
		
		
		?>