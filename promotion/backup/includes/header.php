<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/Logodesigndok/promotion/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/promotion/';
  }

  $number_text="+1 862 772 1016";
  $number_val="tel:+18627721016";

  ?>



<noscript>
<div id="jqcheck"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII=" alt="No Script" /> Javascript is disabled. Please enable it for better working experience.</div>
</noscript>
<header>
         <div class="container">
            <div class="row">
               <div class="col-md-2 col-sm-6"><a><img src="assets/images/ldd-white.svg" alt="Logo" class="logo-text-center"></a></div>
               <div class="col-xs-12 col-sm-6 col-md-10 top-bar mb">
                  <ul>
                     <a href="<?php echo $number_val;?>">
                        <li class="strp ic01"><?php echo $number_text;?><br>Talk to Us</li>
                     </a>
                     <li class="sep"><span>|</span></li>
                     <a href=""  name="for £18.99" >
                        <li class="strp ic02">Book a Call</li>
                     </a>
                     <li class="sep"><span>|</span></li>
                     <a href="order.php" class="popup_open">
                        <li class="strp ic03">Request a<br>Custom Quote</li>
                     </a>
                     <li class="sep"><span>|</span></li>
                     <a href="javascript::" onclick="setButtonURL()" class="chatt">
                        <li class="strp ic04" id="chat">Chat<br>with Expert</li>
                     </a>
                  </ul>
               </div>
            </div>
         </div>
      </header>
