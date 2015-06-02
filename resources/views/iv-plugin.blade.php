<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://dev.indievox.com/public/javascript/iv-plugin/iv-plugin-sdk.js?version=v0.0.1&appId=j300000039";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'indievox-jssdk'));</script>
<iframe id="iv_music_purchase_btn_<?php echo $thing_type; ?>_<?php echo $thing_id; ?>" width="500px" height="110px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" src="http://dev.indievox.com/plugin/music-purchase-btn?thing_id=<?php echo $thing_id; ?>&thing_type=<?php echo $thing_type; ?>&layout=default&app_id=j300000039" style="border: none; visibility: visible; width: 500px; height: 110px;"></iframe>
<div class="iv-plugin"
     data-thing-type="song"
     data-thing-id="1"
     data-layout="default"
     data-action="iv-music-purchase">
</div>
<div class="iv-plugin"
     data-thing-type="song"
     data-thing-id="2"
     data-layout="default"
     data-action="iv-music-purchase">
</div>