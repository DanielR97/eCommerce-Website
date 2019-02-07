<?php
error_reporting(E_ALL ^ E_NOTICE);
$op = $_GET['op'];
switch ($op) {
    case 'insertClient':
        $content = 'php/addClientForm.php';
        $title = 'Insert a client';
        break;
    case 'updateClient':
        $content = 'php/updateClientForm.php';
        $title = 'Update a client';
        break;
    case 'removeClient':
        $content = 'php/removeClient.php';
        $title = 'Remove a client';
        break;
    case 'listClients':
        $content = 'php/listClients.php';
        $title = 'List client\'s';
        break;
    case 'orderSomething':
        $content = 'php/addOrderForm.php';
        $title = 'Order something';
        break;
    case 'changeOrder':
        $content = 'php/changeOrderForm.php';
        $title = 'Change an order';
        break;
    case 'cancelOrder':
        $content = 'php/cancelOrder.php';
        $title = 'Cancel an order';
        break;
    case 'listAllOrders':
        $content = 'php/listOrders.php';
        $title = 'List all orders';
        break;
    case 'addProduct':
        $content = 'php/addProductForm.php';
        $title = 'Add a new product';
        break;
    case 'updateProduct':
        $content = 'php/updateProductForm.php';
        $title = 'Update a product';
        break;
    case 'removeProduct':
        $content = 'php/removeProduct.php';
        $title = 'Remove a product';
        break;
    case 'listProducts':
        $content = 'php/listProducts.php';
        $title = 'List all products';
        break;
    default:
        $content = 'php/home.php';
        $title = 'Home';
        break;
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
	<!-- Required meta tags -->
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
	<!-- Bootstrap CSS -->
	<link rel='stylesheet' href='css/bootstrap.min.css'/>
	<!-- Own CSS -->
	<link rel='stylesheet' href='css/style.css'/>
	<!-- jQuery, Popper and Bootstrap JS -->
	<script src='js/jquery-3.3.1.slim.min.js'></script>
	<script src='js/popper.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <!-- Own JS -->
    <script src='js/script.js'></script>

	<title><?php echo $title; ?></title>
</head>
<body>
	<nav class='navbar navbar-expand-lg'>
	<div class='collapse navbar-collapse' id='navbarSupportedContent'>
		<ul class='navbar-nav mr-auto'>
			<li class='nav-item active'>
				<a class='nav-link' href='index.php'>Home</a>
			</li>
			<li class='nav-item dropdown'>
				<a class='nav-link dropdown-toggle' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Clients</a>
				<div class='dropdown-menu' aria-labelledby='navbarDropdown'>
					<a class='dropdown-item' href='?op=insertClient'>Insert a client</a>
					<a class='dropdown-item' href='?op=updateClient'>Update a client</a>
					<a class='dropdown-item' href='?op=removeClient'>Remove a client</a>
					<a class='dropdown-item' href='?op=listClients'>List client's</a>
				</div>
            </li>
            <li class='nav-item dropdown'>
				<a class='nav-link dropdown-toggle' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Products</a>
				<div class='dropdown-menu' aria-labelledby='navbarDropdown'>
					<a class='dropdown-item' href='?op=addProduct'>Add a new product</a>
					<a class='dropdown-item' href='?op=updateProduct'>Update a product</a>
					<a class='dropdown-item' href='?op=removeProduct'>Remove a product</a>
					<a class='dropdown-item' href='?op=listProducts'>List available products</a>
				</div>
			</li>
			<li class='nav-item dropdown'>
				<a class='nav-link dropdown-toggle' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Orders</a>
				<div class='dropdown-menu' aria-labelledby='navbarDropdown'>
					<a class='dropdown-item' href='?op=orderSomething'>Order something</a>
					<a class='dropdown-item' href='?op=changeOrder'>Change an order</a>
					<a class='dropdown-item' href='?op=cancelOrder'>Cancel an order</a>
					<a class='dropdown-item' href='?op=listAllOrders'>List all orders</a>
				</div>
			</li>
		</ul>
	</div>
	</nav>
	<section id='main'>
		<?php include $content;?>
	</section>
</body>
</html>