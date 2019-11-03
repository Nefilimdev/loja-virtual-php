<?php include_once("var.php") ?>

<header class="container d-flex justify-content-between align-items-center p-3 ">
        <h1 id="logo"><?php echo $nomeSistema; ?></h1>
     
    <ul class="nav"> 
        <?php if(isset($usuario) && $usuario != "") {?>
        <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo "Olá"." ".$usuario["nome"]; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sair.php"> Sair </a>
        </li>

      <?php }else { ?>

      <li class="nav-item">
        <a class="nav-link" href="#">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
      </li>
      <?php }?>  
    </ul>
 
    </header>


     <nav class="nav-bar bg-dark row justify-content-around" >
          <ul class= "nav"> 
            <?php if(isset($categorias) && $categorias != []) { ?>
                <?php foreach($categorias as $categoria) { ?>
                  <li class="nav-item"> 
                    <a class="nav-link text-white" href="#"><?php echo $categoria; ?></a>
                  </li>
        
        
                <?php } ?>      
            <?php } ?>
         </nav>