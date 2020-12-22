const Complex = require("./complex");

function main() {
    const c1 = new Complex(1, 1);
    const c2 = new Complex(2, 5);
    const c3 = Complex.add(c1, c2);
    console.log(c3.toString());
    console.log(c1.add(c3).toString());
}

main();