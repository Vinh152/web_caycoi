// làm phần tăng số lượng mua ở phần main
let solong_tang=()=>{
    let soluong_number=document.querySelector(".main-1-right-number-text");
    soluong_number.textContent=parseInt(soluong_number.textContent)+1;
    btn_buy(parseInt(soluong_number.textContent));
};


let solong_giam=()=>{
    let soluong_number=document.querySelector(".main-1-right-number-text");
    if(parseInt(soluong_number.textContent)>1)
    {
        soluong_number.textContent=parseInt(soluong_number.textContent)-1;
    }
    btn_buy(parseInt(soluong_number.textContent));
};

function btn_buy(so){
    let btn_buy=document.querySelector(".main-1-right-buy-btn");
    btn_buy.setAttribute("href", `./product_information.html?soluongmuahang=${so}`)
}

