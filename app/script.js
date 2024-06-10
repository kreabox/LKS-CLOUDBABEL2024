const hapus_sekolah = (id) => {
    if(confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?') == true ){
        $.ajax({
            url: '../services/hapus_sekolah.php',
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
const hapus_guru = (id) => {
    if(confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?') == true ){
        $.ajax({
            url: '../services/hapus_guru.php',
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
