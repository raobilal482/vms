<div class="">
    <!-- Header Section -->
    <div class="grid grid-cols-12 w-full pt-2">
        <div class="col-span-4">
            <h1 class="text-3xl font-bold">Volunteer</h1>
        </div>
        <div class="col-span-8 flex justify-end pe-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                New Volunteer
            </button>
        </div>
    </div>

    <!-- Table Section -->
    <div class="grid grid-cols-12 mt-4 bg-red-100">

        <table id="search-table" class="col-span-12 w-full table-auto shadow-lg rounded-lg bg-white">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left p-4 font-semibold text-gray-600 text-sm">
                        Name
                    </th>
                    <th class="text-left p-4 font-semibold text-gray-600 text-sm">
                        Email
                    </th>
                    <th class="text-left p-4 font-semibold text-gray-600 text-sm">
                        Cell
                    </th>
                    <th class="text-left p-4 font-semibold text-gray-600 text-sm">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- Data rows -->
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                    <td class="p-4 text-gray-700">John Doe</td>
                    <td class="p-4 text-gray-700">N6x3E@example.com</td>
                    <td class="p-4 text-gray-700">123-456-7890</td>
                    <td class="p-4">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </td>
                </tr>
                <!-- Add other rows similarly -->
            </tbody>
        </table>


    </div>
</div>
