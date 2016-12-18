function getStates($url, $pref){
    var id = $('#' + $pref + 'UserCountryId').val();
    $.ajax({
        type: 'POST',
        url: $url,
        data: {country_id: id},
        async: false,
        success: function(data){
            data = jQuery.parseJSON(data);
            $('#' + $pref + 'UserStateId').html('');
            $('#' + $pref + 'UserStateId').append('<option value="">-- Seleccione Estado/Región --</option>');
            $('#' + $pref + 'UserCityId').html('');
            $('#' + $pref + 'UserCityId').append('<option value="">-- Seleccione Ciudad --</option>');
            $.each(data, function(key, value) 
            {
                $('#' + $pref + 'UserStateId').append('<option value=' + key + '>' + value + '</option>');
            });
        },
        error: function (xhr, textStatus, error) {
            console.log(error);
        }
    });
}

function getCities($url, $pref){
    var id = $('#' + $pref + 'UserStateId').val();
    $.ajax({
        type: 'POST',
        url: $url,
        data: {state_id: id},
        async: false,
        success: function(data){
            data = jQuery.parseJSON(data);
            $('#' + $pref + 'UserCityId').html('');
            $('#' + $pref + 'UserCityId').append('<option value="">-- Seleccione Ciudad --</option>');
            $.each(data, function(key, value) 
            {
                $('#' + $pref + 'UserCityId').append('<option value=' + key + '>' + value + '</option>');
            });
        },
        error: function (xhr, textStatus, error) {
            console.log(error);
        }
    });
}