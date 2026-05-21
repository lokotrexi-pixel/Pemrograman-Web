export default class bankaccount {
    #balance = 0;
    constructor(owner) {
        this.owner = owner;
    }
    deposit(amount) {
        this.#balance += amount;
        console.log(`${this.owner} menabung Rp${amount}`);
    }
    withdraw(amount) {
        if (amount > this.#balance) {
            console.log("Saldo Tidak Cukup");
            return;
        }
        this.#balance -= amount;
        console.log(`${this.owner} menarik Rp${amount}`);
    }
    getBalance() {
        return this.#balance;
    }
}