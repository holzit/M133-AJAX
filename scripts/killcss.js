(function() {
	/* DOM ready */
  var button = document.getElementById("killcss");
  var state = 0;

  button.onclick = function(){

    switch (state) {
      case 0:
        for ( i=0; i<document.styleSheets.length; i++) {
            void(document.styleSheets.item(i).disabled=true);
        }
        button.innerHTML = "Enable CSS";
        state = 1;
        break;
      case 1:
        for ( i=0; i<document.styleSheets.length; i++) {
            void(document.styleSheets.item(i).disabled=false);
        }
        button.innerHTML = "Kill CSS";
        state = 0;
        break;
      default:

    }


  }

}) ();
