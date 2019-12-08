function link_new_tab(url) {
	uri = url;	
	window.open(uri,'_blank', 'directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0,scrollbars=no,resizable=no, width=770, height=500, top=20, left=80');
}

function link_to(url) {
	location.href = base_url + url;
}

function link_detail(url, id) {
	location.href = base_url + url + "/detail-data/" + id;
}

function link_preview(url, id) {
	uri = base_url + url + "/preview-data/" + id;	
	window.open(uri,'_blank', 'directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0,scrollbars=no,resizable=no, width=770, height=500, top=20, left=80');
}

function link_pdf(url) {
	location.href = base_url + "report/" + url + "/export-to-pdf";
}

function link_excel(url) {
	location.href = base_url + "report/" + url + "/export-to-excel";
}

function link_download(url, file) {
	uri = base_url + 'assets/uploads/' + url + '/' + file;	
	window.open(uri,'_self', 'directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0,scrollbars=no,resizable=no, width=600, height=400, top=20, left=80');
}

function link_add(url) {
	location.href = base_url + url + "/add-data";
}

function link_edit(url, id) {
	location.href = base_url + url + "/edit-data/" + id;
}

function link_delete(url, id) {
	location.href = base_url + url + "/delete-data/" + id;
}

function link_delete_detail(url, id) {
	location.href = base_url + url + "/delete-detail-data/" + id;
}

function edit_data(url, id) {
	$('#modal-edit').modal()                      
	$('#modal-edit').modal({ keyboard: false })   
	$('#modal-edit').modal('show')                
	
	$('#edit-yes').click(
		function() {
			link_edit(url, id);
		}
	);
	
	return false;
}

function delete_data(url, id) {
	$('#modal-delete').modal()                      
	$('#modal-delete').modal({ keyboard: false })   
	$('#modal-delete').modal('show')                
	
	$('#delete-yes').click(
		function() {
			link_delete(url, id);
		}
	);
	
	return false;
}

function delete_detail_data(url, id) {
	$('#modal-delete').modal()                      
	$('#modal-delete').modal({ keyboard: false })   
	$('#modal-delete').modal('show')                
	
	$('#delete-yes').click(
		function() {
			link_delete_detail(url, id);
		}
	);
}

function show_message(message) {
	$("#validate-message").html(message);
	
	$('#modal-message').modal()                      
	$('#modal-message').modal({ keyboard: false })   
	$('#modal-message').modal('show')                
}

function delete_to(url, id) {
	$('#modal-delete').modal()                      
	$('#modal-delete').modal({ keyboard: false })   
	$('#modal-delete').modal('show')                
	
	$('#delete-yes').click(
		function() {
			link_to(url);
		}
	);
	
	return false;
}