 {{-- <!-- DataTables Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.3/css/dataTables.tailwindcss.css">
    <style> --}}


 {{-- <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>

            <div class="overflow-x-auto">
                <table id="example" class="stripe hover w-full min-w-[600px]" style="width:100%">
                    <thead class="bg-[#067344]">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="whitespace-nowrap">1</td>
                            <td class="whitespace-nowrap">Ahmad</td>
                            <td class="whitespace-nowrap">10A</td>
                            <td class="whitespace-nowrap">
                                <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">1</td>
                            <td class="whitespace-nowrap">Ahmad</td>
                            <td class="whitespace-nowrap">10A</td>
                            <td class="whitespace-nowrap">
                                <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">1</td>
                            <td class="whitespace-nowrap">Ahmad</td>
                            <td class="whitespace-nowrap">10A</td>
                            <td class="whitespace-nowrap">
                                <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">1</td>
                            <td class="whitespace-nowrap">Fauzan</td>
                            <td class="whitespace-nowrap">10A</td>
                            <td class="whitespace-nowrap">
                                <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">1</td>
                            <td class="whitespace-nowrap">Ahmad</td>
                            <td class="whitespace-nowrap">10A</td>
                            <td class="whitespace-nowrap">
                                <button class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> --}}



 {{-- <!-- jQuery (DataTables dependency) -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.3.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.3/js/dataTables.tailwindcss.js"></script>
    <script>
        $(document).ready(function() {
            new DataTable('#example', {
                paging: true,
                searching: true,
                info: true,
                responsive: true,
                dom: "<'flex flex-col md:flex-row md:justify-between mb-2'<'flex items-center mb-2 md:mb-0'l><'flex items-center'f>>" +
                    "rt" +
                    "<'flex flex-col md:flex-row md:justify-between mt-2'<'flex items-center mb-2 md:mb-0'i><'flex items-center'p>>"
            });
        });
    </script> --}}
