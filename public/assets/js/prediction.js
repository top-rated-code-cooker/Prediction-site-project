var initialLoad = true;
var BNBbalance = 0;


$(document).ready(function() {
    console.log("initialize");

    initialLoad = false;

    init();
    
    $(".connect-wallet").on("click", connect_wallet);
    // $(".connect-wallet")[1].on("click", connect_wallet);
    // $("#toggle-btn").on("click", toggleExchangeDirection);
    // $("#exchange-btn").on("click", exchange);
    // $("#from-input").on("input", from_input_change);
    // $("#to-input").on("input", to_input_change);
});

function connect_wallet(){
    if (!selectedAccount){
        onConnect();
    }else{
        onDisconnect();
    }
}
async function refresh_view(){
    console.log("chainId", chainId)
    prediction_contract = await get_prediction_contract();
    if(prediction_contract){
        owner = await prediction_contract.methods.owner().call();
        console.log(owner, "owner:selectedAccount", selectedAccount);
        if(owner == selectedAccount){
            //start btc prediction
            start_btc_prediction();
        }
        
        

      }else{
        console.log("prediction contract not exist")
      }
    // const bep20_contract = await get_bep20_contract();
    // console.log("bep20_contract", bep20_contract);
    // if(bep20_contract){
    //     // //total supply   
    //     // const total_supply = await bep20_contract.methods.totalSupply().call();
    //     // console.log("total_supply", total_supply);
    //     // // available token
    //     // const available =  await bep20_contract.methods.availableTokens().call();
    //     // console.log("available", available);
        
    //     // //user purchased
    //     // const user_purchased = await bep20_contract.methods.getPurchasedAmountOfUser(selectedAccount).call();
    //     // console.log("user_purchased", user_purchased);
        
    //     // //bnb balance of user
    //     // const bnb_balance = await bep20_contract.methods.getBNBBalanceOfUser( selectedAccount ).call();
    //     // console.log("bnb_balance", bnb_balance);
    //     // //token balance
    //     // const token_balance = await bep20_contract.methods.balanceOf( selectedAccount ).call();
    //     // console.log("token_balance", token_balance);

    //     // if(exchangeDirection){
    //     //     $("#from-balance").text(bnb_balance / 10 ** 18);
    //     //     $("#to-balance").text(user_purchased / 10 ** 18);
    //     //     $("#from-label").text("BNB");
    //     //     $("#to-label").text("NPETZ");
    //     // }else{
    //     //     $("#from-balance").text(user_purchased / 10 ** 18);
    //     //     $("#to-balance").text(bnb_balance / 10 ** 18);
    //     //     $("#from-label").text("NPETZ"); 
    //     //     $("#to-label").text("BNB");
    //     // }
    //     // $("#purchased-value").text(user_purchased / 10 ** 18);
    //     // $("#available-value").text(BigNumberToPlain(available / 10 ** 18));
        
    // }
}

function BigNumberToPlain(num) {
    var str = num.toString();
    var flag = str.indexOf('e+');
    var ret = '';
    if (flag < 0) {
      ret = str;
    } else {
      var str_arr = str.split('e+');
      var tmp_num1 = str_arr[0];
      var tmp_num2 = str_arr[1];
      var dot_arr = tmp_num1.split('.');
      var dot_length = dot_arr.length < 2 ? 0 : dot_arr[1].length;
      var zero_count = tmp_num2 - dot_length;
      var tmp_num =
        dot_arr.length > 1 ? dot_arr[0] + '' + dot_arr[1] : dot_arr[0];
      for (var i = 0; i < zero_count; i++) {
        tmp_num += '0';
      }
      ret = tmp_num;
    }
    console.log(ret, ret.length);
    return ret;
}



// events
$('.accordian-body').on('show.bs.collapse', function () {
    $(this).closest("events-table")
        .find(".collapse.in")
        .not(this)
        .collapse('toggle')
})