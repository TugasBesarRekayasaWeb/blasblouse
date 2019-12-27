    <div class="col">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title text-center">{{$barang->nama}}</h5>
          <p class="card-text">Rp.{{$barang->harga}}.</p>
          <p class="card-text">{{$barang->detail}}</p>
          <p class="card-text">Stok S   : {{$barang->S}}</p>
          <p class="card-text">Stok M   : {{$barang->M}}</p>
          <p class="card-text">Stok L   : {{$barang->L}}</p>
          <p class="card-text">Stok XL  : {{$barang->XL}}</p>
          <p class="card-text">Stok XXL : {{$barang->XXL}}</p>
          <div class="text-center">
              <a href="/user" class="btn btn-primary">Back</a> 
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>