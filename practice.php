<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body window.onunload="unload()">
<?php
$num = 14;
$flage=0;
for($i=2;$i<$num;$i++){
    if(($num%$i)==0){
        $flage=0;
        break;
    }else{
        $flage=1;
    }
}
if($flage==0){
    echo"not prime";
}else{
    echo"prime";
}
?>
<?php
function fun(){
$a = array(12,123,134,2346,3212,42,23,33,2332,76);
$max_val = a[0];
$min_val =a[0];

for($i=0;$i<=9;$i++){
    if($a[$i]>=$max_val){
        $max_val=$a[$i];
    }
    if($a[$i]<=$min_val){
        $min_val=$a[$i];
    }
}
print($max_val);
print($min_val);
}
?>
<script>
    function fun(){
        var i ,j;
        var flage=0;
        var k = form1.input.value//document.getElementById("num");
        for(i=2;i<k;i++){
            if((k%i)==0){
                flage=1;
                break;
            }
            else{
                flage=0;
            }
        }
        if(flage==1){
            alert("not prime");
        }else{
            alert("prime");
        }
        }

        function fun1(check){
           var pass = getElementById("password")
            if(check.checked){
                pass.setAttribute("type","text")

            }else{
                pass.setAttribute("type","password");
            }

        }
        function over(){
            document.getElementById("check1").style.color="green";
        }
        function unload(){
            alert("good bye")

        }
    
    </script>
<form name="form1"> 
    Enter any number :<input type="number"  id="check1" onmouseover="over();" name="input"><br>
    <input type="password" id="password" >
    <input type="checkbox" value="1" name="check"   onchange="fun1(this)">
    <input type="submit" onclick=fun()>
    
    
</form>
    
</body>
</html>
