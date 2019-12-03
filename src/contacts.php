<?php
include "header.php";
echo "<div style='background-image:url(../assets/bg.jpg); height: 800px;'>
<div class='container pt-5 d-flex flex-column'><span class='display-4 backpack-font'>Write to us!</span>";
$output = file_get_contents("../assets/contacts.txt");
$rows = explode("\n", $output);
foreach ($rows as $row => $data) {
	$row_data = explode("-", $data);

	$contacts[$row]['Name'] = $row_data[0];
	$contacts[$row]['Email'] = $row_data[1];

	echo "<div class='shadow-lg p-3 mb-5 bg-white rounded'><span class='pl-2 lead text-secondary'><i class='fa fa-address-book'></i>&nbsp;&nbsp;".$contacts[$row]['Name']."</span><span class='badge badge-warning float-right w-50 pt-2 pb-2'>".$contacts[$row]['Email']."</span></div>";

}
echo "</div>
</div>";
include "footer.php";
?>
</body>
</html>
