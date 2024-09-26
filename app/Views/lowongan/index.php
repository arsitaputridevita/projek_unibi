<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<br>
        <h3>penerimaan lowongan pekerjaan</h3>
        <?php if (session()->getFlashdata('pesan')): ?>
            <div class="alert alert-success" role="alert">
                <?=session()->getFlashdata('pesan');?>
            </div>
        <?php endif?>
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <a href="/lowongan/create" class="btn" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>&nbsp;&nbsp;&nbsp;&nbsp; 
                    TAMBAH LOWONGAN
                </a>
                <br>
                <br>
                <div class="card" style="width: 70rem">
                    <div class="card">
                        <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama tes</th>
                                <th>is_online</th>
                                <th>is_wawancara</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php $i = 1; ?>
                <?php foreach($lowongan as $k) : ?>
                <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $k['nama']; ?></td>
                <td>
                    <a href="/lowongan" class="btn btn-primary">Detail</a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?= $this->endsection();?>