<?php

$var1 =$_POST["kiri"];
$var2 =$_POST["operator"];
$var3 =$_POST["kanan"];


//kiri
if ($var1 == "True")
{
	$kiri = 1;
}
else
{
	$kiri = 0;
}
//kanan
if ($var3 == "True")
{
	$kanan = 1;
}
else
{
	$kanan = 0;
}

//operator logika
if($var2 == 'and')
{
    $hasil = $kiri && $kanan;
    if ($hasil == 1)
    {
    	echo "$var1 && $var3 = True <br>";
        echo "$kiri && $kanan = True";
    }
    else
    {
    	echo "$var1 && $var3 = False <br>";
        echo "$kiri && $kanan = False";
    }
    
}
if($var2 == 'or')
{
    if ($kiri == 1 or $kanan == 1)
    {
    	echo "$var1 || $var3 = True <br>";
        echo "$kiri || $kanan = True";
    }
    else
    {
    	echo "$var1 || $var3 = False <br>";
        echo "$kiri || $kanan = False";
    }
}
if($var2 == 'xor')
{
    $hasil = $kiri xor $kanan;
    if ($kiri == 1 )
    {
    	if ($kanan == 1 ) {
            echo "$var1 XOR $var3 = False<br>";
            echo "$kiri XOR $kanan = False";
        }
        elseif($kanan == 0){
            echo "$var1 XOR $var3 = True<br>";
            echo "$kiri XOR $kanan = True";
        }
    }
    if ($kiri == 0) 
    {
        if ($kanan == 1 ) {
            echo "$var1 XOR $var3 = True<br>";
            echo "$kiri XOR $kanan = True";
        }
        elseif($kanan == 0){
            echo "$var1 XOR $var3 = False<br>";
            echo "$kiri XOR $kanan = False";
        }   
    }
}
if($var2 == '!')
{
    $hasil = !$kiri;
    if ($hasil == 1)
    {
    	$final = "TRUE";
    }
    else
    {
    	$final = "FALSE";
    }
    echo "!$var1 = ",$final;
}