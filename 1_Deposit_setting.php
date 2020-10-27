<?php

//送信確認
//var_dump($)
//exit

//session_start()

//include("functions.php");
//check_session_id();

//$id = $_GET["id"];
//$pdo = connect_to_db();

//$sql = 'SELECT * FROM a_table WHERE id=:id';

//以下、のちに記述

$amounts = 0;


?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>金額入力</title>
</head>

<body class="indigo lighten-5">

    <!-- Navbar goes here -->

    <!-- Page Layout here -->
    <nav class="row ">

        <!--メニューバー-->

        <div class="col s2 red lighten-2">

            <p><a href="index.html">TOP</a></p>

        </div>

        <div class="col s4 purple lighten-2">

            <p><a href="1_Deposit_setting.html">DEPOSIT</a></p>

        </div>

        <div class="col s2 cyan lighten-2">

            <p><a href="1_Deposit_setting.html">Transfer</a></p>

        </div>

        <div class="col s2 teal lighten-2">

            <p><a href="">Exchange</a></p>

        </div>

        <div class="col s2 amber lighten-2">

            <p><a href="">Pay</a></p>

        </div>

    </nav>

    <div class="indigo lighten-5">

        <form action="2_Deposit_confirm.php" name="deposit">

            <h2>設定入力</h2>

            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card-panel indigo accent-1 z-depth-1">
                    <div class="row valign-wrapper">
                        <div class="col s2">
                            <img src="images/eth_logo.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                        </div>

                        <div class="col s10 ">

                            <table class="highlight">

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



                                <div>
                                    <tr>
                                        <td>＜その他条件について＞<br>
                                            中途解約：いつでも可能<br>
                                            預入日を含む3日間は、利息が付与されません。</td>
                                    </tr>
                                </div>

                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <div class="red lighten-5">
                <label for="amounts">Amounts:</label>
                <p><input type="text" id="amounts" name="amounts" required></p>
            </div>

            <h2>主な注意事項</h2>
            <ol>

                <li>
                    <p>現在表示されている金利は、昨日時点での金利です。</p>
                </li>
                <li>
                    <p>本商品の金利は、日々のトークンの状況に応じて変更されます。</p>
                </li>
                <li>
                    <p>各通貨レートの変動や手数料により、同通貨及び他通貨建で元本割れのリスクがあります。</p>
                </li>　

            </ol>

            <input type="submit" value="確認画面へ" onclick="return confirm.html">

        </form>
    </div>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>