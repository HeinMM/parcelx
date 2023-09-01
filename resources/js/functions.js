export const copy = async () => {
    var copyText = document.getElementById("copy-text").textContent;
    try {
        await navigator.clipboard.writeText(copyText);
    } catch (err) {
        console.error('Failed to copy text : ', err);
    }
}


export const calc =  (weight,count,price) => {

    if (!isNaN(weight)&&!isNaN(count)&&!isNaN(price)) {
        let total = 0;
        for (let index = 3; index <= weight; index++) {
            total += price;
        }
    }
}
