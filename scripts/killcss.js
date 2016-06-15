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
