class FormModal {
    constructor(form = 'form') {
        this.targetName = form;
        this.targetElement = document.querySelector(this.targetName);
    }
    getInputInformation() {
        let element = this.targetElement;
        let arr = [];
        // check children type 
        for (let i = 0; i < element.length; i++) {
            arr.push({
                id: element.elements[i].id,
                label: element.elements[i].labels[0]
            })
        }
        return arr;
    }
    generateUI() {

    }
    info() {
        console.log([this, this.getInputInformation()]);

    }
}