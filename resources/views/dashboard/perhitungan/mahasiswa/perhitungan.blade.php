{{-- Data Kost --}}
<div class="card">
    <div class="card-body">
        <h4>Data Tugas</h4>
        <div class="m-t-25">
            <table id="data-table1" class="table">
                <thead>
                    <tr>
                        <th>Nama Tugas</th>
                        <th>Nama Pekerja</th>
                        <th>Harga</th>
                        <th>Alamat</th>
                        <th>Review</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['kost'] as $k)
                        <tr>
                            <td>{{ $k->nama_kost }}</td>
                            <td>{{ implode(', ', json_decode($k->fasilitas)) }}</td>
                            <td>@currency($k->harga_sewa)</td>
                            <td>{{ $k->lokasi }}</td>
                            <td>{{ $k->kenyamanan }}</td>
                            <td>{{ $k->keamanan }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Tugas</th>
                        <th>Nama Pekerja</th>
                        <th>Harga</th>
                        <th>Alamat</th>
                        <th>Review</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

{{-- Data Kost 2 --}}
<div class="card">
    <div class="card-body">
        <h4>Data Pekerja</h4>
        <div class="m-t-25">
            <table id="data-table2" class="table">
                <thead>
                    <tr>
                        <th>Nama Pekerja</th>
                        <th>Nama Tugas</th>
                        <th>Alamat</th>
                        <th>No. Telpon</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['kost2'] as $k)
                        <tr>
                            <td>{{ $k->nama_kost }}</td>
                            <td>{{ $k->fasilitas }}</td>
                            <td>{{ $k->harga_sewa }}</td>
                            <td>{{ $k->lokasi }}</td>
                            <td>{{ $k->kenyamanan }}</td>
                            <td>{{ $k->keamanan }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Pekerja</th>
                        <th>Nama Tugas</th>
                        <th>Alamat</th>
                        <th>No. Telpon</th>
                        <th>Email</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
