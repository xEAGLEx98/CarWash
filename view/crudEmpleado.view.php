<?php include('header.view.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
    <title>CRUD</title>
    <style>
        table {
            border-collapse: collapse; 
            width: 100%;
            border: none;
        }
        th, td {
             
            border-bottom: 3px solid #0F5F8C;
            text-align: center;
            padding: 8px;
            color: #5783BC;
            vertical-align: middle;
            font-family: 'Comfortaa', cursive;
            font-weight: 700;
            font-size: 16px;
        }
        th:first-child, td:first-child {
            border-left: none; 
        }
        
        tr:last-child td {
            border-bottom: none; 
        }

        input[type="submit"],input[type="text"], .btn {
            padding: 5px 10px;
            margin-right: 5px;
            color: white;
            border: none;
            border-radius: 8px;
            background-color: #D9D9D9;
            font-size: 14px;
        }
        
        .btn {
            height: 30px;
        }
        .container {
            display: flex;
            justify-content: center;
        }
        .div {
            margin-top: 10px;     /* Margen superior */
            margin-right: 70px;   /* Margen derecho */
            margin-bottom: 5px;   /* Margen inferior */
            margin-left: 70px;    /* Margen izquierdo */
        }
        span {
            padding: 5px 10px;
            margin-right: 5px;
            font-family: 'Comfortaa', cursive;
            font-weight: 700;
            font-size: 16px;
            color: #5783BC; 
        }
        .search-container {
            position: relative;
        }
        #search {
            width: 700px;
            height: 20px;
            padding-right: 30px; 
        }
        .search-icon {
            position: absolute;
            right: 10px; 
            top: 50%;
            transform: translateY(-50%);
            width: 20px; 
            height: 20px;
            pointer-events: none; 
        }
        @media (max-width: 768px) {
            .div {    
                margin-right: 10px; 
                margin-left: 10px; 
                width: 200px;
            }
            .container{/* o el ancho que desees */
                margin-left: auto;
                margin-right: auto;
            }
            table, th, td {
                font-size: 14px;
            }
            #search{
                width: 350px;
            }
        }
        @media (max-width: 480px) {
            .div {    
                margin-right: 5px; 
                margin-left: 5px; 
                width: 200px;
            }
            .container{/* o el ancho que desees */
                margin-left: auto;
                margin-right: auto;
            }
            table, th, td {
                font-size: 14px;
            }
            #search{
                width: 200px;
            }
        }
    </style>
</head>
<body>
    <br><br>
    <div class="div container" >
        <span>Empleado</span>
        <div class="search-container">
            <input type="text" name="search" id="search"  placeholder="Buscar empleado...">
            <img src="images/ImgBuscar.png" alt="Buscar" class="search-icon">
        </div>
        <button class="btn" style="background-color: #D9D9D9;">
            <img src="images/ImgAgregarUsuario.png" style="height: 25px; vertical-align: middle;">
        </button>
    </div>
    <br><br>
    <div class="div">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nombre de Usuario</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se mostrarían los datos de la tabla -->
                <tr>
                    <td>Ejemplo Nombre</td>
                    <td>Ejemplo Usuario</td>
                    <td>ejemplo@correo.com</td>
                    <td>********</td>
                    <td class="container">
                        <button class="btn" style="background-color: #7DF89F;" >Editar</button>
                        <button class="btn" style="background-color: #F87D7D;">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        function search() {
            var searchValue = document.getElementById('search').value;
            // Realizar búsqueda con searchValue
            console.log('Buscar:', searchValue);
        }
    </script>
</body>
</html>
