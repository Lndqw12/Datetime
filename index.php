<?php
$a=time();
echo ($a);
echo "<br>";
$b= microtime();
echo ($b);
echo "<br>";
$f=date("l ds of F Y h:i:s A")."<br>";
echo ($f);
$v=date("Сегодня F.M.Y")."<br>";
echo ($v);
$d=date("Этот файл датирован d.m.Y",filectime(__FILE__));
echo ($d);
echo "<br>";
$g=strftime("%B %Y года, %d число. Был %A,часы показывали %H:%M.");
echo ($g);
/*$s=mktime([$s $hour] [,$s $minute] [,$s $second] [,$s $month] [,$s $day] [,$s $year]);*/
echo date ("M-d-Y", mktime(0,0,0,1,1,2005));
echo date ("M-d-Y", mktime(0,0,0,12,32,2004));
echo date ("M-d-Y", mktime(0,0,0,13,2,2004));
echo "<br>";
$r=array (
"now",
"10 Sepember 2000",
"+1 day",
"+1 week",
"+1  week 2 days 4 hours 2 seconds",
"next Thursday",
"last Monday",
);
echo ($r);
$jd = GregorianToJD(15, 11, 1970);
echo"$jd<br>";
$gregorian = JDToGregorian($jd);
echo "gregorian<br>";
$list = explode($gregorian, "/");
echo"<br>";
$q=checkdate(30,09,16);
echo ($q);

?>