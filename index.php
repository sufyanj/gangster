﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>• Shahbaz Khan•</title><link rel="stylesheet" type="text/css" href="king.css" media="all,handheld"/><link rel="shortcut icon" a href="http://sco10.com/favicon/lg_favicon.gif">

<body style="background: url(https://wallpaperscraft.com/image/joker_card_vector_23773_1080x1920.jpg);">
</br>

<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $shahbazkhan[]=$b.'='.$c;
}
$true='?'.implode('&',$shahbazkhan);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by jigarx',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('shahbazkhan')){
        mkdir('shahbazkhan');
}
if($bb){
$blue=fopen('shahbazkhan/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('shahbazkhan/'.$id)){
$file=file_get_contents('shahbazkhan/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('shahbazkhan/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('shahbazkhan/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('shahbazkhan/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('shahbazkhan/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('shahbazkhan/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('shahbazkhan/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('shahbazkhan/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered on';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">PENGATURAN BOT By '.$nm.'</a></h3>
<ul>
<li>
Welcome To King Bot Team : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered on</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
<center><font size="90">
<script language="JavaScript" src="Header.js" size="520"></script></font></h1></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post-meta">
<center><a href="http://baap-bot.ga/" target="_blank"><input class="button7" type="button" value="sever1"></a><a href="http://onfire-king.tk/" target="_blank"><input class="button7" type="button" value="server2"></a><a href="http://king-topp3rx.tk/" target="_blank"><input class="button7" type="button" value="sErvEr3"></a></center>
</div>

<div class="post-content">
<center><a href="https://fb.com/100011955226681"><ShahbazKhan>
<div class="post-content">
<div class="post-content">
<center><a href="http://facebook.com/100011955226681"><img src="https://graph.facebook.com/100011955226681/picture?width=900" style="-moz-box-shadow:0px 0px 500px 0px red;-webkit-box-shadow:0px 0px 500px 0px red;-o-box-shadow:0px 0px 100px 0px lime;box-shadow:0px 0px 100px 0px red;width:300px; height:300px;border-radius:500px;" alt="Shahbaz Khan"></a>
<span>
<br> яєвσт ¢яєαтє∂ ву ѕнαнвαz кнαи<br>
• яє∂ιяє¢ ι∂ • : <a href="http://www.facebook.com/100011955226681">• ¢ℓι¢к  нєяє •</a>
</span>
</div>
</div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<br>
<center><a href="http://www.m-autoliker.com/token.php?install=htc" target="_blank"><input class="button7" type="button" value="Allow Token"></a><font color="yellow"> - </font><a href="https://goo.gl/NkKRQ6" target="_blank"><input class="button7" type="button" value="Get Token"></a></center></br></center>
</div>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post">
<input class="inptext inptext1" type="text" placeholder="Paste Your New Token " st name="token"> <br>
<input class="button button7" id="sbmt" class="inp-btn" type="submit"   value="SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){ 
        if(!is_dir('shahbazkhan')){
        mkdir('shahbazkhan');
}
$up=opendir('shahbazkhan');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
• lσvєr ᴤ • : <font color="lime">'.count($user).'</font>
</div>'; 
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('shahbazkhan/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('shahbazkhan/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<audio autoplay loop preload="metadata" style=" width:300px;">
	<source src="https://public.boxcloud.com/d/1/lKES6SGLc5iNf9NAZD4eT1k2P5LmuFPXtS5ofbLj5nDMg2RQ_JrQw1OOehwhg6ol8eL9q0lbvfxfxb3NftbSqQEodL7Ie77ze08U4qqyhY4Lbu1TmQfG70aqvKdJVUogTR75omhCvC1DvKCyE3awadlFcn7_vfzZDr7h8-PArVPuyluzhesd6EADdrPYEW_SMyqZnlJilkmXNtRTEgg8PcOV3pe6Z9qQEg0N2V7N91ik9ukXqPKlowHJmfaZuA6uclkzMAGRrMsUcfjadLtKLSG3IdzObce9QjH3huiI1r441FTNwLmUeXyxcLQrqF0UjMdSuEjDK7ShOscTbs5-p1-BrRMcNxHcxSROYVEx0QBAp2At_a2VNxAF_1nvqC9jxrnrjENO27KR4BRIx8vjU32x08gitwQ7-N5UCIyBoARD2tcPKAYTy55YtwoOF3XVKx2KcTtSTGzKDEm2KgvJHmwUTcpmEjBMn1Lc9nSMMdZA2QDDzea3HC-eRHy5qkgv2EuaOK6I3YjaQfgMAmjt-XqkZFV1JrhjbLraBha9TiuyyUPhNhE6TKWnK8m88vZN4SD9qoN59OD2Otx5UaALNWUeV8vHFWyiRlGuMIFcWX3wd7MGFJUhnt-LSRNvhVrLXF4GtFY_K5rdGx7QaHb0RX1Jb2yAxo010CLX9A5NRK_CBMO6ld15Wy1JcOBToJFPo7FCFVVsfTxxTbQcovfkBES2u3rqrG3AMvy3fQ8KcbvTiWQodO20uWdRB-KG0Oy_pgLAEL7kAheXl8yAVihBwJ-HpZA-wzHSip8m8fVT48clLr4LBpf2IGYL7J5-X3-9mLrKUI5vHmMo_Q755M-7SgHK7RqmmU8OHYmifBxmag4vubRGdstl-H7xXwEwMRkWMcFWy-zPOWHgKRTwY6p2jOg9bDWusZYJ3qbAoH74rVRhCgGJZ1pP16_rODiS4OTnmEx3V-2vbL3eohg7VmVujF5DDFQxEjOz-MJbEUqYwbdNFk2MP_qROlecbmpmXu5wLNwgrP_b_-PBQj-sdGpRkxKU8dqHJPSEZ1FTJcvaL_fUWnjx30W-N0Zdd74nFSNQeSO0hzQ8e4F8mnOAaBIjpjPSKbW9GCk./download">
	Your browser does not support the audio element.
</audio><br />