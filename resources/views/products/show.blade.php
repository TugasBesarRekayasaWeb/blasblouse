<!DOCTYPE html>
<html>
<head>
     <title>Detail Product</title>
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/index.css') }}">
</head>
<body>
     <div class="kotak">
          <!-- <a href="/user" class="back">Back</a> -->
          <button class="back"><a href="/user">Back</button></a>
          <img src="{{ asset('assets/image/'.$product->Gambar) }}" class="img1">
          <img src="{{ asset('assets/image/'.$product->gambarModel) }}" class="img2">
          <div class="clear"></div>
          <img src="{{ asset('assets/image/'.$product->gambarPosisi) }}" class="img3">
          <img src="{{ asset('assets/image/'.$product->gambarDetail) }}" class="img4">
     </div>
     <div class="keterangan">
          <h2>{{$product->nama}}</h2>
          <h3>Rp.{{$product->harga}}.</h3>
          <p>{{$product->detail}}</p>
          <button class="ukuran"><a href="#">S</button></a>
          <button class="ukuran"><a href="#">M</button></a>
          <button class="ukuran"><a href="#">L</button></a>
          <button class="ukuran"><a href="#">XL</button></a>
          <button class="ukuran"><a href="#">XXL</button></a>
          <div class="clear"></div>  
          <button class="toLogin"><a href="/user">ADD TO SHOPPING BAG</button></a>
     </div>
              
     

</body>
</html>
