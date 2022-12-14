if (document.getElementById("mapa_contato")) {
    function init_map1() {
	var myLocation = new google.maps.LatLng(-7.040972, -55.421295);
	var mapOptions = {
	    center: myLocation,
	    zoom: 16
	};
	var marker = new google.maps.Marker({
	    position: myLocation,
	});
	var map = new google.maps.Map(document.getElementById("mapa_contato"),
		mapOptions);
	marker.setMap(map);
    }
    init_map1();
}

//oculta o arlert de mensagem
$("[data-hide]").on("click", function () {
    $("#alert-msg").toggle().addClass('oculta');
});

$(document).ready(function () {
    $('.input-data').mask("99/99/9999");
    $('.input-cpf').mask("999.999.999-99");
})