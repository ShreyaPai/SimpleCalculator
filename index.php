<?php include_once("database.php");
$result = '';
if (isset($_POST['result'])) {
    insertValue($_POST['result']);
}
if (isset($_POST['delete'])) {
    deleteAll();
}
if (isset($_POST['memory'])) {
    global $result;
    $result = displayAll();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="main.js"></script>
    <title>Calculator</title>
</head>
    <body>
        <div>
            <form method="post" id="calculator" action="index.php">
                <table>
                    <tr>
                    <td colspan="3"><input type="text" name= "result" id="result"/></td> 
                    <td><input type="submit" id="history" value="M" name="memory"/></td> 
                    <td><input type="submit" id="delete" value="C" name="delete"/></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="7" onclick="disp('7')"/></td>
                        <td><input type="button" value="8" onclick="disp('8')"/></td>
                        <td><input type="button" value="9" onclick="disp('9')"/></td>
                        <td rowspan="6" colspan="2" id="column"><?php echo $result; ?></td>
                                                                    
                    </tr>
                    <tr>
                        <td><input type="button" value="4" onclick="disp('4')"/></td> 
                        <td><input type="button" value="5" onclick="disp('5')"/></td> 
                        <td><input type="button" value="6" onclick="disp('6')"/></td>                                                                  
                    </tr>
                    <tr>                        
                        <td> <input type="button" value="1" onclick="disp('1')"/> </td> 
                        <td> <input type="button" value="2" onclick="disp('2')"/> </td> 
                        <td> <input type="button" value="3" onclick="disp('3')"/> </td>                               
                    </tr>
                    <tr>                        
                        <td><input type="button" value="0" onclick="disp('0')"/></td>
                        <td><input type="button" value="." onclick="disp('.')"/></td> 
                        <td><input type="submit" value="=" id="operator" onclick="Calculate()"></td>                                                 
                    </tr>
                    <tr>
                        <td><input type="button" value="+" id="operator" onclick="disp('+')"/></td>
                        <td><input type="button" value="-" id="operator" onclick="disp('-')"/></td>
                        <td><input type="button" value="*" id="operator" onclick="disp('*')"/></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="DEL" id="operator" onclick="back()"/></td>
                        <td><input type="button" value="CLR" id="operator" name="clear" onclick="clrsc()"/></td>
                        <td><input type="button" value="/"  id="operator" onclick="disp('/')"/></td>                                           
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

