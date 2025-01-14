<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">

    <div class="container mx-auto mt-10">
        <div class="text-center mb-8">
            <h3 class="text-2xl font-bold my-4">CRUD Laravel</h3>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <a href="{{ route('products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">ADD PRODUCT</a>
            <table class="min-w-full border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border p-2 text-left">IMAGE</th>
                        <th class="border p-2 text-left">TITLE</th>
                        <th class="border p-2 text-left">PRICE</th>
                        <th class="border p-2 text-left">STOCK</th>
                        <th class="border p-2 w-1/5 text-center">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr class="border-b">
                            <td class="p-2 text-center">
                                <img src="{{ asset('/storage/products/'.$product->image) }}" class="rounded w-32">
                            </td>
                            <td class="p-2">{{ $product->title }}</td>
                            <td class="p-2">{{ "Rp " . number_format($product->price,2,',','.') }}</td>
                            <td class="p-2">{{ $product->stock }}</td>
                            <td class="p-2 text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    <a href="{{ route('products.show', $product->id) }}" class="bg-gray-700 text-white px-2 py-1 rounded inline-block mb-1">SHOW</a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded inline-block mb-1">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded inline-block">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center p-4 text-red-500">Data Products belum Tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // javascript sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>


    <!-- Memanggil Footer -->
    @include('products.footer')
</body>
</html>
