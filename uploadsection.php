<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    

<div class="container">
        <h2>Upload Documents</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="document1">Fees Payment Details:</label>
            <input type="file" name="document1" id="document1" accept=".pdf, .doc, .docx">
            
            <label for="document2">Hall Ticket:</label>
            <input type="file" name="document2" id="document2" accept=".pdf, .doc, .docx">
            
            <label for="document3">Exam Application Form:</label>
            <input type="file" name="document3" id="document3" accept=".pdf, .doc, .docx">
            
            <label for="document4">Available Mark Statement:</label>
            <input type="file" name="document4" id="document4" accept=".pdf, .doc, .docx">
            
            <label for="document5">Consolidated Mark Statement:</label>
            <input type="file" name="document5" id="document5" accept=".pdf, .doc, .docx">
            <label for="document5">Course Completion Certificate:</label>
            <input type="file" name="document5" id="document5" accept=".pdf, .doc, .docx">
            
            <label for="document5">Application Fees:</label>
            <input type="file" name="document5" id="document5" accept=".pdf, .doc, .docx">
            <input type="submit" value="Upload Documents">
        </form>
    </div>
</body>
</html>
