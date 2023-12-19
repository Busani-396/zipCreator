<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['files']) && is_array($_FILES['files']['name'])) {
        $myZip = new ZipArchive();
        $zipFileName = 'zipFile.zip';

        if ($myZip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            foreach ($_FILES['files']['tmp_name'] as $key => $tmpName) {
                $originalName = $_FILES['files']['name'][$key];
                $myZip->addFile($tmpName, $originalName);
            }

            // Close the ZIP archive
            $myZip->close();

            //lets download the file-
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="' . $zipFileName . '"');
            readfile($zipFileName);

            // Now Delete the ZIP file after download
            unlink($zipFileName);

            exit();
        } else {
            echo "Failed to create ZIP file.";
        }
    } else {
        echo "No files uploaded.";
    }
} else {
    // Redirect to home
    header('Location: index.php');
    exit();
}
?>
