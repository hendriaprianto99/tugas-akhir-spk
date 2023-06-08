<div class="panel-top">
    <b class="text-green"><i class=""></i>Masukan jenis kaktus</b>
</div>
<form id="form" method="POST" action="./proses/prosestambah.php">
    <input type="hidden" name="op" value="barang">
    <div class="panel-middle">
        <div class="group-input">
            <label for="barang" >Nama Kaktus:</label>
            <input type="text" class="form-custom" required autocomplete="off" placeholder="Nama Kaktus" id="barang" name="barang">
        </div>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-green"><i class=""></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-second">Reset</button>
    </div>
</form>