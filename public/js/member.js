$(function() {
    $('#chart-container').append(`<i class="oci oci-spinner spinner"></i>`);
    $.ajax({
            'url': '../../ajax/member/relationship/' + ($.url()).segment(3),
            'dataType': 'json'
        })
        .done(function(data, textStatus, jqXHR) {
            $('#chart-container').orgchart({
                'data': data,
                'nodeTitle': 'id',
                'nodeContent': 'name',
                'nodeID': 'id',
            });
        })
        .always(function() {
            $('#chart-container').children('.spinner').remove();
        });
});