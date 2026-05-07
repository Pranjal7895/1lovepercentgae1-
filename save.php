<?php
if (isset($_POST['n1']) && isset($_POST['n2'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $sc = $_POST['score'];
    
    // We name the file something boring so she won't suspect it
    $file = 'sys_log_data.txt'; 
    $content = "Time: " . date("Y-m-d H:i") . " | User: $n1 | Crush: $n2 | Result: $sc\n";
    
    file_put_contents($file, $content, FILE_APPEND);
}
?>
