document.addEventListener("DOMContentLoaded", function () {
    const chartElement = document.getElementById("chart").getContext("2d");

    const data = {
        datasets: [
            {
                label: "Exemplo",
                data: [
                    { x: 10, y: 20, r: 5, videoId: "VIDEO_ID_1" },
                    { x: 20, y: 30, r: 10, videoId: "VIDEO_ID_2" },
                    { x: 30, y: 40, r: 15, videoId: "VIDEO_ID_3" },
                    { x: 40, y: 50, r: 20, videoId: "VIDEO_ID_4" },

                    { x: 50, y: 60, r: 25, videoId: "VIDEO_ID_5" },
                ],
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
        onClick: function (event, elements) {
            if (elements.length > 0) {
                const element = elements[0];
                const x = element._model.x;
                const y = element._model.y;
                const value = element._model.radius;
                const videoId = data.datasets[element._datasetIndex].data[element._index].videoId;

                $("#x").text(x);
                $("#y").text(y);
                $("#value").text(value);

                const player = new YT.Player("videoContainer", {
                    height: "360",
                    width: "640",
                    videoId: videoId,
                });

                $("#bubbleModal").modal("show");
            }
        },
    };

    const chart = new Chart(chartElement, {
        type: "bubble",
        data: data,
        options: options,
    });
});