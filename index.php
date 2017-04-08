<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>CR Construções e Reformas</title>
        <!-- FAVICON -->
		<link rel="shortcut icon" href="img/_site/favicon.png">
		<?php include_once("var.php"); ?>
		<!--Responsável pelo metadata-->
		<?php include_once("meta.php"); ?>
		<!--Responsável pelo css-->
		<?php include_once("css/css.php"); ?>
		<!--Responsável pelo javascript
		<?php include_once("js/js.php") ?>-->
        
	</head>
	<body>
        <div class="body-wrapper">
            <div class="wrapper-content">

                <?php 
                    include_once("view/componentes/loading.php");
                    include_once("view/header/header.php");
                    include_once("view/body/body.php");
                    include_once("view/footer/footer.php");
                ?>
            </div>
        </div>
        
        <?php 
            include_once("js/posjs.php") 
        ?>
		    	      
	</body>
</html>
