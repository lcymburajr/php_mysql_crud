$(document).ready(function(){
    function getAllUsers() {
        $.ajax({
            type: 'GET',
            url: 'crud/get_user.php',
            success: function(data){
                $('#show-read-results').html(data);
            }
        });
    }

    $('#create-submit-btn').click(function(event) {
        if ($("#create-form-validate").valid()) {
            $.ajax({
                type: 'POST',
                url: 'crud/create_user.php',
                data: {
                    fname: $('.create[name=fname]').val(),
                    lname: $('.create[name=lname]').val()
                },
                success: function(data){
                    $('#show-create-results').html(data);
                    getAllUsers();
                }
            });
        }

    });

    $('#update-submit-btn').click(function(event) {
        if ($("#update-form-validate").valid()) {
            $.ajax({
                type: 'POST',
                url: 'crud/update_user.php',
                data: {
                    fname: $('.update[name=fname]').val(),
                    lname: $('.update[name=lname]').val(),
                    update_fname: $('.update[name=update_fname]').val(),
                    update_lname: $('.update[name=update_lname]').val()
                },
                success: function(data){
                    $('#show-update-results').html(data);
                    getAllUsers();
                }
            });
        }
    });

    $('#delete-submit-btn').click(function(event) {
        if ($("#delete-form-validate").valid()) {
            $.ajax({
                type: 'POST',
                url: 'crud/delete_user.php',
                data: {
                    fname: $('.delete[name=fname]').val(),
                    lname: $('.delete[name=lname]').val()
                },
                success: function(data){
                    $('#show-delete-results').html(data);
                    getAllUsers();
                }
            });
        }

    });

    getAllUsers();
});