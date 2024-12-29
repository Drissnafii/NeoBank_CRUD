<?php
require __DIR__ . '/config/Connection.php';
require __DIR__ . '/includes/header.php';
?> 

<div class="ContainerAll">

<div class="w3-center">


<h1>Contact Form</h1>

<form action="send.php" method="POST"> 

	<label for="firstname">First Name:</label><br>
	<input type="text" id="firstname" name="firstname" require><br><br>

	<label for="lastname">Last Name:</label><br>
	<input type="text" id="lastname" name="lastname" require><br><br>

	<label for="email">Email:</label><br>
	<input type="email" id="email" name="email" require><br><br>

	<label for="pass">Password:</label><br>
	<input type="password" id="pass" name="pass" require><br><br>

	<input type="submit" name="submit" value="Submit" onclick="showAlert()">
</form>
</div>

<div class="w3-container" id="searching">

  <button onclick="filtering()">
    <h2 id="search-button">Filter Table</h2>
  </button>

    <div id="myDiv">


      <p>Search for a name in the input field.</p>

      <input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction()">

      <table class="w3-table-all w3-margin-top" id="myTable">
        <tr>
          <th style="width:60%;">Name</th>
          <th style="width:40%;">Country</th>
        </tr>
        <tr>
          <td>Alfreds Futterkiste</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Berglunds snabbkop</td>
          <td>Sweden</td>
        </tr>
        <tr>
          <td>Island Trading</td>
          <td>UK</td>
        </tr>
        <tr>
          <td>Koniglich Essen</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Laughing Bacchus Winecellars</td>
          <td>Canada</td>
        </tr>
        <tr>
          <td>Magazzini Alimentari Riuniti</td>
          <td>Italy</td>
        </tr>
        <tr>
          <td>North/South</td>
          <td>UK</td>
        </tr>
        <tr>
          <td>Paris specialites</td>
          <td>France</td>
        </tr>
      </table>

      <p><strong>Tip:</strong> Remove toUpperCase() if you want to perform a case-sensitive search.</p>
      <p>Change tr[i].getElementsByTagName('td')[0] to [1] if you want to search for "Country" (index 1) instead of "Name" (index 0).</p>

    </div>

</div>

<!-- <script>
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
</script> -->


<?php
include 'read.php';
include __DIR__ . '/includes/footer.php';
?> 
</div>


<!-- <script src="./assets/JS/script.js"></script> -->
<script src="assets/JS/script.js"></script>
</body>
</html>