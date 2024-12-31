
<div class="w-full">
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-blue-600 flex items-center">
            <i class="fas fa-users mr-2"></i>
            Users Management
        </h1>
        <a href="index.php?action=create" 
           class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200">
            <i class="fas fa-user-plus mr-2"></i>
            Add New User
        </a>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600 w-20">
                            <span class="flex items-center">
                                <i class="fas fa-hashtag mr-2"></i>
                                ID
                            </span>
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                            <span class="flex items-center">
                                <i class="fas fa-user mr-2"></i>
                                Name
                            </span>
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">
                            <span class="flex items-center">
                                <i class="fas fa-envelope mr-2"></i>
                                Email
                            </span>
                        </th>
                        <th class="px-6 py-4 text-right text-sm font-semibold text-gray-600 w-48">
                            <span class="flex items-center justify-end">
                                <i class="fas fa-cog mr-2"></i>
                                Actions
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php foreach ($users as $key => $user): ?>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="font-semibold text-gray-700"><?= $key + 1; ?></span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-100 mr-3">
                                        <i class="fas fa-user text-blue-600"></i>
                                    </div>
                                    <span class="text-gray-900"><?= $user['name']; ?></span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="mailto:<?= $user['email']; ?>" 
                                   class="flex items-center text-gray-600 hover:text-blue-600 transition-colors duration-200">
                                    <i class="fas fa-envelope mr-2 text-gray-400"></i>
                                    <?= $user['email']; ?>
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <div class="flex items-center justify-end space-x-2">
                                    <a href="index.php?action=show&id=<?= $user['id']; ?>"
                                       class="p-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200"
                                       title="View Details">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="index.php?action=edit&id=<?= $user['id']; ?>"
                                       class="p-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200"
                                       title="Edit User">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="index.php?action=delete&id=<?= $user['id']; ?>"
                                       class="p-2 text-gray-500 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors duration-200"
                                       onclick="return confirm('Are you sure you want to delete this user?')"
                                       title="Delete User">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Tooltip script using vanilla JS -->
<script>
    document.querySelectorAll('[title]').forEach(element => {
        element.addEventListener('mouseenter', e => {
            const tooltip = document.createElement('div');
            tooltip.className = 'absolute z-50 px-2 py-1 text-xs text-white bg-gray-900 rounded-lg -mt-8 -ml-4 transform -translate-x-1/2';
            tooltip.textContent = e.target.getAttribute('title');
            document.body.appendChild(tooltip);
            
            const rect = e.target.getBoundingClientRect();
            tooltip.style.left = rect.left + (rect.width / 2) + 'px';
            tooltip.style.top = rect.top - 5 + 'px';
            
            e.target.addEventListener('mouseleave', () => tooltip.remove());
        });
    });
</script>
