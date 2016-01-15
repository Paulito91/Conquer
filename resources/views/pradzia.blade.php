

@extends('master')


@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="centras">
        <?php

  $ke=rand(1,10);
 if($ke=="1") { $zodis="Pirmyn &#303; mu&#353;&#303;!"; } else if($ke=="2") { $zodis="Kariai j&#363;s&#371; laukia, Imperatoriau!"; } else if($ke=="3") { $zodis="&#352;iame kare lygi&#371;j&#371; neb&#363;na!"; } else if($ke=="4") { $zodis="Ateik! Pamatyk! Nugal&#279;k!"; } else if($ke=="5") { $zodis="Imperija tavo telefone!"; }  else if($ke=="6" || $ke=="7" || $ke=="10") { $zodis="&#302;kurk stipriausi&#261; s&#261;jung&#261;!"; }  else if($ke=="8") { $zodis="Tapk stipriausiu!"; } else if($ke=="9") { $zodis="Patirk nauj&#371; &#303;sp&#363;d&#382;i&#371;!"; }
        ?>
<div class='juosta'>
    V-a-l-d-y-k!
</div>
 {!! $zodis !!}<br/><img src="{!! asset('images/logo4.jpg') !!}" alt='Logotipas'/><br/><font color ='#111111'>&#381;aidimas u&#382;darytas ruo&#353;iantis Alpha versijos atviro testavimo i&#353;leidimui. <br/>Kvie&#269;iami visi norintys i&#353;bandyti!</font>
 </div><div class='kaire'><hr>

    <img src="{!! asset('images/baigta.php') !!}" alt='Baigta'/><br/>Alpha versijoje lauks:<br/> <b>1</b> amžius<br/>17 pastat&#371;<br/> 4 resurs&#371; r&#363;&#353;ys<br/>8 i&#353;skirtiniai kariniai vienetai<br/>O taip pat: <br/> *Kit&#371; &#382;aid&#279;j&#371; puolimai<br/> <a href="http://wtop.info/see.php?id=10"><img src="http://wtop.info/skaitliukas.php?id=10"   class='float' alt='WAP TOP'/></a>  * Unikali ekonomika <br/>*Marketas<hr>&#352;vie&#382;iausios naujienos - &gt; <a href="http://www.facebook.com/pages/Valdyk/167607186640898"><img src="{!! asset('images/fb.png') !!}" alt='Facebook puslapis'/></a></div><div class='centras'>
    <div class='juosta'>&#169;Werafonas 2012</div></div>

@endsection