// const xValues = ['15 secondes','14 secondes','13 secondes','12 secondes','11 secondes','10 secondes','9 secondes','8 secondes','7 secondes','6 secondes','5 secondes','4 secondes','3 secondes','2 secondes','1 seconde','Maintenant']
const xValues = ['15 secondes','','','','','10 secondes','','','','','5 secondes','','','','','Maintenant']
const chartsDatas = [
    ["bpmChart", "Battements par minute", "#B2001E", "BPMs", "Temps (minutes)", "bpm"],
    ["sp02Chart", "Sp02", "#2BFAFA", "Sp02 (%)", "Temps (minutes)", "sp02"],
]
var datas;

chartsDatas.forEach((chartDatas) => { //pour chaque ligne de la liste
    wind = document.getElementById(chartDatas[0]).getContext('2d') //graphique en 2D
    window[chartDatas[0]] = new Chart(wind, { //création du graphique
        type: "line", //type de graphique
        data: { //données
            labels: xValues,
            datasets: [{
                label: chartDatas[1],
                data: ["75", "67", "70", "71", "77", "75", "73", "79", "63", "80", "82", "87", "85", "84", "79", "81"],
                fill: true,
                borderColor: chartDatas[2]
            }]
        },
        options: { //paramétrage du graphique
            layout: {
                // padding: 20
            },
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: chartDatas[3]
                    },
                    ticks: {
                        // beginAtZero: true
                    }
                }],
                xAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: chartDatas[4]
                    }
                }]
            }
        }
    })
})

function editDatasets(chart, newData) { //edit les champs de données pour chaque graphique
    chart.data.datasets.forEach((dataset) => {
        //si le nbr de valeurs du graphique >= au nbr de valeurs en abscisse
        if (dataset.data.length >= xValues.length) {
            dataset.data.shift() //on retire la dernière valeur
        }
        dataset.data.push(newData); //on ajoute cette valeur
    })
    chart.update()
}