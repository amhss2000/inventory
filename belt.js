class InventoryManager {
    constructor() {
        this.inventory = {
            belts: { total: 100, remaining: 100 },
            socks: { total: 200, remaining: 200 },
            shoes: { total: 150, remaining: 150 },
            uniforms: { total: 300, remaining: 300 }
        };
    }

    // Function to add items to the inventory
    addItem(item, quantity) {
        if (this.inventory[item]) {
            this.inventory[item].total += quantity;
            this.inventory[item].remaining += quantity;
            console.log(`${quantity} ${item} added to inventory.`);
        } else {
            console.log(`Invalid item: ${item}`);
        }
    }

    // Function to remove items from the inventory
    removeItem(item, quantity) {
        if (this.inventory[item]) {
            if (this.inventory[item].remaining >= quantity) {
                this.inventory[item].remaining -= quantity;
                console.log(`${quantity} ${item} removed from inventory.`);
            } else {
                console.log(`Insufficient ${item} in inventory.`);
            }
        } else {
            console.log(`Invalid item: ${item}`);
        }
    }

    // Function to calculate total quantity of an item in inventory
    calculateTotalQuantity(item) {
        return this.inventory[item] ? this.inventory[item].total : 0;
    }

    // Function to calculate remaining quantity of an item in inventory
    calculateRemainingQuantity(item) {
        return this.inventory[item] ? this.inventory[item].remaining : 0;
    }
}

// Example usage:
const manager = new InventoryManager();

manager.addItem('belts', 20);
manager.removeItem('socks', 50);

console.log('Total belts:', manager.calculateTotalQuantity('belts'));
console.log('Remaining socks:', manager.calculateRemainingQuantity('socks'));
