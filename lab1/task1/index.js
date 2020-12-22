const countLowercase = (str) => str.split("").reduce(
    (acum, ch) => ch >= "a" && ch <= "z" ? acum + 1 : acum,
    0);

function main() {
    console.log(countLowercase("aBCde"));
    console.log(countLowercase("sadASDASDDasd"));
}

main();