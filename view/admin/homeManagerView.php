<?php 
$title = " - Dashboard";
ob_start();
?>

<div class="container">
    <h1>Dashboard</h1>


<?php
$curl = curl_init("https://api.soundcloud.com/users/3207?client_id=640772897");
$data = curl_exec($curl);
if($data === false){
    echo var_dump(curl_error($curl));
} else {
    $datas = json_decode($data, true);
    echo '<pre>';
    var_dump($datas);
    echo '</pre>';
}
curl_close($curl);
?>
</div>

<?php 
$content = ob_get_clean();
require('adminTemplate.php');
?>