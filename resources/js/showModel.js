
const url = "https://parcelxmm.com/api"
document.addEventListener('DOMContentLoaded', function () {
    var selectItemButton = document.getElementById('township-show');
    var itemSelect = document.getElementById('itemSelect');
    var itemNameInput = document.getElementById('receiver-township');
    var itemNameInputClone = document.getElementById('receiver-township-clone');

    var selectWeightButton = document.getElementById('weight-show');
    var weightSelect = document.getElementById('weightSelect');
    var weightInput = document.getElementById('weight');

    var selectCountButton = document.getElementById('count-show');
    var countSelect = document.getElementById('countSelect');
    var countInput = document.getElementById('count');

    var price = 0;
    var resultInput = document.getElementById('resultValue')

    selectItemButton.addEventListener('click', function () {
        var selectedItem = itemSelect.value;
        itemNameInput.value = selectedItem;

        if (selectedItem >= 1) {
            fetch(url + '/townships/' + selectedItem)
                .then(response => response.json())
                .then(
                    data => {
                        itemNameInputClone.value = data.name;
                        price = data.price;

                        if (price > 1 && weightInput.value >= 1 && countInput.value >= 1) {

                            var addingPrice = 0;
                            if (weightInput.value > 3) {
                                for (let i = 3; i < weightInput.value; i++) {
                                    addingPrice += 500;

                                }
                            }
                            console.log(addingPrice);
                            resultInput.textContent = ((parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value)+ "MMK");

                        }

                    }).catch(error => {
                        alert("something wrong")
                    });;
        }


    });

    selectWeightButton.addEventListener('click', function () {
        var selectedweight = weightSelect.value;
        weightInput.value = selectedweight;

        if (price > 1 && weightInput.value >= 1 && countInput.value >= 1) {

            var addingPrice = 0;
            if (weightInput.value > 3) {
                for (let i = 3; i < weightInput.value; i++) {
                    addingPrice += 500;
                }
            }

            resultInput.textContent = (parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value) + "MMK";
        }
    });

    selectCountButton.addEventListener('click', function () {
        var selectedcount = countSelect.value;
        countInput.value = selectedcount;

        if (price > 1 && weightInput.value >= 1 && countInput.value >= 1) {

            var addingPrice = 0;
            if (weightInput.value > 3) {
                for (let i = 3; i < weightInput.value; i++) {
                    addingPrice += 500;
                }
            }

            resultInput.textContent = (parseInt(price) + parseInt(addingPrice)) * parseInt(countInput.value) + "MMK";
        }
    });




});

