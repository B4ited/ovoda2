<?php
$van=false;
$van2=false;
$db=0;
if(isset($_POST["update"])){
    $van=true;

}

if(isset($_POST["add"])){
$van2=true;
    $db++;
}

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>
</head>
<body>
<form action="" method="post">
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Vezetéknév</th>
            <th scope="col">Keresztnév</th>
            <th scope="col">Pozició</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <?php  if(!$van){ ?>
            <td>Mark</td>
            <td>Otto</td>
            <td>Szűlő</td>
            <td>
                    <input type="submit" name="update" class="btn btn-primary" value="Módosit"/>
            </td>

             <td>

                <button type="submit" name="del" class="btn btn-danger" >Töről</button>
            </td>

       <?php } else{ ?>

           <form class="second" method="post" action="">

                  <td> <input type="text" class="form-control" name="vez"  /></td>


                  <td><input type="text" class="form-control" name="kereszt"/></td>


               <td>  <select class="custom-select">
                       <option>Szűlő</option>
                       <option>Óvónő</option>
                       <option>Óvodavezető</option>
                       <option>Fentartó</option>
                       <option>Rendszergazda</option>
                   </select> </td>

               <td> <button type="submit" class="btn btn-primary">Küld</button> </td>
           </form>

     <?php  } ?>
        </tr>
        <?php

        if($van2){
           for ($i=0; $i<$db; $i++) { ?>
               <tr>
               <form class="third" method="post" action="">

                   <td><input type="text" class="form-control" name="vez"/></td>


                   <td><input type="text" class="form-control" name="kereszt"/></td>


                   <td><select class="custom-select">
                           <option>Szűlő</option>
                           <option>Óvónő</option>
                           <option>Óvodavezető</option>
                           <option>Fentartó</option>
                           <option>Rendszergazda</option>
                       </select></td>

                   <td>
                       <button type="submit" class="btn btn-primary">Küld</button>
                   </td>
               </form>

               <?php
           }
           } ?>
               </tr>
        </tbody>
    </table>

    <input type="submit" name="add" class=" btn btn-secondary" value="Add">
</div>
    </form>
</body>
</html>