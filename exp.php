<?php
// Commencez par vérifier l'en-tête personnalisé
if (isset($_SERVER['HTTP_X_EXTENSION_AUTH']) && $_SERVER['HTTP_X_EXTENSION_AUTH'] === 'votre_valeur_secrète') {
    // L'en-tête est présent et valide, on continue l'exécution de la page
} else {
    // L'en-tête n'est pas présent ou invalide, on redirige vers une page d'erreur
    header('Location: error.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploding Topics - Login Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="icon" href="img/Favicon.png" type="image/png">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white rounded-lg shadow-lg p-8 max-w-lg w-full">
        <h1 class="text-2xl font-bold mb-6 text-center">Exploding Topics - Login Info</h1>
        
        <!-- Section Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
            <div class="flex items-center">
                <input type="text" id="email" value="ecom.efficiency1@gmail.com" class="w-full p-2 border border-gray-300 rounded-lg" readonly>
                <button onclick="copyToClipboard('email')" class="ml-2 bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600">
                    <i class="fas fa-copy"></i> Copy
                </button>
            </div>
        </div>

        <!-- Section Mot de Passe -->
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
            <div class="flex items-center">
                <input type="text" id="password" value="Explodingtest8!" class="w-full p-2 border border-gray-300 rounded-lg" readonly>
                <button onclick="copyToClipboard('password')" class="ml-2 bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600">
                    <i class="fas fa-copy"></i> Copy
                </button>
            </div>
        </div>

        <!-- Bouton de Connexion -->
        <div class="text-center">
            <a href="https://explodingtopics.com/auth" target="_blank" rel="noopener noreferrer"
               class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                Login
            </a>
        </div>
    </div>

    <script>
        function copyToClipboard(id) {
            var copyText = document.getElementById(id);
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* Pour les appareils mobiles */
            document.execCommand("copy");
            alert("Copié : " + copyText.value);
        }
    </script>

</body>
</html>
