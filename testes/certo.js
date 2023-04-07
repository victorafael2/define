document.addEventListener("DOMContentLoaded", function () {
    const chartElement = document.getElementById("chart").getContext("2d");

    const data = {
        labels: ["Eixo 1", "Eixo 2", "Eixo 3", "Eixo 4", "Eixo 5"],
        datasets: [
            {
                label: "Exemplo",
                data: [10, 20, 30, 40, 50],
                backgroundColor: "rgba(75, 192, 192, 0.2)",
                borderColor: "rgba(75, 192, 192, 1)",
                borderWidth: 1,
            },
        ],
    };

    const options = {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    };

    const chart = new Chart(chartElement, {
        type: "radar",
        data: data,
        options: options,
    });

    document.getElementById("chart").onclick = function (event) {
        const activePoint = chart.getElementsAtEventForMode(event, "nearest", { intersect: true }, true)[0];
        if (activePoint) {
            const index = activePoint.index;
            const value = activePoint.element.y;
            const pointInfo = document.getElementById("pointInfo");
            pointInfo.textContent = `Ponto clicado: Eixo ${index + 1}, Valor ${value.toFixed(2)}`;
            $("#infoModal").modal("show");
        }
    };
});
