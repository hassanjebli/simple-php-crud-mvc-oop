
<div class="max-w-3xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-blue-600 flex items-center">
            <i class="fas fa-id-badge mr-2"></i>
            User Details
        </h1>
        <a href="index.php" 
           class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors duration-200">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to Users
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <!-- User Profile Header -->
        <div class="bg-gray-50 px-6 py-6 border-b border-gray-100">
            <div class="flex items-center">
                <div class="flex items-center justify-center w-16 h-16 rounded-full bg-blue-100 mr-4">
                    <i class="fas fa-user text-blue-600 text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-900 mb-1"><?= $user['name'] ?></h2>
                    <div class="flex items-center text-gray-600">
                        <i class="fas fa-envelope mr-2"></i>
                        <a href="mailto:<?= $user['email'] ?>" 
                           class="text-gray-600 hover:text-blue-600 transition-colors duration-200">
                            <?= $user['email'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Details -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- User ID -->
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="flex items-center mb-2 text-gray-700">
                        <i class="fas fa-hashtag text-blue-600 mr-2"></i>
                        <h3 class="font-semibold">User ID</h3>
                    </div>
                    <p class="text-lg font-semibold text-gray-900">#<?= $user['id'] ?></p>
                </div>

                <!-- Full Name -->
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="flex items-center mb-2 text-gray-700">
                        <i class="fas fa-user text-blue-600 mr-2"></i>
                        <h3 class="font-semibold">Full Name</h3>
                    </div>
                    <p class="text-lg font-semibold text-gray-900"><?= $user['name'] ?></p>
                </div>

                <!-- Email -->
                <div class="bg-gray-50 rounded-lg p-4">
                    <div class="flex items-center mb-2 text-gray-700">
                        <i class="fas fa-envelope text-blue-600 mr-2"></i>
                        <h3 class="font-semibold">Email Address</h3>
                    </div>
                    <a href="mailto:<?= $user['email'] ?>" 
                       class="text-lg font-semibold text-gray-900 hover:text-blue-600 transition-colors duration-200">
                        <?= $user['email'] ?>
                    </a>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end items-center space-x-3 mt-6 pt-6 border-t border-gray-100">
                <a href="index.php?action=edit&id=<?= $user['id'] ?>" 
                   class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold flex items-center transition-colors duration-200">
                    <i class="fas fa-pencil-alt mr-2"></i>
                    Edit User
                </a>
                <a href="index.php?action=delete&id=<?= $user['id'] ?>" 
                   class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg font-semibold flex items-center transition-colors duration-200"
                   onclick="return confirm('Are you sure you want to delete this user?')">
                    <i class="fas fa-trash-alt mr-2"></i>
                    Delete User
                </a>
            </div>
        </div>
    </div>
</div>
