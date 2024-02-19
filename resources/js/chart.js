import Chart from 'chart.js/auto';

const ebitda_chart = new Chart(
    document.getElementById('ebitda-chart').getContext('2d'), {
    type: 'line',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
            label: 'Ebitda',
            data: ebitda,
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

const ebitdaVenditeDebiti_chart = new Chart(
    document.getElementById('ebitdaVenditeDebiti-chart').getContext('2d'), {
    type: 'line',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
            label: 'Ebitda Debiti',
            data: ebitda_debiti,
        },
        {
            label: 'Ebitda Vendite',
            data: ebitda_vendite,
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

const roe_ros_chart = new Chart(
    document.getElementById('roe-ros-chart').getContext('2d'), {
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

const roi_chart = new Chart(
    document.getElementById('roi-chart').getContext('2d'), {
    type: 'line',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
            label: 'Roi',
            data: roi,
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

const leverage_chart = new Chart(
    document.getElementById('leverage-chart').getContext('2d'), {
    type: 'pie',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
            label: 'Roi',
            data: roi,
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