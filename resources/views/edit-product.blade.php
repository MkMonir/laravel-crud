<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-between items-center container mx-auto my-10">
        <h2 class="text-2xl font-semibold">Edit Product - {{$product->name}}</h2>
        <a href="/" class="inline-block px-8 py-2.5 rounded-md bg-green-500 text-white font-medium">Product List</a>
    </div>

    <form method="POST" action="{{route('edit-product',$product->id)}}" enctype="multipart/form-data"
        class="max-w-xl mx-auto p-8 bg-gray-50 rounded border border-gray-200 mb-10">
        @csrf
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Product ID</label>
            <input type="text" name="product_id"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                value="{{$product->product_id}}" />

            @error('product_id')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Product Name</label>
            <input type="text" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                value="{{$product->name}}" />
            @error('name')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Product Bosta Type</label>
            <input type="text" name="product_type"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                value="{{$product->product_type}}" />
            @error('product_type')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Selling Price</label>
            <input type="text" name="selling_price" class=" shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-green-500 focus:border-green-500 block w-full p-2.5" value="{{$product->selling_price}}" />
            @error('selling_price')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Purchase Price</label>
            <input type="text" name="purchase_price"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                value="{{$product->purchase_price}}" />
            @error('purchase_price')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Brand Name</label>
            <input type="text" name="brand"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                value="{{$product->brand}}" />
            @error('brand')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Image</label>
            <input
                class="relative m-0 block w-full min-w-0 flex-auto rounded border border-gray-300 bg-clip-padding px-3 py-2.5 text-sm font-medium text-gray-600 transition duration-300 ease-in-out file:-mx-3 file:-my-2.5 file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-green-500 file:px-3 file:py-2.5 file:text-white file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] focus:outline-none"
                type="file" name="image" />

            @error('image')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-3">
            <a href="/" type="button"
                class="text-green-600 border border-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-5 text-center">
                Cancel
            </a>
            <button type="submit"
                class="text-white bg-green-600 hover:bg-green-700 border border-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-5 text-center">
                Update
            </button>
        </div>
    </form>
</body>

</html>