<!DOCTYPE html>
<html><head></head><body>
    <h3>
        <center>DAFTAR SUARA PEMILIH KETUA HIMATEKNO TAHUN 2022</center>
    </h3>
    <table class="table table-bordered text-center " width="100%" style="text-align: left;">
        <thead class="">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pemilih</th>
                <th scope="col">Kandidat Yang Dipilih</th>
                <th scope="col">Tanggal Pemilihan</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($rows as $row): ?>
                <tr>

                    <td scope="col"><?php echo $no++; ?></td>
                    <td scope="col"><?php echo $row->nama; ?></td>
                    <td scope="col"><?php echo $row->nama_kandidat; ?></td>
                    <td scope="col"><?php echo $row->created; ?></td>

                </tr>
            <?php endforeach;
            ?>


        </tbody>
    </table>

</body></html>