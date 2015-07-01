var token = '609245348.5b9e1e6.ceda4da5604c4f8d8df7255d7465e275';
var usuario= "palmeiradosindios";
var quantidade = 12; //Limite máximo de fotos
var tamanho = "small";

var instagram = function() {
	return {
		init: function() {
			instagram.getUser();
		},
		getUser: function() {
			var getUserURL = 'https://api.instagram.com/v1/users/search?q='+ usuario +'&access_token='+ token +'';
			$.ajax({
				type: "GET",
				dataType: "jsonp",
				cache: false,
				url: getUserURL,
				success: function(data) {
					var getUserID = data.data[0].id;
					instagram.loadImages(getUserID);
				}	
			});
		},
		loadImages: function(userID) {
			var getImagesURL = 'https://api.instagram.com/v1/users/'+ userID +'/media/recent/?access_token='+ token +'';
			$.ajax({
				type: "GET",
				dataType: "jsonp",
				cache: false,
				url: getImagesURL,
				success: function(data) {
					for(var i = 0; i < quantidade; i+=1) {
						if(tamanho == "small") {
							var size = data.data[i].images.thumbnail.url;
						} else if(setSize == "medium") {
							var size = data.data[i].images.low_resolution.url;
						} else {
							var size = data.data[i].images.standard_resolution.url;	
						}
						$(".instagram-box").append("<li><a target='_blank' href='" + data.data[i].link +"'><img class='img-insta img-rounded' src='" + size +"'/></a>");
					}
				}
			});
		}
	}
}();

$(document).ready(function() {
    instagram.init();
});