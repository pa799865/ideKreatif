<?php 
include '.includes/header.php';
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-10">
            <div class="card-mb-4">
                <div class="card-body">
                    <form method="POST" action="proses_post.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="pots_title" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="post_title" required>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Unggah Gambar</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Kategori</label>
                            <select name="category_id" required class="form-select">
                                <option value="" selected disabled>Pilih Salah Satu</option>
                                <?php
                                $query = "SELECT * FROM categories";
                                $result = $conn->query($query);
                                if ($result ->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option value='".$row['category_id']."'>".$row['category_name']."</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Konten</label>
                            <textarea name="content" class="form-control" id="content" required></textarea>
                        </div>
                        <button type="submit" name="simpan" class="btn btn-primary">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include '.includes/footer.php';
?>