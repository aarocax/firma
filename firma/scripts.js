(function($){
	console.log('script cargado...');

	var firma = document.getElementById("wrapper-firma");
	var pdf = document.getElementById("wrapper-pdf");
	var canvas = document.getElementById('signature-pad');
	var form = document.querySelector('#firma-form');
	var imagenURL;

	function resizeCanvas() {
    // When zoomed out to less than 100%, for some very strange reason,
    // some browsers report devicePixelRatio as less than 1
    // and only part of the canvas is cleared then.
    var ratio =  Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
	}

	window.onresize = resizeCanvas;
	resizeCanvas();

	var signaturePad = new SignaturePad(canvas, {
	  backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
	});


	form.addEventListener('submit', function(e) {
		e.preventDefault();
		imagenURL = document.getElementById("signature-pad").toDataURL("image/png").replace(/^data:image\/[^;]/, 'data:application/octet-stream');
		appendFileAndSubmit();
	});

	document.getElementById('clear').addEventListener('click', function (e) {
	  signaturePad.clear();
	});

	function appendFileAndSubmit(){
  	var form = document.getElementById("firma-form");

 		// Split the base64 string in data and contentType
    var block = imagenURL.split(";");
    // Get the content type
    var contentType = block[0].split(":")[1];// In this case "image/gif"
    // get the real base64 content of the file
    var realData = block[1].split(",")[1];// In this case "iVBORw0KGg...."

    // Convert to blob
    var blob = b64toBlob(realData, contentType);

    // Create a FormData and append the file
    var fd = new FormData(form);
    fd.append("image", blob);

    // Submit Form and upload file
    $.ajax({
        url:"generate-pdf.php",
        data: fd,// the formData function is available in almost all new browsers.
        type:"POST",
        contentType:false,
        processData:false,
        cache:false,
        //dataType:"json", // Change this according to your response from the server.
        error:function(err){
            console.error(err);
        },
        success:function(data){
            console.log(data);
            firma.style.display = "none";
            pdf.style.display = "block";
            $('#uploaded_image').html(data);
        },
        complete:function(){
            console.log("Request finished.");
        }
    });
  }


  function b64toBlob(b64Data, contentType, sliceSize) {
    contentType = contentType || '';
    sliceSize = sliceSize || 512;

    var byteCharacters = atob(b64Data);
    var byteArrays = [];

    for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
        var slice = byteCharacters.slice(offset, offset + sliceSize);

        var byteNumbers = new Array(slice.length);
        for (var i = 0; i < slice.length; i++) {
            byteNumbers[i] = slice.charCodeAt(i);
        }

        var byteArray = new Uint8Array(byteNumbers);

        byteArrays.push(byteArray);
    }
	  var blob = new Blob(byteArrays, {type: contentType});
	  return blob;
	}


})(jQuery)