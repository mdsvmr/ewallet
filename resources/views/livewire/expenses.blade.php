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
            
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 float-left mt-0.5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Tambah Data
            </button>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-3"><a href="{{ route('cetak-data') }}" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 float-left mt-0.5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                </svg>
                Cetak Data</a>
            </button>
            
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
                                <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button wire:click="delete({{ $row->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 m-1 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
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