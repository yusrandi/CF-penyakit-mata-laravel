 <!-- Vertically Centered modal Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
         <form class="modal-content" action="{{ route('basispengetahuan.store') }}" method="POST">
             @csrf

             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalCenterTitle">Form Tambah Gejala
                 </h5>
                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                     <i data-feather="x"></i>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="form-group mb-3">
                     <label for="basicInput">Jenis Penyakit</label>
                     <select class="form-select" id="basicSelect" required name="penyakit_id">
                         <option value="" disabled>Pilih Jenis Penyakit</option>
                         @foreach ($penyakits as $item)
                             <option value="{{ $item->id }}">
                                 {{ $item->penyakit_kode . ' | ' . $item->penyakit_nama }}
                             </option>
                         @endforeach
                     </select>
                 </div>
                 <div class="form-group mb-3">
                     <label for="basicInput">Jenis Gejala</label>
                     <select class="form-select" id="basicSelect" required name="gejala_id">
                         <option value="" disabled>Pilih Jenis Gejala</option>
                         @foreach ($gejalas as $item)
                             <option value="{{ $item->id }}">{{ $item->gejala_kode . ' | ' . $item->gejala_nama }}
                             </option>
                         @endforeach
                     </select>
                 </div>

                 <div class="form-group mb-3">
                     <label for="basicInput">Bobot</label>
                     <div class="form-group position-relative has-icon-right">
                         <input type="text" class="form-control" placeholder="0.2" required name="bobot">
                         <div class="form-control-icon">
                             <i class="bi bi-bookmarks"></i>
                         </div>
                     </div>
                     <p><small class="text-muted">gunakan titik(.) untuk nilai decimal</small>
                     </p>
                 </div>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                     <i class="bx bx-x d-block d-sm-none"></i>
                     <span class="d-none d-sm-block">Close</span>
                 </button>
                 <button type="submit" class="btn btn-outline-primary ml-1">
                     <i class="bx bx-check d-block d-sm-none"></i>
                     <span class="d-none d-sm-block">Submit</span>
                 </button>
             </div>
         </form>

     </div>
 </div>
