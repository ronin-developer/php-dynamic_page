<?php session_start(); ?>
<?php require ('pets.php') ?>
<?php require ('partials/top.php') ?>
<h1>Welcome to PetShop</h1>
<?php if (isset($_SESSION['pet'])): ?>
    <a href="logout.php" class="btn btn-danger">Logout</a>
<?php endif; ?>


<div class="container">
    <div class="row">
        <div class="col-6 offset-3 p-2">
            <?php if (isset($_SESSION['pet'])): ?>
                <?php require ('./partials/table.php') ?>
            <?php else: ?>
                <form action="login.php" method="post">
                    <input type="text" placeholder="username" name="username" class="form-control"><br>
                    <input type="password" placeholder="password" name="password" class="form-control"><br>
                    <button class="btn btn-primary">Login</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require ('partials/buttom.php') ?>