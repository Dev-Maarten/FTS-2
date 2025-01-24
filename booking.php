<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Boek uw reis</title>
</head>
<body>
<h1 class="text-2xl text-white font-bold mb-4 text-center">Uw boeking</h1>

<div class="bg-gray-200">

    <form action="http://127.0.0.1:8000" method="GET" enctype="multipart/form-data">
    <div class="mb-4">
        <label for="name" class="block mb-2>">naam</label>
        <input type="text" id="name" name="name" required class="w-full p-2 border rounded ">
    </div>

    <div class="mb-4">
        <label for="vertrekpunt" class="block mb-2>">vertrekpunt</label>
        <input type="text" id="vertrekpunt" name="vertrekpunt" required class="w-full p-2 border-rounded">
    </div>

    <div class="mb-4">
        <label for="bestemming" class="block mb-2>">bestemming</label>
        <input type="text" id="bestemming" name="bestemming" required class="w-full p-2 border-rounded">
    </div>

    <div class="mb-4">
        <label for="vertrekdatum" class="block mb-2>">vertrekdatum</label>
        <input type="date" id="vertrekdatum" name="vertrekdatum" required class="w-full p-2 border-rounded">
    </div>

    <div class="mb-4">
        <label for="price" class="block mb-2>">prijs</label>
        <input type="text" id="price" name="price" required class="w-full p-2 border-rounded">
    </div>

    <div class="mb-4">
        <label for="e-mail" class="block mb-2>">e-mail</label>
        <input type="text" id="e-mail" name="e-mail" class="w-full p-2 border-rounded" accept="image/*" required>

    </div>

    <div class="mb-4">
        <label for="personen" class="block mb-2>">aantal personen</label>
        <input type="text" id="personen" name="personen" class="w-full p-2 border-rounded" accept="image/*" required>

    </div>
    <button type="submit" name="create_new_festival"  class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
        bevestig boeking</button>

</form>
</div>
</body>
</html>
