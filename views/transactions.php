<?php
require("../app/App.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Transactions</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    table tr th,
    table tr td {
        padding: 5px;
        border: 1px black solid;
    }

    tfoot tr th,
    tfoot tr td {
        font-size: 20px;
    }

    tfoot tr th {
        text-align: right;
    }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check #</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($transaction AS $A){ ?>
            <tr>
                <th>
                    <?php echo $A->getDate();?>
                </th>
                <th>
                    <?php echo $A->getCheck();?>
                </th>
                <th>
                    <?php echo $A->getDescription();?>
                </th>
                <th>
                    <?php 
                    $Amount=$A->getAmount();
                    if($Amount > 0):?><span style="color:green"> <?php 
                    echo '$'.$Amount;
                    else :
                        $Amount= '$'.$Amount;
                    ?>
                        <span style="color:red"> <?php 
                    echo $Amount;
                        endif;

                        ?></span> </th>
            </tr><?php
                    }

                    ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan=" 3">Total Income:</th>
                <td><?php echo "$". $TOTALS["Income"] ?></td>
            </tr>
            <tr>
                <th colspan="3">Total Expense:</th>
                <td><?php echo "$". $TOTALS["Expense"] ?></td>
            </tr>
            <tr>
                <th colspan="3">Net Total:</th>
                <td><?php echo "$". $TOTALS["Total"] ?></td>
            </tr>
        </tfoot>
    </table>
</body>

</html>