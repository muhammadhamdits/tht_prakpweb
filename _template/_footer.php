    <div style="position: fixed; bottom: 0; width: 100%">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card-footer bg-success mt-4 text-white text-center" >
                    Copyright &copy; 2019 Muhammad Hamdi
                </div>
            </div>
        </div>
    </div>
    

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="tambah.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="gambar" class="form-label">Gambar : </label>
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

    

    <script src="../assets/jquery-3.3.1.min.js"></script>
    <script src="../assets/popper.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
</body>
</html>