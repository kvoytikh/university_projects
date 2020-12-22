const multiplicity = (a, b) => b <= 1 ? a : a + multiplicity(a, b - 1);

function main() {
    console.log(`built-in: ${2 * 2}`);
    console.log(`multiplicity: ${multiplicity(2, 2)}`);
    console.log(`built-in: ${3 * 4}`);
    console.log(`multiplicity: ${multiplicity(3, 4)}`);
    console.log(`built-in: ${10 * 5}`);
    console.log(`multiplicity: ${multiplicity(10, 5)}`);
}

main();