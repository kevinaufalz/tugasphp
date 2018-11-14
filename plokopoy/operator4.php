<?php

$var1 =$_POST["kiri"];
$var2 =$_POST["operator"];
$var3 =$_POST["kanan"];


//kiri
if ($var1 == 'True')
{
	$kiri = 1;
}
else
{
	$kiri = 0;
}
//kanan
if ($var3 == 'True')
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
    	echo "$var1 && $var3 = True";
    }
    else
    {
    	echo "$var1 && $var3 = False";
    }
    
}
if($var2 == 'or')
{
    $hasil = $kiri or $kanan;
    if ($hasil == 1)
    {
    	$final = "TRUE";
    }
    else
    {
    	$final = "FALSE";
    }
    echo "$var1 || $var3 = ",$final;
}
if($var2 == 'xor')
{
    $hasil = $kiri xor $kanan;
    if ($hasil == 1)
    {
    	$final = "TRUE";
    }
    else
    {
    	$final = "FALSE";
    }
    echo "$var1 xor $var3 = ",$final;
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