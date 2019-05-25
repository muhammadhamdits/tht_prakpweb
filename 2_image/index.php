<?php require_once("../_template/_header.php"); ?>
                    Image
                </h3>
            </nav>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="row mt-4 mb-1">
                <div class="col-9"></div>
                <div class="col-2">
                    <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">Add Image</button>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="row mb-5">
                        <?php
                            $kueri = "SELECT * FROM image";
                            $sql = mysqli_query($koneksi, $kueri);
                            $i = 1;
                            while($gbr = mysqli_fetch_object($sql)):
                        ?>
                                <div class="col-lg-4 mt-2">
                                    <div class="card ">
                                        <div class="card-header bg-success text-white">
                                            Gambar <?= $i; ?>
                                        </div>
                                        <div class="card-body">
                                            <img class="card-img-top" src="../assets/images/<?= $gbr->gambar; ?>" width=100% height=200px>
                                            <div class="row text-center mt-2">
                                                <div class="col-12">
                                                    <button class="btn btn-info" data-toggle="modal" data-target="#editModal<?= $i; ?>">Edit</button>
                                                    <div class="modal fade" id="editModal<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="editModal<?= $i; ?>Label" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModal<?= $i; ?>Label">Edit Image</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="edit.php" method="post" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="gambar" class="form-label">Gambar : </label>
                                                                            <input type="hidden" name="id" value="<?= $gbr->id; ?>">
                                                                            <input type="file" name="foto" id="gambar" class="form-control" required>
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-success" href="../assets/images/<?= $gbr->gambar; ?>" download>Download</a>
                                                    <a class="btn btn-danger" href="del.php?id=<?= $gbr->id; ?>" onclick="return confirm('Anda yakin menghapus foto ini?')">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            $i++;
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once("../_template/_footer.php"); ?>