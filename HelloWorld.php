<?php ?>

<html>

  <head>
    <!-- Web3をImport -->
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js"></script>

    <!-- プロバイダ設定-->
    <script>
      //ウィンドウ読込時に実行されるメソッド
      window.addEventListener('load', async () => {

        //v4.14.0以降のMetamaskを使用している場合
        if (window.ethereum) {

          //web3にMetamaskの情報を代入
          window.web3 = new Web3(ethereum);
          try {

            //Metamaskの接続承認
            await ethereum.enable();
            //接続完了後にログ出力
            console.log(web3)
          } catch (error) {}
        }
        //v4.１４.0より前のMetamaskを使用
        else if (window.web3) {

          //web3にMetamaskの情報を代入
          window.web3 = new Web3(web3.currentProvider);
          colsole.log(web3)
        } else {
          //Metamaskが使われていない場合にログ出力
          console.log('Non-Ethereum browser detected. you should consider trying MetaMask!');
        }
              const contract = new web3.eth.Contract(abi, contractAddress);
              contract.methods.get().call()
              .then((response) =>{
              	//HTML内のidがmessageの要素を取得
                 var elm = document.getElementById("message");
                 elm.innerHTML = response;
              })
      });
    </script>
    <script>
        const contractAddress = "0xd6649316FFfBBD486EADF1F2B62cBFc9186069BE"

        const abi=[
	    {
		"constant": true,
		"inputs": [],
		"name": "get",
		"outputs": [
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "pure",
		"type": "function"
	    }
    ]

    </script>

  </head>

  <body>    
    <h1 id="message"></h1>
  </body>

</html>
