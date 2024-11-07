<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-center rtl:text-right text-black">
            <thead class="bg-yellow-600 border-b">
                <tr>
                    <th scope="col" class="px-6 py-3">NO</th>
                    <th scope="col" class="px-6 py-3">KELAS</th>
                    <th scope="col" class="px-6 py-3">DEPARTMENT</th>
                    <th scope="col" class="px-6 py-3">STUDENT LIST</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grades as $grade)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap text-center">
                            {{ $grade->id }}
                        </th>
                        <td class="px-6 py-4 text-center">
                            {{ $grade->name }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $grade->department->department}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            <ul>
                                @foreach ($grade->students as $student)
                                    <li>{{ $student->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
