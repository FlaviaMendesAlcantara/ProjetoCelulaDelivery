<!DOCTYPE html>
<html lang="pt-BR">
<?php  $titulo='Produtos - Cel lanches delivery';  		
	   $estilo='<link rel="stylesheet" type="text/css" href="../css/produtos.css">';?>
     <?php include_once '../includes/cabecalho.php'; ?> 

    <div class="menu">
        <?php include_once '../includes/menu.php';?>
    </div>

    <body>   

        <div class="container">
        <header id="cabecalho">   
        <br><br>
        <h2>Produtos</h2>   
        </header>
      <!--  <form class="row"> -->
<!--
        < ?php require '../arquivos/abrirConexaoBD.php';
        $query="select nome_imagem,nome_produto,preco,sigla,descricao from produtos p
        inner join imagens i on id_imagem=idImagens
        inner join unidade_medida u ON id_unidade_medida=idUnidade_medida
        where p.dt_exclusao is null";
        $qr=mysqli_query($conexao,$query) or die (mysqli_error());
        while($result=mysqli_fetch_assoc($qr)){
           echo  "<div class='col-4'>";
 // <img src='../img/$result('nome_imagem')' alt='$result('nome_produto')'><br>
   //         <label for='tortaFrango' class='form-label'><b>$result('nome_produto').' - R$: '.$result('preco').'<br>'.$result('descricao')</b></label>
     //   </div>";
        
            
        }
    
    ?> -->
    <ul id="listaProd">
    
    <div class="col-3">
        <li>
            <figure>
                <img src="../img/tortaFrangoG.jpg" alt="Torta de Frango"><br>
                <figcaption><h6>Torta de Frango média<h6> 
                    <p>R$24,90</p>
                </figcaption>
            </figure>
            <label for="tortaFrango" class="form-label">Torta média R$24,90</label>
        </li>
    </div>
    <div class="col-3">
        <li>
            <figure>
                <img src="../img/caldoMandiocaG.jpeg" alt="Caldo de Mandioca"><br>
                <figcaption><h6>Caldo de Mandioca 4,5L<h6> 
                    <p>R$19,90</p>
                </figcaption>
            </figure>
            <label for="caldoMandioca" class="form-label">Caldo R$19,90</label>
        </li>
    </div>
    <div class="col-3">
        <li>
        <figure>
            <img src="../img/salgadinhosG.jpg" alt="salgados"><br>
            <figcaption><h6>Salgados 100 Un</h6>
            <p>R$38,00</p>
            </figcaption>
        </figure>
            <label for="salgados" class="form-label">Salgados R$38,00</label>            
        </li>
    </div>
    <div class="col-3">
        <li>
        <figure>
            <img src="../img/paoDeQueijoG.jpg" alt="Pão de queijo"><br>
            <figcaption><h6>Pão de queijo 100 Un</h6>
                <p>R$18,90</p>
            </figcaption>
        </figure>
            <label for="paoQueijo" class="form-label">Pão de queijo R$18,90</label>            
        </li>
    </div>
    <div class="col-3">
        <li>
        <figure>
            <img src="../img/boloG.jpg" alt="Bolo de chocolate"><br>
            <figcaption><h6>Bolo de chocolate</h6> <p>R$6,50</p> </figcaption>
        </figure>        
            <label for="boloChocolate" class="form-label">Bolo R$6,50</label>
        </li>
    </div>
    <div class="col-3">
        <li>
        <figure>
            <img src="../img/sucosG.jpg" alt="Sucos"><br>
            <figcaption><h6>Suco sabores variados 1L</h6><p>R$4,00</p></figcaption>
        </figure>
            <label for="sucos" class="form-label">Suco R$4,00</label>
        </li>
    </div>
    <div class="col-3">
        <li>
        <figure>
            <img src="../img/refrigerantesG.jpg" alt="Refrigerante"><br>
            <figcaption><h6>Refrigerante lata</h6><p>R$4,00</p></figcaption>
        </figure>
            <label for="refri" class="form-label">Refrigerante R$4,00</label>
        </li>
    </div>
    <div class="col-3">
        <li>
        <figure>
            <img src="../img/vitaminaFrutasG.jpg" alt="vitamina"><br>
            <figcaption><h6>Vitamina 1L</h6><p>R$10,50</p></figcaption>
        </figure>
            <label for="vitamina" class="form-label">Vitamina 1L R$10,50</label>
        </li>
    </div>
    <div class="col-3">
        <li>
        <figure>
            <img src="../img/saladaFrutasG.jpeg" alt="sFruta"><br>
            <figcaption><h6>Salada de Frutas Copo(300ml)</h6><p>R$3,00</p></figcaption>
        </figure>
            <label for="sFruta" class="form-label">Salada de Frutas R$3,00</label>
        </li>
    </div>
    </div>
    </ul>
    </div>
    </body>    
     <!--rodapé-->
   <?php include_once '../includes/rodape.php';?>
</html>