		<?php
		
		if (@$_REQUEST['bot'] == 'tes1')
			require('estoque/produto/index.php');
		elseif (@$_REQUEST['bot'] == 'tes2')
			require('estoque/produtoacabado/index.php');
		elseif (@$_REQUEST['bot'] == 'tes3')
			require('estoque/mca/index.php');
		elseif (@$_REQUEST['bot'] == 'tes4')
			require('estoque/saida/index.php');
		elseif (@$_REQUEST['bot'] == 'tes5')
			require('estoque/tercerizados/index.php');
		elseif (@$_REQUEST['bot'] == 'tes6')
			require('teste6.php');
		elseif (@$_REQUEST['bot'] == 'tes7')
			require('estoque/pais/index.php');
			
		
		
		else
			require('index.php');
		
		
		?>