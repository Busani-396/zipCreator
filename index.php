<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>myzip file | creator</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center">

        <div class="col-lg-4 m-auto my-6 p-10">
            <h1>ZIP File Creator - 2023</h1>
            <form action="processor/process.php" method="post" enctype="multipart/form-data">
                <label for="files">Select files to zip:</label>
                <input type="file" name="files[]" id="files" multiple required>
                <button type="submit">Create ZIP</button>
            </form>
        </div>
    </div>
   
    
</body>
</html>
