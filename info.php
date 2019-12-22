
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="card">
    
    <?php
        $name = $_GET["name"];
        echo "<h1>$name</h1>";

        require_once 'vendor/autoload.php';
        $dotenv = Dotenv\Dotenv::create(__DIR__);
        $dotenv->load();
        $hostname = getenv("HOSTNAME");
        $backhost = getenv("BACKENDHOST");

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "$backhost/api/entity/show?name=$name",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        $response = json_decode($response, true); //because of true, it's in an array
        
        $jabatan = $response['data']['description'];
        $phone_number = $response['data']['phone_number'];
        $relations = $response['data']['relationship'];

        echo "<p class='title'>$jabatan</p>";
        echo "<h2>$phone_number</h2>";
        
        echo "<h2>Relations:</h2><br>";

        foreach ($relations as $value) {
            $relationname = $value["name"];
            $relationissue = $value["issue"];
            echo "<p>Name  : $relationname</p>";
            echo "<p>Issue : $relationissue</p><br><br><br>";
        }

        
        curl_close($curl);
        ?>

    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <p><button onclick="goBack()">Back</button></p>
    </div> 

    <script>
        function goBack() {
        window.history.back();
        }
    </script>   

</body>
</html>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

