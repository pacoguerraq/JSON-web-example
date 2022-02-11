<?php
    include_once 'includes/tabla.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>php DB example</title>
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- Optional JavaScript; choose one of the two! -->
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->
	
	<!-- Font Awesome icons -->
	<script src="https://kit.fontawesome.com/d0207fe0f1.js" crossorigin="anonymous"></script>

    

</head>

<body class="bg-light" onload="actualizarValores()">
    
    <div class="container pt-4">
        
        <div class="p-3">
            <h2 class="display-4"><strong>mySQL php Example</strong></h2>
            <h2 class="display-6">Extract and show data on html from mySQL database</h2>
        </div>


        
        <div class="card py-3 mb-5">
            <table class="table text-center" style="width: 90%; margin: auto;">
                <!-- Heading -->
                <thead>
                    <!-- Heading #1 -->
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="4" class="border">Partidos</td>
                        <td colspan="3" class="border d-none d-sm-table-cell">Goles</td>
                        <td></td>
                    </tr>
                    <!-- Heading #2 -->
                    <tr class="bg-secondary text-white">
                        <th scope="col">#</th>
                        <th scope="col">Equipo</th>
                        <th scope="col" class="border-start">PJ</th>
                        <th scope="col">PG</th>
                        <th scope="col">PE</th>
                        <th scope="col" class="border-end">PP</th>
                        <th scope="col" class="d-none d-sm-table-cell">GF</th>
                        <th scope="col" class="d-none d-sm-table-cell">GC</th>
                        <th scope="col" class="d-none d-sm-table-cell border-end">DG</th>
                        <th scope="col">PTS</th>
                    </tr>
                </thead>
                
                <!-- Body -->
                <tbody>
                    
                    <!-- 1º Lugar -->
                    <tr>
                        <th scope="row">1</th>
                        <!-- Equipo -->
                        <td><strong id="eq1">Equipo 1</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 2º Lugar -->
                    <tr>
                        <th scope="row">2</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 2</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 3º Lugar -->
                    <tr>
                        <th scope="row">3</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 3</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 4º Lugar -->
                    <tr>
                        <th scope="row">4</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 4</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 5º Lugar -->
                    <tr>
                        <th scope="row">5</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 5</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 6º Lugar -->
                    <tr>
                        <th scope="row">6</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 6</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 7º Lugar -->
                    <tr>
                        <th scope="row">7</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 7</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 8º Lugar -->
                    <tr>
                        <th scope="row">8</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 8</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 9º Lugar -->
                    <tr>
                        <th scope="row">9</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 9</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 10º Lugar -->
                    <tr>
                        <th scope="row">10</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 10</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 11º Lugar -->
                    <tr>
                        <th scope="row">11</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 11</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                    <!-- 12º Lugar -->
                    <tr>
                        <th scope="row">12</th>
                        <!-- Equipo -->
                        <td><strong>Equipo 12</strong></td>
                        <!-- Partidos -->
                        <td class="border-start">-</td> <!-- PJ -->
                        <td>-</td> <!-- PG -->
                        <td>-</td> <!-- PE -->
                        <td class="border-end">-</td> <!-- PP -->
                        <!-- Goles -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GF -->
                        <td class="d-none d-sm-table-cell">-</td> <!-- GC -->
                        <td class="d-none d-sm-table-cell border-end">-</td> <!-- DG -->
                        <!-- Puntos -->
                        <td>-</td>
                    </tr>
                    
                </tbody>
            </table>
            
            <br>
            
            <!-- Info abajo de la tabla -->
            <div class="row">
                
                <div class="col-12 col-sm-8">
                    
                    <p class="text-secondary" style="width: 90%; margin: auto;">
                        PJ = Jugados, PG = Ganados, PP = Perdidos, PE = Empatados
                        <br>
                        <span class="d-none d-sm-block">GF = A favor, GC = En contra, DF = Diferencia</span>
                    </p>
                    
                </div>
                
                <div class="d-none d-sm-block col-sm-4 text-center">
                    
                    <img src="../img/logos/logoExliceos.png" alt="Logo exliceos" height="55">
                    
                </div>
                
            </div>
            
        </div>
        
    </div>

</body>

</html>