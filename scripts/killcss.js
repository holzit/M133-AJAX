/* 
	This repo is part of a small school project about AJAX.
    Copyright (C) 2016  Severin Fürbringer
    Copyright (C) 2016  Austin Albrecht
    Copyright (C) 2016  Gianluca Scarciolla

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

(function() {
	/* DOM ready */

  //gets the button with ID killcss
  var button = document.getElementById("killcss");
  var state = 0;

  //when the button is clicked this funtion runs
  button.onclick = function(){

    //depending on state a different part of the code will be ran
    switch (state) {
      //state 0 is for when the CSS is on and has to be disabled
      case 0:
        //loop disables all existing styleSheets
        for ( i=0; i<document.styleSheets.length; i++) {
            void(document.styleSheets.item(i).disabled=true);
        }
        //changes text on the button
        button.innerHTML = "Enable CSS";
        //sets the state to 1 aka CSS Disabled
        state = 1;
        break;
      //state 1 is when CSS is off and needs to be enabled
      case 1:
        for ( i=0; i<document.styleSheets.length; i++) {
            void(document.styleSheets.item(i).disabled=false);
        }
        button.innerHTML = "Kill CSS";
        //sets state back to 0 which is CSS enabled
        state = 0;
        break;
      default:

    }

  }
  
}) ();
