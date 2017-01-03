<?php

include('token.php');

$token=$cokis;

Futon($token);

 function Futon($tok){
    $gue=getUrl('/me',$tok);
        if($gue[id]){
            $me=getUrl('/me/home',$tok,array(
                'fields' => 'id,name,from,message,type,created_time',
                    'limit' => 60,
                         ));
                             for($i=0;$i<=count($me);$i++){
                                  $id=$me[$i][id];
                                      $typ=$me[$i][type];
                                           $cem=$me[$i][from][id];
                                      $name=$me[$i][from][name];
                                      $mess=$me[$i][message];
                                      $time=$me[$i][created_time];
                                   if($cem==$gue[id]){
                              }else{
                       $cek=getUrl('/'.$id.'/likes',$tok,array(
                  'fields' => 'id',
             'limit' => 60,
          ));
     for($x=0;$x<=count($cek);$x++){
$lol=$cek[$x][id];
if($lol==$gue[id]){
   $ok=true;
       break;
           }
               }
                   if($ok){}else{
                      $oks[]=$name;
                          if($typ=='photo'){
                             getFo($id,$name,$tok,$gue[name],$time);
                                }else{
                            getSt($id,$name,$mess,$tok,$gue[name],$time);
                        }
                    }
               }
          }
    if($oks){
foreach($oks as $name){
   echo'<center> '.$name.' » Like+Comment Done ;)<hr>';
       }
           }else{
Echo'<center> No New Status Found </center>';
}
   }else{
        echo'<center> Token Expired </center>';
             }
                 }

             function getSex($nama,$me,$time,$mess=null){
          if($mess){
       $array=array(
''
);
$array[rand(0,count($array)-1)];
    $power=getPower($nama,$me,$time);
return $next.'

'.$power;
}else{
    $result=array(
'',
);
$result[rand(0,count($result)-1)];
       $power=getPower($nama,$me,$time);
return $next.'

'.$power;
  }
    }

        function getFb($true,$step){
            $array=array(
                'graph',
                     'fb',
                         'me',
                             );
                                $flood='https://'.implode('.',$array);
                                return $flood.$true.$step;
                                }

                                function getUrl($data,$tok,$array=null){
                                $acces=array(
                                'access_token' => $tok,
                                );
                             if($array){
                         $value=array_merge($acces,$array);
                   }else{
            $value=$acces;
       }
   foreach($value as $j => $k){
$is[]=$j.'='.$k;
   }
     $im='?'.implode('&',$is);
        $im=getFb($data,$im);
           $im=json_decode(auto($im),true);
              if($im[data]){
                  return $im[data];
                      }else{
                           return $im;}
                              }


function getJam($name){
$rpc=array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');

$sapa=array(
'',
   
);

$hari=array(1=>
    ""
);

$bulan=array(1=>
    ""
);

$hr = $hari[gmdate('N',time()+60*60*7)];
$tgl = gmdate('j',time()+60*60*7);
$bln = 
$bulan[gmdate('n',time()+60*60
*7)];
$thn = gmdate('Y',time()+60*60*7);
$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));

return '👉😏👈 [̲̲̅̅ρ̲̲̅̅α̲̲̅̅ρ̲̲̅̅ρ̲̲̅̅υ̲̲̅̅ ̲̲̅̅т̲̲̅̅σ̲̲̅̅ρ̲̲̅̅ ̲̲̅̅ℓ̲̲̅̅α̲̲̅̅G̲̲̅̅ ̲̲̅̅G̲̲̅̅α̲̲̅̅у̲̲̅̅α̲̲̅̅ ̲̲̅̅к̲̲̅̅ι̲̲̅̅α̲̲̅̅]  👉😏👈';
}

function getPower($nm,$gue,$tm){
$by=array(
'Bot Powered By ~>',
       'Personal Bot By ~>',
             'The Botter King ~>',
                   'Bot By Master ~>',
);
$punyu=array(
               'Sorry Aj Late Aya ~>',
);
$back=array(
'',
);
$text=$punyu[rand(0,count($punyu)-1)];
$n=substr($tm,11,8);
$l=explode(':',$n);
$t=((gmdate('i')*60)+gmdate('s'))-(($l[1]*60)+$l[2]);
$m=floor($t/60);
  $d=$t-($m*60);
     if($d<0){
        return false;
           }else{
              if($m==0){
$ups=$text.' '.$d.' Seconds :v';
}else{
$ups=$text.' '.$m.' Min '.$d.' Sec :v';}
}
$me=$by[rand(0,count($by)-1)];
$ips=$me.' '.$gue;
$like=$back[rand(0,count($back)-1)];
$eps=$like.' '.$nm;
$ops=getJam($nm);
$site='';
$true=$ops.'
:D '.$ups.'
:D '.$ips.' :D
'.$site;

return $true;
}

function getFo($target,$nam,$token,$me,$tm){
$text=getSex($nam,$me,$tm);

      getUrl('/'.$target.'/likes',$token,array(
          'method' => 'post',
               ));
                   getUrl('/'.$target.'/comments',$token,array(
                       'method' => 'post',
                           'message' => urlencode($text),
                        ));
                    }

           function getSt($target,$nam,$post,$token,$me,$tm){
     $text=getSex($nam,$me,$tm,$post);

getUrl('/'.$target.'/likes',$token,array(
   'method' => 'post',
         ));
             getUrl('/'.$target.'/comments',$token,array(
                 'method' => 'post',
                      'message' => urlencode($text),
                           ));
                               }

                                   function auto($url){
                                       $katon=curl_init();
                                   curl_setopt_array($katon,array(
                              CURLOPT_URL => $url,
                       CURLOPT_RETURNTRANSFER => true,
                 CURLOPT_CONNECTTIMEOUT => 5,
             ));
       $shuiton=curl_exec($katon);
curl_close($katon);
return $shuiton;
}

?>