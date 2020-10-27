pragma solidity ^0.4.22;



////本人取引に限定するための制限//////////////////////////////////////////

contract owned{
   
    address owner;
    uint start_time;
    uint principal;
    
    address reservedToken_1;

    
//コンストラクタ　コントラクトのオーナー設定&その他
    constructor() public {

        owner = msg.sender;
        start_time = block.timestamp;
        
       //　リザーブトークンのアドレス（複数可） reservedToken_1 = "0x0123456789ABCDEF12";
       //　預入済み合計額、その他ステーク対象アカウント　stakedToken_1 = ;

// databeseに元本金額を保管        function set() public 
    
    }
    
//アクセス制御の修飾子
    modifier onlyOwner{
        require(msg.sender == owner,"Only available request for owner");
        _;
        }   
    }
    
//////////////////////////////////////////////////////////////////////////


//ownedを継承　
//解約手続き   
    contract mortal is owned {
        function redemption() public onlyOwner{
            //DB上の元本金額を削除
            selfdestruct(owner);
        }
    }
    

// mortal(+owned)を継承　預金コントラクトメイン（各通知処理・入出金）
    contract FlextermDeposit is mortal{
        
        event Deposit(address indexed from, uint amount);
        event Withdrawal(address indexed to, uint amount);
        
//　入金
        function() public payable{
         principal = msg.value;
            emit Deposit(msg.sender, msg.value);
        }
    
// 出金
        //function withdraw(uint amount) public onlyOwner {
            
          // require(.balance >= amount,"Insufficient balance");
            
          //    owner.transfer(amount);
          //    emit Withdrawal(msg.sender, amount);
            
        //}

     //function earn_cal(){  //event??
         
         //uint current_time = block.timestamp;
         
        // if(current_time - start_time == 5760){
             
             //利息計算　保管されている元本合計を計算
            
            
             
             
         //}else{
             
        // }
         
         
     //}   
 
            
        
        
}