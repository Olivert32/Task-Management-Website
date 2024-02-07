<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Timetable</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link href="css/timetable.css" rel="stylesheet">
    <script>"js/timetable.js"</script>
</head>
<body>
    <header>
        <div id="logo">
          <h1>Topley's Task Manager</h1>
            <div id="logo">
              <img src="images/task.png" 
              alt="logo"
              width="100"
                height="100"
              >
          </div>
<table id="timetable">
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <tr>
            <td>9:00 AM</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
        </tr>
        <tr>
            <td>10:00 AM</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
        </tr>
        <td>11:00 AM</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
        </tr>
        <td>12:00 PM</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
        </tr>
        <td>13:00 PM</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
        </tr>
        <td>14:00 PM</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
        </tr>
        <td>15:00 PM</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
        </tr>
        <td>16:00 PM</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
        </tr>
        <td>17:00 PM</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
            <td class="editable" onclick="editCell(this)">Add Task Here</td>
        </tr>
    </table>
    <button onclick="addRow()">Add Row</button>
    <script>
      function editCell(cell) {
    const oldValue = cell.innerHTML;
    const input = document.createElement("input");
    input.type = "text";
    input.value = oldValue;
    input.style.width = "100%";
    input.style.border = "none";
    input.style.padding = "4px";
    input.style.fontFamily = "inherit";
    input.style.fontSize = "inherit";
    input.style.textAlign = "left";
    input.style.background = "transparent";
    input.addEventListener("blur", function() {
        cell.innerHTML = this.value;
    });
    cell.innerHTML = "";
    cell.appendChild(input);
    input.focus();
}

function addRow() {
    const timetable = document.getElementById("timetable");
    const newRow = timetable.insertRow();
    const timeCell = newRow.insertCell();
    const time = document.createElement("td");
    time.innerHTML = "New Time";
    timeCell.appendChild(time);

    for (let i = 0; i < timetable.rows[0].cells.length - 1; i++) {
        const cell = newRow.insertCell();
        const editableCell = document.createElement("td");
        editableCell.className = "editable";
        editableCell.onclick = function() { editCell(this); };
        editableCell.innerHTML = "Add Task Here";
        cell.appendChild(editableCell);
    }
}

    </script>
          <?php
include_once 'includes/footer.php'
?>