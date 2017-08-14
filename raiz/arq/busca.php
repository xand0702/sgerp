		<?php
		
		if (@$_REQUEST['mod'] == 'con')
			require('contabilidade/contabilidade.php');
		elseif (@$_REQUEST['mod'] == 'com')
			require('comprar/compras.php');
		elseif (@$_REQUEST['mod'] == 'est')
			require('estoque/estoque.php');
		elseif (@$_REQUEST['mod'] == 'ven')
			require('vendas/vendas.php');
		elseif (@$_REQUEST['mod'] == 'gdp')
			require('gdp/gdp.php');
		elseif (@$_REQUEST['mod'] == 'fin')
			require('financeiro/financeiro.php');
			
			
			
			
		
		else
			require('corpo_index.php');
		
		
		?>