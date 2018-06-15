<?php
switch ($_POST['action']){
        
        case "showMarkForInsert":
                echo '<select size="1" name="Year" onchange="javascript:selectYear();" style="float:left;   ">';
                echo '<option value="">Years</option>';
                echo '<optgroup label="Choose the year">';
                switch ($_POST['id_mark']){
                        case "1":
                        echo '<option value="1">1990</option>';
                        echo '<option value="2">1995</option>';
                        echo '<option value="3">2003</option>';
                        echo '<option value="4">2008</option>';
                        echo '<option value="5">2016</option>';
                        echo '</select>';
						echo '<img src="audi.png" style="width:250px; height:250px" />';
                        break;
                        case "2":
                        echo '<option value="1">1995</option>';
                        echo '<option value="2">1999</option>';
                        echo '<option value="3">2005</option>';
                        echo '<option value="4">2009</option>';
                        echo '<option value="5">2018</option>';
                        echo '</select>';
						echo '<img src="bmw.jpg" style="width:250px; height:250px" />';
                        break;
                        case "3":
                        echo '<option value="1">1992</option>';
                        echo '<option value="2">1997</option>';
                        echo '<option value="3">2006</option>';
                        echo '<option value="4">2011</option>';
                        echo '<option value="5">2017</option>';
                        echo '</select>';
                        echo '<img src="mersedes.jpg" style="width:250px; height:250px" />';break;
                        case "4":
                        echo '<option value="1">2005</option>';
                        echo '<option value="2">2010</option>';
                        echo '<option value="3">2015</option>';
                        echo '<option value="4">2017</option>';
                        echo '<option value="5">2018</option>';
                        echo '</select>';
						echo '<img src="tesla.png" style="width:150px; height:150px"/>';
                        break;
                };
                break;
        case "showYearForInsert":
                echo '<select size="1" name="Colors"">';
                echo '<option value="">Colors</option>';
                echo '<optgroup label="Choose the color">';
                switch ($_POST['id_year']){
                        case "1":
                        echo '<option value="1">White</option>';
                        echo '<option value="2">Silver</option>';
                        echo '<option value="3">Black</option>';
                        echo '<option value="4">Red</option>';
                        echo '<option value="5">Blue</option>';
                        echo '</select>';
                        break;
                        case "2":
                        echo '<option value="1">Black</option>';
                        echo '<option value="2">Dark Black</option>';
                        echo '<option value="3">Silver</option>';
                        echo '<option value="4">Classic</option>';
                        echo '<option value="5">Gold</option>';
                        echo '</select>';
                        break;
                        case "3":
                        echo '<option value="1">Black</option>';
                        echo '<option value="2">Yellow</option>';
                        echo '<option value="3">Silver</option>';
                        echo '<option value="4">Gold</option>';
                        echo '<option value="5">Platinum</option>';
                        echo '</select>';
                        break;
                        case "4":
                        echo '<option value="1">Classic</option>';
                        echo '<option value="2">Red Planet</option>';
                        echo '<option value="3">Special</option>';
                        echo '<option value="4">Earth</option>';
                        echo '<option value="5">Moon</option>';
                        echo '</select>';
                        break;
                        case "5":
                        echo '<option value="1">Bronze</option>';
                        echo '<option value="2">Silver</option>';
                        echo '<option value="3">Gold</option>';
                        echo '<option value="4">Platinum</option>';
                        echo '<option value="5">Diamond</option>';
                        echo '</select>';
                        break;
                
                };
                break;
                
        
        
};

?>