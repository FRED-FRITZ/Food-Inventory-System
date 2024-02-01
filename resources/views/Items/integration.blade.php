<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"/>
</head>
<body class="antialiased">
    <div class="container my-5">
        <div class="text-center">
            <h1 class="display-4 text-center mb-3" id='foodImage'>Now Cooking...</h1>
            <button class="btn btn-primary my-3" id="getFood">Your Favorites</button>
        </div>
        <hr />
        <div id="foodImageContainer"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        const apiEndpoint = 'https://foodish-api.com/api/';

        window.addEventListener('load', axiosGetFoodImage);

        function axiosGetFoodImage() {
            axios.get(apiEndpoint)
                .then(response => {
                    outputFoodImage(response);
                })
                .catch(error => {
                    console.error(error);
                });
        }

        function outputFoodImage(response) {
            const container = document.querySelector('#foodImage');
            const imageContainer = document.querySelector('#foodImageContainer');
            container.innerText = 'Different Kind of Dish';
            const imgElement = document.createElement('img');
            imgElement.src = response.data.image;
            imgElement.alt = 'Food Image';
            imgElement.classList.add('img-fluid', 'rounded');
            imageContainer.innerHTML = '';
            imageContainer.appendChild(imgElement);
        }

        document.querySelector('#getFood').addEventListener('click', axiosGetFoodImage);
    </script>
</body>
</html>
