<?php
    include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posting photo</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        .custom-file-input {
            color: transparent;
        }
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }
        .submit{
            color: black;
            font-size: 16px;
        }   
        .custom-file-input::before {
            content: 'Select some files';
            color: black;
            display: inline-block;
            background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }
        .custom-file-input:hover::before {
            border-color: black;
        }
        .custom-file-input:active {
            outline: 0;
        }
        .custom-file-input:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
        }
    </style>
</head>
<body>
    <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
    <form action="/upload.php"
          method="post"
          enctype="multipart/form-data">
          <input type="file" name="my_image" class="custom-file-input">
          <input type="submit"
               value="Upload"
               name="submit"
               class="custom-file-input submit"
               >
    </form>
</body>
</html>




