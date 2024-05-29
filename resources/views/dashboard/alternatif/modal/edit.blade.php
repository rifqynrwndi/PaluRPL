<div class="modal fade" id="editAlternatif{{ $k->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Alternatif</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <form action="{{ route('alternatif.update', $k->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Kode</span>
                        </div>
                        <input type="text" class="form-control" name="kode" aria-describedby="inputGroup-sizing-default" value="{{ $k->kode }}" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nama Alternatif</span>
                        </div>
                        <input type="text" class="form-control" name="namaalternatif" aria-describedby="inputGroup-sizing-default" value="{{ $k->namaalternatif }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
