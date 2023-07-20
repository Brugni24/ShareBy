import Chart from 'chart.js/auto';

const roiChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
            label: 'roi',
            data: roi,
        }]
    }
});