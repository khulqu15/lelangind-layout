<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-4">
                <button class="btn btnm-light" onclick="window.location = '{{ URL::previous() }}'">Kembali</button>
                <h3>{{ $method == 'edit' ? "Ubah produk $product->name" : "Tambah produk" }}</h3>
            </div>
        </div>
    </div>
</div>
