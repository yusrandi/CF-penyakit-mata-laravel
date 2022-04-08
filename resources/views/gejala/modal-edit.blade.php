 <!-- Vertically Centered modal Modal -->
 <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="editModalCenterTitle"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
         <form class="modal-content" action="{{ url('/gejala') }}" method="POST" id="editForm">
             @csrf
             @method('PUT')

             <div class="modal-header">
                 <h5 class="modal-title" id="editModalCenterTitle">Form Edit Gejala
                 </h5>
                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                     <i data-feather="x"></i>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="form-group mb-3">
                     <label for="basicInput">Jenis Gejalas</label>
                     <select class="form-select" id="basicSelect" required name="status" id="status" disabled>
                         <option value="GT">Gejala Tulang</option>
                         <option value="GS">Gejala Sendi</option>
                         <option value="CT">Ciri-Ciri Tulang</option>
                         <option value="CS">Ciri-Ciri Sendi</option>
                     </select>
                 </div>

                 <div class="form-group mb-3">
                     <label for="basicInput">Nama Gejala</label>
                     <div class="form-group position-relative has-icon-right">
                         <input type="text" class="form-control" placeholder="Input Nama Gejala" required
                             name="gejala_nama" id="gejala_nama">
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
