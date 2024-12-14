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
    photo BLOB,
    logo BLOB
);

INSERT INTO Manchester (name, position, club, rating, pace, shooting, defending, passing, dribbling, physical, photo, logo)
VALUES
('Player 1', 'Forward', 'Manchester', 85, 90, 88, 70, 84, 82, 86, 'PHOTO_DATA_1', 'LOGO_DATA_1'),
('Player 2', 'Midfielder', 'Manchester', 82, 78, 84, 75, 80, 88, 84, 'PHOTO_DATA_2', 'LOGO_DATA_2'),
('Player 3', 'Defender', 'Manchester', 78, 72, 70, 85, 78, 76, 80, 'PHOTO_DATA_3', 'LOGO_DATA_3'),
('Player 4', 'Goalkeeper', 'Manchester', 80, 68, 72, 88, 75, 74, 78, 'PHOTO_DATA_4', 'LOGO_DATA_4');


