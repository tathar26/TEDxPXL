function venster(file, breedte, hoogte) {
	var br = breedte;
	var hg = hoogte;
	
	var specs = "width="+br+"px, height="+hg+"px, ";
	window.open(file, "_blank", specs);
}
function sluit() {
	window.opener.location.reload(true);
}