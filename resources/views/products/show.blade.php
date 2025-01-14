<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilkan Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10 mb-10 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <img src="{{ asset('/storage/products/'.$product->image) }}" alt="Product Image" class="rounded w-full">
        </div>
        <div class="md:col-span-2 bg-white shadow-md rounded-lg p-6">
            <h3 class="text-2xl font-bold mb-4">{{ $product->title }}</h3>
            <hr class="mb-4">
            <p class="text-lg font-semibold text-gray-700 mb-4">{{ "Rp " . number_format($product->price,2,',','.') }}</p>
            <div class="prose mb-4">
                <p>{!! $product->description !!}</p>
            </div>
            <hr class="mb-4">
            <p class="text-gray-600">Stock: {{ $product->stock }}</p>
        </div>
    </div>

</body>
</html>
