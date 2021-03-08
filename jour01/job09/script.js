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