<?php
include "asset/config/header.php";
?>
<body><center> <div class="container"> <h2>Kare Kod Okut</h2>
      <button type="button" onclick="qrScan();" class="btn btn-outline-dark">Kare Kodu Okutmaya Başla</button>

      <div class="ratio ratio-1x1">
      <video id="preview" style="width: 300px;height: 300px;"></video>
</div> 
      <select id="cameras">Kamera Seç</select> 
      <br>
      
</div>
</center>
      
</body>