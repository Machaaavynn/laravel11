<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-center rtl:text-right text-black">
            <thead class="bg-yellow-600 border-b">
                <tr>
                    <th scope="col" class="px-6 py-3">NO</th>
                    <th scope="col" class="px-6 py-3">NAMA</th>
                    <th scope="col" class="px-6 py-3">DESCRIPSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($department as $department)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap text-center">
                            {{ $department->id }}
                        </th>
                        <td class="px-6 py-4 text-center">
                            {{ $department->department }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $department->descipsi }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
