<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Absen Harian</h4>
            </div>
            <div class="card-body">
                <table class="table w-100">
                    <thead>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Absen Masuk</th>
                           <th>Selisih Waktu</th>
                        <th>Absen Pulang</th>
                        <th>Selisih Waktu</th>
                    </thead>
                    <tbody>
                        <tr>
                            <?php if(is_weekend()): ?>
                                <td class="bg-light text-danger" colspan="4">Hari ini libur. Tidak Perlu absen</td>
                            <?php else: ?>
                                <?php     $awal  = strtotime('09:00:00'); //waktu awal

                                    $akhir = time(); //waktu akhir
                                    $diff  = $akhir - $awal;
                                    $jam   = floor($diff / (60 * 60));
                                    $menit = $diff - $jam * (60 * 60); ?>

                                        <?php     $awal  = time(); //waktu awal
                                    $akhir = strtotime('17:00:00');//waktu akhir
                                    $diff  = $awal - $akhir;
                                    $jams   = floor($diff / (60 * 60));
                                    $menit = $diff - $jams * (60 * 60); ?>

                                <td><i class="fa fa-3x fa-<?= ($absen < 2) ? "warning text-warning" : "check-circle-o text-success" ?>"></i></td>
                                <td><?= tgl_hari(date('d-m-Y')) ?></td>
                                <td>
                                    <a href="<?= base_url('absensi/absen/masuk') ?>" class="btn btn-primary btn-sm btn-fill"<?= ($absen == 1) ? 'disabled style="cursor:not-allowed"' : '' ?>>Absen Masuk</a>
                                </td>
                                 <td>
                                  <?php  
                                        echo 'Anda Terlambat: ' . $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit'; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('absensi/absen/pulang') ?>" class="btn btn-success btn-sm btn-fill"<?= ($absen !== 1 || $absen == 2) ? 'disabled style="cursor:not-allowed"' : '' ?>>Absen Pulang</a>
                                </td>
                                <td>
                                <?php  
                                        echo  $jams .  ' jam, ' . floor( $menit / 60 ) . ' menit'; ?>
                                </td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>