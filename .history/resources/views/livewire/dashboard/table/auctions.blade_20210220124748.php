<div>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mt-2">Auction Data Table</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-star"></i></th>
                            <th>User</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($auctions as $auction)
                        <tr>
                            <td scope="row">{{ $auction->status }}</td>
                            <td>{{ $auction->user->name }}</td>
                            <td>{{ $auction->product->name }}</td>
                            <td>Rp {{ number_format($auction->price) }},-</td>
                            <td>
                                <button wire:click="setStatus('failed', {{ $product->id }})" class="btn btn-warning btn-sm"><i class="fas fa-times"></i></button>
                                <button wire:click="setStatus('success', {{ $product->id }})" class="btn btn-success btn-sm"><i class="fas fa-check"></i></button>
                                <button onclick="return confirm('Yakin ?') || event.stopImmediatePropagation()" class="btn btn-danger btn-sm" wire:click="deleteData({{ $product->id }})"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
