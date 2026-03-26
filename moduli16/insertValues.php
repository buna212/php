<?php 
    $host = 'localhost';
    $db = "movie";
    $user = 'root';
    $pass = '';


    try{


        $conn = new PDO("mysql:host=$host; dbname=$db" , $user, $pass);


        $sql = "INSERT INTO users (id , emri, username, email, password, confirm_password, is_admin)  VALUES
         (1, 'Lumi', 'lumi', 'lumi@example.com', 'password123', 'password123', 'false'),
        (2, 'Reis', 'reis', 'reis@example.com', 'password456', 'password456', 'false'),
        (3, 'Sufjan', 'sufjan', 'sufjan@example.com', 'password789', 'password789', 'false'),
        (4, 'Arianita', 'arianita', 'arianita@example.com', 'password012', 'password012', 'true');
        
        INSERT INTO movies (id ,movie_name, movie_desc,movie_quality, movie_rating, movie_image) VALUES
        (1, 'SPIDERMAN', 'A mind-bending thriller about dreams within dreams.', '3D', 8.8, 'https://tse1.mm.bing.net/th/id/OIP.BLGJCaul5S5p-pBUY_FNTAHaHa?rs=1&pid=ImgDetMain&o=7&rm=3'),
        (2, 'FAST AND FURIOUS', 'An action-packed film about street racing and family bonds.', 'HD', 7.6, 'https://tse3.mm.bing.net/th/id/OIP.b_ceCbZZ-5ENFzsPUf-EAwHaEo?rs=1&pid=ImgDetMain&o=7&rm=3');
        
         INSERT INTO bookings (id, user_id, movie_id,nr_tickets, date,time) VALUES
        (1, 4, 1, 3, '2024-07-01', '19:00'),
        (2, 3, 2, 2, '2024-07-02', '20:00');
     


        ";     
        

  


        $conn->exec($sql);



        echo "VALUES were inserted";


    }catch(Exeption $e){


        echo "VALUES wewere not inserted";


    }


?>