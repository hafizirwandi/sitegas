 <!-- Blog Edit -->
 <div class="blog-edit-wrapper">
     <div class="row">
         <div class="col-12">
             <div class="card">
                 <div class="card-body">

                     <!-- Form -->
                     <form class="mt-2" method="post" action="<?= site_url('artikel/save') ?>" enctype="multipart/form-data">
                         <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                         <input type="hidden" name="gambar_utama" value="" />
                         <input type="hidden" name="id_artikel" value="" />
                         <div class="row">
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-title">Title</label>
                                     <input type="text" name="judul" id="blog-edit-title" class="form-control" />
                                 </div>
                             </div>
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-category">Category</label>
                                     <select id="blog-edit-category" class="select2 form-select" name="id_kategori[]" multiple>
                                         <?php foreach ($kategori as $r) : ?>
                                             <option value="<?= $r['id_kategori'] ?>"><?= $r['nama_kategori'] ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-slug">Slug</label>
                                     <input type="text" id="blog-edit-slug" name="slug" class="form-control" />
                                 </div>
                             </div>
                             <div class="col-md-6 col-12">
                                 <div class="mb-2">
                                     <label class="form-label" for="blog-edit-status">Status</label>
                                     <select class="form-select" name="status" id="blog-edit-status">
                                         <option value="1">Published</option>
                                         <option value="2">Pending</option>
                                         <option value="0">Draft</option>
                                         <option value="3">Ditolak</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <div class="mb-2">
                                     <label class="form-label">Content</label>
                                     <div id="blog-editor-wrapper">
                                         <div id="blog-editor-container">
                                             <div class="editor">

                                             </div>
                                         </div>
                                     </div>
                                     <textarea name="artikel" style="display: none;" id="editorQuill" cols="30" rows="10"></textarea>

                                 </div>
                             </div>
                             <div class="col-12 mb-2">
                                 <div class="border rounded p-2">
                                     <h4 class="mb-1">Featured Image</h4>
                                     <div class="d-flex flex-column flex-md-row">
                                         <img src="<?= base_url('assets-admin/images.png') ?>" id="blog-feature-image" class="rounded me-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
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