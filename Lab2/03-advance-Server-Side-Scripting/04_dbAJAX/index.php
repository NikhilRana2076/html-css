<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thoughtify</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            padding: 50px 5px;
            text-align: center;
            background:grey;
        }
        
        .result_container{
            margin-top: 10px;
            width: 500px;
            margin: 0 auto;
        }
        table{
            width: 100%;
        }
        table,tr,td,th{
            border:1px solid black;
            border-collapse: collapse;
        }
        td,th{
            padding: 10px 0px;
        }
        .id_display{
            width: 10%;
        }
        .date_display{
            width: 30%;
        }
        
    </style>
</head>
<body>

    
    <div class="container" >
        <form>
            <input id="thoughtsInputField" type="text" placeholder="Enter your thoughts" />
            <input type="submit" id="submit" value="Submit" />
        </form>
    </div>

    <div class="result_container" >
    <table>
        <tr>
            <th class="id_display" >Id</th>
            <th  >Thought</th>
            <th class="date_display" >Date</th>
        </tr>
        <?php require('./dbconnection.php');

            $sqlStatement = "SELECT * FROM `randomthoughts` WHERE 1 ORDER By createdAt ASC;";
            $result = $conn->query($sqlStatement);

            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    echo "<tr>
                            <td class='id_display'>{$row["id"]}</td>
                            <td>{$row["thought"]}</td>
                            <td class='date_display'>{$row["createdAt"]}</td>
                        </tr>";
                }
            }

        ?>
    </table>
    </div>
    </div>

    <script>

        const submitBtn = document.getElementById("submit");
        const inputField = document.getElementById("thoughtsInputField");

        submitBtn.addEventListener('click',async (e)=>{
            if(!inputField.value){
                return;
            }

            const fetchResult = await fetch('store.php',{
                method:'post',
                headers:{
                    'Content-Type':'application/x-www-form-urlencoded'
                },
                body:`thought=${inputField.value}`
            })

            const result = await fetchResult.json();
            inputField.value = "";
            inputField.focus()

            window.location.replace("");
            
            

        })



    </script>

</body>
</html>
