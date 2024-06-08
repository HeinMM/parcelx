import { price, resultValue, weight } from "./selectors";

weight.addEventListener('input',function () {
    let weight = parseFloat(weight.value);
    let count = parseFloat(count.value);
    let price = parseFloat(price.value);

    if (!isNaN(weight)&&!isNaN(count)&&!isNaN(price)) {
        let total = 0;
        for (let index = 3; index <= weight; index++) {
            total = 0;
            total = price;
            total += 500;
        }
        resultValue.textContent = total;
    }
    else {
        resultValue.textContent = '';
    }
})
