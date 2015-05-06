<?php
header ( "Content-type:text/html;charset=utf-8" );  //统一输出编码为utf-8
$q=$_GET["q"];

$con = mysqli_connect('www.t-uvw.xyz','root','root','etc_privileges');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"etc_privileges");

mysqli_query($con,'set names utf8'); //设置读取数据后的编码</span>

$sql="SELECT `id`, `title`, `uploadtime`, `author`, `vote`, `reward` FROM `works` WHERE `tag` = '".$q."'";

$result = mysqli_query($con,$sql);
$faarray = array(
    '0' => 'shield',
    '1' => 'bolt',
    '2' => 'calendar',
    '3' => 'star',
    '4' => 'clock-o',
    '5' => 'bomb',
    '6' => 'bookmark',
    '7' => 'ambulance'
);
if($q == '1')
{
    $showtitle = '计算机科学与技术';
}
if($q == '2')
{
    $showtitle = '软件工程';
}
if($q == '3')
{
    $showtitle = '数学';
}
if($q == '4')
{
    $showtitle = '物理学';
}
if($q == '5')
{
    $showtitle = '化学';
}
if($q == '6')
{
    $showtitle = '逻辑学';
}
if($q == '7')
{
    $showtitle = '应用经济学';
}
if($q == '8')
{
    $showtitle = '金融';
}
if($q == '9')
{
    $showtitle = '天文学';
}
if($q == '10')
{
    $showtitle = '地理学';
}
if($q == '11')
{
    $showtitle = '生命科学';
}
if($q == '12')
{
    $showtitle = '环境与资源';
}
if($q == '13')
{
    $showtitle = '材料学';
}
if($q == '14')
{
    $showtitle = '车辆工程';
}
if($q == '15')
{
    $showtitle = '微电子';
}
if($q == '16')
{
    $showtitle = '土木工程';
}
if($q == '17')
{
    $showtitle = '通信工程';
}
if($q == '18')
{
    $showtitle = '农学';
}
if($q == '19')
{
    $showtitle = '园艺学';
}
if($q == '20')
{
    $showtitle = '临床医学';
}

echo ' <div class="forum-title">
           <h3>'.$showtitle.'</h3>
       </div>';
$i = 0;
while($row = mysqli_fetch_array($result))
{
    echo '<div class="forum-item active">';
echo '<div class="row">';
echo '<div class="col-md-9">';
echo '<div class="forum-icon">';
echo '<i class="fa fa-'.$faarray[$i++].'"></i>';
echo '</div>';
echo '<a href="topdetail/index/'.$row['id'].'" class="forum-item-title">'.$row['title'].'</a>';

echo '<div class="forum-sub-title">'.$row['uploadtime'].'</div>';
echo '</div>';
echo '<div class="col-md-1 forum-info">';
echo '<span class="views-number">';
echo '<small>'.$row['author'].'</small>';
echo '</span>';
echo '<div>';
echo '<small>上传</small>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-1 forum-info">';
echo '<span class="views-number">';
echo $row['vote'];
echo '</span>';
echo '<div>';
echo '<small>获赞</small>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-1 forum-info">';
echo '<span class="views-number">';
echo $row['reward'];
    echo '</span>';
    echo '<div>';
    echo '<small>获奖</small>';
    echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
}
if($i == 0) {
    echo '<div class="forum-title">
           <h3>该学科暂无记录</h3>
       </div>';
}

mysqli_close($con);
?>