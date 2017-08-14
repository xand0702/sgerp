Hora Inicial:
<select name="hora" id="hora" onchange="habilitaHora(this.value)" class="datahora" type="select-one" value="8:00"> 
<option value="8:00">8:00</option> 
<option value="9:00">9:00</option> 
<option value="10:00">10:00</option> 
<option value="11:00">11:00</option> 
<option value="12:00">12:00</option> 
<option value="13:00">13:00</option> 
<option value="14:00">14:00</option> 
<option value="15:00">15:00</option> 
<option value="16:00">16:00</option> 
<option value="17:00">17:00</option> 
</select>


Hora Final:
<select name="hora2" id="hora2" class="datahora" type="select-one" value="8:00"> 
<option value="8:00">8:00</option> 
<option value="9:00">9:00</option> 
<option value="10:00">10:00</option> 
<option value="11:00">11:00</option> 
<option value="12:00">12:00</option> 
<option value="13:00">13:00</option> 
<option value="14:00">14:00</option> 
<option value="15:00">15:00</option> 
<option value="16:00">16:00</option> 
<option value="17:00">17:00</option> 
></select>









<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
function habilitaHora(horaAtual){
   // SETA A VARIAVEL horario COM O OBJETO hora2 UTILIZANDO O ID
   horario = document.getElementById('hora2'); 

   // IREMOS UTILIZAR ESTA VARIAVEL POSTERIORMENTE
   marcado = false; 

   // ESTE FOR VAI PERCORRER TODOS OS VALORES DA hora2
   for(i=0;i<=horario.options.length;i++){ 

      // ESTE IF VERIFICA SE O VALOR SELECIONADO NO PRIMEIRO COMBO É 
      // MENOR OU IGUAL AO ITEM DO SEGUNDO 
      if(horario.options[i].value <= horaAtual){ 

         // SE O VALOR FOR MENOR, A OPÇÃO É DESABILITADA 
         horario.options[i].disabled = true; 
      }else{ 

         // SE O VALOR FOR MAIOR, A OPÇÃO É HABILITADA 
         // FAÇO ESTA VERIFICAÇÃO NOVAMENTE CASO O USUÁRIO MUDE DE 
         // OPNIÃO E ESCOLHA UM HORÁRIO MENOR 
         horario.options[i].disabled = false; 
         
         // SE A VARIAVEL MARCADO FOR FALSA QUER DIZER QUE É O PRIMEIRO VALOR 
         // QUE PODE SER MARCADO PELO USUÁRIO. ENTÃO EU JOGO O FOCO PARA ELE 
         // E A VARIAVEL MARCADO PARA VERDADEIRO 
         if(marcado == false){ 
            horario.options[i].selected = true; 
            marcado = true;
         } 
      } 
   }
}

</script>