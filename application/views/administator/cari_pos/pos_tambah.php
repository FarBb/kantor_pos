<title><?= $header ?></title>

<?php echo form_open('cari_pos/proses'); ?>

<table>
    <tr>
        <td>ID POS</td>
        <td>:</td>
        <td>
            <?php echo form_input('id_pos', '', 'required="required"'); ?>
        </td>
    </tr>
    <tr>
        <td>NAMA POS</td>
        <td>:</td>
        <td>
            <?php echo form_input('nama_pos', '', 'required="required"'); ?>
        </td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td>
            <?php echo form_input('alamat', '', 'required="required"'); ?>
        </td>
    </tr>
    <tr>
        <td>KOTA</td>
        <td>:</td>
        <td>
            <?php echo form_input('kota', '', 'required="required"'); ?>
        </td>
    </tr>
    <tr>
        <td>JAM OPERASIONAL</td>
        <td>:</td>
        <td>
            <?php echo form_input('jam_op', '', ''); ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <?php echo form_input(array('type' => 'submit', 'name' => 'add', 'value' => 'Tambah Data')); ?>
        </td>
    </tr>
</table>