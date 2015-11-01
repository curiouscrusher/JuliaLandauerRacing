// Show/Hide the Hero Card instructions
function toggle_visibility(instructions) {
   var e = document.getElementById(instructions);
   if(e.style.display == 'block')
      e.style.display = 'none';
   else
      e.style.display = 'block';
}