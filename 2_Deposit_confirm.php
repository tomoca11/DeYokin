<?php

var_dump($amounts);


?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>
</head>

<body>

    <h2>確認画面</h2>


    <form method="post" action="3_Deposit_finished.html" name="deposit">

        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                    <div class="col s2">
                        <img src="images/eth_logo.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s10">
                        <span class="black-text">

                            <table>

                                <div>
                                    <tr>
                                        <td>Token</td>
                                        <td>Ethereum</td>
                                    </tr>
                                </div>

                                <div>
                                    <tr>
                                        <td>Term</td>
                                        <td>Flexible</td>
                                    </tr>
                                </div>

                                <div>
                                    <tr>
                                        <td>Reference Interest Rate</td>
                                        <td>変動金利</td>
                                    </tr>
                                </div>

                                <div>
                                    <tr>
                                        <td>7Days Average return</td>
                                        <td>移動平均利回り</td>
                                    </tr>
                                </div>

                            </table>

                            <div>
                                <p>＜その他条件について＞</p>
                                <p>中途解約：いつでも可能</p>
                                <p>預入日を含む3日間は、利息が付与されません。</p>
                            </div>

                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <label for="amounts">Amounts:</label>
            <input type="text" name="amounts" required>
        </div>

        <h2>注意事項</h2>
        <ol>

            <li>
                <p>現在表示されている金利は、昨日時点での金利です。</p>
            </li>
            <li>
                <p>本商品の金利は、日々のトークンの状況に応じて変更されます。</p>
            </li>
            <li>
                <p>各通貨レートの変動により、預入通貨建で元本割れがない場合でも、他通貨建で元本割れのリスクがあります。</p>
            </li>　

        </ol>

        <input type="submit" value="設定を実行" onclick="return confirm.html">

    </form>






    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>