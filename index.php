<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

Conexion :: abrir_conexion();
$usuarios = array();
$usuarios = RepositorioUsuario :: obtener_todos(Conexion::obtener_conexion());
echo count($usuarios);
Conexion :: cerrar_conexion ();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Blog de JavaDevOne</title>
    
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Este boton despliega la barra de navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                       
                                                               
                    </button>
                    <a class="navbar-brand" href="#">JavaDevOne</a>                    
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Entradas</a></li>   
                        <li><a href="#">Favoritos</a></li>
                        <li><a href="#">Autores</a></li>
                    </ul>
                     <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Iniciar sesión</a></li>   
                        <li><a href="#">Registro</a></li>
                     </ul>
                </div>                
            </div>            
        </nav>       
        <div class="container">
            <div class="jumbotron">
                <h1>Blog de JavaDevOne</h1>
                <p>
                    Blog dedicado a la programacion y el desarrollo.
                </p>    
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4"> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda                                                                                                                          
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="¿Qué buscas?">                                                
                                    </div>
                                    <button class="form-control">Buscar </button>                                                                                 
                                </div>                                        
                            </div>                                    
                        </div>                                
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
                                </div>
                                <div class="panel-body">
                                    
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                        <div class="col-md-8">
                            <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Últimas entradas                                  
                                        </div>
                                        <div class="panel-body">
                                       <!--       <?php
                                            include_once 'app/Conexion.inc.php';
                                            
                                            Conexion:: abrir_conexion();
                                            Conexion:: cerrar_conexion();
                                            ?>     
                                       -->                                       
                                            <p>Todavía no hay entradas que mostrar</p>                                          
                                        </div>                                      
                            </div>         
                        </div>
                     
            </div>            
        </div>


        
        
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>

