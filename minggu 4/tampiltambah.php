<div id="daftar">
    <form method="post" id="form_mahasiswa">
        <table>
            <tr>
                <td>NIM: </td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>Nama: </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Prodi: </td>
                <td>
                    <select name="prodi">
                        <option value="IF">Teknik Informatika</option>
                        <option value="EL">Teknik Elektro</option>
                        <option value="SI">Teknik Sipil</option>
                        <option value="TG">Teknik Geofisika</option>
                        <option value="MA">Matematika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Angkatan: </td>
                <td><input type="number" name="angkatan"></td>
            </tr>
        </table>
    </form>
</div>
<button id="btn_tambah">Tambahkan Data</button>
<script>
    $(document).ready(function(){
        $('#btn_tambah').click(function(){
            var data = $('#form_mahasiswa').serialize();
            $.ajax({
                type    : 'POST',
                url     : "tambah.php",
                data    : data,
                cache   : false,
                success : function(data){
                    $('#formulir').load("tampiltambah.php")
                    $('#tampil_data').load("tampil.php");
                }
            });
        });
    });
</script>