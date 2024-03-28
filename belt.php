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

    <?php

class InventoryManager {
    private $inventory;

    public function __construct() {
        // Initialize inventory with initial quantities
        $this->inventory = array(
            'belts' => array('total' => 100, 'remaining' => 100),
            'socks' => array('total' => 200, 'remaining' => 200),
            'shoes' => array('total' => 150, 'remaining' => 150),
            'uniforms' => array('total' => 300, 'remaining' => 300)
        );
    }

    // Function to add items to the inventory
    public function addItem($item, $quantity) {
        if (array_key_exists($item, $this->inventory)) {
            $this->inventory[$item]['total'] += $quantity;
            $this->inventory[$item]['remaining'] += $quantity;
            echo "$quantity $item added to inventory.";
        } else {
            echo "Invalid item: $item";
        }
    }

    // Function to remove items from the inventory
    public function removeItem($item, $quantity) {
        if (array_key_exists($item, $this->inventory)) {
            if ($this->inventory[$item]['remaining'] >= $quantity) {
                $this->inventory[$item]['remaining'] -= $quantity;
                echo "$quantity $item removed from inventory.";
            } else {
                echo "Insufficient $item in inventory.";
            }
        } else {
            echo "Invalid item: $item";
        }
    }

    // Function to calculate total quantity of an item in inventory
    public function calculateTotalQuantity($item) {
        return isset($this->inventory[$item]) ? $this->inventory[$item]['total'] : 0;
    }

    // Function to calculate remaining quantity of an item in inventory
    public function calculateRemainingQuantity($item) {
        return isset($this->inventory[$item]) ? $this->inventory[$item]['remaining'] : 0;
    }
}

// Example usage:
$manager = new InventoryManager();

$manager->addItem('belts', 20);
$manager->removeItem('socks', 50);

echo 'Total belts: ' . $manager->calculateTotalQuantity('belts') . '<br>';
echo 'Remaining socks: ' . $manager->calculateRemainingQuantity('socks');

?>
