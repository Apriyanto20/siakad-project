<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Semester') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Form Section -->
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-4">Form Tambah Semester</h3>
                        <form action="{{ route('semester.store') }}" method="POST">
                            @csrf
                            <div class="my-5">
                                <label for="kode_semester"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Kode Semester</label>
                                <input type="text" id="kode_semester" name="kode_semester"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" value="{{ $kode_semester }}" readonly required />
                            </div>
                            <div class="mb-5">
                                <label for="semester"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Semester</label>
                                <input type="text" id="semester" name="semester"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Masukan semester" required autofocus />
                            </div>
                             <div class="mb-5">
                                <label for="keterangan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan
                                    <span class="text-red-500">*</span></label>
                                <select class="js-example-placeholder-single js-states form-control w-full m-6"
                                    name="keterangan" data-placeholder="Pilih keterangan">
                                    <option value="">Pilih...</option>
                                    @foreach ($keterangan as $j)
                                        <option value="{{ $j->kode_keterangan }}">{{ $j->keterangan }}</option>
                                    @endforeach
                                </select>
                                <span class="text-sm m-l text-red-500">{{ $errors->first('lantai') }}</span>
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>

                    <!-- Data Section -->
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-4">Data Semester</h3>
                        <div class="overflow-x-auto">
                            <table class="table table-bordered" id="semester-datatable">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            No.
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Kode Semester
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Semester
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Keterangan
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
                            <label for="kode_semester"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="kd_semester" name="kode_semester"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Kode semesteran...." />
                            <span class="text-sm m-l text-red-500">{{ $errors->first('kode_semester') }}</span>
                        </div>
                        <div class="mb-5">
                            <label for="semester"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="nm_semester" name="semester"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan semesteran...." />
                            <span class="text-sm m-l text-red-500">{{ $errors->first('semester') }}</span>
                        </div>
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                            <select class="js-example-placeholder-single js-states form-control w-[670px] m-6"
                                id="kode_keterangan" name="kode_keterangan" data-placeholder="Pilih keterangan">
                                <option value="">Pilih...</option>
                                @foreach ($keterangan as $j)
                                    <option value="{{ $j->kode_keterangan }}">{{ $j->keterangan }}</option>
                                @endforeach
                            </select>
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
            $('#semester-datatable').DataTable({
                ajax: {
                    url: 'api/semester',
                    dataSrc: 'semester'
                },
                initComplete: function() {
                    // Menengahkan teks di semua sel pada header (baris pertama)
                    $('#semester-datatable thead th').css('text-align', 'center');
                },
                columns: [{
                    data: 'no',
                    render: (data, type, row, meta) => {
                        return `<div style="text-align:center">${meta.row + 1}.</div>`;;
                    }
                }, {
                    data: 'kode_semester',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'semester',
                    render: (data, type, row) => {
                        return data;
                    }
                }, {
                    data: 'keterangan',
                    render: (data, type, row) => {
                        return data.keterangan;
                    }
                }, {
                    data: {
                        id: 'id',
                        semester: 'semester'
                    },
                    render: (data, type, row) => {
                        let editUrl =
                            `<button type="button" data-id="${data.id}"
                                                        data-modal-target="sourceModal" data-kode_semester="${data.kode_semester}" data-semester="${data.semester}"
                                                        data-kode_keterangan="${data.kode_keterangan}"
                                                        onclick="editSourceModal(this)"
                                                        class="bg-amber-500 hover:bg-amber-600 px-3 py-1 rounded-md text-xs text-white">
                                                       <i class="fas fa-edit"></i>
                                                    </button>`;
                        let deleteUrl =
                            `<button onclick="return semesterDelete('${data.id}','${data.semester}')" class="bg-red-500 hover:bg-bg-red-300 px-3 py-1 rounded-md text-xs text-white"><i class="fas fa-trash"></i></button>`;
                        return `<div style="text-align:center">${editUrl} ${deleteUrl}</div>`;
                    }
                }, ],
            });
        });
        const editSourceModal = (button) => {
            const formModal = document.getElementById('formSourceModal');
            const modalTarget = button.dataset.modalTarget;
            const id = button.dataset.id;
            const semester = button.dataset.semester;
            const kode_keterangan = button.dataset.kode_keterangan;
            const kode_semester = button.dataset.kode_semester;
            console.log(button.dataset);
            let url = "{{ route('semester.update', ':id') }}".replace(':id', id);
            let status = document.getElementById(modalTarget);
            document.getElementById('title_source').innerText = `Update semester ${semester}`;
            document.getElementById('kd_semester').value = kode_semester;
            document.getElementById('nm_semester').value = semester;
            document.getElementById('kode_keterangan').value = kode_keterangan;
            document.querySelector('[name="kode_keterangan"]').value = kode_keterangan;
            let event = new Event('change');
            document.querySelector('[name="kode_keterangan"]').dispatchEvent(event);

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

        const semesterDelete = async (id, name) => {
            let tanya = confirm(`Apakah anda yakin untuk menghapus ${name} ?`);
            if (tanya) {
                await axios.post(`/semester/${id}`, {
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
