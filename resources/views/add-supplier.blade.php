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
    <div class="flex justify-between items-center container mx-auto mt-8">
        <h2 class="text-2xl font-semibold">Add Supplier</h2>

        <a href="/supplier-list"
            class="inline-block px-8 py-2.5 rounded-md bg-green-500 text-white font-medium">Supplier List</a>
    </div>

    <hr class="container mx-auto px-8 my-6">

    <form
        class="max-w-3xl mx-auto p-8 bg-gray-50 rounded border border-gray-200 mb-10 grid grid-cols-2 gap-x-6 gap-y-8">

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Supplier ID</label>
            <input type="text" name=""
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" />
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Full Name</label>
            <input type="text" name=""
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" />
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Company Name</label>
            <input type="text" name=""
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" />
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Phone Work</label>
            <input type="text" name="g
                focus:ring-green-500 focus:border-green-500 block w-full p-2.5" />
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Phone Emergency</label>
            <input type="text" name=""
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" />
        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">NID Number</label>
            <input type="text" name=""
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" />

        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Address</label>
            <input type="text" name=""
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" />

        </div>

        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900">Photo</label>
            <input
                class="relative m-0 block w-full min-w-0 flex-auto rounded border border-gray-300 bg-clip-padding px-3 py-2.5 text-sm font-medium text-gray-600 transition duration-300 ease-in-out file:-mx-3 file:-my-2.5 file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-green-500 file:px-3 file:py-2.5 file:text-white file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] focus:outline-none"
                type="file" name="">

        </div>

        <div class="flex items-center gap-3 col-span-2">
            <a href="/" type="button"
                class="text-green-600 border border-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-5 text-center">
                Cancel
            </a>
            <button type="submit"
                class="text-white bg-green-600 hover:bg-green-700 border border-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-5 text-center">
                Submit
            </button>
        </div>
    </form>
</body>

</html>