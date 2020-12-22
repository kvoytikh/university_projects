const listAnd = (...list) => list.reduce((accum, val) => accum && val, true);
const builtInListAnd = (...list) => list.every(val => val);

const listOr = (...list) => list.reduce((accum, val) => accum || val, true);
const builtInListOr = (...list) => list.some(val => val);


function main() {
    console.log("----- AND -----");
    console.log(`1. listAnd: ${listAnd()}`);
    console.log(`1. builtInListAnd: ${builtInListAnd()}`)
    console.log(`2. listAnd: ${listAnd(false)}`);
    console.log(`2. builtInListAnd: ${builtInListAnd(false)}`);
    console.log(`3. listAnd: ${listAnd(true, true, true)}`);
    console.log(`3. builtInListAnd: ${builtInListAnd(true, true, true)}`);
    console.log(`4. listAnd: ${listAnd(true, true, false)}`);
    console.log(`4. builtInListAnd: ${builtInListAnd(true, true, false)}`);
    console.log(`5. listAnd: ${listAnd(true, false, true)}`);
    console.log(`5. builtInListAnd: ${builtInListAnd(true, false, true)}`);

    console.log("\n----- OR -----");
    // here my function will return true and built-in will return false because of different realization.
    console.log(`1. listOr: ${listOr()}`);
    console.log(`1. builtInListOr: ${builtInListOr()}`)
    console.log(`2. listOr: ${listOr(false)}`);
    console.log(`2. builtInListOr: ${builtInListOr(false)}`);
    console.log(`3. listOr: ${listOr(true, true, true)}`);
    console.log(`3. builtInListOr: ${builtInListOr(true, true, true)}`);
    console.log(`4. listOr: ${listOr(true, true, false)}`);
    console.log(`4. builtInListOr: ${builtInListOr(true, true, false)}`);
    console.log(`5. listOr: ${listOr(true, false, true)}`);
    console.log(`5. builtInListOr: ${builtInListOr(true, false, true)}`);

}

main();