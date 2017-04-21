<?php 
	
	switch ($_POST['metodo']) {
		case 'metData':
			Data();
		break;

		default:
		break;
	}
	function Data(){
		echo "<tr>
				<td class='test2_0' style='width:25%;'>Zelda</td>
				<td class='test2_1' style='width:25%;'>CACA</td>
				<td class='test2_2' style='width:25%;'>zeldarogers@mail.com</td>
				<td class='test2_3' style='width:25%;'>20037281</td>
			 </tr>";
	}
 ?>