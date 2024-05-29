<div class="col-md-4 col-lg-6">
    <div class="card">
        <div class="card-body">
            <p style="float: right">Bobot: 0.519</p>
            <h4>Fasilitas</h4>
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
            <p style="float: right">Bobot: 0.197</p>
            <h4>Harga Sewa</h4>
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
            <p style="float: right">Bobot: 0.128</p>
            <h4>Lokasi</h4>
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

<div class="col-md-4 col-lg-6">
    <div class="card">
        <div class="card-body">
            <p style="float: right">Bobot: 0.087</p>
            <h4>Kenyamanan</h4>
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
                            @foreach ($sub4 as $s4)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>S{{ $s4->kode }}</td>
                                    <td>{{ $s4->nama }}</td>
                                    <td>{{ $s4->bobot }}</td>
                                    <td>{{ $s4->keterangan }}</td>
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
            <p style="float: right">Bobot: 0.059</p>
            <h4>Keamanan</h4>
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
                            @foreach ($sub5 as $s5)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>S{{ $s5->kode }}</td>
                                    <td>{{ $s5->nama }}</td>
                                    <td>{{ $s5->bobot }}</td>
                                    <td>{{ $s5->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
