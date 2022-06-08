<?php
    $SongName = $_Post['firstName'];
    $date = $_Post['date'];
    $artwork = $_Post['password'];
    $artist = $_Post['artist'];

    $conn = new mysqli('localhost', 'root',' ','test');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(SongName, date, artwork, artist) values(?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $SongName, $date, $artwork, $artist);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
