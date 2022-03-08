<!DOCTYPE html>
<body>
    <?php
    $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
    echo "<ol>";
    foreach ($ar_buah as $buah => $v) {
        echo "<li> $buah - $v </li>";
    }
    echo "</ol>";
    // Array sort mengurutkan array dalam urutan menaik
    sort ($ar_buah);
    echo "<hr/>";
    echo "</ol>";
    echo "<ol>";
    foreach ($ar_buah as $buah => $k) {
        echo "<li> $buah - $k </li>";
    }
    echo "</ol>";
    // array arsort mengurutkan array dalam urutan menurun
    arsort ($ar_buah);
    echo "<hr/>";
    echo "</ol>";
    echo "<ol>";
    foreach ($ar_buah as $buah => $k) {
        echo "<li> $buah - $k </li>";
    }
    echo "</ol>";
    echo "<hr>";
    ?>
    <?php 
    // fungsi array_pop menghapus data terakhir dari sebuah array
    $tims = ["erwin","heru","ali", "zaki"];
    array_pop($tims);
    foreach ($tims as $person) {
        echo $person. '<br/>';
    }
    echo "<hr>";
    ?>

    <?php 
    // fungsi array_push bisa menambahkan data terakhir dari sebuah array
    $tims = ["erwin","heru","ali", "zaki"];
    array_push($tims, "wati");
    foreach ($tims as $person) {
        echo $person. '<br/>';
    }
    echo "<hr>";
    ?>

    <?php
    $tims = ["erwin","heru","ali", "zaki"];
    // fungsi array_shift adalah menghapus nilai awal dari sebuah data array
    array_shift($tims);
    foreach ($tims as $person) {
        echo "<br/>$person";
    }
    echo "<hr>";
    ?>
    
    <?php
    $tims = ["erwin","heru","ali", "zaki"];
    // fungsi array_unshift adalah menambah nilai array satu atau lebih elemen ke dalam suatu array diletakkan pada awal/depan array 
    array_unshift($tims,"joko","wati");
    foreach ($tims as $person) {
        echo "<br/>$person";
    }
    ?>
</body>
</html>