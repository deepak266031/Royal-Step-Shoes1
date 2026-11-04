<?php
session_start();
$secret_code = "ROYAL2026"; // Change access code here if desired

if (isset($_GET['logout'])) {
    unset($_SESSION['authorized']);
    header("Location: backend.php");
    exit();
}

if (isset($_POST['access_code'])) {
    if ($_POST['access_code'] === $secret_code) {
        $_SESSION['authorized'] = true;
    } else {
        $error = "Invalid access code.";
    }
}

if (!isset($_SESSION['authorized']) || $_SESSION['authorized'] !== true):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secured Backend - Royal Step</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-white flex items-center justify-center h-screen">
    <div class="bg-slate-900 p-8 rounded-2xl border border-slate-800 w-full max-w-md shadow-xl">
        <h2 class="text-2xl font-bold mb-2">Restricted Backend</h2>
        <p class="text-slate-400 text-sm mb-6">Enter access code (Default: <code class="text-amber-400">ROYAL2026</code>)</p>
        <?php if (isset($error)): ?><div class="bg-rose-500/10 text-rose-400 p-3 rounded-xl mb-4 text-sm"><?php echo $error; ?></div><?php endif; ?>
        <form method="POST" class="space-y-4">
            <input type="password" name="access_code" required placeholder="Access Code" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-amber-500">
            <button type="submit" class="w-full py-3 bg-amber-600 hover:bg-amber-500 text-white font-bold rounded-xl">Unlock</button>
        </form>
    </div>
</body>
</html>
<?php exit(); endif;

// Fetch orders from MySQL Database
try {
    $pdo = new PDO("mysql:host=localhost;dbname=royal_step_db;charset=utf8mb4", "root", "");
    $stmt = $pdo->query("SELECT * FROM orders ORDER BY id DESC");
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $orders = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders Database - Royal Step</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-white p-8">
    <div class="max-w-6xl mx-auto flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold font-serif">SQL Database Orders</h1>
            <p class="text-slate-400 text-xs mt-1">Authorized access only.</p>
        </div>
        <a href="backend.php?logout=true" class="px-4 py-2 bg-rose-600 hover:bg-rose-500 text-white text-xs font-bold rounded-xl">Lock / Logout</a>
    </div>

    <div class="max-w-6xl mx-auto bg-slate-900 rounded-2xl border border-slate-800 overflow-hidden shadow-xl">
        <table class="w-full text-left text-sm text-slate-300">
            <thead class="bg-slate-950 text-xs uppercase tracking-wider text-amber-400 border-b border-slate-800">
                <tr>
                    <th class="px-6 py-4">Tracking ID</th>
                    <th class="px-6 py-4">Customer</th>
                    <th class="px-6 py-4">Shoe Model</th>
                    <th class="px-6 py-4">Size & Qty</th>
                    <th class="px-6 py-4">Total Amount</th>
                    <th class="px-6 py-4">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800">
                <?php if (empty($orders)): ?>
                    <tr><td colspan="6" class="px-6 py-12 text-center text-slate-500">No orders recorded in the MySQL database yet.</td></tr>
                <?php else: foreach ($orders as $o): ?>
                    <tr class="hover:bg-slate-950/50">
                        <td class="px-6 py-4 font-mono font-bold text-amber-400"><?php echo htmlspecialchars($o['tracking_id']); ?></td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-white block"><?php echo htmlspecialchars($o['customer_name']); ?></span>
                            <span class="text-xs text-slate-400"><?php echo htmlspecialchars($o['customer_phone']); ?></span>
                        </td>
                        <td class="px-6 py-4 font-medium text-white"><?php echo htmlspecialchars($o['shoe_name']); ?></td>
                        <td class="px-6 py-4 text-xs"><span class="bg-slate-800 px-2.5 py-1 rounded-md"><?php echo htmlspecialchars($o['size']); ?></span> (Qty: <?php echo $o['quantity']; ?>)</td>
                        <td class="px-6 py-4 font-bold text-amber-400">₹<?php echo number_format($o['total_inr']); ?></td>
                        <td class="px-6 py-4 text-xs text-slate-400"><?php echo $o['order_date']; ?></td>
                    </tr>
                <?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>