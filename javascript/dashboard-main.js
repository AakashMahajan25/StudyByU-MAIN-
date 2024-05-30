document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('myChart').getContext('2d');

    // Custom plugin to create rounded corners on bars
    const roundedBar = {
        id: 'roundedBar',
        beforeDatasetsDraw(chart) {
            // Suppress the default drawing behavior
            chart.getDatasetMeta(0).controller.draw = function() {};
        },
        afterDatasetsDraw(chart) {
            const ctx = chart.ctx;
            chart.data.datasets.forEach(function(dataset, i) {
                const meta = chart.getDatasetMeta(i);
                meta.data.forEach(function(bar, index) {
                    const { x, y, base, width, height } = bar.getProps(['x', 'y', 'base', 'width', 'height'], true);
                    const radius = Math.min(width, Math.abs(base - y)) / 2;  // Adjust the radius as needed

                    ctx.save();
                    ctx.beginPath();
                    ctx.fillStyle = dataset.backgroundColor[index];

                    if (y < base) { // Bar goes up
                        ctx.moveTo(x - width / 2, base);
                        ctx.lineTo(x - width / 2, y + radius);
                        ctx.quadraticCurveTo(x - width / 2, y, x - width / 2 + radius, y);
                        ctx.lineTo(x + width / 2 - radius, y);
                        ctx.quadraticCurveTo(x + width / 2, y, x + width / 2, y + radius);
                        ctx.lineTo(x + width / 2, base);
                        ctx.quadraticCurveTo(x + width / 2, base, x + width / 2 - radius, base);
                        ctx.lineTo(x - width / 2 + radius, base);
                        ctx.quadraticCurveTo(x - width / 2, base, x - width / 2, base);
                    } else { // Bar goes down
                        ctx.moveTo(x - width / 2, y);
                        ctx.lineTo(x - width / 2, base - radius);
                        ctx.quadraticCurveTo(x - width / 2, base, x - width / 2 + radius, base);
                        ctx.lineTo(x + width / 2 - radius, base);
                        ctx.quadraticCurveTo(x + width / 2, base, x + width / 2, base - radius);
                        ctx.lineTo(x + width / 2, y);
                        ctx.quadraticCurveTo(x + width / 2, y, x + width / 2 - radius, y);
                        ctx.lineTo(x - width / 2 + radius, y);
                        ctx.quadraticCurveTo(x - width / 2, y, x - width / 2, y);
                    }

                    ctx.fill();
                    ctx.restore();
                });
            });
        }
    };

    // Register the plugin
    Chart.register(roundedBar);

    // Create the chart
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            datasets: [{
                label: '# of Hours', // You can leave this as is or set to empty string
                data: [12, 19, 3, 5, 2, 3, 8], // Adjusted data array to include 7 values
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(75, 192, 192, 0.8)' // Added a new color for the 'Cyan' bar
                ],
                borderColor: [
                    'rgba(255, 99, 132, 0)',
                    'rgba(54, 162, 235, 0)',
                    'rgba(255, 206, 86, 0)',
                    'rgba(75, 192, 192, 0)',
                    'rgba(153, 102, 255, 0)',
                    'rgba(255, 159, 64, 0)',
                    'rgba(75, 192, 192, 0)' // Added a new color for the 'Cyan' bar
                ],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false // Disable the legend
                },
                roundedBar: {
                    borderRadius: 7 // Adjust the borderRadius as needed
                }
            }
        }
    });
});
