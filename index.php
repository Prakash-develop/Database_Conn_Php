<html>
<head><title>Data</title></head>
<body><center>  
<form name="details" method="post" action="action/insert.php">
    <table width="200" height="200">
        <tr>
           <td>Name</td>
           <td><input type="text" name="name"></td>
        </tr>
        <tr>
           <td>Department</td>
           <td><select name="department">
             <option>SELECT</option>
             <option value="BME">BME</option>
             <option value="CIVIL">CIVIL</option>
             <option value="CSE">CSE</option>
             <option value="ECE">ECE</option>
       </select></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><input type="radio" value="Male" name="gender">Male
            <input type="radio" value="Female" name="gender">Female</td>
        </tr>
    
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
    <tr> <td colspan="2" align="center"><input type="submit" name="submit"></td></tr>
        </table>
        </form>
</center>      
</body>
</html>