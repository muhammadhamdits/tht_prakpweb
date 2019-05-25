<?php require_once("../_template/_header.php") ?>
                    Grafik
                </h3>
            </nav>
        </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="row mt-5">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="row mt-3">
                        <div class="col-lg-4 mt-2">
                            <div class="card ">
                                <div class="card-header bg-success text-white">
                                    Bar Chart
                                </div>
                                <div class="card-body">
                                    <canvas id="bar"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card ">
                                <div class="card-header bg-success text-white">
                                    Pie Chart
                                </div>
                                <div class="card-body">
                                    <canvas id="pie"></canvas>
                                </div>
                            </div>    
                        </div>
                        <div class="col-lg-4 mt-2">
                            <div class="card ">
                                <div class="card-header bg-success text-white">
                                    Line Chart
                                </div>
                                <div class="card-body">
                                    <canvas id="line"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $tahun      = mysqli_query($koneksi, "SELECT tahun FROM grafik ORDER BY id ASC");
        $tahun1      = mysqli_query($koneksi, "SELECT tahun FROM grafik ORDER BY id ASC");
        $tahun2      = mysqli_query($koneksi, "SELECT tahun FROM grafik ORDER BY id ASC");
        $penjualan  = mysqli_query($koneksi, "SELECT penjualan FROM grafik ORDER BY id ASC");
        $penjualan1  = mysqli_query($koneksi, "SELECT penjualan FROM grafik ORDER BY id ASC");
        $penjualan2  = mysqli_query($koneksi, "SELECT penjualan FROM grafik ORDER BY id ASC");
    ?>

    <!-- JavaScript -->
    <script>
        var bar = document.getElementById("bar");
        var pie = document.getElementById("pie");
        var line = document.getElementById("line");

        var barChart = new Chart(bar, {
            type: 'bar',
            data: {
                    labels: [<?php while ($b = mysqli_fetch_array($tahun)) { echo '"' . $b['tahun'] . '",';}?>],
                    datasets: [{
                            label: 'Penjualan',
                            data: [<?php while ($p = mysqli_fetch_array($penjualan)) { echo '"' . $p['penjualan'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 0, 0, 0.2)',
                                'rgba(0, 255, 0, 0.2)',
                                'rgba(0, 0, 255, 0.2)',
                                'rgba(255, 255, 0, 0.2)',
                                'rgba(0, 255, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 0, 0, 1)',
                                'rgba(0, 255, 0, 1)',
                                'rgba(0, 0, 255, 1)',
                                'rgba(255, 255, 0, 1)',
                                'rgba(0, 255, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
        });

        var pieChart = new Chart(pie, {
            type: 'pie',
            data: {
                    labels: [<?php while ($b = mysqli_fetch_array($tahun1)) { echo '"' . $b['tahun'] . '",';}?>],
                    datasets: [{
                            label: 'Penjualan',
                            data: [<?php while ($p = mysqli_fetch_array($penjualan1)) { echo '"' . $p['penjualan'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 0, 0, 0.2)',
                                'rgba(0, 255, 0, 0.2)',
                                'rgba(0, 0, 255, 0.2)',
                                'rgba(255, 255, 0, 0.2)',
                                'rgba(0, 255, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 0, 0, 1)',
                                'rgba(0, 255, 0, 1)',
                                'rgba(0, 0, 255, 1)',
                                'rgba(255, 255, 0, 1)',
                                'rgba(0, 255, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
        });
        
        var lineChart = new Chart(line, {
            type: 'line',
            data: {
                    labels: [<?php while ($b = mysqli_fetch_array($tahun2)) { echo '"' . $b['tahun'] . '",';}?>],
                    datasets: [{
                            label: 'Penjualan',
                            data: [<?php while ($p = mysqli_fetch_array($penjualan2)) { echo '"' . $p['penjualan'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 0, 0, 0.2)',
                                'rgba(0, 255, 0, 0.2)',
                                'rgba(0, 0, 255, 0.2)',
                                'rgba(255, 255, 0, 0.2)',
                                'rgba(0, 255, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 0, 0, 1)',
                                'rgba(0, 255, 0, 1)',
                                'rgba(0, 0, 255, 1)',
                                'rgba(255, 255, 0, 1)',
                                'rgba(0, 255, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
        });
    </script>

<?php require_once("../_template/_footer.php") ?>