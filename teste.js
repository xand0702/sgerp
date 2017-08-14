

function mdiv(){
		var seila = document.getElementById("shadow");
		if (seila.style.visibility == 'visible')
			{
				seila.style.visibility = 'hidden';
				exit;
			}
		seila.style.position = 'absolute';
		seila.style.visibility = 'visible';
		seila.style.background = '#cccccc';
}
function mdivv(){
		var seila = document.getElementById("shadow");
		seila.style.visibility = 'hidden';

}

function linha_over(celula)
{
	celula.style.backgroundColor="#ddd";
}


function linha_out(celula)
{
	celula.style.backgroundColor="";
}
