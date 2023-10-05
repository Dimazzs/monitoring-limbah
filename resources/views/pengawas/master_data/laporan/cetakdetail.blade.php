
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Acara</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px; /* Jarak antara Berita Acara dan Detail Laporan */
        }

        .card-header {
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
        }

        .card-title {
            font-size: 1.5rem;
            margin: 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .table th {
            text-align: left;
        }

        .table td {
            font-weight: bold;
        }

        .table td:last-child {
            font-weight: normal;
        }

        @media print {
            .container {
                text-align: left;
                page-break-before: always; /* Membuat halaman baru sebelum detail laporan */
            }

            .card {
                box-shadow: none;
                border: none;
            }
        }
    </style>
</head>

<body>
    <div class="container" id="printTable">
        <div class="row justify-content-center">
         
            <h3>BERITA ACARA</h3>
            <h3>PENGAWASAN/MONITORING KINERJA </h3>
            <h3>PENGELOLAAN LINGKUNGAN</h3>
            <hr>
            <p>Pada hari ini tanggal ... Bulan ... Tahun ..., kami yang bertandatangan di bawah ini adalah Tim Monitoring/Pengawasan Pengelolaan Lingkungan Hidup dari Dinas Lingkungan Hidup Kab.Serang, telah mengadakan Monitoring/Pengawasan terhadap kinerja pengelolaan lingkungan ke PT. .......... Perkasa yang beralamat di Kec. .......... dengan hasil sebagaimana tertera pada lampiran yang tidak terpisahkan dari Berita Acara ini.</p>
            <p>Berita Acara ini dibuat dengan sesungguhnya sebagai bahan informasi yang menunjukkan kondisi riil mengenai kinerja pengelolaan lingkungan hidup PT. ................. Perkasa yang selanjutnya dapat dijadikan bahan atau acuan dalam upaya mempertahankan, meningkatkan, atau menyelesaikan permasalahan kualitas pengelolaan lingkungan serta kondisi lingkungan hidup di lingkungan perusahaan yang bersangkutan dan/atau lingkungan sekitar yang lebih luas baik oleh pihak perusahaan atau oleh berbagai pihak yang berkompeten.</p>
            <p>Demikian untuk diketahui dan dipergunakan sebagaimana mestinya.</p>

            <p><strong>MENGETAHUI</strong></p>
            <p>Tim Monitoring/Pengawas</p>
            <ol>
                <li>(……….………)</li>
                <li>(……….………)</li>
                <li>(……….………)</li>
            </ol>
        
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Perizinan</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <!-- ... (detail laporan yang sudah ada) ... -->
                            <tr>
                                <th>Perizinan</th>
                                <th>Ada</th>
                                <th>Tidak</th>
                                <th>Nomor dan 
                                    tanggal pengesahan
                                </th>
                                <th>Intansi Penerbit</th>
                                <th>Masa Berlaku</th>
                            </tr>
                            <tr>
                                <td>Dokumen Lingkungan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Izin Lingkungan</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>NIB</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Persetujuan Teknis  Baku Mutu Air Limbah</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>Rekomendasi teknis Pengelolaan Limbah B3 bagi Penghasil Untuk Kegiatan Penyimpanan</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>Rincian Teknis Penyimpanan Limbah B3</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Laporan</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <!-- ... (detail laporan yang sudah ada) ... -->
                            <tr>
                                <th>Nama Pemohon</th>
                                <td>{{ $laporan->pemohon->name }}</td>
                            </tr>
                            <tr>
                                <th>Nama Pengawas</th>
                                <td>{{ $laporan->name_pengawas }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Kegiatan</th>
                                <td>{{ $laporan->pemohon->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <td>{{ $laporan->pemohon->profilePengguna->nama_perusahaan }}</td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td>{{ $laporan->keterangan }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Limbah</th>
                                <td>{{ $laporan->pemohon->jenis_limbah }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk mencetak halaman secara otomatis
        function printPage() {
            window.print(); // Mencetak halaman
            setTimeout(function() {
                window.close(); // Menutup jendela cetak setelah pencetakan selesai (opsional)
            }, 1000);
        }

        // Memanggil fungsi cetak ketika halaman selesai dimuat
        window.onload = function() {
            printPage();
        };
    </script>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Acara</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto; /* Jarak antara Berita Acara dan Detail Laporan */
        }

        .card-header {
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
        }

        .card-title {
            font-size: 1.5rem;
            margin: 0;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #000000;
        }

        .table th {
            text-align: left;
        }

        .table td {
            font-weight: bold;
        }

        .table td:last-child {
            font-weight: normal;
        }

        @media print {
            .container {
                text-align: left;
                page-break-before: always; /* Membuat halaman baru sebelum detail laporan */
            }

            .card {
                box-shadow: none;
                border: none;
            }
        }
    </style>
</head>

<body>
    <div class="container" id="printTable">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">BERITA ACARA</h3>
                        <h3 class="card-title">PENGAWASAN/MONITORING KINERJA</h3>
                        <h3 class="card-title">PENGELOLAAN LINGKUNGAN</h3>
                    </div>
                    <div class="card-body">
                        <p>Pada hari ini tanggal ... Bulan ... Tahun ..., kami yang bertandatangan di bawah ini adalah Tim Monitoring/Pengawasan Pengelolaan Lingkungan Hidup dari Dinas Lingkungan Hidup Kab.Serang, telah mengadakan Monitoring/Pengawasan terhadap kinerja pengelolaan lingkungan ke PT. .......... Perkasa yang beralamat di Kec. .......... dengan hasil sebagaimana tertera pada lampiran yang tidak terpisahkan dari Berita Acara ini.</p>
                        <p>Berita Acara ini dibuat dengan sesungguhnya sebagai bahan informasi yang menunjukkan kondisi riil mengenai kinerja pengelolaan lingkungan hidup PT. ................. Perkasa yang selanjutnya dapat dijadikan bahan atau acuan dalam upaya mempertahankan, meningkatkan, atau menyelesaikan permasalahan kualitas pengelolaan lingkungan serta kondisi lingkungan hidup di lingkungan perusahaan yang bersangkutan dan/atau lingkungan sekitar yang lebih luas baik oleh pihak perusahaan atau oleh berbagai pihak yang berkompeten.</p>
                        <p>Demikian untuk diketahui dan dipergunakan sebagaimana mestinya.</p>

                        <p><strong>MENGETAHUI</strong></p>
                        <p>Tim Monitoring/Pengawas</p>
                        <ol>
                            <li>(……….………)</li>
                            <li>(……….………)</li>
                            <li>(……….………)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ... Detail Perizinan dan Laporan ... -->
    <!-- ... Bagian sebelumnya ... -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Perizinan</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Perizinan</th>
                            <th>Ada</th>
                            <th>Tidak</th>
                            <th>Nomor dan tanggal pengesahan</th>
                            <th>Instansi Penerbit</th>
                            <th>Masa Berlaku</th>
                        </tr>
                        <tr>
                            <td>Dokumen Lingkungan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Izin Lingkungan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>NIB</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Persetujuan Teknis  Baku Mutu Air Limbah</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Rekomendasi teknis Pengelolaan Limbah B3 bagi Penghasil Untuk Kegiatan Penyimpanan</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Rincian Teknis Penyimpanan Limbah B3</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <!-- ... Lanjutan bagian perizinan ... -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kelengkapan</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>Kesesuaian</tr>
                        <tr>
                                <th>Sesuai</th>
                                <th>Tidak</th>
                          
                            <th>Penjelasan</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Kapasitas produksi rill sudah melebihi kapasitas dari dokumen lingkungan yang dimiliki.</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Luas lahan dan bangunan masih sesuai dengan dokumen lingkungan.</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Dalam dokumen terdapat IPAL untuk mengolah air limbah, namun kondisi riil IPAL tidak berfungsi karena tertimbun longsoran,sehingga air limpasan dari silo mengalir ke saluran drainase darurat  yang mengalir ke kobakan akhir</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Penggunaan IPAL tidak sesuai dengan Denah penggunaan lahan sebagaimana tercantum dalam dokumen lingkungan.</th>
                        </tr>
                        <!-- ... Lanjutan bagian perizinan ... -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Laporan</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Nama Pemohon</th>
                            <td>{{ $laporan->pemohon->name }}</td>
                        </tr>
                        <tr>
                            <th>Nama Pengawas</th>
                            <td>{{ $laporan->name_pengawas }}</td>
                        </tr>
                        <tr>
                            <th>Alamat Kegiatan</th>
                            <td>{{ $laporan->pemohon->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <td>{{ $laporan->pemohon->profilePengguna->nama_perusahaan }}</td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>{{ $laporan->keterangan }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Limbah</th>
                            <td>{{ $laporan->pemohon->jenis_limbah }}</td>
                        </tr>
                        <!-- ... Lanjutan bagian laporan ... -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... Bagian selanjutnya ... -->


    <script>
        // Fungsi untuk mencetak halaman secara otomatis
        function printPage() {
            window.print(); // Mencetak halaman
            setTimeout(function() {
                window.close(); // Menutup jendela cetak setelah pencetakan selesai (opsional)
            }, 1000);
        }

        // Memanggil fungsi cetak ketika halaman selesai dimuat
        window.onload = function() {
            printPage();
        };
    </script>
</body>

</html>
