<?php
require_once "../utils/db.php";

$sql ="SELECT * FROM students";

$result = $conn ->query($sql);

// dd($result);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()){
//         echo $row['id'].''.$row['name'];
//         echo "<br />";
//     }
// }

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_object()){
//         echo $row->id.''.$row->name;
//         echo "<br />";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style type="text/css">
        .alert {
			padding: 5px;
			width: 200px;
			height: 50px;
			margin: 0 auto;
			position: relative;
		}

		.alert-danger {
			border:  2px solid red;

		}

		.alert-success {
			border: 2px solid green;
		}
		.close {
			position: absolute;
			top: 2px;
			right: 2px;
		}
        </style>
</head>
<body>
    <?php if (isset($_GET['sucess'])) { ?>
        <div class="alert alert-success">
            <div class="close"> X </div>
            <div><?=$_GET['success'] ?></div>
            <?php } elseif (isset($_GET['error'])) { ?>
            <div class="alert alert-danger">
                <div class="closer">X</div>
            <?= $_GET['error']
            ?>
            </div>
        <?php } ?>
    <h2>List of students </h2>
    <table border=1>
        <thead>
             <tr>
                <th>ID</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Favorite Color</th>
                <th>Weight (KG)</th>
                <th>Gender</th>
                <th>Hobbies</th>
                <th>Nationality</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($students = $result->fetch_assoc())
            {
            ?>
                <td><?=$students['id']?></td>
                <td><img src="" alt="profile"></td>
                <td><?=$students['name']?></td>
                <td><?=$students['email']?></td>
                <td><?=$students['dob']?></td>
                <td><?=$students['favorite_color']?></td>
                <td><?=$students['weight']?></td>
                <td><?=$students['gender']?></td>
                <td><?=$students['hobbies']?></td>
                <td><?=$students['nationality']?></td>
                <td>
                    <a herf="#">Edit</a>
                    <a herf="#" data-id="<?=$student['id']?>" class='delete'>Delete</a>
                </td>    
            <?php }
            } else { ?>
            <tr>
                <td colspan="11"> No record found!</td>
            </tr>
            <?php }
             ?>
       </tbody>    
    </table>
    <script type="text/javascript">
        const deleteEl = document.queerySelectorAll(".delet");
        for(el od deleteEl) {
            el.addEventListener("click", deleteStudent);
        }
        function deleteStudent(event)
        {
            cint id = event.target.getAttribute('data-id');
            let formEl = document.creteElement("form");
            formEl.selectAttribute("method", "POST");
            formEl.selectAttribute("action", "./action/delete.php");
            let idmEl = document.creteElement("input");
            idEl.selectAttribute("type", "hidden");
            idEl.selectAttribute("value", id);
            formEl.appendChild(idEl);
            document.body.appendChild(formEl);
            formEl.submit();
        }
    </script>

    
</body>
</html>