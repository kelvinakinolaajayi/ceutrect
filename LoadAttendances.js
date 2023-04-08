// This is will load cell attendance
function getCellAttendance(cellID){
    var date = document.getElementById("date").value;
    cellID = document.getElementById("cellList").value;

    var year = date.slice(0,4);
    var month = date.slice(5,7);
    var day = date.slice(8,10);

    if (date == "" || cellID == "") {
        document.getElementById("CellAttendance").innerHTML = "Please select a date";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("CellAttendance").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET",`attendances/CellAttendance/GetAttendance.php?id=${cellID}&year=${year}&month=${month}&day=${day}`,true);
        xmlhttp.send();
    }
}

//This will load midweek attendance
function getMidweekAttendance(cellID){
    var date = document.getElementById("date").value;
    cellID = document.getElementById("cellList").value;

    var year = date.slice(0,4);
    var month = date.slice(5,7);
    var day = date.slice(8,10);

    if (date == "" || cellID == "") {
        document.getElementById("MidweekAttendance").innerHTML = "Please select a date";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("MidweekAttendance").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET",`attendances/MidweekAttendance/GetAttendance.php?id=${cellID}&year=${year}&month=${month}&day=${day}`,true);
        xmlhttp.send();
    }
}

//This will load church attendance
function getChurchAttendance(cellID){
    var date = document.getElementById("date").value;
    cellID = document.getElementById("cellList").value;

    var year = date.slice(0,4);
    var month = date.slice(5,7);
    var day = date.slice(8,10);

    if (date == "" || cellID == "") {
        document.getElementById("ChurchAttendance").innerHTML = "Please select a date";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ChurchAttendance").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET",`attendances/ChurchAttendance/GetAttendance.php?id=${cellID}&year=${year}&month=${month}&day=${day}`,true);
        xmlhttp.send();
    }
}

//This will load church attendance
function getEvangelismAttendance(cellID){
    var date = document.getElementById("date").value;
    cellID = document.getElementById("cellList").value;

    var year = date.slice(0,4);
    var month = date.slice(5,7);
    var day = date.slice(8,10);

    if (date == "" || cellID == "") {
        document.getElementById("EvangelismAttendance").innerHTML = "Please select a date";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("EvangelismAttendance").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET",`attendances/EvangelismAttendance/GetAttendance.php?id=${cellID}&year=${year}&month=${month}&day=${day}`,true);
        xmlhttp.send();
    }
}

//This will load church attendance
function getFoundationSchoolAttendance(cellID){
    var date = document.getElementById("date").value;
    cellID = document.getElementById("cellList").value;

    var year = date.slice(0,4);
    var month = date.slice(5,7);
    var day = date.slice(8,10);

    if (date == "" || cellID == "") {
        document.getElementById("FoundationSchoolAttendance").innerHTML = "Please select a date";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("FoundationSchoolAttendance").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET",`attendances/FoundationSchoolAttendance/GetAttendance.php?id=${cellID}&year=${year}&month=${month}&day=${day}`,true);
        xmlhttp.send();
    }
}

//This will load church attendance
function getGroupPrayerAttendance(cellID){
    var date = document.getElementById("date").value;
    cellID = document.getElementById("cellList").value;

    var year = date.slice(0,4);
    var month = date.slice(5,7);
    var day = date.slice(8,10);

    if (date == "" || cellID == "") {
        document.getElementById("GroupPrayerAttendance").innerHTML = "Please select a date";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("GroupPrayerAttendance").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET",`attendances/GroupPrayerAttendance/GetAttendance.php?id=${cellID}&year=${year}&month=${month}&day=${day}`,true);
        xmlhttp.send();
    }
}

//This will load church attendance
function getMinistryProgramAttendance(cellID){
    var date = document.getElementById("date").value;
    cellID = document.getElementById("cellList").value;

    var year = date.slice(0,4);
    var month = date.slice(5,7);
    var day = date.slice(8,10);

    if (date == "" || cellID == "") {
        document.getElementById("MinistryProgramAttendance").innerHTML = "Please select a date";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("MinistryProgramAttendance").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET",`attendances/MinistryProgramAttendance/GetAttendance.php?id=${cellID}&year=${year}&month=${month}&day=${day}`,true);
        xmlhttp.send();
    }
}

//This will load church attendance
function getMorningDevotionAttendance(cellID){
    var date = document.getElementById("date").value;
    cellID = document.getElementById("cellList").value;

    var year = date.slice(0,4);
    var month = date.slice(5,7);
    var day = date.slice(8,10);

    if (date == "" || cellID == "") {
        document.getElementById("MorningDevotionAttendance").innerHTML = "Please select a date";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("MorningDevotionAttendance").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET",`attendances/MorningDevotionAttendance/GetAttendance.php?id=${cellID}&year=${year}&month=${month}&day=${day}`,true);
        xmlhttp.send();
    }
}

//This will load church attendance
function getZonalPrayerAttendance(cellID){
    var date = document.getElementById("date").value;
    cellID = document.getElementById("cellList").value;

    var year = date.slice(0,4);
    var month = date.slice(5,7);
    var day = date.slice(8,10);

    if (date == "" || cellID == "") {
        document.getElementById("ZonalPrayerAttendance").innerHTML = "Please select a date";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ZonalPrayerAttendance").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET",`attendances/ZonalPrayerAttendance/ZonalPrayerAttendance.php?id=${cellID}&year=${year}&month=${month}&day=${day}`,true);
        xmlhttp.send();
    }
}