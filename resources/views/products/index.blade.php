@extends('admin.admin')

@section('content')

<body>
    <div class="wrapper">
        <div class="container">
            <div class="main-content">
                <h3 class="mt-4">List Product</h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SKU</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataProduk as $product)
                        <tr>
                            <td>{{ $product['id'] }}</td>
                            <td>{{ $product['sku'] }}</td>
                            <td>{{ $product['name'] }}</td>
                            <td>{{ $product['price'] }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">
                                Empty
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

@endsection