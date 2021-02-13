<title><?= $judul ?></title>
<style>
    table.data {
        border-collapse: collapse;
    }

    table.data th,
    td {
        padding: 5px;
    }
</style>


<a href="<?= base_url('cari_pos/add') ?>"><button>Tambah Kantor Pos</button></a>

<table class="data" border="1">
    <tr>
        <th>ID POS</th>
        <th>NAMA POS</th>
        <th>ALAMAT</th>
        <th>KOTA</th>
        <th>JAM OPERASIONAL</th>
        <th>OPSI</th>
    </tr>
    <?php
    $no = 1;
    foreach ($cari_pos as $b => $row) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->nama_pos; ?></td>
            <td><?= $row->alamat; ?></td>
            <td><?= $row->kota; ?></td>
            <td><?= $row->jam_operasional; ?></td>
            <td>
                <a href="<?= site_url('cari_pos/edit/' . $row->id_pos); ?>"><button>Edit</button></a>
                <a href="<?= base_url('cari_pos/delete/' . $row->id_pos); ?>" onclick="return confirm('Yakin Akan Menghapus Data?')"><button>Delete</button></a>
            </td>
        </tr>
    <?php
    } ?>

</table>