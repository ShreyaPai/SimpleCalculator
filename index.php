><?php include_once("database.php");
insertValue($_POST["result"]);
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
        <div id="calculator">
            <form method="post" id="calculator" action="index.php">
                <table>
                    <tr>
                    <td colspan="3"><input type="text" name= "result" id="result"/></td> 
                    <td><input type="button" id="history" value="M" onclick="<?php displayAll(); ?>"/></td> 
                    <td><input type="button" id="delete" value="C" onclick="deleteAll() ?>"/></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="7" onclick="disp('7')"/></td>
                        <td><input type="button" value="8" onclick="disp('8')"/></td>
                        <td><input type="button" value="9" onclick="disp('9')"/></td>
                        <td rowspan="6" colspan="2" id="column"></td>
                                                                    
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
                        <td><input type="button" value="Del" id="operator" onclick="back()"/></td>
                        <td><input type="button" value="Clr" id="operator" name="clear" onclick="clrsc()"/></td>
                        <td><input type="button" value="/"  id="operator" onclick="disp('/')"/></td>                                           
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

