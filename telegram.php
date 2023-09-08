<?

$server = "sql102.epizy.com";
$username = "epiz_30500676";
$password = "9WW0wrXoa8";

$dbname = "epiz_30500676_packetcodeofficial";
$title = $_POST['project_name'];

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$token = '6197699380:AAGXIX_G2nNZcXKh0P6v9c_6QK8nuGwMCBI';
$chat_id = '-1001956472944';


$arr = array(

    'Ф.И.O: ' => $name,
    'Pochta: ' => $email,
    'Tel raqami: ' => $phone,
    'Habar: ' => $message,
    

);
foreach ($arr as $key => $value) :
    $text .= $key . $value . "%0A";
endforeach;

$telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&
  parse_emode=html&text={$text}", "o");

if ($telegram) {
    header('location: index.html');
} else {
    echo 'ERROR';
}