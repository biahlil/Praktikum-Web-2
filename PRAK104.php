<html>
<head>
    <title>
        Daftar Smartphone Samsung
    </title>
    <?php
        $smartphone = array("Samsung Galaxy S22","Samsung Galaxy S22+","Samsung Galaxy A03","Samsung Galaxy Xcover 5");    
    ?>

    <style>
        table,th,td {
            border: 1px solid;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>
                Daftar Smartphone Samsung
            </th>
        </tr>
        <tr>
            <td>
                <?php echo $smartphone[0] ?>
            </td>
        </tr>
        <tr>
            <td>
            <?php echo $smartphone[1] ?>                
            </td>
        </tr>
        <tr>
            <td>
            <?php echo $smartphone[2] ?>
            </td>
        </tr>
        <tr>
            <td>
            <?php echo $smartphone[3] ?>
            </td>
        </tr>
    </table>
</body>

</html>
