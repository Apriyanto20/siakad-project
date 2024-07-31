<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mata Kuliah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Form Section -->
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-4">Form Tambah Mata Kuliah</h3>
                        <form action="{{ route('matkul.store') }}" method="POST">
                            @csrf
                            <div class="my-5">
                                <label for="kode_mata_kuliah"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Kode Mata Kuliah</label>
                                <input type="text" id="kode_mata_kuliah" name="kode_mata_kuliah"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" value="{{ $matkul }}" readonly required />
                            </div>
                             <div class="mb-5">
                                <label for="mata_kuliah"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Mata Kuliah</label>
                                <input type="text" id="mata_kuliah" name="mata_kuliah"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan Mata Kuliah" required autofocus />
                            </div>
                             <div class="mb-5">
                                <label for="sks"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    SKS</label>
                                <input type="text" id="sks" name="sks"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan SKS" required />
                            </div>
                            <div class="mb-5">
                                <label for="semester"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">semester
                                    <span class="text-red-500">*</span></label>
                                <select class="js-example-placeholder-single js-states form-control w-full m-6"
                                    name="semester" data-placeholder="Pilih semester">
                                    <option value="">Pilih...</option>
                                    @foreach ($semester as $j)
                                        <option value="{{ $j->kode_semester }}">{{ $j->semester }}</option>
                                    @endforeach
                                </select>
                                <span class="text-sm m-l text-red-500">{{ $errors->first('lantai') }}</span>
                            </div>
                             <div class="mb-5">
                                <label for="ebook"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Ebook</label>
                                <input type="text" id="ebook" name="ebook"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan Ebook" required />
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>

                    <!-- Data Section -->
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-4">Data mata_kuliah</h3>
                        <div class="overflow-x-auto">
                            <table class="table table-bordered" id="mata_kuliah-datatable">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            No.
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Kode Mata Kuliah
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Mata Kuliah
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            SKS
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Semester
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Ebook
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- MODAL --}}
    <div class="fixed inset-0  items-center justify-center z-50 hidden" id="sourceModal">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="fixed inset-0 flex items-center justify-center">
            <div class="w-full md:w-1/2 relative bg-white rounded-lg shadow mx-5">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900" id="title_source">
                        Tambah Sumber Database
                    </h3>
                    <button type="button" onclick="sourceModalClose(this)" data-modal-target="sourceModal"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="defaultModal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form method="POST" id="formSourceModal">
                    @csrf
                    <div class="flex flex-col  p-4 space-y-6">
                        <div class="mb-5">
                            <label for="kode_mata_kuliah"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mata Kuliah
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="kd_mata_kuliah" name="kode_mata_kuliah"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Kode mata_kuliahan...." />
                            <span class="text-sm m-l text-red-500">{{ $errors->first('kode_mata_kuliah') }}</span>
                        </div>
                        <div class="mb-5">
                            <label for="mata_kuliah"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">mata_kuliah
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="nm_mata_kuliah" name="mata_kuliah"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Mata Kuliah...." />
                            <span class="text-sm m-l text-red-500">{{ $errors->first('mata_kuliah') }}</span>
                        </div>
                        <div class="mb-5">
                            <label for="sks"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SKS
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="nm_sks" name="sks"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan SKS...." />
                            <span class="text-sm m-l text-red-500">{{ $errors->first('mata_kuliah') }}</span>
                        </div>
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Semester</label>
                            <select class="js-example-placeholder-single js-states form-control w-[670px] m-6"
                                id="kode_semester" name="kode_semester" data-placeholder="Pilih semester">
                                <option value="">Pilih...</option>
                                @foreach ($semester as $j)
                                    <option value="{{ $j->kode_semester }}">{{ $j->semester }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="ebook"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ebook
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="nm_ebook" name="ebook"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Ebook...." />
                            <span class="text-sm m-l text-red-500">{{ $errors->first('ebook') }}</span>
                        </div>
                    </div>
                    <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit" id="formSourceButton"
                            class="bg-green-400 m-2 w-40 h-10 rounded-xl hover:bg-green-500">Simpan</button>
                        <button type="button" data-modal-target="sourceModal" onclick="sourceModalClose(this)"
                            class="bg-red-500 m-2 w-40 h-10 rounded-xl text-white hover:shadow-lg hover:bg-red-600">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL --}}
    <script>
        $(document).ready(function() {
            console.log('RUN!');
            $('#mata_kuliah-datatable').DataTable({
                ajax: {
                    url: 'api/matkul',
                    dataSrc: 'matkul'
                },
                initComplete: function() {
                    // Menengahkan teks di semua sel pada header (baris pertama)
                    $('#mata_kuliah-datatable thead th').css('text-align', 'center');
                },
                columns: [{
                    data: 'no',
                    render: (data, type, row, meta) => {
                        return `<div style="text-align:center">${meta.row + 1}.</div>`;;
                    }
                }, {
                    data: 'kode_mata_kuliah',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'mata_kuliah',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'sks',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'semester',
                    render: (data, type, row) => {
                        return data.semester;
                    }
                },{
                    data: 'ebook',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: {
                        id: 'id',
                        mata_kuliah: 'mata_kuliah'
                    },
                    render: (data, type, row) => {
                        let editUrl =
                            `<button type="button" data-id="${data.id}"
                                                        data-modal-target="sourceModal" data-kode_mata_kuliah="${data.kode_mata_kuliah}" data-mata_kuliah="${data.mata_kuliah}" data-sks="${data.sks}"
                                                        data-kode_semester="${data.kode_semester}" data-ebook="${data.ebook}"
                                                        onclick="editSourceModal(this)"
                                                        class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                                       <i class="fas fa-edit"></i>
                                                    </button>`;
                        let deleteUrl =
                            `<button onclick="return mata_kuliahDelete('${data.id}','${data.mata_kuliah}')" class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white"><i class="fas fa-trash"></i></button>`;
                        return `<div style="text-align:center">${editUrl} ${deleteUrl}</div>`;
                    }
                }, ],
            });
        });
        const editSourceModal = (button) => {
            const formModal = document.getElementById('formSourceModal');
            const modalTarget = button.dataset.modalTarget;
            const id = button.dataset.id;
            const mata_kuliah = button.dataset.mata_kuliah;
            const sks = button.dataset.sks;
            const ebook = button.dataset.ebook;
            const kode_semester = button.dataset.kode_semester;
            const kode_mata_kuliah = button.dataset.kode_mata_kuliah;
            console.log(button.dataset);
            let url = "{{ route('matkul.update', ':id') }}".replace(':id', id);
            let status = document.getElementById(modalTarget);
            document.getElementById('title_source').innerText = `Update Mata Kuliah ${mata_kuliah}`;
            document.getElementById('kd_mata_kuliah').value = kode_mata_kuliah;
            document.getElementById('nm_mata_kuliah').value = mata_kuliah;
            document.getElementById('nm_sks').value = sks;
            document.getElementById('kode_semester').value = kode_semester;
            document.querySelector('[name="kode_semester"]').value = kode_semester;
            let event = new Event('change');
            document.querySelector('[name="kode_semester"]').dispatchEvent(event);
            document.getElementById('nm_ebook').value = ebook;


            document.getElementById('formSourceButton').innerText = 'Simpan';
            document.getElementById('formSourceModal').setAttribute('action', url);
            let csrfToken = document.createElement('input');
            csrfToken.setAttribute('type', 'hidden');
            csrfToken.setAttribute('value', '{{ csrf_token() }}');
            formModal.appendChild(csrfToken);

            let methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'PATCH');
            formModal.appendChild(methodInput);

            status.classList.toggle('hidden');
        }

        const sourceModalClose = (button) => {
            const modalTarget = button.dataset.modalTarget;
            let status = document.getElementById(modalTarget);
            status.classList.toggle('hidden');
        }

        const mata_kuliahDelete = async (id, name) => {
            let tanya = confirm(`Apakah anda yakin untuk menghapus ${name} ?`);
            if (tanya) {
                await axios.post(`/matkul/${id}`, {
                        '_method': 'DELETE',
                        '_token': $('meta[name="csrf-token"]').attr('content')
                    })
                    .then(function(response) {
                        // Handle success
                        location.reload();
                    })
                    .catch(function(error) {
                        // Handle error
                        alert('Error deleting record');
                        console.log(error);
                    });
            }
        }
    </script>
</x-app-layout>
