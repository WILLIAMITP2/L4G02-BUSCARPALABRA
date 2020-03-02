<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
     echo "<center> <h2>UNIÓN PALABRAS </h3></center>";
     $Entrada=array("baseball","cat,bas,hol,base,rar,pull,ball");
    $array=explode(",",$Entrada[1]);
    
    echo "<br>ENTRADA 1: <br>";
    for($i=0;$i<count($Entrada);$i++)
    {
     echo $Entrada[$i]."\n" ;
    }
    echo "<br>";
    $palabra="";
    
    for($i=0;$i<count($array);$i++)
    {
        for($j=0;$j<count($array);$j++)
        {
   if ($j!=$i)
            {
   $palabra=$array[$i].$array[$j];
                if ($palabra==$Entrada[0])
                {
   echo "salida: <br>".$array[$i].",".$array[$j];
   
     }
            }
        }
    }  
  
    $Entrada=array("carro","ca,bas,hol,base,rro,pull,ball ");
    $array=explode(",",$Entrada[1]);
    
    echo "<br>ENTRADA 2: <br>";
    for($i=0;$i<count($Entrada);$i++)
    {
     echo $Entrada[$i]."\n" ;
    }
    echo "<br>";
    $palabra="";
    
    for($i=0;$i<count($array);$i++)
    {
        for($j=0;$j<count($array);$j++)
        {
   if ($j!=$i)
            {
   $palabra=$array[$i].$array[$j];
                if ($palabra==$Entrada[0])
                {
   echo "salida: <br>".$array[$i].",".$array[$j];
     }
            }
        }
    }  
    $Entrada=array("hola","ca,bas,ho,base,rro,la,ball ");
    $array=explode(",",$Entrada[1]);
    
    echo "<br>ENTRADA 3: <br>";
    for($i=0;$i<count($Entrada);$i++)
    {
     echo $Entrada[$i]."\n" ;
    }
    echo "<br>";
    $palabra="";
    
    for($i=0;$i<count($array);$i++)
    {
        for($j=0;$j<count($array);$j++)
        {
   if ($j!=$i)
            {
   $palabra=$array[$i].$array[$j];
                if ($palabra==$Entrada[0])
                {
   echo "salida: <br>".$array[$i].",".$array[$j];
     }
            }
        }
    }  
    $Entrada=array("gato","ga,bas,to,base,rro,la,ball ");
    $array=explode(",",$Entrada[1]);
    
    echo "<br>ENTRADA 4: <br>";
    for($i=0;$i<count($Entrada);$i++)
    {
     echo $Entrada[$i]."\n" ;
    }
    echo "<br>";
    $palabra="";
    
    for($i=0;$i<count($array);$i++)
    {
        for($j=0;$j<count($array);$j++)
        {
   if ($j!=$i)
            {
   $palabra=$array[$i].$array[$j];
                if ($palabra==$Entrada[0])
                {
   echo "salida: <br>".$array[$i].",".$array[$j];
     }
            }
        }
    }  
    $Entrada=array("volar","vo,bas,to,base,lar,la,ball ");
    $array=explode(",",$Entrada[1]);
    
    echo "<br>ENTRADA 5: <br>";
    for($i=0;$i<count($Entrada);$i++)
    {
     echo $Entrada[$i]."\n" ;
    }
    echo "<br>";
    $palabra="";
    
    for($i=0;$i<count($array);$i++)
    {
        for($j=0;$j<count($array);$j++)
        {
   if ($j!=$i)
            {
   $palabra=$array[$i].$array[$j];
                if ($palabra==$Entrada[0])
                {
   echo "salida: <br>".$array[$i].",".$array[$j];
     }
            }
        }
    }  
?>
</body>

</html>
   
   
