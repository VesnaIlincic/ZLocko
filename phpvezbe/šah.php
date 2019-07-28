<html>
    <head>
    <style>
        table{border:1px;width:400px}
        td{width:30px;height:35px}
    </style>
    </head>
    <body>
        <table cellspacing="0px" cellpadding="0px">
        <?php
        for($row=1;$row<=8;$row++)
        {   
            echo "<tr>";
            for($col=1;$col<=8;$col++)
            {
                $total=$row+$col;
                if($total%2==0)
                {
                    echo "<td bgcolor='#FFFFFF'></td>";
                }
                else
                {
                    echo "<td bgcolor='#000000'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
        </table>
    </body>
</html>





