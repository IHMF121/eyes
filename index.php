<?
$goods = array();
$goods["name"] = "pen";
$goods["email"] = "bread";
$goods["password"] = "salt";
$goods["login"] = "apple";
$goods["word"] = "fuck";

$count = count($goods);
echo "В массивве $count элементов<br/>";
foreach ($goods as $ind => $val) {
    @print_r("$ind = $val<br/>");
}

print_r($_SERVER['DOCUMENT_ROOT']);
echo '<br/>';
print_r($_SERVER['SCRIPT_FILENAME']);
echo '<br/>';
print_r($_SERVER['SERVER_ADDR']);
echo '<br/>';
print_r($_SERVER['SERVER_NAME']);
echo '<br/>';
print_r($_SERVER['SERVER_PROTOCOL']);
echo '<br/>';
print_r($_SERVER['REMOTE_ADDR']);
echo '<br/>';
print_r($_SERVER['REQUEST_METHOD']);
echo '<br/>';
print_r($_SERVER['REQUEST_URI']);