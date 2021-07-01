<!DOCTYPE html>
<html lang="pt-BR">
<?php   $titulo='Curiosidades - Cel lanches delivery';   
        $estilo='<link rel="stylesheet" type="text/css" href="css/infoGeral.css">';?>
   <!--titulo guia da página-->	
   <?php include_once '../includes/cabecalho.php'; ?>    
    <!--menu-->
   <div class="menu">
     <?php include_once '../includes/menu.php';?>
   </div>
   <!--conteudo-->
   <body>
       <div class="formulario">
      <table> <!--style="width:80%" align="center" border=3 cellspacing=0 cellpadding=0 bordercolor="666633"-->
         <caption><b>Temperatura ideal dos alimentos</b></caption>
         <tr>
            <th>Produto</th>
            <th>Temperatura</th>
         </tr>
		 <tr>
            <td>Salgados Geral</td>
            <td>Mínimo 60º</td>
         </tr>
         <tr>
            <td>Refrigerantes</td>
            <td>Até 7º</td>
         </tr>
         <tr>
            <td>Café quente</td>
            <td>no mínimo 60º</td>
         </tr>
         <tr>
            <td>Sorvetes</td>
            <td>-5º</td>
         </tr>
         <tr>
            <td>Frutas</td>
            <td>Minimo 5º</td>
         </tr>
         <tr>
            <td>Sobremesas geladas</td>
            <td>Minimo 4º</td>
         </tr>
      </table>
           </div>
   </body>     
    <!--rodapé-->
   <?php include_once '../includes/rodape.php';?>
</html>