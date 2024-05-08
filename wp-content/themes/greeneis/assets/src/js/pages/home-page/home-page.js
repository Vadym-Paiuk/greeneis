import Global from "../../global/global";

class HomePage {
    constructor() {
        this.global = Global;
    }

    static getInstance() {
        if (!this.instance) {
            this.instance = new this();
        }
        return this.instance;
    }
}

$(function () {
    HomePage.getInstance();
});
