$("#chooseFile").bind("change", function () {
  var filename = $("#chooseFile").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass("active");
    $("#noFile").text("No file chosen...");
  } else {
    $(".file-upload").addClass("active");
    $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
  }
});

window.onload = function() {

    

		var fileInput = document.getElementById('chooseFile'),
        fileDisplayArea = document.getElementById('fileDisplayArea');
        sumButton = document.getElementById('calculateForm');


        // fileDisplayArea.style.display = 'none';

		fileInput.addEventListener('change', function(e) {

      fileDisplayArea.style.display = 'block';
      sumButton.style.display = 'block';


			var file = fileInput.files[0],
          reader = new FileReader();
      
			reader.onload = function(e) {
				fileDisplayArea.innerText = reader.result;
		  };
      
			reader.readAsText(file);	
		});
};