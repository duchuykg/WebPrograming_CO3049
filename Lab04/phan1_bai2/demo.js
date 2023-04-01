function setCookie() {
    getname = document.getElementById("name").value;
    value = document.getElementById("value").value;

    if (!getname){
        alert("Nhập Name")
    }
    else if (!value){
        alert("Nhập Value")
    }
    else alert("Thành công ! Nhấn Show để cập nhật");
    
    document.cookie = `${getname}=${value}`;
    
}

function deleteCookie() {
    getname = document.getElementById("name").value;
    value = document.getElementById("value").value;
    if (!getname){
        alert("Nhập Name")
    }
    else if (!value){
        alert("Nhập Value")
    }
    else alert("Thành công ! Nhấn Show để cập nhật");
    
    document.cookie = `${getname}=${value}; expires=Thu, 1 Dec 2022 12:00:00 UTC;`;
    
}

function show() {
    let x = document.cookie;
    document.getElementById("display").innerHTML = x;
    alert("Complete !")
}