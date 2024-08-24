
<!-- $servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";

//Membuat query SQL
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

// Menutup koneksi
$conn->close(); -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil<br><br>";

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


