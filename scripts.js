$(document).ready(function(){
        $('.custom-file-input input[type="file"]').change(function(e){
            $(this).siblings('input[type="text"]').val(e.target.files[0].name);
        });
    });
