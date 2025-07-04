<?php

include 'partials/header.php';

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['index'])) {
    $index = $_GET['index'];
    unset($_SESSION['cart'][$index]);
}

?>

<?php if (!empty($_SESSION['cart'])): ?>
    <div class="container mt-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $counter = 1;
            $total_price = 0;
            foreach ($_SESSION['cart'] as $index => $cartItem):
                $product = $_SESSION['products'][$cartItem];
                $total_price += $product['price'];
            ?>
                <tr>
                    <th scope="row"><?= $counter++; ?></th>
                    <td><?= $product['title'] ?></td>
                    <td>$<?= $product['price'] ?></td>
                    <td>
                        <img src="admin/upload/<?= $product['img'] ?>" width="50px" alt="<?= $product['title'] ?>">
                    </td>
                    <td><a href="cart.php?index=<?= $index; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Coupon</h3>
            <input type="text" placeholder="Enter coupon code">
            <button class="normal">Apply</button>
        </div>
        <div id="subTotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$<?= $total_price ?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$<?= $total_price ?></strong></td>
                </tr>
            </table>
            <button class="normal">proceed to checkout</button>
        </div>
    </section>
<?php else: ?>
    <h3 class="text-center mt-5 text-danger">Your cart is empty!</h3>
<?php endif; ?>

<?php include 'partials/footer.php'; ?>