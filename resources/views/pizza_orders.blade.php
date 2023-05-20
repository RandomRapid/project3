
<?php $header = "Admin page header";?>

    <div class="container">
        <canvas id="pizzaOrdersChart"></canvas>
    </div>

<x-app-layout>
    <x-slot name="header">
        {{ $header }}
    </x-slot>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var pizzaOrders = @json($pizzaOrders);

            var pizzaNames = pizzaOrders.map(function (order) {
                return order.pname;
            });

            var orderCounts = pizzaOrders.map(function (order) {
                return order.total_orders;
            });

            var ctx = document.getElementById('pizzaOrdersChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: pizzaNames,
                    datasets: [{
                        label: 'Number of Orders',
                        data: orderCounts,
                        backgroundColor: 'rgba(54, 162, 235, 0.6)'
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                    }
                }
            });
        });
    </script>
</x-app-layout>

    
