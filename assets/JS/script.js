
// filter script to ubderstand it later ... 
function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

//   function filtering() {
    
//     let container = document.getElementById('searching');
//     let myDiv = document.getElementById('myDiv');
//     let isRemoved = false;

//   if (isRemoved) {
//     Add the element back
//     container.appendChild(myDiv);
//     isRemoved = false;
//   } else {
//     Remove the element
//     container.removeChild(myDiv);
//     isRemoved = true;
//   }
// }