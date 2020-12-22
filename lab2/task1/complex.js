class Complex {
    #_realPart;
    #_imagPart;

    constructor(r = 0, i = 0) {
        this.#_realPart = r;
        this.#_imagPart = i;
    }

    get real() {
        return this.#_realPart;
    }

    get imag() {
        return this.#_imagPart;
    }

    static add = (a, b) => {
        return new Complex(a.#_realPart + b.#_realPart, a.#_imagPart + b.#_imagPart);
    };

    static sub = (a, b) => {
        return new Complex(a.#_realPart - b.#_realPart, a.#_imagPart - b.#_imagPart);
    };

    add = (other) => {
        this.#_realPart += other.#_realPart;
        this.#_imagPart += other.#_imagPart;
        return this;
    };

    toString = () => (`Complex { ${this.#_realPart} + ${this.#_imagPart}i }`);
}


module.exports = Complex;