<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Quill CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">IMAGE</label>
                    <input type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 @error('image') border-red-500 @enderror" name="image">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">TITLE</label>
                    <input type="text" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror" name="title" value="{{ old('title', $product->title) }}" placeholder="Masukkan Judul Product">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">DESCRIPTION</label>
                    <div id="editor" class="text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50">
                        {!! old('description', $product->description) !!}
                    </div>
                    <textarea name="description" id="description" class="hidden"></textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold mb-2">PRICE</label>
                        <input type="number" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 @error('price') border-red-500 @enderror" name="price" value="{{ old('price', $product->price) }}" placeholder="Masukkan Harga Product">
                        @error('price')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-bold mb-2">STOCK</label>
                        <input type="number" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 @error('stock') border-red-500 @enderror" name="stock" value="{{ old('stock', $product->stock) }}" placeholder="Masukkan Stock Product">
                        @error('stock')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mr-3">UPDATE</button>
                    <button type="reset" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">RESET</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

        // Sync Quill
        document.querySelector('form').onsubmit = function() {
            var description = document.querySelector('textarea[name=description]');
            description.value = quill.root.innerHTML;
        };
    </script>


</body>
</html>
