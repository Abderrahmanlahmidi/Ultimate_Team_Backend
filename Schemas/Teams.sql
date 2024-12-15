CREATE TABLE Manchester (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name VARCHAR(50) NOT NULL,
    position VARCHAR(10) NOT NULL,
    club VARCHAR(50) NOT NULL,
    rating INT NOT NULL,
    pace INT NOT NULL,
    shooting INT NOT NULL,
    defending INT NOT NULL,
    passing INT NOT NULL,
    dribbling INT NOT NULL,
    physical INT NOT NULL,
    photo  VARCHAR(700) NOT NULL,
    logo VARCHAR(700) NOT NULL
);

INSERT INTO Manchester 
(name, position, club, rating, pace, shooting, defending, passing, dribbling, physical, photo, logo) 
VALUES 
('Messi', 'ST', 'Inter Miami', 93, 85, 92, 35, 91, 95, 65, 'https://cdn.sofifa.net/players/158/023/25_120.png', 'https://cdn.sofifa.net/meta/team/239235/120.png'),
('Ronaldo', 'CF', 'Al Nassr', 91, 84, 94, 34, 82, 87, 77, 'https://cdn.sofifa.net/players/020/801/25_120.png', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
('Kevi', 'RW', 'Manchester City', 91, 74, 86, 64, 93, 88, 78, 'https://cdn.sofifa.net/players/192/985/25_120.png', 'https://cdn.sofifa.net/meta/team/3468/120.png');



