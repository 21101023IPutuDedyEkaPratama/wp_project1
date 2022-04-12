<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>
    <table width="434" height="86" border="2" bordercolor="#FF0000">
<tr>
    <td align="center" valign="middle">
<table width="416" border="0">
<tr>
    <td height="43" colspan="4" align="center" bgcolor="#D0E382">
    <span class="style2">Konversi Suhu</span></td>
</tr>
            <tr>
                <td height="41" align="center">&nbsp;</td>
            </tr>
        <tr>
    <pre>
<tr>
    <td height="43" colspan="4" align="center">
<?php
$suhu = $_POST['suhu'];
$in1 = $_POST['in1'];
$in2 = $_POST['in2'];
/*---------------------Celcius-------------------------------------->*/
if undefinedundefined$in1 == 'Celcius') && undefined$in2 == 'Reamur')){
$eksekusi=$suhu*0.8;
}
if undefinedundefined$in1 == 'Celcius') && undefined$in2 == 'Celcius')){
$eksekusi=$suhu;
}
if undefinedundefined$in1 == 'Celcius') && undefined$in2 == 'Fahrenheit')){
$eksekusi=$suhu * 1.8 + 32;
}
if undefinedundefined$in1 == 'Celcius') && undefined$in2 == 'Kelvin')){
$eksekusi=$suhu + 273.15;
}
/*---------------------Reamur-------------------------------------->*/
if undefinedundefined$in1 == 'Reamur') && undefined$in2 == 'Celcius')){
$eksekusi=$suhu/0.8;
}
if undefinedundefined$in1 == 'Reamur') && undefined$in2 == 'Reamur')){
$eksekusi=$suhu;
}
if undefinedundefined$in1 == 'Reamur') && undefined$in2 == 'Fahrenheit')){
$eksekusi=$suhu * 2.25 + 32;
}
if undefinedundefined$in1 == 'Reamur') && undefined$in2 == 'Kelvin')){
$eksekusi=$suhu /0.8 + 273.15;
}
/*---------------------Fahrenheit-------------------------------------->*/
if undefinedundefined$in1 == 'Fahrenheit') && undefined$in2 == 'Celcius')){
$eksekusi=$suhu - 32 / 1.8;
}
if undefinedundefined$in1 == 'Fahrenheit') && undefined$in2 == 'Fahrenheit')){
$eksekusi=$suhu;
}
if undefinedundefined$in1 == 'Fahrenheit') && undefined$in2 == 'Reamur')){
$eksekusi=$suhu - 32 / 2.25;
}
if undefinedundefined$in1 == 'Fahrenheit') && undefined$in2 == 'Kelvin')){
$eksekusi=$suhu + 459.67 / 1.8;
}
/*---------------------Kelvin-------------------------------------->*/
if undefinedundefined$in1 == 'Kelvin') && undefined$in2 == 'Celcius')){
$eksekusi=$suhu - 273.15;
}
if undefinedundefined$in1 == 'Kelvin') && undefined$in2 == 'Kelvin')){
$eksekusi=$suhu;
}
if undefinedundefined$in1 == 'Kelvin') && undefined$in2 == 'Reamur')){
$eksekusi=$suhu - 273.15 * 0.8;
}
if undefinedundefined$in1 == 'Kelvin') && undefined$in2 == 'Fahrenheit')){
$eksekusi=$suhu * 1.8 - 459.67;
}
echo "Hasil <br>";
echo "$suhu ";
echo "$in1 ";
echo "= ";
echo "$eksekusi ";
echo "$in2";
?>
</td>
</tr>
</pre>
<pre><form action="index.html" method="post">
<tr>
<td height="43" colspan="4" align="center">
<input type="submit" value="Back" />
</td>
</tr></form>
</pre>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>]