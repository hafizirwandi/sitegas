 <!-- Blog Edit -->
 <div class="blog-edit-wrapper">
     <div class="row">
         <div class="col-12">
             <div class="card">
                 <div class="card-body">

                     <!-- Form -->
                     <form class="mt-2" method="post" action="<?= site_url('slideshow/save') ?>" enctype="multipart/form-data">
                         <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                         <input type="hidden" name="slideshow" value="<?= $data['slideshow'] ?>" />
                         <input type="hidden" name="id_slideshow" value="<?= $data['id_slideshow'] ?>" />
                         <div class="row">
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label">Judul</label>
                                     <input type="text" name="judul" class="form-control" value="<?= $data['judul'] ?>" required />
                                 </div>
                             </div>
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label">Sub Judul</label>
                                     <input type="text" name="sub_judul" class="form-control" value="<?= $data['sub_judul'] ?>" required />
                                 </div>
                             </div>

                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-position">Posisi</label>
                                     <input type="number" name="posisi" value="<?= $data['posisi'] ?>" class="form-control" />
                                 </div>
                             </div>
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-status">Status</label>
                                     <select class="form-select" name="status" required>
                                         <option value="1" <?= $data['status'] == '1' ? 'selected' : '' ?>>Aktif</option>
                                         <option value="0" <?= $data['status'] == '0' ? 'selected' : '' ?>>Non Aktif</option>
                                     </select>
                                 </div>
                             </div>
                             <div id="blog-editor-wrapper" style="display: none;">
                                 <div id="blog-editor-container">
                                     <div class="editor">

                                     </div>
                                 </div>
                             </div>

                             <div class="col-12 mb-2">
                                 <div class="border rounded p-2">
                                     <h4 class="mb-1">Slideshow</h4>
                                     <div class="d-flex flex-column flex-md-row">
                                         <img src="<?= base_url('uploads/slideshow/') . $data['slideshow'] ?>" id="blog-feature-image" class="rounded me-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                         <div class="featured-info">
                                             <small class="text-muted">Required image resolution 1920x785, image size 10mb.</small>
                                             <p class="my-50">
                                                 <a href="#" id="blog-image-text">C:\fakepath\banner.jpg</a>
                                             </p>
                                             <div class="d-inline-block">
                                                 <input class="form-control" type="file" id="blogCustomFile" name="file_slideshow" accept="image/*" />
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-12 mt-50">
                                 <button type="submit" class="btn btn-primary me-1">Save Changes</button>
                                 <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                             </div>
                         </div>
                     </form>
                     <!--/ Form -->
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--/ Blog Edit -->