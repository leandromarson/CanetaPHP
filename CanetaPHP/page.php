<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <title>Programa Caneta PHP Poo</title>
        <?php
                            
            $txt = filter_input_array(INPUT_GET, FILTER_DEFAULT);
            $tipo = isset($txt["tipo"])?$txt["tipo"]:"SEM TIPO";
            $cor = isset($txt["cor"])?$txt["cor"]:"#000000";
            $ponta = isset($txt["ponta"])?$txt["ponta"]:"10";
            
        ?>
        <style>
            span.texto{
		      font-size: <?php echo $ponta;?>pt;
		      color: <?php echo $cor;?>;
                      font-family: Arial Black , sans-serif;
		      
		  }           
            
        </style>
    </head>
    <body>
        <div id = "interface">
		<header id ="cabecalho">
			<hgroup>
				<h1>Site Caneta</h1>
                                <h2>POO em PHP</h2>
			</hgroup>						
		</header>
            
            
            <?php
                require "Caneta.php";     
		$c1 = new Caneta($tipo,$cor,$ponta);
                
	        echo "<p><h2>Caneta criada:</h2></p>";  
                
                
                echo "<table><tr><td><p><span class = 'texto'>Tipo: </td><td>".$c1->getModelo()."</span></p></td></tr>";
                echo "<tr><td><p><span class = 'texto'>Ponta: </td><td>".$c1->getPonta()." pt</span></p></td></tr>";
                echo "<tr><td><p><span class = 'texto'>Carga: </td><td>".$c1->getCarga()."</span></p></td></tr>";
                echo "<tr><td><p><span class = 'texto'>Cor: </td><td>".$c1->getCor()."</span></p></td></tr>";
                echo "<tr><td><p><span class = 'texto'>Tampada: </td><td>".$c1->getTampada()."</span></p></td></tr></table><br>";
               
                $c1->rabiscar(1);
                $c1->destampar();
                $c1->setCarga(9);
                $c1->rabiscar(10);
                $c1->tampar();
                
                
                
                
                
            ?>
            
            <br><br>
            <form action="javascript:history.go(-1)">
                <p><input type="submit" class="button" value="Voltar"></p>
            </form>
            
            
            <footer id= "rodape">
			<p>2020 - by Leandro Marson Ribeiro<br>
            </footer> 
        </div>       
    </body>
</html>
