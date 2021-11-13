<div id="hapus">
    <form method="post" id="form_mahasiswa">
        <table>
            <tr>
                <td>NIM: </td>
                <td><input type="number" name="nim"></td>
            </tr>
        </table>
    </form>
</div>
<button id="btn_hapus">Hapus Data</button>
<script>
    $(document).ready(function(){
        $('#btn_hapus').click(function(){
            var data = $('#form_mahasiswa').serialize();
            $.ajax({
                type    : 'POST',
                url     : "hapus.php",
                data    : data,
                cache   : false,
                success : function(data){
                    $('#formulir').load("tampilhapus.php")
                    $('#tampil_data').load("tampil.php");
                }
            });
        });
    });
</script>