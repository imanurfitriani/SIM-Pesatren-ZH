<style>
#id_kecamatan{
    background: none repeat scroll 0 0 #fcfcfc;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-shadow: 0 1px 3px #ddd inset;
    color: #0b0b0b;
    padding: 8px 5px;
    vertical-align: middle;
    width: 85%;
}

</style>
<?php
        echo form_dropdown('kecamatan', $option_kec, '', 'class="form_control" id="id_kecamatan"');
    ?>
