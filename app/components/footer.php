<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    const hapus_user = (id) => {
        if(confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?') == true ){
            $.ajax({
                url: '../services/hapus_user.php',
                type: 'POST',
                data : {
                    id: id
                },
                success: (res)=> {
                    console.log(res);
                    alert('Data Berhasil Dihapus');
                    window.location.reload();
                },
                error: (err)=> {
                    console.log(err);
                    alert('Gagal Melakukan Hapus Data');
                }
            });
        }
    }
</script>
</body>
</html>