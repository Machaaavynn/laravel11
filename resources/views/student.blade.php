<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-center rtl:text-right text-black">
            <thead class="bg-yellow-600 border-b">
                <tr>
                    <th scope="col" class="px-6 py-3">NO</th>
                    <th scope="col" class="px-6 py-3">NAMA</th>
                    <th scope="col" class="px-6 py-3">GRADE</th>
                    <th scope="col" class="px-6 py-3">DEPARTMENT</th>
                    <th scope="col" class="px-6 py-3">EMAIL</th>
                    <th scope="col" class="px-6 py-3">ALAMAT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap text-center">
                            {{ $student->id }}
                        </th>
                        <td class="px-6 py-4 text-center">
                            {{ $student->name }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $student->grade->name}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $student->department->department}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $student->email }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $student->alamat }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
