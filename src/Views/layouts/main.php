<!DOCTYPE html>
<html lang="<?= str_replace('_', '-', $_ENV['APP_LOCALE']) ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_ENV['APP_NAME'] ?> | MVC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-50 min-h-screen">
    <!-- Modern Navbar with Gradient -->
    <nav class="sticky top-0 bg-gradient-to-r from-blue-400 to-blue-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="index.php" class="flex items-center space-x-2 text-white font-bold text-xl">
                    <i class="fas fa-database"></i>
                    <span>PHP MVC CRUD</span>
                </a>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-white hover:text-gray-200"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex md:items-center md:space-x-4">
                    <a href="index.php" class="flex items-center px-3 py-2 text-white hover:text-gray-200 transition-colors duration-200 
                              <?= isAction('index') ? 'border-b-2 border-white' : '' ?>">
                        <i class="fas fa-home mr-2"></i>
                        <span>Home</span>
                    </a>
                    <a href="index.php?action=create" class="flex items-center px-3 py-2 text-white hover:text-gray-200 transition-colors duration-200
                              <?= isAction('create') ? 'border-b-2 border-white' : '' ?>">
                        <i class="fas fa-user-plus mr-2"></i>
                        <span>Create User</span>
                    </a>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col space-y-2">
                    <a href="index.php" class="flex items-center px-3 py-2 text-white hover:text-gray-200 transition-colors duration-200
                              <?= isAction('index') ? 'bg-blue-700 rounded-lg' : '' ?>">
                        <i class="fas fa-home mr-2"></i>
                        <span>Home</span>
                    </a>
                    <a href="index.php?action=create" class="flex items-center px-3 py-2 text-white hover:text-gray-200 transition-colors duration-200
                              <?= isAction('create') ? 'bg-blue-700 rounded-lg' : '' ?>">
                        <i class="fas fa-user-plus mr-2"></i>
                        <span>Create User</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6">
                <?php echo $content; ?>
            </div>
        </div>
    </div>

    <script>
        // Simple toggle for mobile menu
        document.addEventListener('click', function (event) {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = document.querySelector('button');

            if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>