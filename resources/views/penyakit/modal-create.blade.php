 <!-- Vertically Centered modal Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
         <form class="modal-content" action="{{ route('penyakit.store') }}" method="POST">
             @csrf

             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalCenterTitle">Form Tambah Penyakit
                 </h5>
                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                     <i data-feather="x"></i>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="form-group mb-3">
                     <label for="basicInput">Jenis Penyakit</label>
                     <select class="form-select" id="basicSelect" required name="status">
                         <option value="PT">Penyakit Tulang</option>
                         <option value="PS">Penyakit Sendi</option>
                     </select>
                 </div>

                 <div class="form-group mb-3">
                     <label for="basicInput">Nama Penyakit</label>
                     <div class="form-group position-relative has-icon-right">
                         <input type="text" class="form-control" placeholder="Input Nama Penyakit" required
                             name="penyakit_nama">
                         <div class="form-control-icon">
                             <i class="bi bi-bookmarks"></i>
                         </div>
                     </div>
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
