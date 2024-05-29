<div class="col-md-4 col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4>Luas Kamar</h4>
            <div class="m-t-25">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Sub Kriteria</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sub1 as $s1)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>S{{ $s1->kode }}</td>
                                    <td>{{ $s1->nama }}</td>
                                    <td>{{ $s1->bobot }}</td>
                                    <td>{{ $s1->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4 col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4>Jarak Dari Kampus</h4>
            <div class="m-t-25">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Sub Kriteria</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sub2 as $s2)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>S{{ $s2->kode }}</td>
                                    <td>{{ $s2->nama }}</td>
                                    <td>{{ $s2->bobot }}</td>
                                    <td>{{ $s2->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4 col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4>Desain Rumah</h4>
            <div class="m-t-25">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Sub Kriteria</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sub3 as $s3)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>S{{ $s3->kode }}</td>
                                    <td>{{ $s3->nama }}</td>
                                    <td>{{ $s3->bobot }}</td>
                                    <td>{{ $s3->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
