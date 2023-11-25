<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
   <form action="slip.12" method="get">
   <br>Number 1<input type="number" name="n1"><br>
   <br>Number 2<input type="number" name="n2"><br><br>
        <input type="radio" name="add">Addition<br>
        <input type="radio" name="sub">Subtraction<br>
        <input type="radio" name="mul">multition<br>
        <input type="radio" name="div">division<br>
        <button name="calculate">calculate</button>
    </form> 
    
   <?php
    $a=$_GET["n1"];
    $b=$_GET['n2'];
    if(isset($_GET['calculate']))
    {
        if(isset($_GET['add']))
        {
        function sum($a,$b){
        echo "sum is ".$a+$b;
        }
        sum($a,$b);
        }

    if(isset($_GET['sub']))
    {
        function sub($a,$b){
        echo "subtraction is ".$a-$b;
        }
        sub($a,$b);
    }

    if(isset($_GET['mul'])){
        function mul($a,$b){
        echo "mutiplication is ".$a*$b;
        }
        mul($a,$b);
    }

    if(isset($_GET['div'])){
        function div($a,$b){
        echo "division is ".$a/$b;
    }
        div($a,$b);
    }
}
?>
 </body>
    </html>