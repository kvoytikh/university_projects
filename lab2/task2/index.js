class LogicUnit {
    value;

    constructor(value) {
        if (value instanceof LogicUnit) {
            // copy constructor
            this.value = value.value;
        } else {
            this.value = !!value;
        }
    }

    AND = (logicUnit) => new LogicUnit(this.value * logicUnit.value);
    OR = (logicUnit) => new LogicUnit((this.value + logicUnit.value) / 2);
    NOT = () => new LogicUnit(!this.value);
    XOR = (logicUnit) => new LogicUnit((this.value + logicUnit.value) % 2);
    DIRECT_IMPLICATION = (logicUnit) => new LogicUnit(this.value <= logicUnit.value);
    REVERSE_IMPLICATION = (logicUnit) => new LogicUnit(this.value >= logicUnit.value);

    toString() {
        return "" + +this.value;
    }
}

class Logic {
    // will store LogicUnits upside-down, i.e. 01001 will be stored as 10010
    values;

    constructor(values = [], reverse = true) {
        if (reverse)
            this.values = values.reverse().map(val => new LogicUnit(val));
        else
            this.values = values.map(val => new LogicUnit(val));
    }

    toString() {
        return this.values.reverse().reduce((acum, unit) => acum + +unit.value, "");
    }

    _operationsBuilder = (operation, logicObject) => {
        const length = this.values.length;
        const otherLength = logicObject.values.length;

        const lessObj = (length > otherLength ? logicObject : this);
        const moreObj = (length > otherLength ? this : logicObject);
        let ret = new Logic();
        ret.values = [
            ...lessObj.values.map((val, index) => val[operation](moreObj.values[index])),
            ...moreObj.values.slice(-Math.abs(length - otherLength))
        ];
        return ret;
    };

    NOT = () => new Logic(this.values.map(val => val.NOT()), false);

    AND = (logicObject) => this._operationsBuilder(
        "AND",
        logicObject
    );

    OR = (logicObject) => this._operationsBuilder(
        "OR",
        logicObject
    );

    XOR = (logicObject) => this._operationsBuilder(
        "XOR",
        logicObject
    );

    DIRECT_IMPLICATION = (logicObject) => this._operationsBuilder(
        "DIRECT_IMPLICATION",
        logicObject
    );

    REVERSE_IMPLICATION = (logicObject) => this._operationsBuilder(
        "REVERSE_IMPLICATION",
        logicObject
    );

}

function main() {
    const trueObj = new LogicUnit(true);
    const falseObj = new LogicUnit(false);

    console.log(trueObj.AND(falseObj).value);
    console.log(trueObj.OR(falseObj).value);
    console.log(trueObj.AND(trueObj).AND(trueObj).value);
    console.log(trueObj.OR(trueObj).toString());

    const obj_00101 = new Logic([0, 0, 1, 0, 1]);
    const obj_111101 = new Logic([1, 1, 1, 1, 0, 1]);
    const obj_000000 = new Logic([0, 0, 0, 0, 0, 0]);

    console.log("00101 AND 111101 = " + obj_00101.AND(obj_111101).toString());
    console.log("NOT 00101 = " + obj_00101.NOT().toString());
    console.log("00101 OR 000000 = " + obj_00101.OR(obj_000000).toString());
    console.log("00101 XOR 000000 = " + obj_00101.XOR(obj_000000).toString());
    console.log("00101 >= 111101 = " + obj_00101.DIRECT_IMPLICATION(obj_111101).toString());
    console.log("00101 <= 111101 = " + obj_00101.REVERSE_IMPLICATION(obj_111101).toString());
}

main();