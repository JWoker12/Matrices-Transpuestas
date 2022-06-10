$().ready(function(){
    $('form').hide();
    $('#generate').click(function(){
        $('#form').show();
    });
    $('#loadMatrix').click(function(event){
        $("#form").validate({
            rules: {
                row : {
                    required: true,
                    max: 10
                },
                column: {
                    required: true,
                    max: 10
                }
            },
            messages: {
                row : {
                    required: "This field is necessary for the calculation of the matrix",
                    max: "Numerical value between 1 to 10"
                },
                column: {
                    required: "This field is necessary for the calculation of the matrix",
                    max: "Numerical value between 1 to 10"
                }
            }
        });
        let row = $('#row').val();
        let column = $('#column').val();
        let matrix = [];
        $.ajax({
            url: "generate.php",
            type: "POST",
            data:  { row, column },
            success: function(response){
                $('#Matrix').remove();
                $('#formMatrix').remove();
                $('body').append(response);
                $('#result').click(function(event){
                    $("#formMatrix input").each(function(){
                        matrix[this.name] = this.value;
                    });
                    matrixTranspuesta(matrix, row, column);
                });
            },
            error: function(error){
                console.log('error '+error);
            }
        });
    });
    function matrixTranspuesta(matrix, row, column) {
        matrix = Object.entries(matrix);
        $.ajax({
            url: "generate.php",
            type: "POST",
            data:  { matrix, row, column },
            success: function(response){
                $('#Matrix').remove();
                $('body').append(response);
            },
            error: function(error){
                console.log('Error ' + error);
            }
        });
    }
});