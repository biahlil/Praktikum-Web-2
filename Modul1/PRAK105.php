<html>
<head>
    <title>
        Daftar Smartphone Samsung
    </title>
    <?php $smartphone = array("S22"=>"Samsung Galaxy S22","S22+"=>"Samsung Galaxy S22+","A03"=>"Samsung Galaxy A03","Xc5"=>"Samsung Galaxy Xcover 5"); ?>
    <style>
        table,th,td {
            border: 1px solid;
        }
        th {
            font-size: x-large;
            background-color: red;
            height: 60px;
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
                <?php echo $smartphone["S22"] ?>
            </td>
        </tr>
        <tr>
            <td>
            <?php echo $smartphone["S22+"] ?>                
            </td>
        </tr>
        <tr>
            <td>
            <?php echo $smartphone["A03"] ?>
            </td>
        </tr>
        <tr>
            <td>
            <?php echo $smartphone["Xc5"] ?>
            </td>
        </tr>
    </table>
</body>
</html>
