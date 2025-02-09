
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

      //count men Percentage
      $.ajax({
        
        url: 'http://localhost/HOP_ADMIN/api/members/men_percentage.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data.error) {
                $('#mpercent').text('Error: ' + data.error);
            } else {
                $('#mpercent').text(data.male_percentage+'%');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#mpercent').text('AJAX Error: ' + textStatus);
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

//women percentage
    $.ajax({
        url: 'http://localhost/HOP_ADMIN/api/members/women_percentage.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          
            if (data.error) {
                $('#wmpercent').text('Error: ' + data.error);
            } else {
                // Ensure the correct key is used
                let percentage = data.female_percentage || 'Invalid Data';
                $('#wmpercent').text(percentage + '%');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("AJAX Error:", textStatus, errorThrown, jqXHR.responseText);
            $('#wmpercent').text('AJAX Error: ' + textStatus);
        }
    });

       //count youth
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
//youth percentage
    $.ajax({
        url: 'http://localhost/HOP_ADMIN/api/members/youth_percentage.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          
            if (data.error) {
                $('#ypercent').text('Error: ' + data.error);
            } else {
                // Ensure the correct key is used
                let percentage = data.youth_percentage || 'Invalid Data';
                $('#ypercent').text(percentage + '%');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("AJAX Error:", textStatus, errorThrown, jqXHR.responseText);
            $('#ypercent').text('AJAX Error: ' + textStatus);
        }
    });


    //percentage growth%
    $.ajax({
        url: 'http://localhost/HOP_ADMIN/api/members/youth_percentage.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          
            if (data.error) {
                $('#growthd').text('Error: ' + data.error);
            } else {
                // Ensure the correct key is used
                let percentage = data.percentage_difference || 'Invalid Data';
                $('#perdiff').text(percentage + '%');
                $("growthd").text(data.difference);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("AJAX Error:", textStatus, errorThrown, jqXHR.responseText);
            $('#growthd').text('AJAX Error: ' + textStatus);
        }
    });


});
