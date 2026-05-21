export default class person {
    constructor (name, age) {
        this.name = name;
        this.age = age;
    }

    greet() {
        console.log(`Hallo, nama saya ${this.name}, umur ${this.age} tahun`);
    }
}