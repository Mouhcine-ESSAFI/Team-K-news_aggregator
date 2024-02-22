<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-light">
                <h2>Sidebar</h2>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <h1>Main Content</h1>
                <!-- Add Category button -->
                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addProductModal">
                        Add Category
                    </button>
                </div>
                <div class="overflow-auto border rounded p-3 mt-3" style="max-height: calc(95vh - 100px);">
                    <ul class="list-unstyled">
                        <!-- Display categories here -->
                        <li class="d-flex justify-content-between align-items-center mb-2"><b>Sport</b><button class="btn btn-danger delete-category">Delete</button></li>
                        <hr>
                        <li class="d-flex justify-content-between align-items-center mb-2"><b>Sport</b><button class="btn btn-danger delete-category">Delete</button></li>
                        <hr>
                        <li class="d-flex justify-content-between align-items-center mb-2"><b>Sport</b><button class="btn btn-danger delete-category">Delete</button></li>
                        <hr>
                        <li class="d-flex justify-content-between align-items-center mb-2"><b>Sport</b><button class="btn btn-danger delete-category">Delete</button></li>
                        <hr>
                        <li class="d-flex justify-content-between align-items-center mb-2"><b>Sport</b><button class="btn btn-danger delete-category">Delete</button></li>
                        <hr>
                        <li class="d-flex justify-content-between align-items-center mb-2"><b>Sport</b><button class="btn btn-danger delete-category">Delete</button></li>
                        <hr>
                        <li class="d-flex justify-content-between align-items-center mb-2"><b>Sport</b><button class="btn btn-danger delete-category">Delete</button></li>
                        <hr>
                        <li class="d-flex justify-content-between align-items-center mb-2">Sport <button class="btn btn-danger delete-category">Delete</button></li>
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
                            <label for="categoryName">Name</label>
                            <input type="text" class="form-control" id="categoryName" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary"><b>Save</b></button>
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
