<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-4">
                @if ($method == 'edit')
                <button class="btn btnm-light py-2 mb-3"
                onclick="window.location = '{{ URL::previous() }}'"><i class="fas fa-arrow-left"></i> Kembali</button>
                <h3>{{ $method == 'edit' ? "Ubah produk $product->name" : "Tambah produk" }}</h3>
                @endif
                {{ $method }}
                <form action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Produk</label>
                        <input value="{{ $method == 'edit' ? $product->name : '' }}" required type="text" class="form-control" name="name" id="name" aria-describedby="name-feedback" placeholder="Name Product Here">
                        <small id="name-feedback" class="form-text text-muted">Required</small>
                    </div>
                    <div class="form-group">
                        <label for="close">Ditutup pada tanggal</label>
                        <input value="{{ $method == 'edit' ?  date('mm/dd/yyyy', strtotime($product->close)) : '' }}" required type="date" class="form-control" name="close" id="close" aria-describedby="close-feedback">
                        <small id="close-feedback" class="form-text text-muted">Required</small>
                    </div>
                    {{date('m/d/y', strtotime($product->close))}}
                    <div class="form-group">
                        <label for="price">Mulai harga</label>
                        <input value="{{ $method == 'edit' ? $product->price : '' }}" required type="number" class="form-control" name="price" id="price" aria-describedby="price-feedback">
                        <small id="price-feedback" class="form-text text-muted">Required</small>
                    </div>
                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <select required name="category" id="category" class="form-control" aria-describedby="ctr-feedback">
                            <option value="{{ $method == 'create' ? '' : $product->category_id }}">{{ $method == 'create' ? 'Pilih Category' : $product->category->name }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <small id="category-feedback" class="form-text text-muted">Required</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
