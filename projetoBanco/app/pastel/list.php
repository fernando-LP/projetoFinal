<?php
    include '../../classes/session/Session.php';
    Session::validaSession(true);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Visualizar Veiculo</title>
	<meta charset="UTF-8" />
	<form method="POST" action="action/save.php">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
        <li class="breadcrumb-item"><a<a href="../../index.php">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Visualizar Veiculos</li>
            </ol>
         </nav>
        <!-- <div>
            <a href="../../index.php">Inicio</a>
        </div> -->

        <h1>Veiculos <a href="new.php"><button class="btn btn-success" type"button">Cadastrar</button> </a></h1>

        <table class="table">
            <thead>
                <tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sabor</th>
                        <th scope="col">Responsável</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Obs</th>
                </tr>        
            </thead>

            <tbody> 
                    <?php
                       include 'action/select.php';
                      
                        if($pastel){
                            foreach ($pastel as $pastell){
                                echo '<tr>';
                                    echo '<td>' . $pastell['id'] . '</td>';
                                    echo '<td>' . $pastell['sabor'] . '</td>';
                                    echo '<td>' . $pastell['nome'] . '</td>';
                                    echo '<td>' . $pastell['setor'] . '</td>';
                                    echo '<td>' . $pastell['obs'] . '</td>';
                                    echo '<td>
                                            <a href="action/delete.php?id=' . $pastell['id'] . '">
                                                <button type="button" class="btn btn-danger">Deletar</button>
                                            </a>
                                         </td>'; 
                                         echo '<td>
                                         <a href="edicao.php?id=' . $pastell['id'] . '">   
                                           <button type="button" class="btn btn-warning">Editar</button>
                                         </a>
                                      </td>';
                                           
                                echo '<tr>';
                            }
                        }
                    ?>

            </tbody>


</body>

</html>