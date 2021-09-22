<!-- Bagian ini tag head digunakan untuk penampung tag 
<title>, <style>, <meta>, <link>, <script>, and <base>. -->
<?php $this->load->view('Template/Head'); ?>

<!-- Bagian paling atas diweb ini  -->
<?php $this->load->view('Template/Topbar'); ?>

<!-- Menu navigasi dibuat disini -->
<?php $this->load->view('Template/Header', array('data' => '3')); ?>

<div class="section-title">
    <h2>Jadwal Praktik</h2>
</div>

<style>
    .gariscontainer {
        width: 80%;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>



<div class="gariscontainer center">
    <div class="row">
        <div class="col-lg-6">
            <label for="">Tanggal</label>
            <input type="text" placeholder="DD/MM/YYYY" value="<?= date('d-m-Y') ?>" class="form-control" name="tgllahir" id="tgllahir">

        </div>
        <div class="col-lg-6">
            <label for="">Klinik</label>
            <input type="text" placeholder="Pencarian Jadwal Dokter" class="form-control">

        </div>


    </div>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Klinik</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Dokter</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>

</div>

<!-- copyright dari web -->
<?php $this->load->view('Template/Footer'); ?>