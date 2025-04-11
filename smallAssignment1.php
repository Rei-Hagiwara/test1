<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>小問課題１</title>
    <style>
        table {
            margin: 50px auto;
            border-collapse: collapse;
            font-size: 18px;
        }
        th, td {
            border: 1px solid;
            padding: 10px 20px;
            text-align: center;
        }
        th {
            background-color: lightgray;
        }
    </style>

</head>
<body>
    
<?php
    //価格設定に基づいて、15個分の価格を出す関数
    function generatePrices( $count, $min, $max ){
        $prices = [];
        for( $i = 1; $i <= 15; $i++ ){
            $prices[$i] = random_int( $min, $max );
        }
        return $prices;
    }

    //桃とイチゴを15個作る
    $peach = generatePrices( 15, 200, 300 );
    $strawberry = generatePrices( 15, 400, 500 );

    //配列の平均、最大、最低を連想配列で出す関数
    function getNumbers( $arr ){
        return [
           'avg' => floor(array_sum( $arr ) / count( $arr )),
           'max' => max( $arr ),
           'min' => min( $arr ),
        ];
    }

    $peachNums = getNumbers( $peach );
    $strawNums = getNumbers( $strawberry );
?>
    


<table border="1">
    <tr>
        <th>果物</th>
        <th>平均価格</th>
        <th>最高価格</th>
        <th>最低価格</th>
    </tr>
    <tr>
        <td style="background-color: pink;">桃</td>
        <td><?= $peachNums['avg'] ?>円</td>
        <td><?= $peachNums['max'] ?>円</td>
        <td><?= $peachNums['min'] ?>円</td>
    </tr>
    <tr>
        <td style="background-color: salmon;">イチゴ</td>
        <td><?= $strawNums['avg'] ?>円</td>
        <td><?= $strawNums['max'] ?>円</td>
        <td><?= $strawNums['min'] ?>円</td>
    </tr>
</table>

</body>
</html>