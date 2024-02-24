 <!-- Blog Edit -->
 <div class="blog-edit-wrapper">
     <div class="row">
         <div class="col-12">
             <div class="card">
                 <div class="card-body">

                     <!-- Form -->
                     <form class="mt-2" method="post" action="<?= site_url('artikel/save') ?>" enctype="multipart/form-data">
                         <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                         <input type="hidden" name="gambar_utama" value="<?= $data['gambar_utama'] ?>" />
                         <input type="hidden" name="id_artikel" value="<?= $data['id_artikel'] ?>" />
                         <div class="row">
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-title">Title</label>
                                     <input type="text" name="judul" value="<?= $data['judul'] ?>" class="form-control" required />
                                 </div>
                             </div>
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-status">Kab Kota</label>
                                     <select class="form-select" name="id_kk" id="blog-edit-status" required>
                                         <?php foreach ($kabkota as $r) : ?>
                                             <option value="<?= $r['id_kk'] ?>" <?= $r['id_kk'] == $data['id_kk'] ? 'selected' : '' ?>><?= $r['nama_kab_kota'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-category">Published Time</label>
                                     <input type="datetime-local" name="published_at" value="<?= $data['published_at'] ?>" class="form-control" required />
                                 </div>
                             </div>
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-category">Category</label>
                                     <select id="blog-edit-category" class="select2 form-select" name="id_kategori[]" multiple required>
                                         <?php foreach ($kategori as $r) : ?>

                                             <option value="<?= $r['id_kategori'] ?>" <?php foreach ($kategori1 as $j) : ?> <?= $r['id_kategori'] == $j['id_kategori'] ? 'selected' : '' ?> <?php endforeach; ?>>
                                                 <?= $r['nama_kategori'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-slug">Slug</label>
                                     <input type="text" id="blog-edit-slug" name="slug" value="<?= $data['slug'] ?>" class="form-control" />
                                     <small class="text-danger">Kosongkan jika tidak ingin di kustom</small>
                                 </div>

                             </div>
                             <div class="col-md-6 col-12">
                                 <?php if ($this->session->userdata('role') == '1') : ?>
                                     <div class="mb-2">
                                         <label class="form-label" for="blog-edit-status">Status</label>
                                         <select class="form-select" name="status" id="blog-edit-status" required>
                                             <option value="1" <?= $data['status'] == '1' ? 'selected' : '' ?>>Published</option>
                                             <option value="2" <?= $data['status'] == '2' ? 'selected' : '' ?>>Pending</option>

                                             <option value="3" <?= $data['status'] == '3' ? 'selected' : '' ?>>Ditolak</option>
                                         </select>
                                     </div>
                                 <?php endif; ?>
                                 <?php if ($this->session->userdata('role') == '1') : ?>
                                     <input type="hidden" name="status" value="<?= $data['status'] ?>">
                                 <?php endif; ?>
                             </div>
                             <div class="col-12">
                                 <div class="mb-2">
                                     <label class="form-label">Content</label>
                                     <div id="blog-editor-wrapper">
                                         <div id="blog-editor-container">
                                             <div class="editor">
                                                 <?= $data['artikel'] ?>
                                             </div>
                                         </div>
                                     </div>
                                     <textarea name="artikel" style="display: none;" id="editorQuill" cols="30" rows="10"><?= $data['artikel'] ?></textarea>

                                 </div>
                             </div>
                             <div class="col-12 mb-2">
                                 <div class="border rounded p-2">
                                     <h4 class="mb-1">Featured Image</h4>
                                     <div class="d-flex flex-column flex-md-row">
                                         <img src="<?= base_url('uploads/artikel/') . $data['gambar_utama'] ?>" id="blog-feature-image" class="rounded me-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                         <div class="featured-info">
                                             <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                             <p class="my-50">
                                                 <a href="#" id="blog-image-text">C:\fakepath\banner.jpg</a>
                                             </p>
                                             <div class="d-inline-block">
                                                 <input class="form-control" type="file" id="blogCustomFile" name="file_gambar_utama" accept="image/*" />
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