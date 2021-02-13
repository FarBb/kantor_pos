<title><?= $header ?></title>

<?php echo form_open('cari_pos/proses', '', array('id' => $cari->id_pos)); ?>

<table>
    <tr>
        <td>ID POS</td>
        <td>:</td>
        <td>
            <?php echo form_input('id_pos', $cari->id_pos, 'required="required"'); ?>
        </td>
    </tr>
    <tr>
        <td>NAMA POS</td>
        <td>:</td>
        <td>
            <?php echo form_input('nama_pos', $cari->nama_pos, 'required="required"'); ?>
        </td>
    </tr>
    <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td>
            <?php echo form_input('alamat', $cari->alamat, 'required="required"'); ?>
        </td>
    </tr>
    <tr>
        <td>KOTA</td>
        <td>:</td>
        <td>
            <?php echo form_input('kota', $cari->kota, 'required="required"'); ?>
        </td>
    </tr>
    <tr>
        <td>JAM OPERASIONAL</td>
        <td>:</td>
        <td>
            <?php echo form_input('jam_op', $cari->jam_operasional, ''); ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <?php echo form_input(array('type' => 'submit', 'name' => 'edit', 'value' => 'Edit Data')); ?>
        </td>
    </tr>
</table>
<?php echo form_close(); ?>