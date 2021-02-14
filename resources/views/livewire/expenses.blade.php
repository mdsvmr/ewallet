<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-light">Data Finance</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-green-400 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm text-white">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Tambah Data</button>
            
            @if($isModal)
                @include('livewire.create')
            @endif

            <table class="table w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-1 py-2">No</th>
                        <th class="px-3 py-2">Keterangan</th>
                        <th class="px-3 py-2">Pemasukan</th>
                        <th class="px-3 py-2">Pengeluaran</th>
                        <th class="px-3 py-2">Tanggal</th>
                        <th class="px-1 py-2">Action</th>
                    </tr>
                </thead>
                <tbody >
                    @php $no = 1; @endphp
                    @forelse($expenses as $row)
                        <tr>
                            <td class="border px-1 py-2 text-center">{{ $no++ }}</td>
                            <td class="border px-3 py-2 text-center">{{ $row->keterangan }}</td>
                            <td class="border px-3 py-2 text-center">{{ $row->pemasukan }}</td>
                            <td class="border px-3 py-2 text-center">{{ $row->pengeluaran }}</td>
                            <td class="border px-3 py-2 text-center">{{ $row->created_at->format('d/m/y') }}</td>
                            <td class="border px-1 py-2 text-center">
                                <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button wire:click="delete({{ $row->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 m-1 rounded">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="6">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>