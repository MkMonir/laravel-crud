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

        <h2 class="text-2xl font-semibold">Add Product</h2>

        <a href="/" class="inline-block px-8 py-2.5 rounded-md bg-green-500 text-white font-medium">Product List</a>
    </div>


    <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data"
        class="max-w-xl mx-auto p-8 bg-gray-50 rounded border border-gray-200 mb-10">
        @csrf
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Product ID</label>
            <input type="text" name="product_id"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                value="{{old('product_id')}}" />

            @error('product_id')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Product Name</label>
            <input type="text" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                value="{{old('name')}}" />
            @error('name')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Product Bosta Type</label>
            <input type="text" name="product_type"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                value="{{old('product_type')}}" />
            @error('product_type')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Selling Price</label>
            <input type="text" name="selling_price" class=" shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-green-500 focus:border-green-500 block w-full p-2.5" value="{{old('selling_price')}}" />
            @error('selling_price')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Purchase Price</label>
            <input type="text" name="purchase_price"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                value="{{old('purchase_price')}}" />
            @error('purchase_price')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Brand Name</label>
            <input type="text" name="brand"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                value="{{old('brand')}}" />
            @error('brand')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900">Image</label>
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to
                                upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500">JPEG, PNG, JPG</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" name="image" />
                </label>
            </div>
            @error('image')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>


        <button type="submit"
            class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-5 text-center">
            Submit
        </button>
    </form>
</body>

</html>