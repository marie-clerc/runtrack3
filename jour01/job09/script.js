/**
function tri (numbers, order)
{
    if ( order === "asc") {
        numbers.sort(function (a, b) {
            return a - b
        });
        console.log("asc : " + numbers);
    }
    if ( order === "desc") {
        numbers.sort(function (a, b) {
            return b - a
        });
        console.log("desc : " + numbers);
    }
}
console.log(tri([40, 100, 1, 5, 25, 10], "desc"));
console.log(tri([40, 100, 1, 5, 25, 10], "asc"));
*/

function tri(numbers, order) {

    let newArray = numbers;
    let temp = numbers;

    for (let i = 0; i < numbers.length; i++) {
        for (let j = 0; j < numbers.length; j++) {
            switch (order) {
                case 'desc':
                    if (numbers[i] > newArray[j]) {
                        temp = numbers[i];
                        numbers[i] = newArray[j];
                        newArray[j] = temp;
                    }
                    break;
                case 'asc':
                    if (numbers[i] < newArray[j]) {
                        temp = numbers[i];
                        numbers[i] = newArray[j]
                        newArray[j] = temp;
                    }
                    break;
            }


        }
    }
    return console.log(newArray);
}

numbers = [5, 8, 10, 13, 2, 3, 4, 6, 7]; // on donne un tableau prédéfini 
tri(numbers, 'asc');
