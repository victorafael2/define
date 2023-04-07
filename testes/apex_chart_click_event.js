document.addEventListener("DOMContentLoaded", function () {
    const barChartElement = document.getElementById("barChart").getContext("2d");

    const data = {
        labels: ["Category 1", "Category 2", "Category 3", "Category 4", "Category 5"],
        datasets: [
            {
                label: "Dataset 1",
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

    const barChart = new Chart(barChartElement, {
        type: "bar",
        data: data,
        options: options,
    });

    document.getElementById("barChart").onclick = function (event) {
        const activePoint = barChart.getElementsAtEventForMode(event, "nearest", { intersect: true }, true)[0];
        if (activePoint) {
            const index = activePoint.index;
            const value = activePoint.element.y - barChart.scales['y'].getPixelForValue(0);
            const barInfo = document.getElementById("barInfo");
            barInfo.textContent = `Clicked bar: Category ${index + 1}, Value ${value.toFixed(2)}`;
            $("#infoModal").modal("show");
        }
    };
});
