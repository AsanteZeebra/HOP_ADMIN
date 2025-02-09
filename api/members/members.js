
$(document).ready(function() {
    //count all
    $.ajax({

        url: 'http://localhost/HOP_ADMIN/api/members/count_members.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data.error) {
                $('#ctotal').text('Error: ' + data.error);
            } else {
                $('#ctotal').text(data.total_members);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#ctotal').text('AJAX Error: ' + textStatus);
        }
    });

//count Men
    $.ajax({
        
        url: 'http://localhost/HOP_ADMIN/api/members/count_men.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data.error) {
                $('#tmen').text('Error: ' + data.error);
            } else {
                $('#tmen').text(data.total_members);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#tmen').text('AJAX Error: ' + textStatus);
        }
    });


    //count women
    $.ajax({
        
        url: 'http://localhost/HOP_ADMIN/api/members/count_women.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data.error) {
                $('#twmen').text('Error: ' + data.error);
            } else {
                $('#twmen').text(data.total_members);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#wtmen').text('AJAX Error: ' + textStatus);
        }
    });

       //count women
       $.ajax({
        
        url: 'http://localhost/HOP_ADMIN/api/members/count_youth.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data.error) {
                $('#tyouth').text('Error: ' + data.error);
            } else {
                $('#tyouth').text(data.total_members);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#tyouth').text('AJAX Error: ' + textStatus);
        }
    });


});
