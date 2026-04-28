<x-layout>
    <x-slot name="pageTitle">{{ $pageTitle }}</x-slot>
    <a class="bg-green-500 text-white px-5 py-3 hover:bg-green-700 duration-100 rounded-lg " href="/create-product">Add
        Product</a>

    {{-- tabel data --}}
    <div class="flex flex-col mt-5">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-neutral-200">
                        <thead>
                            <tr class="text-neutral-500">
                                <th class="px-5 py-3 text-xs font-medium text-left uppercase">Nama</th>
                                <th class="px-5 py-3 text-xs font-medium text-left uppercase">Harga</th>
                                <th class="px-5 py-3 text-xs font-medium text-left uppercase">Stock</th>
                                <th class="px-5 py-3 text-xs font-medium text-start uppercase">Deskripsi</th>
                                <th class="px-5 py-3 text-xs font-medium text-right uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-200">
                            <tr class="text-neutral-800">
                                <td class="px-5 py-4 text-sm font-medium whitespace-nowrap">Richard Hendricks</td>
                                <td class="px-5 py-4 text-sm whitespace-nowrap">30</td>
                                <td class="px-5 py-4 text-sm whitespace-nowrap">Pied Piper HQ, Palo Alto</td>
                                <td class="px-5 py-4 text-sm whitespace-nowrap">Lorem ipsum dolor sit amet.</td>
                                <td class="px-5 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a class="text-blue-600 hover:text-blue-700" href="#">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- end tabel data --}}
</x-layout>
