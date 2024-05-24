<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher plus / Afficher moins</title>
    <style>
        .more-text {
            display: none;
        }
        .button {
            color: blue;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
    <script>
        function toggleText() {
            const moreText = document.getElementById("more-text");
            const btnText = document.getElementById("toggle-btn");

            if (moreText.style.display === "none") {
                moreText.style.display = "inline";
                btnText.textContent = "Afficher moins";
            } else {
                moreText.style.display = "none";
                btnText.textContent = "Afficher plus";
            }
        }
    </script>
</head>
<body>
    <p>
              Lorem ipsum dolor sit amet. Est cupiditate odio et minus ullam aut incidunt quos sed nemo voluptate et sint incidunt eum voluptate iure. Sit ducimus consequatur est dignissimos rerum ex vitae sint.
              <span id="more-text" class="more-text">

              Et nisi neque aut nulla soluta sit dolorem fugit et voluptatem facilis ad minus repudiandae. Est quia modi vel architecto nobis qui odit facere qui dignissimos repellat et corrupti cumque. Et enim dolorem eos magnam quia eum doloremque dolor et dolorem tempore sed nihil consequatur et expedita magnam?

              Sed dolorum dolor aut esse voluptatem At itaque tempora eum expedita excepturi ab molestiae consequatur. Id rerum voluptatem sit distinctio provident sit consequatur assumenda non enim galisum rem provident ducimus non autem sunt aut animi quos. Et molestiae nobis sit internos magnam et voluptas modi est eligendi rerum. Qui temporibus unde sit veritatis natus rem veritatis perferendis 33 officia expedita.        </span>
    </p>
    <span id="toggle-btn" class="button" onclick="toggleText()">Afficher plus</span>
</body>
</html>
