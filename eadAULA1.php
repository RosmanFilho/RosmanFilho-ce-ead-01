<!DOCTYPE HTML>
<html>
  <head>
    <meta charset= 'utf-8'>
      <title>
       AULA EAD 01
      </title>
  </head>
    <body>
      <h1> AULA EAD 01 </h1>
      <table border style="solid">
        <tr>
          
          <td>Nome</td>
          <td>Peso(kg)</td>
          <td>Altura</td>
          <td>IMC</td>
          <td>Data de Nascimento</td>
          <td>Idade</td>
        </tr>
        <tr>
          <td>John Petrucci</td>
          <td>100<?php $Peso = 100; ?></td>
          <td>2.00 <?php $Altura = 2.00; ?> </td>
          <td><?php $Imc = $Peso / ($Altura*$Altura); echo $Imc; ?> </td>
          <td>01/01/1980</td>
          <td><?php $datanas = "1980-01-01"; $data = date('Y-m-d'); $idade = $data-$datanas; echo "$idade"; ?> </td>
        </tr>

        <tr>
          <td>John Myung</td>
          <td>80 <?php $Peso = 80; ?> </td>
          <td>1.72 <?php $Altura = 1.72; ?> </td>
          <td> <?php $Imc = $Peso / ($Altura*$Altura); echo $Imc; ?> </td>
          <td>28/02/1990</td>
          <td>
            <?php
            $datanas = "1990-02-28";
            $data = date('Y-m-d');
            $idade = $data-$datanas;
            echo "$idade";
            ?>
          </td>
        </tr>
          
        <tr>
          <td>James Labrie</td>
          <td>
            54
            <?php
              $Peso = 54;
            ?>
          </td>
          <td>
            1.64
            <?php
              $Altura = 1.64;
             ?>
          </td>
          <td>
            <?php
              $Imc = $Peso / ($Altura*$Altura); 
              echo $Imc;
            ?>
          </td>
          <td>10/09/1985</td>
          <td>
            <?php
            $datanas = "1985-09-10";
            $data = date('Y-m-d');
            $idade = $data-$datanas;
            echo "$idade";
            ?>
          </td>
        </tr>

        <tr>
          <td>Jordan Rudess</td>
          <td>
            85
            <?php
              $Peso = 85;
            ?>
          </td>
          <td>
            1.73
            <?php
              $Altura = 1.73;
            ?>
          </td>
          <td>
            <?php
              $Imc = $Peso / ($Altura*$Altura); 
              echo $Imc;
            ?>
          </td>
          <td>
            04/09/1989
          </td>
          <td>
            <?php
            $datanas = "1989-09-04";
            $data = date('Y-m-d');
            $idade = $data-$datanas;
            echo "$idade";
            ?>
          </td>
        </tr>
        
        <tr>
          <td>Mike Mangini</td>
          <td>
            46
            <?php
              $Peso = 46;
            ?>
          </td>
          <td>
            1.55
            <?php
              $Altura = 1.55;
            ?>  
          </td>
          <td>
            <?php
              $Imc = $Peso / ($Altura*$Altura); 
              echo $Imc;
            ?>
          </td>
          <td>31/12/1978</td>
          <td>
            <?php
            $datanas = "1978-12-31";
            $data = date('Y-m-d');
            $idade = $data-$datanas;
            echo "$idade";
            ?>
          </td>
        </tr>  
        
      </table>
      
    </body>
    
</html>
