window.onload = () => {
    const vendorForm = document.getElementById("vendor");
    const balanceForm = document.getElementById("price");
    const categoryForm = document.getElementById("category");

    vendorForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const first = new FormData(this);
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "Shop.php");
        xhr.responseType = 'text';
        xhr.send(first);

        xhr.onload = () => {
            document.getElementById("1").innerHTML = xhr.responseText;
        }
    })

    balanceForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const formDataBalance = new FormData(this);
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "Shop.php");
        xhr.responseType = 'document';
        xhr.send(formDataBalance);

        xhr.onload = () => {
            document.getElementById("3").innerHTML = xhr.responseXML.body.innerHTML;
        }
    })

    categoryForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const formDataTraffic = new FormData(this);
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "Shop.php");
        xhr.responseType = 'json';
        xhr.send(formDataTraffic);

        xhr.onload = () => {
            document.getElementById("2").innerHTML = xhr.response;
        }
    })
}






