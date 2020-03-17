function prevedi() {
    $('#sPrevod').val('loading..');

	var tSa 		= document.getElementById('tSa').value;
	var tNa 		= document.getElementById('tNa').value;
	var tZaPrevod 	= document.getElementById('tZaPrevod').value;

	if (tSa == '' || tNa == '') {
		// Default;
		var tSa = 'rs';
		var tNa = 'en';
	}

	if (tZaPrevod == '') {
		return false;
	}

	// Posaji ajax request sa sektorom;
    let formData = new FormData();
    formData.append('tSa', tSa);
    formData.append('tNa', tNa);
    formData.append('text', tZaPrevod);

    $.ajax({
        url        : '/process?translate',
        type       : 'POST',
        contentType: false,
        cache      : false,
        processData: false,
        data       : formData,
        success    : function ( response ) {
            var s = JSON.parse(response);
            if (s[0] == 'success') {
				$('#sPrevod').val(s[1]);      
            } else if(s[0] == 'msg') {
                alert(s[1]);
            }
            return false;
        },
        error: function (err) {
           return false;
        }
    });
}