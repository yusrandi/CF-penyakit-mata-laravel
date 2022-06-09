 <!-- Vertically Centered modal Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
         <form class="modal-content" action="{{ route('user.store') }}" method="POST">
             @csrf

             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalCenterTitle">Form Tambah Pengguna
                 </h5>
                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                     <i data-feather="x"></i>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="form-group mb-3">
                     <label for="basicInput">Hak Akses</label>
                     <select class="form-select" id="basicSelect" required name="role_id">
                         <option value=1>Admin</option>
                         <option value=2>Pakar</option>
                         <option value=3>Pasien</option>
                     </select>
                 </div>

                 <div class="form-group mb-3">
                     <label for="basicInput">Nama Pengguna</label>
                     <div class="form-group position-relative has-icon-right">
                         <input type="text" class="form-control" placeholder="Input Nama Pengguna" required
                             name="name">
                         
                     </div>
                 </div>
                 <div class="form-group mb-3">
                    <label for="basicInput">Nomor Hp</label>
                    <div class="form-group position-relative has-icon-right">
                        <input type="number" class="form-control" placeholder="085******" required
                            name="phone">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="basicInput">Alamat Lengkap</label>
                    <div class="form-group position-relative has-icon-right">
                        <input type="text" class="form-control" placeholder="Jl. Perintis" required
                            name="address">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="basicInput">Email</label>
                    <div class="form-group position-relative has-icon-right">
                        <input type="email" class="form-control" placeholder="test@test.test" required
                            name="email">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="basicInput">Password</label>
                    <div class="form-group position-relative has-icon-right">
                        <input type="password" class="form-control" placeholder="min 8 Karakter" required minlength="8"
                            name="password">
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
