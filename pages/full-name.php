<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="POST">
    <table>
       <tr>
       <th>First Name</th>
       <td><input type="text" name="first_name"/>
        </td>
       </tr>
       <tr>
       <th>Last Name</th>
       <td><input type="text" name="last_name"/>
        </td>
       </tr>
       <tr>
       <th>Full Name</th>
       <td><input type="text" value="<?php echo isset($result)? $result:''?>"/>
        </td>
       </tr>
       <tr>
       <th></th>
       <td><input type="submit" name="btn" value="Submit"/>
        </td>
       </tr>
    </table>
    </form>
</body>
</html>

