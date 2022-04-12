<?php
if (isset($post[Konveri Suhu])) {
    $suhu = $_POST['suhu'];
    $type_konversi = $_POST['Konversi suhu'];
    if ($type_konversi == "1") {
        $perhitungan = (4/5) * $suhu;
        <script>alert('<?php echo "Suhu $suhu °C = "; echo "$perhitungan °R";?>');</script><?php                        
    } elseif ($type_konversi == "2") {
        $perhitungan = (9/5) * $suhu + 32;
        <script>alert('<?php echo "Suhu $suhu °C = "; echo "$perhitungan °F";?>');</script><?php                        
    }elseif ($type_konversi == "3") {
        $perhitungan = (5/4) * $suhu;
        <script>alert('<?php echo "Suhu $suhu °R = "; echo "$perhitungan °C";?>');</script><?php                        
    } elseif ($type_konversi == "4") {
        $perhitungan = (9/4) * $suhu + 32;
        <script>alert('<?php echo "Suhu $suhu °R = "; echo "$perhitungan °F";?>');</script><?php                        
    } elseif ($type_konversi == "5") {
        $perhitungan = (5/9) * $suhu - 32;
        <script>alert('<?php echo "Suhu $suhu °F = "; echo "$perhitungan °C";?>');</script><?php                        
    }elseif ($type_konversi == "6") {
        $perhitungan = (4/9) * $suhu - 32;
        <script>alert('<?php echo "Suhu $suhu °F = "; echo "$perhitungan °R";?>');</script><?php                        
    }elseif ($type_konversi == "0") {
        <script>alert('Type konversi suhu belum dipilih!');</script>
    }
}


