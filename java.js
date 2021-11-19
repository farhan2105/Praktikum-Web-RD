$(document).ready(function(){
        
    $('#submit').click(function(){
        let data = $('#form_mahasiswa').serialize();
        $.ajax({
            type: "POST",
            url: "CREATE.php",
            data: data,
            cache: false,
            success: function(data) {
                $('#read_data').load("READ.php");
            }
        });
    });

    $('#cancel').click(function() {
        $('#update').hide();
        $('#id').hide();
        $('#id').val('');
    });

    $('#update').click(function() {
        let data = $('#form_mahasiswa').serialize();

        $.ajax({
            type: "POST",
            url: "UPDATE.php",
            data: data,
            cache: false,
            success: function(data){
                $('#read_data').load("READ.php");
            }
        });
    });
    $('#read_data').load("READ.php");

    $('#delete').click(function(){

        let data = $('#delete_data').serialize();
        alert("hapus data"+data);
        console.log(data);
        $.ajax({
            type: "POST",
            url: "DELETE.php",
            data: data,
            cache: false,
            success: function(data){
                $('#read_data').load("READ.php");
            }
        });
        
    });
});