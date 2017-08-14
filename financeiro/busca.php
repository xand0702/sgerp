		<?php
		
		if (@$_REQUEST['bot'] == 'tes1')
			require('financeiro/cre/index.php');
		elseif (@$_REQUEST['bot'] == 'tes2')
			require('financeiro/cap/index.php');
		elseif (@$_REQUEST['bot'] == 'tes3')
			require('teste6.php');
		elseif (@$_REQUEST['bot'] == 'tes4')
			require('teste6.php');
		elseif (@$_REQUEST['bot'] == 'tes5')
			require('teste6.php');
		elseif (@$_REQUEST['bot'] == 'tes6')
			require('teste6.php');
		elseif (@$_REQUEST['bot'] == 'tes7')
			require('estoque/pais/index.php');
			
		
		
		else
			require('index.php');
		
		
		?>