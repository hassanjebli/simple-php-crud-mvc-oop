<div class="max-w-3xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-blue-600 flex items-center">
            <i class="fas fa-user-plus mr-2"></i>
            Create New User
        </h1>
    </div>

    <form action="index.php?action=store" method="POST" class="needs-validation" novalidate>
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 space-y-6">
                <!-- Name Field -->
                <div class="space-y-2">
                    <label for="name" class="flex items-center text-sm font-semibold text-gray-700">
                        <i class="fas fa-user mr-2"></i>
                        Full Name
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-id-card text-gray-400"></i>
                        </div>
                        <input type="text" id="name" name="name"
                            class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                            placeholder="Enter your full name" required>
                        <div class="hidden validation-message mt-1 text-sm text-red-500">
                            Please provide your name.
                        </div>
                    </div>
                </div>

                <!-- Email Field -->
                <div class="space-y-2">
                    <label for="email" class="flex items-center text-sm font-semibold text-gray-700">
                        <i class="fas fa-envelope mr-2"></i>
                        Email Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-at text-gray-400"></i>
                        </div>
                        <input type="email" id="email" name="email"
                            class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                            placeholder="Enter your email address" required>
                        <div class="hidden validation-message mt-1 text-sm text-red-500">
                            Please provide a valid email address.
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex justify-end items-center space-x-3 pt-4 border-t border-gray-100">
                    <a href="index.php"
                        class="px-4 py-2 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg font-semibold flex items-center transition-colors duration-200">
                        <i class="fas fa-times-circle mr-2"></i>
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold flex items-center transition-colors duration-200">
                        <i class="fas fa-check-circle mr-2"></i>
                        Create User
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    // Enhanced form validation script
    (function () {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')

        forms.forEach(form => {
            // Add validation styles on input
            form.querySelectorAll('input').forEach(input => {
                input.addEventListener('input', function () {
                    const validationMessage = this.parentNode.querySelector('.validation-message')
                    if (this.validity.valid) {
                        this.classList.remove('border-red-500')
                        this.classList.add('border-green-500')
                        validationMessage.classList.add('hidden')
                    } else {
                        this.classList.remove('border-green-500')
                        this.classList.add('border-red-500')
                        validationMessage.classList.remove('hidden')
                    }
                })
            })

            // Form submission validation
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()

                    // Show all validation messages
                    form.querySelectorAll('input').forEach(input => {
                        const validationMessage = input.parentNode.querySelector('.validation-message')
                        if (!input.validity.valid) {
                            input.classList.add('border-red-500')
                            validationMessage.classList.remove('hidden')
                        }
                    })
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>