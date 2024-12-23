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
    <div class="flex justify-between items-center container mx-auto px-8 mt-8">
        <h2 class="text-2xl font-semibold">Supplier List</h2>

        <a href="/add-supplier" class="inline-block px-8 py-2.5 rounded-md bg-green-500 text-white font-medium">Add New
            Supplier</a>
    </div>

    <div class="container mx-auto px-8">
        <hr class=" my-6">
    </div>

    <div class="container mx-auto px-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg border border-gray-200">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            PHONE
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Company
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Due
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">
                            #SID-001
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <div class="flex items-center gap-3">
                                <img src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" width="40"
                                    height="40"
                                    class="rounded-full min-w-10 max-w-10 min-h-10 max-h-10 w-full h-full bg-gray-200">
                                <span class="font-semibold">Monirul Islam</span>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            01712345678
                        </td>
                        <td class="px-6 py-4">
                            Korim Rice Mill
                        </td>
                        <td class="px-6 py-4">
                            TK. 5,000
                        </td>

                        <td class="px-6 py-4">
                            <div class=" flex gap-2.5">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-500 hover:underline">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">
                            #SID-002
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <div class="flex items-center gap-3">
                                <img src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" width="40"
                                    height="40"
                                    class="rounded-full min-w-10 max-w-10 min-h-10 max-h-10 w-full h-full bg-gray-200">
                                <span class="font-semibold">Abdullah Al Masum</span>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            01712354333
                        </td>
                        <td class="px-6 py-4">
                            ACI Limited
                        </td>
                        <td class="px-6 py-4">
                            TK. 3,00,000
                        </td>

                        <td class="px-6 py-4">
                            <div class=" flex gap-2.5">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-500 hover:underline">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">
                            #SID-003
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <div class="flex items-center gap-3">
                                <img src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" width="40"
                                    height="40"
                                    class="rounded-full min-w-10 max-w-10 min-h-10 max-h-10 w-full h-full bg-gray-200">
                                <span class="font-semibold">GM Ashiqur Rahaman</span>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            01712354353
                        </td>
                        <td class="px-6 py-4">
                            Rashid Rice Mill
                        </td>
                        <td class="px-6 py-4">
                            TK. 1,00,000
                        </td>

                        <td class="px-6 py-4">
                            <div class=" flex gap-2.5">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-500 hover:underline">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="flex justify-end py-3 px-4">
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px text-base h-10">

                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                        </li>

                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100">
                                1
                            </a>
                        </li>


                        <li>
                            <a href="#"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
    </div>
</body>

</html>