<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Step Shoes — Luxury Footwear Collection</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0b0f19; color: #f8fafc; }
        h1, h2, h3, .font-serif { font-family: 'Playfair Display', serif; }
        .glass-nav { background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(197, 160, 89, 0.2); }
        .gold-gradient-text { background: linear-gradient(135deg, #fef3c7 0%, #c5a059 50%, #92400e 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .gold-border:focus { border-color: #c5a059; box-shadow: 0 0 10px rgba(197, 160, 89, 0.25); }
        .card-hover:hover { transform: translateY(-6px); box-shadow: 0 20px 30px -10px rgba(197, 160, 89, 0.15); border-color: rgba(197, 160, 89, 0.6); }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col selection:bg-amber-500 selection:text-white">

    <!-- Sticky Navigation Bar -->
    <header class="sticky top-0 z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center space-x-3 cursor-pointer" onclick="switchView('catalog')">
                <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-amber-700 via-amber-500 to-amber-300 flex items-center justify-center shadow-lg">
                    <i class="fa-solid fa-shoe-prints text-slate-950 text-lg"></i>
                </div>
                <div>
                    <span class="text-2xl font-bold font-serif tracking-wider gold-gradient-text">ROYAL STEP</span>
                    <span class="block text-[10px] tracking-[0.25em] text-amber-400 uppercase font-medium">Artisanal Footwear</span>
                </div>
            </div>

            <nav class="hidden lg:flex items-center space-x-6 text-sm font-medium">
                <button onclick="switchView('catalog'); scrollToSection('sneakers')" class="text-slate-300 hover:text-amber-400">Sneakers</button>
                <button onclick="switchView('catalog'); scrollToSection('formals')" class="text-slate-300 hover:text-amber-400">Formals</button>
                <button onclick="switchView('catalog'); scrollToSection('loafers')" class="text-slate-300 hover:text-amber-400">Loafers</button>
                <button onclick="switchView('catalog'); scrollToSection('sports')" class="text-slate-300 hover:text-amber-400">Sports</button>
                <button onclick="switchView('catalog'); scrollToSection('boots')" class="text-slate-300 hover:text-amber-400">Boots</button>
            </nav>

            <div class="flex items-center space-x-3">
                <button onclick="switchView('catalog')" id="nav-btn-catalog" class="px-4 py-2 rounded-full text-xs font-semibold uppercase bg-amber-600 text-white shadow-md">
                    <i class="fa-solid fa-store mr-1.5"></i> Catalog
                </button>
                <button onclick="switchView('order')" id="nav-btn-order" class="px-4 py-2 rounded-full text-xs font-semibold uppercase bg-slate-800 text-slate-200 hover:bg-slate-700 border border-slate-700">
                    <i class="fa-solid fa-cart-shopping mr-1.5"></i> Order Page
                </button>
                <a href="backend.php" target="_blank" class="px-4 py-2 rounded-full text-xs font-semibold uppercase bg-slate-800 text-slate-200 hover:bg-slate-700 border border-slate-700">
                    <i class="fa-solid fa-database mr-1.5"></i> SQL Backend
                </a>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        <!-- CATALOG VIEW -->
        <div id="view-catalog" class="space-y-16 pb-20">
            <section class="bg-gradient-to-b from-slate-900 to-[#0b0f19] py-20 text-center border-b border-amber-900/20">
                <div class="max-w-7xl mx-auto px-4">
                    <span class="px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-semibold tracking-widest uppercase mb-6 inline-block">
                        <i class="fa-solid fa-crown mr-1.5"></i> Spring / Summer Collection
                    </span>
                    <h1 class="text-4xl sm:text-6xl font-bold font-serif text-white mb-6">
                        Walk in <span class="gold-gradient-text italic">Unrivaled</span> Elegance
                    </h1>
                    <p class="max-w-2xl mx-auto text-slate-400 mb-10">Handcrafted with precision Italian leather and uncompromising comfort.</p>
                    <button onclick="switchView('order')" class="px-8 py-4 rounded-full bg-amber-600 hover:bg-amber-500 text-white font-semibold shadow-lg transition">
                        <i class="fa-solid fa-bag-shopping mr-2"></i> Place an Order Now
                    </button>
                </div>
            </section>

            <div class="max-w-7xl mx-auto px-4 space-y-24">
                <section id="sneakers">
                    <h2 class="text-3xl font-bold font-serif text-white mb-8 border-b border-slate-800 pb-4">Sneakers Collection</h2>
                    <div id="grid-sneakers" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"></div>
                </section>
                <section id="formals">
                    <h2 class="text-3xl font-bold font-serif text-white mb-8 border-b border-slate-800 pb-4">Formal Oxfords</h2>
                    <div id="grid-formals" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"></div>
                </section>
                <section id="loafers">
                    <h2 class="text-3xl font-bold font-serif text-white mb-8 border-b border-slate-800 pb-4">Casual Loafers</h2>
                    <div id="grid-loafers" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"></div>
                </section>
                <section id="sports">
                    <h2 class="text-3xl font-bold font-serif text-white mb-8 border-b border-slate-800 pb-4">Royal Sports Elite</h2>
                    <div id="grid-sports" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"></div>
                </section>
                <section id="boots">
                    <h2 class="text-3xl font-bold font-serif text-white mb-8 border-b border-slate-800 pb-4">Heritage Boots</h2>
                    <div id="grid-boots" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"></div>
                </section>
            </div>
        </div>

        <!-- ORDER PAGE VIEW -->
        <div id="view-order" class="hidden max-w-4xl mx-auto px-4 py-12">
            <div class="mb-10 text-center">
                <h1 class="text-3xl sm:text-5xl font-bold font-serif text-white">Secure MySQL Checkout</h1>
                <p class="text-slate-400 text-sm mt-2">Submit your order directly to the SQL database.</p>
            </div>

            <div class="bg-slate-900 p-8 rounded-3xl border border-slate-800 shadow-2xl">
                <form id="checkout-form" onsubmit="handleOrderSubmission(event)" class="space-y-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-amber-400 mb-2">Select Shoe Model</label>
                        <select id="order-shoe-select" onchange="updateOrderSummary()" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3.5 text-white gold-border text-sm"></select>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-amber-400 mb-2">Select Size</label>
                            <select id="order-size" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3.5 text-white gold-border text-sm">
                                <option value="UK 8 / US 9 (EU 42)" selected>UK 8 / US 9 (EU 42)</option>
                                <option value="UK 9 / US 10 (EU 43)">UK 9 / US 10 (EU 43)</option>
                                <option value="UK 10 / US 11 (EU 44)">UK 10 / US 11 (EU 44)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-amber-400 mb-2">Quantity</label>
                            <input type="number" id="order-qty" value="1" min="1" max="10" onchange="updateOrderSummary()" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3.5 text-white gold-border text-sm">
                        </div>
                    </div>

                    <div class="border-t border-slate-800 pt-6 space-y-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-slate-300">Customer Details</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" id="cust-name" required placeholder="Full Name" class="bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm">
                            <input type="tel" id="cust-phone" required placeholder="Phone Number" class="bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm">
                        </div>
                        <input type="email" id="cust-email" required placeholder="Email Address" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm">
                        <textarea id="cust-address" required rows="3" placeholder="Delivery Address" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-white text-sm"></textarea>
                    </div>

                    <div class="bg-slate-950 p-4 rounded-xl flex justify-between items-center border border-slate-800">
                        <span class="text-slate-400 text-sm">Total Amount:</span>
                        <span id="summary-total-price" class="text-amber-400 text-xl font-bold font-serif">₹0</span>
                    </div>

                    <button type="submit" class="w-full py-4 bg-amber-600 hover:bg-amber-500 text-white font-bold uppercase rounded-xl transition shadow-lg">
                        Place Order 
                    </button>
                </form>
            </div>
        </div>
    </main>

    <script>
        const USD_TO_INR = 94.57;
        const shoeDatabase = [
            { id: "snk-1", category: "sneakers", name: "Monarch Gold-Trim Sneaker", priceUSD: 189, badge: "Bestseller", image: "https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?auto=format&fit=crop&w=600&q=80", desc: "Handcrafted white calfskin with subtle 24k gold foil." },
            { id: "frm-1", category: "formals", name: "Imperial Cap-Toe Oxford", priceUSD: 280, badge: "Executive", image: "https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?auto=format&fit=crop&w=600&q=80", desc: "Hand-patinated oxblood leather with Goodyear welt." },
            { id: "lof-1", category: "loafers", name: "Venetian Suede Penny Loafer", priceUSD: 195, badge: "Riviera", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSYeA1Q18cWsIvM8AvIaAJam2ACjxerPVUFATSunGZUQ&s=10", desc: "Ultra-supple sand suede slip-on." },
            { id: "spt-1", category: "sports", name: "Apex Velocity Runner", priceUSD: 165, badge: "Performance", image: "https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=600&q=80", desc: "Aerodynamic mesh upper with carbon sole." },
            { id: "bot-1", category: "boots", name: "Regal Chelsea Boot", priceUSD: 290, badge: "Rugged", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKDfgDM7VRqsiq0RZHNDS4GKssCbnqdpU4AHTKEHDyQA&s=10", desc: "Rich espresso brown full-grain leather." }
        ];

        function formatINR(usd) { return '₹' + Math.round(usd * USD_TO_INR).toLocaleString('en-IN'); }

        document.addEventListener('DOMContentLoaded', () => {
            renderCatalogGrids();
            populateOrderDropdown();
            updateOrderSummary();
        });

        function switchView(view) {
            document.getElementById('view-catalog').classList.toggle('hidden', view !== 'catalog');
            document.getElementById('view-order').classList.toggle('hidden', view !== 'order');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function scrollToSection(id) { document.getElementById(id).scrollIntoView({ behavior: 'smooth' }); }

        function renderCatalogGrids() {
            ['sneakers', 'formals', 'loafers', 'sports', 'boots'].forEach(cat => {
                const container = document.getElementById(`grid-${cat}`);
                if (!container) return;
                const items = shoeDatabase.filter(s => s.category === cat);
                container.innerHTML = items.map(shoe => `
                    <div class="bg-slate-900 rounded-3xl border border-slate-800 overflow-hidden card-hover flex flex-col justify-between">
                        <div>
                            <div class="h-60 overflow-hidden"><img src="${shoe.image}" class="w-full h-full object-cover"></div>
                            <div class="p-6"><h3 class="text-xl font-bold font-serif text-white">${shoe.name}</h3><p class="text-slate-400 text-xs mt-2">${shoe.desc}</p></div>
                        </div>
                        <div class="p-6 pt-0 flex justify-between items-center border-t border-slate-800/60 mt-4">
                            <span class="text-amber-400 font-serif font-bold text-lg">${formatINR(shoe.priceUSD)}</span>
                            <button onclick="switchView('order'); document.getElementById('order-shoe-select').value='${shoe.id}'; updateOrderSummary();" class="px-4 py-2 bg-amber-600 hover:bg-amber-500 text-white text-xs font-bold uppercase rounded-xl">Order</button>
                        </div>
                    </div>
                `).join('');
            });
        }

        function populateOrderDropdown() {
            document.getElementById('order-shoe-select').innerHTML = shoeDatabase.map(s => `
                <option value="${s.id}" data-price="${s.priceUSD}" data-name="${s.name}">${s.name} (${formatINR(s.priceUSD)})</option>
            `).join('');
        }

        function updateOrderSummary() {
            const select = document.getElementById('order-shoe-select');
            const opt = select.options[select.selectedIndex];
            if (!opt) return;
            const priceINR = Math.round(parseFloat(opt.getAttribute('data-price')) * USD_TO_INR);
            const qty = parseInt(document.getElementById('order-qty').value) || 1;
            document.getElementById('summary-total-price').innerText = '₹' + (priceINR * qty).toLocaleString('en-IN');
        }

        async function handleOrderSubmission(e) {
            e.preventDefault();
            const select = document.getElementById('order-shoe-select');
            const opt = select.options[select.selectedIndex];
            
            const orderData = {
                trackingId: 'RS-' + Math.floor(100000 + Math.random() * 900000),
                shoeName: opt.getAttribute('data-name'),
                size: document.getElementById('order-size').value,
                qty: parseInt(document.getElementById('order-qty').value),
                totalINR: Math.round(parseFloat(opt.getAttribute('data-price')) * USD_TO_INR) * parseInt(document.getElementById('order-qty').value),
                customer: {
                    name: document.getElementById('cust-name').value,
                    phone: document.getElementById('cust-phone').value,
                    email: document.getElementById('cust-email').value,
                    address: document.getElementById('cust-address').value
                }
            };

            try {
                let res = await fetch('process-order.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(orderData)
                });
                let result = await res.json();
                if (result.status === 'success') {
                    alert('Order successfully saved to MySQL database! Tracking ID: ' + orderData.trackingId);
                    document.getElementById('checkout-form').reset();
                    switchView('catalog');
                } else {
                    alert('Error: ' + result.message);
                }
            } catch (err) {
                alert('Connection error occurred.');
            }
        }
    </script>
</body>
</html>