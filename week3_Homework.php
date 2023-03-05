<meta charset="utf-8">
<?php
$id = $_POST["ID"];
echo "信箱：".$id."<br>";
if(isset($_POST["student"])){
    $student = $_POST["student"];
    echo "年級：".$student."<br>";
}else{
    echo "未選擇年級<br>";
}
$stu_id = $_POST["stu_id"];
echo "學號：".$stu_id."<br>";
$name = $_POST["name"];
echo "姓名：".$name."<br>";
if(isset($_POST["gender"])){
    $gender = $_POST["gender"];
    echo "性別：".$gender."<br>";
}else{
    echo "未選擇性別<br>";
}
$money = $_POST["money"];
echo "繳系費與否：".$money."<br>";
$prefer = $_POST["prefer"];
echo "系烤形式偏好：".$prefer."<br>";
$opinion = $_POST["opinion"];
echo "意見＆建議↓："."<br>".nl2br($opinion);
?>