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

const roe_chart = new Chart(
    document.getElementById('roe-chart').getContext('2d'), {
    type: 'line',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
            label: 'Roe',
            data: roe,
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

const ros_chart = new Chart(
    document.getElementById('ros-chart').getContext('2d'), {
    type: 'line',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
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

const roa_chart = new Chart(
    document.getElementById('roa-chart').getContext('2d'), {
    type: 'line',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
            label: 'Roa',
            data: roa,
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

const rod_chart = new Chart(
    document.getElementById('rod-chart').getContext('2d'), {
    type: 'line',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
            label: 'Rod',
            data: rod,
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

const indici_redditivita_chart = new Chart(
    document.getElementById('indici-redditivita-chart').getContext('2d'), {
    type: 'line',
    data: {
        labels: [2018, 2019, 2020, 2021, 2022],
        datasets: [{
            label: 'Roe',
            data: roe,
        },
        {
            label: 'Roi',
            data: roi,
        },
        {
            label: 'Ros',
            data: ros,
        },
        {
            label: 'Roa',
            data: roa,
        },
        {
            label: 'Rod',
            data: rod,
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