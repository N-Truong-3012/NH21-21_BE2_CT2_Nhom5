// Tìm sản phẩm theo từ khóa
async function searchProduct(keyword) {
    const divResult = document.querySelector("#search-result");
    if (keyword != '') {
        //B1: Gửi request:
        const url = "/api/searchProduct/"+keyword;
        const response = await fetch(url);
        //B2: Nhận và đọc kết quả:
        const result = await response.json();
        //B3: xuất kết quả:
        divResult.classList.add('border-search');
        divResult.innerHTML = '';
        result.forEach(el => {
            let regexProductName = new RegExp('(' + keyword + ')', 'gi');
            const productName = el.Product_Name.replace(regexProductName, '<b>$1</b>');
            divResult.innerHTML += `
            <div class="row border-item-search" style="margin-right: 0px !important;margin-left: 5px !important;">
  
                <div class="col mt-3">
                    <a href="./detail/${el.Product_ID}">${productName}</a>
                    <p>${el.Price} VND</p>
                </div>
            </div>`;
        });
    }
    else {
        divResult.innerHTML = '';
        divResult.classList.remove('border-search');
    }
}