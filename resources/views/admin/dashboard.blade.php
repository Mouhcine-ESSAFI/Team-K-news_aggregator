<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0" rel="stylesheet">
    <style>
        /* Custom CSS */
        .max-h-600 {
            max-height: 600px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-1/4 bg-gray-200 h-screen border-r border-gray-400">
                <h2 class="py-4 px-6">Sidebar</h2>
            </div>

            <!-- Main Content -->
            <div class="w-3/4">
                <h1 class="text-2xl font-bold mt-4 ml-4">Main Content</h1>
                <!-- Add Category button -->
                <div class="flex justify-end mt-4 mr-4">
                    <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addProductModal">
                        Add Category
                    </button>
                </div>
                <div class="max-h-600 overflow-y-auto border border-gray-400 rounded-lg p-6 mt-4 mr-4">
                    <ul class="list-disc list-inside">
                        <!-- Display categories here -->
                        <li class="flex items-center justify-between">
                            <span>Sport</span>
                            <button class="btn btn-danger ml-auto delete-category">Delete</button>
                        </li>
                        <hr>
                        <li>Sport <button class="btn btn-danger delete-category">Delete</button></li>
                            <hr>
                            <li>Sport <button class="btn btn-danger delete-category">Delete</button></li>
                            <hr>
                            <li>Sport <button class="btn btn-danger delete-category">Delete</button></li>
                            <hr>
                            <li>Sport <button class="btn btn-danger delete-category">Delete</button></li>
                            <hr>
                            <li>Sport <button class="btn btn-danger delete-category">Delete</button></li>
                        <!-- Add more categories dynamically -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Category form goes here -->
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="block">Name</label>
                            <input type="text" class="form-control w-full" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            // Delete category
            $(".delete-category").click(function () {
                $(this).parent().remove();
            });
        });
    </script>
</body>
</html>
