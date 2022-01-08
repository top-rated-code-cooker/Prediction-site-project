const Web3Modal = window.Web3Modal.default;
const WalletConnectProvider = window.WalletConnectProvider.default;
const EvmChains = window.EvmChains;
const Fortmatic = window.Fortmatic;

let web3Modal
let provider;
let selectedAccount;

var owner;
var prediction_contract;
var event_contract;

var chainId = 97;

async function init() {

  console.log("Initializing example");
  console.log("WalletConnectProvider is", WalletConnectProvider);
  console.log("Fortmatic is", Fortmatic);

  const providerOptions = {
    walletconnect: {
      package: WalletConnectProvider,
      options: {
        infuraId: "8043bb2cf99347b1bfadfb233c5325c0",
      }
    },

    fortmatic: {
      package: Fortmatic,
      options: {
        key: "pk_test_391E26A3B43A3350"
      }
    }
  };

  web3Modal = new Web3Modal({
    cacheProvider: false, // optional
    providerOptions, // required
  });
}

function get_current_provider(){
    return window.web3.currentProvider;
}

async function fetchAccountData() {

  // Get a Web3 instance for the wallet
  const web3 = new Web3(provider);

  console.log("Web3 instance is", web3);

  chainId = await web3.eth.getChainId();
  const accounts = await web3.eth.getAccounts();
  selectedAccount = accounts[0];

  // Go through all accounts and get their ETH balance
  const rowResolvers = accounts.map(async (address) => {
    const balance = await web3.eth.getBalance(address);
    //const ethBalance = web3.utils.fromWei(balance, "ether");
    var wallet_label = address.slice(0,5) + "..." + address.slice(-4);
    $(".connect-wallet").text(wallet_label);
  });
  await Promise.all(rowResolvers);
  refresh_view();
}

async function refreshAccountData() {
  await fetchAccountData(provider);
}

async function onConnect() {
  try {
    provider = await web3Modal.connect();
  } catch(e) {
    console.log("Could not get a wallet connection", e);
    return;
  }

  // Subscribe to accounts change
  provider.on("accountsChanged", (accounts) => {
    fetchAccountData();
  });

  // Subscribe to chainId change
  provider.on("chainChanged", (chainId) => {
    fetchAccountData();
  });

  // Subscribe to networkId change
  provider.on("networkChanged", (networkId) => {
    fetchAccountData();
  });

  await refreshAccountData();

}

async function onDisconnect() {
    if(provider.close) {
        await provider.close();
        await web3Modal.clearCachedProvider();
        provider = null;
    }

    selectedAccount = null;
    $(".connect-wallet").text("Connect wallet");
    // $("#from-balance").text("0");
    // $("#to-balance").text("0");
    // $("#from-label").text("BNB");
    // $("#to-label").text("NPETZ");
    // $("#purchased-value").text("0");
    // $("#available-value").text("0");
}

function get_prediction_contract_addr(chainId){
    if (chainId == 3 ){
        return prediction_testnet_address;
    }else if (chainId == 56 ){
        return prediction_mainnet_address;
    }else if(chainId == 97 ){
        return prediction_testnet_address;
    }
}
async function get_prediction_contract(){
    window.web3 = new Web3(provider);
    let contract = new window.web3.eth.Contract(
        prediction_ABI,
        get_prediction_contract_addr(chainId)
    );    
    return contract;
}
function get_event_contract_addr(chainId){
    if (chainId == 3 ){
        return event_testnet_address;
    }else if (chainId == 56 ){
        return event_mainnet_address;
    }else if(chainId == 97 ){
        return event_testnet_address;
    }
}
async function get_event_contract(){
  window.web3 = new Web3(provider );
  let contract = new window.web3.eth.Contract(
      event_ABI,
      get_event_contract_addr(chainId)
  );    
  return contract;
}

function start_btc_prediction() {
    

  // load rounds

  // create new rounds
  
}




// async function buyNPETZ(amount){
//     console.log("amount", amount, "selectedAccount", selectedAccount);
//     const _amount = BigNumberToPlain(amount * 10 ** 18);
//     console.log("buyamount", _amount);
//     const bep20Contract = await get_bep20_contract();
//     await bep20Contract.methods
//         .buyNPETZ()
//         .send({ from: selectedAccount, value: _amount });
//     refresh_view_data();
//     // Toast.fire({ icon: 'success', titleText: 'Successfully buy' });
// };

// async function sellNPETZ(amount){
//     console.log("amount", amount, "selectedAccount", selectedAccount);
//     //this.beforeProgressing();
//     const _amount = BigNumberToPlain(amount * 10 ** 18);
//     console.log("sellamount", _amount);
//     const bep20Contract = await get_bep20_contract();
//     await bep20Contract.methods
//         .sellNPETZ(_amount)
//         .send({ from: selectedAccount });
//     refresh_view_data();
//     // Toast.fire({ icon: 'success', titleText: 'Successfully sell' });
// };

