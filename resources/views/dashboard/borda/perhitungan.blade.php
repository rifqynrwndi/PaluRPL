{{-- Data Kost --}}
<form action="{{ route('borda.upload') }}" method="post">
    <div class="card">
        <div class="card-body">
<<<<<<< HEAD
            <h4>Data Layanan</h4>
=======
            <h4>Data Jasa</h4>
>>>>>>> 91663478031ebfde87073f26f35df128587670cf
            <div class="m-t-25">
                <table id="data-table1" class="table">
                    <thead>
                        <tr>
                            <th>Nama Layanan</th>
                            {{-- <th>Fasilitas</th>
                        <th>Harga Sewa</th>
                        <th>Lokasi</th>
                        <th>Kenyamanan</th>
                        <th>Keamanan</th>
                        <th>Luas Kamar</th>
                        <th>Jarak Dari Kampus</th>
                        <th>Desain Rumah</th> --}}
                            <th>Total</th>
                            <th>Rank</th>
                        </tr>
                    </thead>
                    @csrf
                    <tbody>
                        @foreach ($data['kost'] as $key => $a)

                        <tr>
                            <td>{{ $data['kost'][$key]->nama_kost }}</td>
                            {{-- <td>{{ $data['n_fasilitas'][$key] }}</td>
                            <td>{{ $data['n_harga_sewa'][$key] }}</td>
                            <td>{{ $data['n_lokasi'][$key] }}</td>
                            <td>{{ $data['n_kenyamanan'][$key] }}</td>
                            <td>{{ $data['n_keamanan'][$key] }}</td>
                            <td>{{ $data['n_luas_kamar'][$key] }}</td>
                            <td>{{ $data['n_jarak_dari_kampus'][$key] }}</td>
                            <td>{{ $data['n_desain_rumah'][$key] }}</td> --}}
                            <td>{{ $data['total'][$key] }}</td>
                            <td>{{ $loop->iteration}}</td>
                        </tr>
                        <input type="text" name="id_user[]" value="{{ $data['kost'][$key]->id_user }}" hidden>
                        <input type="text" name="nama_kost[]" value="{{ $data['kost'][$key]->nama_kost }}" hidden>
                        <input type="text" name="fasilitas[]" value="{{ $data['kost'][$key]->fasilitas }}" hidden>
                        <input type="text" name="harga_sewa[]" value="{{ $data['kost'][$key]->harga_sewa }}" hidden>
                        <input type="text" name="lokasi[]" value="{{ $data['kost'][$key]->lokasi }}" hidden>
                        <input type="text" name="kenyamanan[]" value="{{ $data['kost'][$key]->kenyamanan }}" hidden>
                        <input type="text" name="keamanan[]" value="{{ $data['kost'][$key]->keamanan }}" hidden>
                        <input type="text" name="panjangkamar[]" value="{{ $data['kost'][$key]->panjangkamar }}" hidden>
                        <input type="text" name="lebarkamar[]" value="{{ $data['kost'][$key]->lebarkamar }}" hidden>
                        <input type="text" name="jarak_dari_kampus[]" value="{{ $data['kost'][$key]->jarak_dari_kampus }}" hidden>
                        <input type="text" name="desain_rumah[]" value="{{ $data['kost'][$key]->desain_rumah }}" hidden>
                        <input type="text" name="gambar[]" value="{{ $data['kost'][$key]->gambar }}" hidden>
                        <input type="text" name="total[]" value="{{ $data['total'][$key] }}" hidden>
                        <input type="text" name="rank[]" value="{{ $loop->iteration}}" hidden>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if (Auth::user->role == 'admin')
        <button type="submit" class="btn btn-warning btn-tone m-r-12">Upload</button>
        @endif
    </div>
</form>
