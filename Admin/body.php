<?php require_once("../Database/connection.php")?>
<style>
  canvas {
    margin-left: 200px;
    max-width: 400px;
    max-height: 300px;
    width: 100%;
    height: auto;
}
h3{
  margin-left: 200px;
  margin-top: 40px;
  margin-bottom: 40px;
}

</style>
<div class="page-content">
<div>
    <h3>Top 10 Best-Selling Products</h3>
    <canvas id="bestSellingProductsChart" height="200px" width="200px"></canvas>
</div>

<div>
    <h3>Top 10 Clients/Users (by Shopping)</h3>
    <canvas id="topClientsChart" height="200px" width="200px"></canvas>
</div>

  <?php
// Fetch top 10 best-selling products
$productsQuery = "SELECT products.Pro_Name AS product_name, SUM(order_item.productqty) AS total_sold
                  FROM order_item
                  JOIN products ON order_item.productid = products.Pro_Id
                  GROUP BY products.Pro_Name
                  ORDER BY total_sold DESC
                  LIMIT 10";
$productsResult = $con->query($productsQuery);

$productNames = [];
$productSalesData = [];

if ($productsResult->num_rows > 0) {
    while ($row = $productsResult->fetch_assoc()) {
        $productNames[] = $row['product_name'];
        $productSalesData[] = $row['total_sold'];
    }
}

// Fetch top 10 clients (users with max shopping)
$clientsQuery = "SELECT customers.Name AS client_name, SUM(orders.Total_Amount) AS total_spent
                 FROM orders
                 JOIN customers ON orders.customer_id = customers.id
                 GROUP BY customers.Name
                 ORDER BY total_spent DESC
                 LIMIT 10";
$clientsResult = $con->query($clientsQuery);

$clientNames = [];
$clientPurchasesData = [];

if ($clientsResult->num_rows > 0) {
    while ($row = $clientsResult->fetch_assoc()) {
        $clientNames[] = $row['client_name'];
        $clientPurchasesData[] = $row['total_spent'];
    }
}

$con->close();
?>

<script>
// Pass PHP data to JavaScript
const bestSellingProducts = <?php echo json_encode($productNames); ?>;
const productSales = <?php echo json_encode($productSalesData); ?>;

const topClients = <?php echo json_encode($clientNames); ?>;
const clientPurchases = <?php echo json_encode($clientPurchasesData); ?>;
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</div>
<script>
// Chart for Best-Selling Products
const ctx1 = document.getElementById('bestSellingProductsChart').getContext('2d');
new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: bestSellingProducts,
        datasets: [{
            label: 'Units Sold',
            data: productSales,
            backgroundColor: 'rgba(75, 192, 192, 0.5)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: { beginAtZero: true }
        }
    }
});

// Chart for Top Clients/Users
const ctx2 = document.getElementById('topClientsChart').getContext('2d');
new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: topClients,
        datasets: [{
            label: 'Total Purchases',
            data: clientPurchases,
            backgroundColor: 'rgba(153, 102, 255, 0.5)',
            borderColor: 'rgba(153, 102, 255, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: { beginAtZero: true }
        }
    }
});
</script>
