<html>
    <head>
        <tittle>Konversi Suhu</tittle>

    </head>
    <body>
        <form action="Konversi_Suhu.php" method="post">
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
                            <span class="style2">Masukkan Suhu: <input name="suhu" type="text" id="suhu" size="20" value=""></span>
                            </br></br></br>Pilih Jenis Suhu:
                            </td>
                        </tr>
                    </pre>
                    <pre>
                        <td width="200" align="center">
                            Dari: <select name="in1">
                            <option>Celcius</option>
                            <option>Reamur</option>
                            <option>Fahrenheit</option>
                            <option>Kelvin</option>
                            </select>
                        </td>
                        <td width="200" align="center">
                            Ke: <select name="in2">
                            <option>Celcius</option>
                            <option>Reamur</option>
                            <option>Fahrenheit</option>
                            <option>Kelvin</option>
                            </select>
                        </td>
                    </pre>
                    <pre>
                        <tr>
                            <td height="43" colspan="4" align="center">
                                <input name="proses" type="submit" id="proses" value="Proses" />
                                <input type="reset" value="Hapus" />
                            </td>
                        </tr>
                    </pre>
                </table>
             </td>
         </tr>
    </table>
</form>
                          
</body>
</html>