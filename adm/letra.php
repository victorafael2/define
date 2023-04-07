<!DOCTYPE html>
<html>
<head>
  <title>Transformar Letras em SVG via JavaScript</title>
</head>
<body>
  <img id="svg-img" alt="A">
  <script>
    // Cria um elemento SVG com a letra 'A'
    var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute("width", "100");
    svg.setAttribute("height", "100");
    var text = document.createElementNS("http://www.w3.org/2000/svg", "text");
    text.setAttribute("x", "50");
    text.setAttribute("y", "50");
    text.setAttribute("font-family", "Arial");
    text.setAttribute("font-size", "48");
    text.textContent = "A";
    svg.appendChild(text);

    // Converte o elemento SVG em uma string SVG
    var svgString = new XMLSerializer().serializeToString(svg);

    // Define a string SVG como o src da imagem
    var img = document.getElementById("svg-img");
    img.setAttribute("src", "data:image/svg+xml;base64," + btoa(svgString));
  </script>
</body>
</html>
