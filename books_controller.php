<?php
class Books
{

	function getBooks()
	{
		$con = mysqli_connect("localhost","root","root","litd");
		if (mysqli_connect_errno($con))
  		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		
		$sql = "SELECT * FROM books;";
		$res = mysqli_query($con, $sql);
		echo "<table>";
		echo "<tr>";
		echo "<th>Title</th>";
		echo "<th>Author</th>";
		echo "<th>Price</th>";
		echo "<th>ISBN</th>";
		echo "<tr>";
		while ($row = mysqli_fetch_assoc($res)) {
			echo "<tr>";
			echo "<td>" . $row['title'] . "</td>";
			echo "<td>" . $row['author'] . "</td>";
			echo "<td>$" . $row['price'] . "</td>";
			echo "<td>" . $row['isbn'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}

	function saveBook($title, $author, $price, $isbn)
	{
		$con = mysqli_connect("localhost","root","root","litd");
		if (mysqli_connect_errno($con))
  		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$sql = "INSERT INTO `books`(`key`, `title`, `author`, `price`, `insert_date`, `isbn`) VALUES (null,'$title','$author',$price,null,$isbn)";
		mysqli_query($con,$sql);

	}
}

?>