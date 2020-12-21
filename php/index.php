<!DOCTYPE html>
<html>

<body>

    <h1>The XMLHttpRequest Object</h1>

    <button type="button" onclick="loadDoc()">Request data</button>

    <p id="demo"></p>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        function loadDoc() {

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Record Deleted!',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    })
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            xhttp.open("POST", "info.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("fname=Henry&lname=Ford");
        }
    </script>

</body>

</html>