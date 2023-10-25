<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const radioButtons = document.querySelectorAll('input[name="type"]');

        const inputFields = document.querySelectorAll('input[type="text"]');

        inputFields.forEach(inputField => inputField.disabled = true);

        const selectedRadioButton = radioButtons.find(radioButton => radioButton.checked);
        if (selectedRadioButton) {
            inputFields.filter(inputField => inputField.name.includes(selectedRadioButton.value)).forEach(inputField => inputField.disabled = false);
        }

        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('change', event => {
                const selectedRadioButton = radioButtons.find(radioButton => radioButton.checked);
                if (selectedRadioButton) {
                    inputFields.filter(inputField => inputField.name.includes(selectedRadioButton.value)).forEach(inputField => inputField.disabled = false);
                }

                radioButtons.filter(radioButton => radioButton !== selectedRadioButton).forEach(radioButton => {
                    inputFields.filter(inputField => inputField.name.includes(radioButton.value)).forEach(inputField => inputField.disabled = true);
                });
            });
        });
    </script>


    <title>Add Product</title>
</head>
<div class="container mt-3">
    <nav class="navbar navbar-dark bg-secondary">
        <div class="col-sm-8">
            <a class="navbar-brand">Product Add</a>
        </div>
        <div class="col-sm-4">
            <div style="float:right">
                <button class="btn btn-sm btn-dark" type="submit" form="addForm" id="submit" name="submit" style="display: inline-block; margin-right: 10px">SAVE</button>
                <button class="btn btn-sm btn-danger" type="submit" onclick="document.location='index.php'" style="display: inline-block; margin-right: 10px">CANCEL</button>
            </div>
        </div>
    </nav>
</div>
<br>
<br>

<body>
    <div class="container">

        <div class="jumbotron" style="width:30%">
            <div>
                <form action="process.php" method="POST" id="addForm">
                    <div class="form-group">
                        <label for="sku">SKU</label>
                        <input type="text" class="form-control" id="sku" name="sku" placeholder="SKU" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type Switcher</label>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="dvd" id="flexRadioDefault1" required>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        DVD
                                        <input type="text" class="form-control" id="size" name="size" placeholder="Size(MB)">
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="book" id="flexRadioDefault2" required>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Book
                                        <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight(KG)">
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type" value="furniture" id="flexRadioDefault3" required>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Furniture
                                        <div class="form-group">
                                            <label for="length">Length(CM)</label>
                                            <input type="text" class="form-control" id="length" name="length" placeholder="Length(CM)">
                                        </div>
                                        <div class="form-group">
                                            <label for="width">Width(CM)</label>
                                            <input type="text" class="form-control" id="width" name="width" placeholder="Width(CM)">
                                        </div>
                                        <div class="form-group">
                                            <label for="height">Height(CM)</label>
                                            <input type="text" class="form-control" id="height" name="height" placeholder="Height(CM)">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>



                    </div>
            </div>
        </div>


        </form>


        <div class="text-center">
        </div>

        <script>
            const form = document.getElementById('addForm');
            const submit = document.getElementById('submit');

            submit.addEventListener('click', function() {
                form.submit(); // This will trigger the form submission
            });
        </script>
    </div>
</body>

</html>