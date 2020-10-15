function anggota(){
    $.ajax({    
            url: 'http://localhost/Perpus/api/perpus',
            type: 'GET',
            dataType: 'json',
            success: function (result) {
                let anggota = result;
                $('#anggota').html('');
                if (result.Response == "True") {
                    $.each(anggota, function (i, data){
                        $('#anggota').append(`
                        <tr>
                        <td>`+data.id+`</td>
                        <td>`+data.nama_depan+` `+data.nama_belakang+`</td>
                        <td>`+data.alamat+`</td>
                        <td>`+data.email+`</td>
                        </tr>
                        `);
                    })
                }
                else{
                    $('#anggota').append(`
                        <div class="col-sm-12 text-center">
                            <h1>`+ result.Error + `</h1>
                        </div>
                    `);
                }
            }
    
            
    });              
    
       
    }

windows.onload = anggota();
