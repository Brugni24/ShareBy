import Chart from 'chart.js/auto';

const roiChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
            label: 'Roe',
            data: roe,
        },
        {
            label: 'Ros',
            data: ros,
        }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    font: {
                        family: 'Poppins',
                        size: 14,
                    }
                }
            }
        }
    }
});