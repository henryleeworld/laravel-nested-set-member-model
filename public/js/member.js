$(function() {
    $('#org-chart').orgchart({
        'data': '../../ajax/member/relationship/' + ($.url()).segment(3),
		'nodeTitle': 'id',
        'nodeContent': 'name',
        'nodeID': 'id',
        // 'direction': 'l2r'
    });
});